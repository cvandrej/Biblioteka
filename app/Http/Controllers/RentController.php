<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Users;
use App\Models\Books;
use App\Models\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iznajmuvanje = new Rent;
 
        $iznajmuvanje->users_id = request('userId');
        $iznajmuvanje->book_id = request('bookId');
 
        $iznajmuvanje->save();
 
        return redirect(route("user.prikazi", ['id' => request('userId')]));
    }

    public function vrati()
    {
        // $userId = request('userId');
        $rentId = request('rentId');
        // $id = request('id');

        $vratiKniga = Rent::find($rentId);

        $vratiKniga->Returned = Carbon::now();
        $vratiKniga->save();

        return redirect(route("user.prikazi", ['id' => request('userId')]));
        // return redirect(route('lista.useri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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