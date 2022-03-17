<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function language(string $lang = null)
    {
        if ($lang != null) {
            Session::put('language',$lang);
        }

        return redirect()->back();
    }
}
