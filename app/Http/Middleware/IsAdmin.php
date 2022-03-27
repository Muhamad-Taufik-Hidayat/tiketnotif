<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AddAplikasi;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() || auth()->user()->is_admin){
            return $next($request);  
        }else if(!auth()->check() || !auth()->user()->is_admin){
            abort(403);
            return $next($request); 
        }


        // else if( auth()->check() || auth()->user()->is_admin == 1 ){
        //     return view('dashboard.addaplikasi.create', [
        //         'aplikasi' => AddAplikasi::all()
        //     ]);
        //     if( auth()->check() || auth()->user()->is_admin !== 1 ){
        //         abort(403);
        //     }
        // }


        
        // coba
        // if( auth()->user()->is_admin == 2 ){
        // }


    }
}
