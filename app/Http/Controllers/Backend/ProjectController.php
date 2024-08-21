<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = "Project";
        $data['projectData'] = Project::latest()->get();

        return view('backend.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle'] = 'Create New Project';

        return view('backend.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'content' => ['required'],
            'gambar' => ['required', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
            // meta validation
            'meta_title' => ['nullable', 'max:255', 'min:10'],
            'meta_description' => ['nullable', 'max:255'],
            'meta_keyword' => ['nullable'],
            'og_image' => ['image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048', 'nullable'],
        ]);

        if (isset($validatedData['gambar'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('gambar')) {
                // Handle file upload and storage
                $file = $request->file('gambar');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['gambar'] = $filename;
            }
        }

        if (isset($validatedData['og_image'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('og_image')) {
                // Handle file upload and storage
                $file = $request->file('og_image');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['og_image'] = $filename;
            }
        }

        Project::create($validatedData);

        return redirect(route('backend.project'))->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $data['pageTitle'] = "Detail Project";
        $data['detailProject'] = Project::where('slug', $slug)->first();
        $data['projectData'] = Project::whereNot('slug', $slug)->latest()->get();

        return view('backend.project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $data['pageTitle'] = 'Edit Project';
        $data['detailProject'] = Project::where('slug', $slug)->firstOrFail();

        return view('backend.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'content' => ['required'],
            'gambar' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
            // meta validation
            'meta_title' => ['nullable', 'max:255', 'min:10'],
            'meta_description' => ['nullable', 'max:255'],
            'meta_keyword' => ['nullable'],
            'og_image' => ['image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048', 'nullable'],
        ]);

        if (isset($validatedData['gambar'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('gambar')) {
                // Handle file upload and storage
                $file = $request->file('gambar');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['gambar'] = $filename;
            }
        }

        if (isset($validatedData['og_image'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('og_image')) {
                // Handle file upload and storage
                $file = $request->file('og_image');
                $directoryPath = 'img';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/img/' . $filename, File::get($file));
                $validatedData['og_image'] = $filename;
            }
        }

        $newSlug = Str::slug($request->input('title'));

        if ($newSlug !== $project->slug) {
            $count = 1;
            $slugExists = Project::where('slug', $newSlug)->exists();
            while ($slugExists) {
                $newSlug = $newSlug . '-' . $count;
                $slugExists = Project::where('slug', $newSlug)->exists();
                $count++;
            }
            $project->slug = $newSlug;
        }

        $validatedData['slug'] = $newSlug;

        Project::where('id', $project->id)->update($validatedData);

        return redirect(route('backend.project'))->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
