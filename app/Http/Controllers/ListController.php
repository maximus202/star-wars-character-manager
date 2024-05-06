<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListRequest;
use App\Http\Requests\UpdateListRequest;
use App\Models\List;

class ListController extends Controller
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
    public function store(StoreListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(List $list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(List $list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListRequest $request, List $list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(List $list)
    {
        //
    }
}
