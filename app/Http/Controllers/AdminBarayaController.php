<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Category;
use App\Models\AdminBaraya;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AdminBarayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notif $notif)
    {
        return view('dashboard.baraya.index', [
            'notifs' => Notif::where('user_id', 1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Notif $notif)
    {   
        return view('dashboard.baraya.create', [
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
     * @param  \App\Models\AdminBaraya  $adminBaraya
     * @return \Illuminate\Http\Response
     */
    public function show(AdminBaraya $adminBaraya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminBaraya  $adminBaraya
     * @return \Illuminate\Http\Response
     */
    public function edit(Notif $notif)
    {
        return view('/dashboard.baraya.edit', [
            'notif' => $notif,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminBaraya  $adminBaraya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminBaraya $adminBaraya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminBaraya  $adminBaraya
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminBaraya $adminBaraya)
    {
        //
    }
}
