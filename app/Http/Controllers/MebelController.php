<?php

namespace App\Http\Controllers;

use App\Mebel;
use Illuminate\Http\Request;

class MebelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $mebel = Mebel::all();        
        return view('admin.mebel')->with('mebel', $mebel);        
    }


    public function create()
    {
        return view('admin.createmebel');                
    }


    public function store(Request $request)
    {
        $mebel = new Mebel;
        $mebel->name = $request['mebel_name'];
        $mebel->save();
        return redirect('/mebel');
    }


    public function show(Mebel $mebel)
    {
        //
    }


    public function edit(Mebel $mebel)
    {
        return view('admin.editmebel')->with('mebel', $mebel);
    }


    public function update(Request $request, Mebel $mebel)
    {
        $mebel->name = $request['mebel_name'];
        $mebel->save();
        return redirect('/mebel');	
    }


    public function destroy(Mebel $mebel)
    {
        //
    }
}
