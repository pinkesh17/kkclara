<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Session;

class AdminMiddleware{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{

        //...$roles

        /*$user = $request->user();
        $user_role = $user->pluck('role')->toArray();

        /*dd($user);*/

       //dd(Auth::user()->id);


        if(Auth::check() && Auth::user()->role > 20){

            /*dd("IN IF");*/

        }else{

            Session::flush();
            Auth::logout();
            return Redirect('/');



        }

        /*if(! Auth::user()->hasRole(['superadmin', 'admin'])){
             return redirect('/');
        }*/

        return $next($request);


        /*return $next($request);*/
    }
}
