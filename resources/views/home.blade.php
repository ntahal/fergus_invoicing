@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Invoices') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table id="invoices-table" class="table table-bordered">
                        <tr>
                            <th>@sortablelink('date','Date')</th>
                            <th>Client</th>
                            <th>@sortablelink('site_address','Site Address')</th>
                            <th>@sortablelink('job_type','Job Type')</th>
                            <th>@sortablelink('purchase_order','Purchase Order')</th>
                            <th>@sortablelink('sub_total','Sub Total')</th>
                            <th>@sortablelink('due_date','Due Date')</th>
                            <th>@sortablelink('status','Status')</th>
                            <th>View Details</th>

                        </tr>
                        
                        @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->date}}</td>
                            <td>{{ App\Contact::where('id','=',$invoice->contact_id)->first()->name }}</td>
                            <td>{{ $invoice->site_address }}</td>
                            <td>{{ $invoice->job_type }}</td>
                            <td>{{ $invoice->purchase_order }}</td>
                            <td>${{ ($invoice->price_ex_gst * (1 - ($invoice->discount_by_percent / 100))) }}</td>
                            <td>{{ $invoice->due_date}}</td>
                            <td>{{ $invoice->status }}</td>
                            <td><a href="{{ route("invoice", $invoice->id) }}" class="btn btn-primary">View Details</a> </td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
