<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AddNoteController extends Controller
{
    public function index($invoice_id){
        $invoice = Invoice::findOrFail($invoice_id);

        return view('addnote', [
                'invoice' => $invoice,
            ]
        );
    }
    public function add($invoice_id){
        $invoice = Invoice::findOrFail($invoice_id);
        
        return Redirect::to(route('invoice'),$invoice_id);
    }
}
