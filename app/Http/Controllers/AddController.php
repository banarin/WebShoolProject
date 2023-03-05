<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use App\Models\students;

class AddController extends Controller
{
    public function valid(students $data, AddRequest $request){
        students::create([
            'name' => $request->name,
            'lastname' => $request->secondname,
            'email' => $request->mail,
            'pass' => $request->mdp,
            'number' => $request->tel,
            'description' => $request->descrit,
        ]);
        return redirect()->route('inform');
    }
    public function home(){
        return view('home3');
    }
    public function direct(){
        $bases =  students::all();
        return view('info',[
            'bases' => $bases,
        ]);
    }
    //recuperation des informations sur elève
    public function show(students $datas){
        //$datas = students::find($id);
       return view('details.detail', [
        'detail' => $datas
       ]);
    }
    public function edit(students $datas){
        // $datas = students::find($id);
        return view('details.edit',
        [
            'detail' => $datas
        ]);
    }
    public function update(students $datas, AddRequest $request){
        $datas->name = $request->name;
        $datas->lastname = $request->lastname;
        $datas->email = $request->email;
        $datas->pass = $request->pass;
        $datas->number = $request->number;
        $datas->description = $request->description;

        $datas->save();
        return redirect('/inform/{datas}/edit');
    }
}
