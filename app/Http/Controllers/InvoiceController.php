<?php

namespace App\Http\Controllers;


use App\Invoice;
use App\Note;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    public function index($invoice_id){
        $invoice = Invoice::findOrFail($invoice_id);
        $notes = Note::where('invoice_id','=',$invoice->id)->get();

        return view('invoice', [
                'invoice' => $invoice,
                'notes' => $notes,
            ]
        );
    }
    
    /*
    public function deleteNote($invoice_id,$note_id){
        $invoice = Invoice::findOrFail($invoice_id);
        $note = Note::findOrFail($note_id);

        if($note->invoice_id == $invoice->id){
            $note->delete();
        }
    }
    */

}
