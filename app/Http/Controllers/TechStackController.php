<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechStackRequest;
use App\Http\Requests\UpdateTechStackRequest;
use App\Models\TechStack;

class TechStackController extends Controller
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
    public function store(StoreTechStackRequest $request)
    {
        //
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
    public function edit(TechStack $techStack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechStackRequest $request, TechStack $techStack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechStack $techStack)
    {
        //
    }
}
