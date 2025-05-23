<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $data['socialData'] = MediaSocial::orderBy('created_at', 'asc')->get();
        $data['skillData'] = Skill::latest()->get();
        $data['projectData'] = Project::latest()->get();

        return view('frontend.home.home', $data);
    }

    public function indexProject()
    {
        $data['pageTitle'] = 'Projects';
        $data['projectData'] = Project::latest()->paginate(8);
        $data['socialData'] = MediaSocial::latest()->get();

        return view('frontend.project.index', $data);
    }

    public function projectDetail($slug)
    {
        $data['pageTitle'] = 'Detail Project';
        $data['socialData'] = MediaSocial::latest()->get();
        $data['detailProject'] = Project::where('slug', $slug)->first();
        $data['projectData'] = Project::whereNot('slug', $slug)->latest()->paginate(4);

        return view('frontend.project.show', $data);
    }

    public function indexArticle()
    {
        $data['pageTitle'] = 'Article';
        $data['articleData'] = Blog::latest()->paginate(8);
        $data['socialData'] = MediaSocial::latest()->get();

        return view('frontend.article.index', $data);
    }

    public function articleDetail($slug)
    {
        $data['pageTitle'] = 'Detail Article';
        $data['socialData'] = MediaSocial::latest()->get();
        $data['detailArticle'] = Blog::where('slug', $slug)->first();
        $data['articleData'] = Blog::whereNot('slug', $slug)->latest()->paginate(4);

        return view('frontend.article.show', $data);
    }

    public function indexContact() {
        $data['pageTitle'] = 'Contact';
        $data['socialData'] = MediaSocial::latest()->get();
        $data['userData'] = User::firstOrFail();

        return view('frontend.contact.index', $data);
    }

    public function downloadCV($cv) {
        $filePath = storage_path('app/private/documents/' . $cv);

        // Return the file as a download response
        return response()->download($filePath);
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
