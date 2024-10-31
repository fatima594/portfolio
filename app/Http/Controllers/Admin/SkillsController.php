<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill; // تأكد من أن لديك نموذج Skill
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'proficiency' => 'required|numeric|min:0|max:100',
            'description' => 'required',
        ]);

        Skill::create($request->all());
        return redirect()->route('admin.skills.index');
    }

    public function show(Skill $skill)
    {
        return view('admin.skills.show', compact('skill'));
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required',
            'proficiency' => 'required|numeric|min:0|max:100',
            'description' => 'required',
        ]);

        $skill->update($request->all());
        return redirect()->route('admin.skills.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills.index');
    }
}
