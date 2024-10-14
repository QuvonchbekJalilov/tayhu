<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Team;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $teams = Team::all(); // Fetch all teams for the dropdown
        return view('portfolios.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create([
            'team_id' => $request->team_id,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'image' => $imagePath,
        ]);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        $teams = Team::all(); // Fetch all teams for the dropdown
        return view('portfolios.edit', compact('portfolio', 'teams'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
            $portfolio->image = $imagePath;
        }

        $portfolio->update($request->only('team_id', 'title_uz', 'title_ru', 'title_en'));

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}
