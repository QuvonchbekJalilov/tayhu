<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'skill_text_uz' => 'nullable|string',
            'skill_text_ru' => 'nullable|string',
            'skill_text_en' => 'nullable|string',
            'architecture' => 'nullable|string',
            'construction' => 'nullable|string',
            'interior_design' => 'nullable|string',
            'instagram' => 'nullable|string',
            'telegram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'availability' => 'nullable|string',
            'experience' => 'nullable|string',
        ]);


        Team::create($request->all());

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position_uz' => 'nullable|string|max:255',
            'position_ru' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'skill_text_uz' => 'nullable|string',
            'skill_text_ru' => 'nullable|string',
            'skill_text_en' => 'nullable|string',
            'architecture' => 'nullable|string',
            'construction' => 'nullable|string',
            'interior_design' => 'nullable|string',
            'instagram' => 'nullable|string',
            'telegram' => 'nullable|string',
            'availability' => 'nullable|string',
            'experience' => 'nullable|string',
        ]);

        $team->update($request->all());

        return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }
}
