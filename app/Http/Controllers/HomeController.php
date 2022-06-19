<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$invoices = Invoice::where('user_id','=',1)->get();
        $invoices = Invoice::sortable()->where('user_id','=',1)->get();
        //return view('home',[
        //    'invoices' => compact('invoices'),
        //]);

        return view('home',compact('invoices'));


    }
}
