<?php

namespace App\Http\Controllers;

use App\Models\Jobtitle;
use App\Http\Requests\StoreJobtitleRequest;
use App\Http\Requests\UpdateJobtitleRequest;

class JobtitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        $jobtitles = Jobtitle::all();

        return response()->json([$jobtitles], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobtitleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobtitleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobtitle  $jobtitle
     * @return \Illuminate\Http\Response
     */
    public function show(Jobtitle $jobtitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobtitle  $jobtitle
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobtitle $jobtitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobtitleRequest  $request
     * @param  \App\Models\Jobtitle  $jobtitle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobtitleRequest $request, Jobtitle $jobtitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobtitle  $jobtitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobtitle $jobtitle)
    {
        //
    }
}
