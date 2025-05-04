<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('features.index', compact('features'));
    }

    public function create()
    {
        return view('features.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('image')->store('features', 'public');

        Feature::create([
            'title' => $request->title,
            'image' => $path,
        ]);

        return redirect()->route('features.index');
    }

    public function edit(Feature $feature)
    {
        return view('features.create', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = ['title' => $request->title];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($feature->image);
            $data['image'] = $request->file('image')->store('features', 'public');
        }

        $feature->update($data);

        return redirect()->route('features.index');
    }

    public function destroy(Feature $feature)
    {
        Storage::disk('public')->delete($feature->image);
        $feature->delete();

        return redirect()->route('features.index');
    }
}
