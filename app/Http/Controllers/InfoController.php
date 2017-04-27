<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Info;
use Input;
use Validator;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           $info = Info::all() ;
           
           return view('admin.info.list')
                ->with('title', 'List of All Info')
                ->with('infoCounter', 1)
                ->with('info', $info);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('admin.info.create')
            ->with('title', 'Add a Info');   
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
           
           'title'   => 'required',
           'details' => 'required',
        ];


       $data = $request->all();
        $validation = Validator::make($data , $rules);

        if($validation->fails()){

          return redirect()->back()->withInput()->withErrors($validation);

        }

           $name = str_replace(" ", "-", $data['title']);          



                $img_url = null;

                if(Input::hasFile('image')) {


                    $file = Input::file('image');

                    $destination = public_path().'/uploads/user_image/';
                    $filename = time().'_'.$name.'_.'.$file->getClientOriginalExtension();
                    $file->move($destination, $filename);
                    $img_url = '/uploads/image/'.$filename;
                } else {
                    return redirect()->back()->withInput()->withErrors('Image Required');
                }

               $info = new Info();

              $info->title =   $data['title'];
              $info->detail =  $data['details'];
              $info->img_url =     $img_url;

              $info->save();

             return redirect()->route('info.index')->with('success', 'Info Added Successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $info = Info::all();

      //   return $info;
         
         return view('user.info')->with('info' , $info)->with('title' , "Latest Info");
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try{
            Info::destroy($id);

            return redirect()->route('info.index')->with('success','Info Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('info.index')->with('error','Something went wrong.Try Again.');
        }
    }
}
