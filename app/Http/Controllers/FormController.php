<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class FormController extends Controller
{
    public function form_input()
    {
        return view('/form');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = form::all();

        return view('hasil_form',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form->nama=$request->nama;
        $form->nim=$request->nim;
        $form->angkatan=$request->angkatan;
        $form->program_studi=$request->prodi;
        $form->jenis_kelamin=$request->jenis_kelamin;
        $form->alamat=$request->alamat;
        $form->no_telp=$request->no_telp;
        $form->email=$request->email;
        $form->save();
        return redirect('hasil_form');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {    
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $form = form::find($id);
        return view('edit_form',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $form = Form::find($id);
        if (!$form) {
            return redirect('hasil_form')->with('error', 'Record not found');
        }

        $form->nama=$request->nama;
        $form->nim=$request->nim;
        $form->angkatan=$request->angkatan;
        $form->program_studi=$request->prodi;
        $form->jenis_kelamin=$request->jenis_kelamin;
        $form->alamat=$request->alamat;
        $form->no_telp=$request->no_telp;
        $form->email=$request->email;
        $form->save();

        if ($form->save()) {
            return redirect('hasil_form')->with('success', 'Record updated successfully');
        } else {
            return redirect('hasil_form')->with('error', 'Failed to update record');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        form::find($id)->delete();
        return redirect('hasil_form');
    }
}
