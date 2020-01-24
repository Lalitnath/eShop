<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AddressController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //to retrive address of loggedin user
        $allAddress=auth()->user()->address;
        // $allAddress=Address::where('user_id'.auth()->id())->get();//this is also same






        /*to retrive all data from database*/
        // $allAddress =Address::get();



        return view('address.index',compact('allAddress'));

        // return view('address.index',['allAddress'=>$allAddress]);
        // both are same

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'state'=>'required',
            'city'=>'required',
            'mobile'=>'required',
            'full_address'=>'required',


        ]);
       //saving to databsse
/*first way */
//        $address= new Address();
//        $address->state=$request->input('state');
//        $address->city=$request->input('city');
//        $address->full_address=$request->input('full_address');
//        $address->mobile=$request->input('mobile');
//        $address->user_id=auth()->user()->id;
// $address->save();



/* second way*/
auth()->user()->address()->create($request->all());


        //redirect
        return Redirect()->route('address.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        // return view('address.edit');
        return view('address.edit',compact('address'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
  //validation
  $request->validate([
    'state'=>'required',
    'city'=>'required',
    'mobile'=>'required',
    'full_address'=>'required',


]);


$address->update($request->all());


  //redirect
  return redirect()->route('address.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {

        $address->delete();
          //redirect
          return Redirect()->route('address.index');
    }



}
