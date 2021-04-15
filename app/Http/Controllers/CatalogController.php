<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        echo Carbon::now();
        $datos['catalogs']=Catalog::paginate(3);
        return view ('catalog.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        
        return view ('catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    /*$datosCatalog = request()->except('_token');
        if($request->hasFile('Foto')){

            $datosCatalog['Foto']=$request->file('Foto')->store('uploads', 'public');
        }*/
        
    $campos=[
        'codigo'=>'required|string|max:100',
        'autor'=>'required|string|max:100',
        'titulo'=>'required|string|max:100',
        'descripcion'=>'required|string|max:100',
    ];
    $mensaje=[
        'required'=>'El :attribute es requerido'
    ];

    $this->validate($request, $campos, $mensaje);
    Catalog::create($request->all());
    return redirect()->route('catalog.index')->with('mensaje', 'Catalog agregado con exito');


    
    //return response()->json($datosCatalog);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return response()->view('errors.404', [], 404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalog = Catalog::findOrFail($id);
       return view('catalog.edit', compact('catalog'));


      /* $catalog = Catalog::findOrFail($id);
       return view('catalog.edit')->with('catalog',$catalog);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $campos=[
            'codigo'=>'required|string|max:100',
            'autor'=>'required|string|max:100',
            'titulo'=>'required|string|max:100',
            'descripcion'=>'required|string|max:100',
        ];
        
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];
    
        $this->validate($request, $campos,$mensaje);
        
        $catalog = Catalog::find($id);
        
        $catalog->codigo=$request->get('codigo');
        $catalog->autor=$request->get('autor');
        $catalog->titulo=$request->get('titulo');
        $catalog->descripcion=$request->get('descripcion');

        $catalog->save();

        return redirect()->route('catalog.index')->with('mensaje', 'Catalog modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        //
        $catalog = Catalog::findOrFail($id);
        $catalog -> delete();
        return redirect()->route('catalog.index')->with('mensaje', 'Catalog borrado');
    }
}
