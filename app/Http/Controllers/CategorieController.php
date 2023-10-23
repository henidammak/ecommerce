<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //get
    {
        //
        $categories = Categorie::all()->toArray();
        return array_reverse($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //post
    {
        $categorie = new Categorie([
            'nomcategorie' => $request->input('nomcategorie'),
            'imagecategorie' => $request->input('imagecategorie')
            ]);
            $categorie->save();
            return response()->json($categorie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id) //get by id
    {
        $categorie = Categorie::find($id);
        return response()->json($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) //put
    {
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response()->json($categorie, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)//delete
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return response()->json('Catégorie supprimée !');
    }
}
