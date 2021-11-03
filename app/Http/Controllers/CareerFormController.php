<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerFormRequest;
use App\Models\CareerForm;
use Exception;
use Illuminate\Http\Request;

class CareerFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CareerFormRequest $request)
    {
        
        $request->validated();
        
        $file=$request->file('file_upload');
        $oFname=rand().'_'.$file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
        CareerForm::updateOrCreate([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'birth_year' => $request->birth_year,
            'file_name' => $oFname,
            'file_path' => $request->file_upload,
        ]);
        
        $file->move(public_path('documents'),$oFname);
        
        return response()->json([
            'val' => true,
        ]);
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
