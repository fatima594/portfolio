<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // عرض قائمة المشاريع
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    // عرض نموذج لإنشاء مشروع جديد
    public function create()
    {
        return view('admin.projects.create');
    }

    // تخزين مشروع جديد في قاعدة البيانات
    public function store(ProjectRequest $request)
    {
        $validatedData=$request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->title = $request->title;

        // معالجة رفع الصورة
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'name' => $validatedData['name'],
            'title' => $validatedData['title'],
            'image' => $validatedData['image'] ?? null,
        ]);
        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    // عرض مشروع واحد
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    // عرض نموذج لتحرير مشروع
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    // تحديث مشروع موجود
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $project->name = $request->name;
        $project->title = $request->title;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $project->image = $imagePath;
        }

        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    // حذف مشروع
    public function destroy(Project $project)
    {
        // Delete the image if it exists
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }

}

