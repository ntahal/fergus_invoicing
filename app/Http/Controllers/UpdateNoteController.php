<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Note;
use Illuminate\Support\Facades\Redirect;

class UpdateNoteController extends Controller
{
    public function index($invoice_id,$note_id){
        $invoice = Invoice::findOrFail($invoice_id);
        $note = Note::findOrFail($note_id);
        
        return view('updatenote', [
                'invoice' => $invoice,
                'note' => $note,
            ]
        );
    }

    public function update($invoice_id,$note_id){
        $invoice = Invoice::findOrFail($invoice_id);
        $note = Note::findOrFail($note_id);
        
        return Redirect::to(route('invoice'),$invoice_id);
    }
}
