<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\Redirect;


class UpdateStatusController extends Controller
{
    public function index($invoice_id){
        $invoice = Invoice::findOrFail($invoice_id);

        return view('updatestatus', [
                'invoice' => $invoice,
            ]
        );
    }

    public function update($invoice_id){
        $invoice = Invoice::findOrFail($invoice_id);
        

        return Redirect::to(route('invoice'),$invoice_id);
    }
}
