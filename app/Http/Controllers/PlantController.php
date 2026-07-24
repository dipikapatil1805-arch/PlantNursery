<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class PlantController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $category = $request->category;

        $plants = Plant::when($search, function ($query) use ($search) {
                return $query->where('name', 'LIKE', "%{$search}%");
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('category', $category);
            })
            ->get();

        return view('plants.index', compact('plants', 'search', 'category'));
    }

    public function show($id)
    {
        $plant = Plant::findOrFail($id);
        return view('show', compact('plant'));
    }
}