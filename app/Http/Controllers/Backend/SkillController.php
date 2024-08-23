<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Skills';
        $data['skillData'] = Skill::latest()->get();

        return view('backend.content.skill.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle'] = 'Create New Skill';

        return view('backend.content.skill.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'gambar' => ['required'],
        ]);

        Skill::create($validatedData);

        return redirect(route('backend.skill'))->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $data['pageTitle'] = 'Edit Skill';
        $data['detailSkill'] = Skill::where('uuid', $uuid)->firstOrFail();

        return view('backend.content.skill.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'gambar' => ['required'],
        ]);

        Skill::where('id', $skill->id)->update($validatedData);

        return redirect(route('backend.skill'))->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);

        $skill->delete();

        return redirect(route('backend.skill'))->with('success', 'Data berhasil dihapus!');
    }
}
