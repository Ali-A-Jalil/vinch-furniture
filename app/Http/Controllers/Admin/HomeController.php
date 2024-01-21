<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        switch (auth()->user()->roles[0]->title) {
            case 'Admin':
                return $this->admin();
                break;

            default:

                break;
        }
    }

    public function admin()
    {

        return view('home', compact([]));
    }
}
