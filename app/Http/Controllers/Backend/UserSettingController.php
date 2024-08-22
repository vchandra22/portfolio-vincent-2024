<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;


class UserSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $data['pageTitle'] = 'Setting Account';
        $data['detailUser'] = User::where('uuid', $uuid)->firstOrFail();

        return view('backend.content.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'full_name' => ['required', 'max:255'],
            'short_about' => ['required', 'max:255'],
            'role' => ['required', 'max:255'],
            'about' => ['required'],
            'cv' => 'nullable|mimes:pdf|max:2048',
            'email' => ['required', 'email'],
            'profile_pict' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
        ]);

        if (isset($validatedData['cv'])) {
            if ($request->hasFile('cv')) {

                $file = $request->file('cv');
                $directoryPath = 'private/documents';


                if (!file_exists($directoryPath)) {
                    Storage::disk('local')->makeDirectory($directoryPath, 0775, true);
                }

                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                Storage::disk('local')->put('/private/documents/' . $filename, File::get($file));
                $statusData['cv'] = $filename;
            }
        }

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $directoryPath = 'private/documents';

            // Create directory if not exists
            if (!file_exists($directoryPath)) {
                Storage::disk('local')->makeDirectory($directoryPath, 0775, true);
            }

            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('/private/documents/' . $filename, File::get($file));
            $validatedData['cv'] = $filename;
        } else {

            $oldFilePath = 'private/documents/' . $user->cv;
            if (Storage::disk('local')->exists($oldFilePath)) {
                Storage::disk('local')->delete($oldFilePath);
            }
            $validatedData['cv'] = null;
        }

        User::where('id', $user->id)->update($validatedData);

        return redirect(route('backend.content'))->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
