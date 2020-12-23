<?php

namespace App\Http\Middleware;

use App\Country;  //country model
use Closure;
use Request;
use Route;

class CountryMiddleware
{
   /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure                 $next
    *
    * @return mixed
    */
    public function handle($request, Closure $next)
    {
        $countryShortcode = $request->route('country');  //get country part from url
        $country = Country::where('country_shortcode', '=', $countryShortcode)->first();
        if ($country === null) {
            return redirect('/');
        }
        $request->session()->put('country', $country);
        $request->session()->save();
        return $next($request);
    }
 }

