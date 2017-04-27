<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


class ContactController extends Controller
{


    public function contact_page()
    {
        return view('user.contact')->with('title', 'Contact');
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        

       
        $rules = [
           
           'name'   => 'required',
           'email' => 'required',
           'contact_no' => 'required',
           'message' => 'required',
        ];


       $data = $request->all();
        $validation = Validator::make($data , $rules);

        if($validation->fails()){

          return redirect()->back()->withInput()->withErrors($validation);

        }


        $message = new Contact();


        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->contact_no = $data['contact_no'];
        $message->message = $data['message'];

        $message->save();

        return view('user.contact');

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
