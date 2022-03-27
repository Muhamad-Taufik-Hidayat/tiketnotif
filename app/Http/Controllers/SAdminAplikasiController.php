<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\AddAplikasi;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class SAdminAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.addaplikasi.index',[
            'aplikasi' => Notif::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, IsAdmin $Isadmin)
    {   

        // if( $Isadmin !== 1){
        //     abort(403);
        // }

        if( $Isadmin == 1 ){
            return view('dashboard.addaplikasi.create', [
                'aplikasi' => AddAplikasi::all()
            ]);
        }else{
            abort(403);
        }

            

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddAplikasi  $addAplikasi
     * @return \Illuminate\Http\Response
     */
    public function show(AddAplikasi $addAplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddAplikasi  $addAplikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(AddAplikasi $addAplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddAplikasi  $addAplikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddAplikasi $addAplikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddAplikasi  $addAplikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddAplikasi $addAplikasi)
    {
        //
    }
}
