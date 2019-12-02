<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sofa;

class SofaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $sofas = Sofa::search($request->get('search'))->paginate(15);
            $query = $request->get('search');	
    	}else{
            $sofas = DB::table('sofas')->paginate(15);
            $query = '';	
    	}
        return view('main.index', compact('sofas', 'query'));

        // $sofas = DB::table('sofas')->paginate(15);
        // return view('main.index', compact('sofas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sofa = new Sofa([
            'merksofa' => $request->get('merksofa'),
            'hargasofa' => $request->get('hargasofa'),
            'berat' => $request->get('berat'),
            'tersedia' => ($request->get('tersedia') ?: false),
        ]);

        $sofa->save(); 

        return redirect('main')->with('success', 'Sofa has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sofa = Sofa::find($id);
        return view('main.edit', compact('sofa'));
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
        $sofa = Sofa::find($id); 
        $this->validate(request(), [
            'merksofa' => 'required',
            'hargasofa' => 'required|numeric', 
            'berat' => 'required|numeric',
        ]);
        $sofa->merksofa = $request->get('merksofa');
        $sofa->hargasofa = $request->get('hargasofa');
        $sofa->berat = $request->get('berat');
        $sofa->tersedia = ($request->get('tersedia') == null ? true : false);
        $sofa->save();
        return redirect('main')->with('success','Sofa has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sofa = Sofa::find($id);
        $sofa->delete();
        return redirect('main')->with('success','Sofa has been deleted');
    }
}
