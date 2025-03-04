<?php

namespace Illuminate\Auth\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class EnsureEmailIsVerified
{
public function handle($request, Closure $next, $redirectToRoute = null)
{
    // Memeriksa apakah pengguna telah diotentikasi
    if (! $request->user()) {
        return $next($request);
    }

    // Pengecualian untuk rute-rute tertentu
    if ($request->routeIs('verification.notice')) {
        return $next($request);
    }

    // Memeriksa apakah pengguna merupakan instance dari MustVerifyEmail dan belum memverifikasi email
    if ($request->user() instanceof MustVerifyEmail && ! $request->user()->hasVerifiedEmail()) {
        // Memeriksa apakah permintaan adalah JSON
        if ($request->expectsJson()) {
            return abort(403, 'Your email address is not verified.');
        }

        // Mengarahkan pengguna ke halaman verifikasi email
        return Redirect::guest(URL::route($redirectToRoute ?: 'verification.notice'));
    }

    return $next($request);
}

}
