<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index(){
        $trains = Train::whereDate('orario_di_partenza', '>=', Carbon::today())->get();
        return view('layouts.app', compact('trains'));
    }
}
