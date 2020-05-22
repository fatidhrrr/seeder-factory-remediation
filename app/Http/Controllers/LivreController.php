<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::all();
        return view('livre', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livres=new Livre();
        $livres->livre=$request->input("livre");
        $livres->annee=$request->input("annee");
        $livres->auteur=$request->input("auteur");
        $livres->save();
        return redirect()->route("livre");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livres=Livre::find($id);
        return view("show", compact('livres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livres = Livre::find($id);
        return view('edit', compact('livres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livres=Livre::find($id);
        $livres->livre=$request->input("livre");
        $livres->annee=$request->input("annee");
        $livres->auteur=$request->input("auteur");
        $livres->save();         
        return redirect()->route("livre");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livres = Livre::find($id);
        $livres->delete();
        return redirect()->route('livre');
    }
}