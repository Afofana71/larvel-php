<?php

namespace App\Http\Controllers;
use App\Address;
use Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the address records associated with a user
        $user = Auth::user();
        $address = DB::table('address')->where('fk_user_id', $user['id'] )->get();
        return view('address.index', compact('address'));



echo $user->name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        // var_dump(Request);
        $user = Auth::user();
        $address=Request::all();
        var_dump($address);
        //Address::create($address);
        DB::table('address')->insert(
          [
            'street_one' => $address['street_one'],
            'zipcode' => $address['zipcode'],
            'street_two' => $address['street_two'],
            'fk_user_id' => $user['id']
          ]
        );
        return redirect('address');
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
        $address = DB::table('address')->where('id', $id)->first();
        var_dump($address);
        $zipcode = $address->zipcode;
        $street_two = $address->street_two;
        $street_one = $address->street_one;
        return view('address.edit', compact('zipcode', 'street_two', 'street_one'));
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
        Address::destroy($id);
        return redirect('address');
    }
}
