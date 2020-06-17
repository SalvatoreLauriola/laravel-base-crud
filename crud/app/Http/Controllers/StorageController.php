<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;  //import del controller

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //prendiamo tutte 
        $storages = Storage::all();

        return view('storages.index', compact('storages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('storages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //Validazione (lungo tot ecc..)
        $request->validate([
            'name' => 'required|unique:storages|max:20',
            'description' => 'required'
        ]);

        //Save new classroom on DB
        $storage = new Storage();
        $storage->name = $data['name'];
        $storage->description = $data['description'];
        $saved = $storage->save();

        //redirect to show
        if($saved) {
            $newStore = Storage::find($storage->id);
            return redirect()->route('storages.show', $newStore);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Storage $storage)
    {
        //cerca per ID Automaticamente
        return view('storages.show', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
