<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DesignList;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class DesignListController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = DesignList::all();
        return view('admin.design-list.index',compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.design-list.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'design_no' => 'required|string|max:50|unique:design_lists,design_no,',
            'status' => 'sometimes|boolean'
        ]);

        try {
            // Handle image upload
            if ($request->hasFile('image')) {
                $imagePath = $this->uploadImage($request->file('image'), 'design_list');
            }

            // Create design
            $design = DesignList::create([
                'title' =>$validatedData['title'],
                'image' => $imagePath,
                'design_no' => $validatedData['design_no'],
                'status' => $request->status ?? true
            ]);

            return redirect()->route('admin.design-list.index')
                ->with('success', 'New Design created successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Error creating design: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DesignList $designList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DesignList $designList)
    {
        return view('admin.design-list.edit', compact('designList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DesignList $designList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DesignList $designList)
    {
        try {
            // Delete image file
            if ($designList->image) {
                $this->deleteImage($designList->image);
            }

            $designList->delete();

            return redirect()->route('designs.index')
                ->with('success', 'Design deleted successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting design: ' . $e->getMessage());
        }
    }
}
