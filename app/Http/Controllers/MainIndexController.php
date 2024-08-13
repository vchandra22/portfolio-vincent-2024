<?php

namespace App\Http\Controllers;

use App\Models\MediaSocial;
use App\Models\Project;
use App\Models\Skill;
use App\Models\TechStack;
use App\Models\User;
use Illuminate\Http\Request;

class MainIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Home';
        $data['userData'] = User::firstOrFail();
        $data['techData'] = TechStack::latest()->get();
        $data['socialData'] = MediaSocial::latest()->get();
        $data['skillData'] = Skill::latest()->get();
        $data['projectData'] = Project::latest()->get();

        return view('frontend.home.home', $data);
    }

    public function indexProject()
    {
        $data['pageTitle'] = 'Projects';
        $data['projectData'] = Project::latest()->get();
        $data['socialData'] = MediaSocial::latest()->get();

        return view('frontend.project.index', $data);
    }

    public function projectDetail($slug)
    {
        $data['pageTitle'] = 'SIGMA Platform';
        $data['socialData'] = MediaSocial::latest()->get();
        $data['detailProject'] = Project::where('slug', $slug)->first();
        $data['projectData'] = Project::whereNot('slug', $slug)->latest()->get();

        return view('frontend.project.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
