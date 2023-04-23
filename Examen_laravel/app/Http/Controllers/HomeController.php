<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('accueil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trajets = Trajet::all();
        return view('admin.lister',['trajets' => $trajets]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Trajet::create($input);
        return redirect()->route('ajout');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function liste()
    {
        return view('admin.admin');
    }
 
}