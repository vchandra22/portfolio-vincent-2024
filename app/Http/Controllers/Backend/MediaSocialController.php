<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MediaSocial;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Social Media Content';
        $data['mediaData'] = MediaSocial::latest()->get();

        return view('backend.content.media.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle'] = 'Create New Social Media';

        return view('backend.content.media.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'link' => ['required', 'url'],
            'gambar' => ['required', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
        ]);

        if (isset($validatedData['gambar'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('gambar')) {
                // Handle file upload and storage
                $file = $request->file('gambar');
                $directoryPath = 'icon';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/icon/' . $filename, File::get($file));
                $validatedData['gambar'] = $filename;
            }
        }

        MediaSocial::create($validatedData);

        return redirect(route('backend.media_social'))->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaSocial $mediaSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $data['pageTitle'] = 'Edit Data Media Sosial';
        $data['detailMedia'] = MediaSocial::where('uuid', $uuid)->firstOrFail();

        return view('backend.content.media.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MediaSocial $mediaSocial)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'link' => ['required', 'url'],
            'gambar' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
        ]);

        if (isset($validatedData['gambar'])) {
            // Process 'ttd_kepala' if it exists
            if ($request->hasFile('gambar')) {
                // Handle file upload and storage
                $file = $request->file('gambar');
                $directoryPath = 'icon';

                // Create directory if not exists
                if (!file_exists($directoryPath)) {
                    Storage::disk('public')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('public')->put('/icon/' . $filename, File::get($file));
                $validatedData['gambar'] = $filename;
            }
        }

        MediaSocial::where('id', $mediaSocial->id)->update($validatedData);

        return redirect(route('backend.media_social'))->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mediaSocial = MediaSocial::find($id);
        if ($mediaSocial->gambar) {
            Storage::disk('public')->delete('/img/' . $mediaSocial->gambar);
        }

        $mediaSocial->delete();

        return redirect(route('backend.media_social'))->with('success', 'Data berhasil dihapus!');
    }
}
