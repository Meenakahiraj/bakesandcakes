<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shopregmodel;

class shopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    
        $shops=shopregmodel::all();
        return view('adminviewshop',compact('shops'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shopreg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getshname=request('shname');
        $getsadd=request('sadd');
        $getsphno=request('sphno');
        $getstate=request('state');
        $getsuname=request('suname');
        $getspassword=request('spassword');

            

        $shop=new shopregmodel();
        $shop->shname=$getshname;       
        $shop->sadd= $getsadd;
        $shop->sphno=$getsphno;
        $shop->state=$getstate;
        $shop->suname=$getsuname;
        $shop->spassword=$getspassword;
        

        $shop->save();

        return view('index');
    }

    public function search(Request $request)
    {
        $getshname=request('shname');
        $shops=shopregmodel::query()
        ->where('shname','LIKE',"%{$getshname}%")
        ->get();
        return view('adminviewshop',compact('shops'));
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
       
        $shop=shopregmodel::find($id);
        return view('adminmanageshop',compact('shop'));
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
       
    
        $shop=shopregmodel::find($id);

        $getshname=request('shname');
        $getsadd=request('sadd');
        $getsphno=request('sphno');
        $getstate=request('state');
        $getsuname=request('suname');
        $getspassword=request('spassword');

            

        
        $shop->shname=$getshname;       
        $shop->sadd= $getsadd;
        $shop->sphno=$getsphno;
        $shop->state=$getstate;
        $shop->suname=$getsuname;
        $shop->spassword=$getspassword;
        

        $shop->save();

 
    
            return redirect('/adminviewshop');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteview($id)
    {
        $shop=shopregmodel::find($id);
        return view('adminmanageshopdelete',compact('shop'));
    }


    public function destroy($id)
    {
        $shop=shopregmodel::find($id);

        $shop->delete();


        return redirect('/adminviewshop');
    }
}
