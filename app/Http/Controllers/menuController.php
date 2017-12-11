<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;


class menuController extends Controller
{
    public function index(){

    	$bebidas = Drink::all();

    	return view('myMenu', compact('bebidas'));

    }


    public function create(){
    	return view('menuCrud.create');
    }


    public function store(Request $request){

    	$dados = $request->all();
    	Drink::create($dados);

    	$bebidas = Drink::all();

    	return view('../myMenu', compact('bebidas'));

    }


    public function form(){

    	$bebidas = Drink::all();

    	return view('menuCrud.editar', compact('bebidas'));

    }

    public function update(Request $request, $id){

    	$drink = $request->all();

    	$id = Drink::findOrFail($id);
    	$id->update($drink);

    	return back()->with('Item alterado com sucesso!');
    }


    public function destroy($id){

    	$destroy = Drink::findOrFail($id);
    	$destroy->delete($destroy);

    	return back();
    }

}
