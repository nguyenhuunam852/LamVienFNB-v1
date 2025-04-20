<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class FlashHandleErrors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->session()->has('errors')) {
            $errors = $request->session()->get('errors')->all();

            if (count($errors) > 0) {
                Session::flash('error', $errors[0]);

                return redirect()->back()->with([
                    'form' => $request->all(),
                ]);
            }
        }

        return $response;
    }
}
