<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TechStack;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TechStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Tech Stack';
        $data['techData'] = TechStack::latest()->get();

        return view('backend.content.tech.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle'] = 'Create New Stack';

        return view('backend.content.tech.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
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

        TechStack::create($validatedData);

        return redirect(route('backend.tech'))->with('success', 'Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TechStack $techStack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $data['pageTitle'] = 'Edit Stack';
        $data['detailStack'] = TechStack::where('uuid', $uuid)->firstOrFail();

        return view('backend.content.tech.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TechStack $techStack)
    {
        $validatedData = $request->validate([
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

        TechStack::where('id', $techStack->id)->update($validatedData);

        return redirect(route('backend.tech'))->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $techStack = TechStack::find($id);
        if ($techStack->gambar) {
            Storage::disk('public')->delete('/icon/' . $techStack->gambar);
        }

        $techStack->delete();

        return redirect(route('backend.tech'))->with('success', 'Data berhasil dihapus!');
    }
}
