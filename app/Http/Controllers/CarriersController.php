<?php

namespace App\Http\Controllers;

use App\Service;
use App\Carrier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CarriersController extends Controller
{

    public function show($id) {
        $carrier = Carrier::find($id);

        return view('carriers.show', compact('carrier'));
    }


}