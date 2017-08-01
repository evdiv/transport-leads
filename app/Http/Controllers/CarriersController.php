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

    public function __construct()
    {
        $this->middleware('auth:web-carrier');
    }


    public function index()
    {
        return view('carriers.admin.home');
    }


    public function edit() 
    {
        $carrier_id = Auth::id();
        $carrier = Carrier::find($carrier_id);
        $service = Service::where('carrier_id', $carrier_id)->get();

        return view('carriers.admin.add-info', compact('carrier', 'service'));
    }


    public function update(Request $request) {

        $carrier_id = Auth::id();
        Carrier::find($carrier_id)->update(['location' => $request->location]);

        $Service = Service::firstOrNew(['carrier_id' => $carrier_id]);

        $Service->takelaj_max_weight = $request->takelaj_max_weight;
        $Service->gruzchik_number = $request->gruzchik_number;
        $Service->autokran_14  = $request->autokran_14;
        $Service->autokran_16  = $request->autokran_16;
        $Service->autokran_25  = $request->autokran_25;
        $Service->autokran_32  = $request->autokran_32;
        $Service->autokran_40  = $request->autokran_40;
        $Service->autokran_50  = $request->autokran_50;
        $Service->autokran_70  = $request->autokran_70;
        $Service->autokran_90  = $request->autokran_90;
        $Service->manipulator_3  = $request->manipulator_3;
        $Service->manipulator_5  = $request->manipulator_5;
        $Service->manipulator_7  = $request->manipulator_7;
        $Service->manipulator_10  = $request->manipulator_10;
        $Service->nizkoramnik_15  = $request->nizkoramnik_15;
        $Service->nizkoramnik_25  = $request->nizkoramnik_25;
        $Service->nizkoramnik_35  = $request->nizkoramnik_35;
        $Service->nizkoramnik_40  = $request->nizkoramnik_40;
        $Service->lifter_1  = $request->lifter_1;
        $Service->lifter_3  = $request->lifter_3;
        $Service->lifter_5  = $request->lifter_5;
        $Service->open_6  = $request->open_6;
        $Service->open_9  = $request->open_9;
        $Service->open_12  = $request->open_12;
        $Service->open_13  = $request->open_13;

        $Service->save();

        return redirect()->route('carrier.dashboard');
    }
}