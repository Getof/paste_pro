<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Paste;
use Illuminate\Http\Request;
use Hashids\Hashids;

class PasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
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

        $input = $request->all();

        $paste = new Paste;
        $paste->title = $input['title'];
        $paste->paste = $input['paste_text'];
        $paste->sintax = $input['sintax'];
        $paste->expir = $input['expir'];
        $paste->expose = $input['expose'];
        $hashids = new Hashids($input['paste_text']);
        $paste->hash = $hashids->encode(1,2,3);

        dd($paste);


        return redirect()->route('show', ['hash' => 'dfdfdf']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function show(Paste $paste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function edit(Paste $paste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paste $paste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paste $paste)
    {
        //
    }
}
