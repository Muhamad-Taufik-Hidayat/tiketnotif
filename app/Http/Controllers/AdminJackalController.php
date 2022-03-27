<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Category;
use App\Models\AdminJackal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AdminJackalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notif $notif)
    {
        return view('dashboard.lintas.index', [
            'notifs' => Notif::where('user_id', 3)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Notif $notif)
    {   
        return view('dashboard.daytrans.create', [
            'categories' => Category::all()
        ]);
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
     * @param  \App\Models\AdminJackal  $adminJackal
     * @return \Illuminate\Http\Response
     */
    public function show(AdminJackal $adminJackal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminJackal  $adminJackal
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminJackal $adminJackal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminJackal  $adminJackal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminJackal $adminJackal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminJackal  $adminJackal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminJackal $adminJackal)
    {
        //
    }
}
