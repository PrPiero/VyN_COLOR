<?php

namespace App\Http\Responses;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        //Auth::Login();

        //return redirect()->route('shop');
        //$categories = Category::all();
        //return view('welcome', compact('categories'));
        return $request->wantsJson()
                    ? response()->json(['login' => false])
                    : redirect()->route('shop');
    }
}
