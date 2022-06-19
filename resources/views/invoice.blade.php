@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Invoice') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div>{{ $invoice->date }}</div>
                            <br>
                            <h3>To:</h3>
                            <div>{{ App\Contact::where('id','=',$invoice->contact_id)->first()->name }}</div>
                            <div>{{ App\Contact::where('id','=',$invoice->contact_id)->first()->address }}</div>
                            <div>{{ App\Contact::where('id','=',$invoice->contact_id)->first()->phone }}</div>
                            <div>{{ App\Contact::where('id','=',$invoice->contact_id)->first()->email }}</div>
                            <div>Purchase Order/Reference: {{ $invoice->purchase_order }}</div>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-12"><hr></div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Job:</h3>
                            <div>Job Type: {{ $invoice->job_type }}</div>
                            <div>Site Address: {{ $invoice->site_address }}</div>
                            <div>Due Date: {{ $invoice->due_date }}</div>
                            <br>
                            <div>Price (ex GST): {{ number_format($invoice->price_ex_gst,2) }}</div>
                            <div>Discount (%): {{ $invoice->discount_by_percent }}</div>
                            <div>Sub Total: ${{ number_format(($invoice->price_ex_gst * (1 - ($invoice->discount_by_percent / 100))),2) }}</div>
                            <div>GST ({{ $invoice->tax_rate }}%): ${{ number_format(($invoice->price_ex_gst * (1 - ($invoice->discount_by_percent / 100))) * ($invoice->tax_rate/100),2) }}</div>
                            <div>Total:  ${{ number_format(($invoice->price_ex_gst * (1 - ($invoice->discount_by_percent / 100))) * (($invoice->tax_rate/100)+1),2) }}</div>
                            <br>
                            <div>Status: {{ $invoice->status }} <a href="{{ route("updatestatus", $invoice->id) }}" class="btn btn-secondary"><i class="fas fa-refresh"></i></a></div>
                        </div>
                        <div class="col-md-12"><hr></div>
                    </div>

                    <div class="row p-3">
                        <div class="col-md-10">
                            <h3>Notes:</h3> 
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('addnote',$invoice->id) }}" class="btn btn-success" style="float:right">Add <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                    @foreach ($notes as $note)
                    <div class="row mt-3" style="border: 1px solid #000;">
                        <div class="col-md-12" style="background:gray;">
                            <p>Date Created: {{ date('d/m/Y H:ma', strtotime($note->date_time)) }}</p> 
                        </div>
                        <div class="col-md-10">
                            <p class="mt-1">{{ $note->note }}</p>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route("updatenote",["invoice_id" => $invoice->id, "note_id" => $note->id]) }}" class="btn btn-secondary mt-1" style="float:right">Edit <i class="far fa-edit"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <div class="row p-5">
                        <div class="col-md-12 h-100 d-flex align-items-center justify-content-center">
                            <a href="{{ route('home') }}" class="btn btn-info mt-1" style="">All Invoices <i class="far fa-file"> </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
