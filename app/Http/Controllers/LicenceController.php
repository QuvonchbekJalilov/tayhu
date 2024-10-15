<?php

namespace App\Http\Controllers;

use App\Models\Licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LicenceController extends Controller
{
    public function index()
    {
        $licences = Licence::all();
        return view('admin.licences.index', compact('licences'));
    }

    public function create()
    {
        return view('admin.licences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $licence = new Licence($request->only(['name_uz', 'name_ru', 'name_en']));

        if ($request->hasFile('image')) {
            $licence->image = $request->file('image')->store('images/licences', 'public');
        }

        $licence->save();

        return redirect()->route('licences.index')->with('success', 'Licence successfully created.');
    }

    public function edit(Licence $licence)
    {
        return view('admin.licences.edit', compact('licence'));
    }

    public function update(Request $request, Licence $licence)
    {
        $request->validate([
            'name_uz' => 'nullable|string|max:255',
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $licence->fill($request->only(['name_uz', 'name_ru', 'name_en']));

        if ($request->hasFile('image')) {
            if ($licence->image) {
                Storage::disk('public')->delete($licence->image);
            }
            $licence->image = $request->file('image')->store('images/licences', 'public');
        }

        $licence->save();

        return redirect()->route('licences.index')->with('success', 'Licence successfully updated.');
    }

    public function destroy(Licence $licence)
    {
        if ($licence->image) {
            Storage::disk('public')->delete($licence->image);
        }
        $licence->delete();
        return redirect()->route('licences.index')->with('success', 'Licence successfully deleted.');
    }
}
