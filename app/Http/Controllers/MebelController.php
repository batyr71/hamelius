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

    //Выводит список мебели
    public function index()
    {
        $mebel = Mebel::all();        
        return view('admin.mebel')->with('mebel', $mebel);        
    }

    //страница добавление мебели
    public function create()
    {
        return view('admin.createmebel');                
    }

    //Добавление мебели в БД
    public function store(Request $request)
    {
        $mebel = new Mebel;
        $mebel->name = $request['mebel_name'];
        $mebel->save();
        return redirect('/mebel');
    }

    //Страница редактирование мебели
    public function edit(Mebel $mebel)
    {
        return view('admin.editmebel')->with('mebel', $mebel);
    }

    //Изменение мебели в БД
    public function update(Request $request, Mebel $mebel)
    {
        $mebel->name = $request['mebel_name'];
        $mebel->save();
        return redirect('/mebel');	
    }

}
