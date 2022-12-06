<?php

namespace App\Http\Controllers;

use App\Models\Applicant_Skill;
use App\Http\Requests\StoreApplicant_SkillRequest;
use App\Http\Requests\UpdateApplicant_SkillRequest;

class ApplicantSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        $applicant_skills = Applicant_Skill::all();

        return response()->json([$applicant_skills], 200);
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
     * @param  \App\Http\Requests\StoreApplicant_SkillRequest  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(StoreApplicant_SkillRequest $request)
    {
        Applicant_Skill::created($request->all());
        return response()->json(['message' => 'Applicant Skill created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant_Skill  $applicant_Skill
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant_Skill $applicant_Skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant_Skill  $applicant_Skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant_Skill $applicant_Skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicant_SkillRequest  $request
     * @param  \App\Models\Applicant_Skill  $applicant_Skill
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function update(UpdateApplicant_SkillRequest $request, Applicant_Skill $applicant_Skill)
    {
        $applicant_Skill->update($request->all());
        return response()->json(['message' => 'Applicant Skill updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant_Skill  $applicant_Skill
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function destroy(Applicant_Skill $applicant_Skill)
    {
        $applicant_Skill->delete();
        return response()->json(['message' => 'Applicant Skill deleted successfully'], 201);
    }
}
