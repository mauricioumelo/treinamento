<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = Category::orderBy("id", "DESC")->get();
            
            return view('categories.index', compact('categories'));
        } catch (\Throwable $th) {
           return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = [
                "name" => $request->get('name')
            ];
    
            Category::create($data);

            return redirect()
                ->route('app.categories.index')
                ->with('message', 'sucesso ao cadastrar!');
        } catch (\Throwable $th) {
            return redirect()
                ->back();
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try {
            $data = [
                "name" => $request->get('name')
            ];
    
            $category->update($data);

            return redirect()
                ->route('app.categories.index')
                ->with('message', 'sucesso ao atualizar!');
        } catch (\Throwable $th) {
            return redirect()
                ->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
           $category = Category::where('id', $id)->first();

           if(!$category)
            throw new Exception("Category not found", 404);

            $category->delete();
            return redirect()
                ->route('app.categories.index')
                ->with('message', 'sucesso ao atualizar!');
        } catch (\Throwable $th) {
            return redirect()
                ->back();
        }
    }
}
