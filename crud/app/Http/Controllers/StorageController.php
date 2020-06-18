<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;  //import del controller
use Illuminate\Validation\Rule; //definiamo regole di validazione ed utilities

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
        $request->validate($this->validationRules());

        //Save new classroom on DB
        $storage = new Storage();
        // $storage->name = $data['name'];
        // $storage->description = $data['description'];
        $storage->fill($data);
        $saved = $storage->save();

        //redirect to show
        if($saved) {
            $newStore = Storage::find($storage->id);
            return redirect()->route('storages.show', $newStore->id);
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
    public function edit(Storage $storage)
    {
        // dietro le quinte: $storage = Storage::find($id);
        return view('storages.edit', compact('storage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        $data = $request->all();

        

        //validazione
        $request->validate($this->validationRules($storage->id));
        //update data al DB
        $updated = $storage->update($data);
        //dd($updated);

        //redirect
        if($updated) {
            $newStore = Storage::find($storage->id);
            return redirect()->route('storages.show', $storage->id);
        }
    }



        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storage $storage)
    {
        //riferimento dell'entità da eliminare        
        $ref = $storage->name;

        //delete
        $deleted = $storage->delete();

        //redirect con i dati eliminati
        if($deleted) {

            //con metodo with storiamo parametri da portare fuori,
            // 'deleted' è i l riferimento da tenere per portare il tutto in index
            return redirect()->route('storages.index')->with('deleted', $ref);
        }
    }


    //Define validation rules--usianmo null perchè store non ha valore di id
    private function validationRules($id = null)
    {
        return [
            // 'name' => 'required|unique:storages|max:20',
            'name'=> [
                'required',
                'max:20',
                Rule::unique('storages')->ignore($id)
            ],
            'description' => 'required'
        ];
    }
}



