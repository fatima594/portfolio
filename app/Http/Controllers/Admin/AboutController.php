<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('about', 'public');
        }

        About::create($validatedData);
        return redirect()->route('admin.about.index')->with('success', 'About Created Successfully');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $validatedData = $request->validated();

        // معالجة رفع الصورة
        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $validatedData['image'] = $request->file('image')->store('about', 'public');
        }

        $about->update($validatedData);
        return redirect()->route('admin.about.index')->with('success', 'About Updated Successfully');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About Deleted Successfully');
    }

    public function show($id)
    {
        $about = About::findOrFail($id); // عرض العنصر المحدد
        return view('admin.about.show', compact('about'));
    }
}
