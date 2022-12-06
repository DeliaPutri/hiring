<?php

namespace App\Http\Controllers;

use App\Models\Position_Skill;
use App\Http\Requests\StorePosition_SkillRequest;
use App\Http\Requests\UpdatePosition_SkillRequest;

class PositionSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        $position_skills = Position_Skill::all();

        return response()->json([$position_skills], 200);
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
     * @param  \App\Http\Requests\StorePosition_SkillRequest  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(StorePosition_SkillRequest $request)
    {
        Position_Skill::create($request->all());
        return response()->json(['success' => 'Position Skill created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position_Skill  $position_Skill
     * @return \Illuminate\Http\Response
     */
    public function show(Position_Skill $position_Skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position_Skill  $position_Skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Position_Skill $position_Skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosition_SkillRequest  $request
     * @param  \App\Models\Position_Skill  $position_Skill
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function update(UpdatePosition_SkillRequest $request, Position_Skill $position_Skill)
    {
        $position_Skill->update($request->all());
        return response()->json(['success' => 'Position Skill updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position_Skill  $position_Skill
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function destroy(Position_Skill $position_Skill)
    {
        $position_Skill->delete();
        return response()->json(['success' => 'Position Skill deleted successfully'], 201);
    }
}
