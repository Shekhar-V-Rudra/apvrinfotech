<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::orderBy('sort_order')->latest('id')->paginate(12);
        return view('backend.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'job_title' => 'required|string|max:255',
            'vacancy' => 'required|integer|min:1',
            'experience' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'job_type' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        Career::create($data);

        return redirect()->route('admin.careers.index')
            ->with('success', 'Career created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $career = Career::findOrFail($id);
        return view('backend.careers.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $career = Career::findOrFail($id);
        return view('backend.careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $career = Career::findOrFail($id);
        $data = $request->validate([
            'job_title' => 'required|string|max:255',
            'vacancy' => 'required|integer|min:1',
            'experience' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'job_type' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data['is_active'] = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $career->update($data);

        return redirect()->route('admin.careers.index')
            ->with('success', 'Career updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->route('admin.careers.index')
            ->with('success', 'Career deleted successfully.');
    }
}
