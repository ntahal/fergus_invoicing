@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Update Invoice Status') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    <h2>Update Status:</h2>
                    
                    <div class="row mt-3" style="">
                        <div class="col-md-12">
                            <form action="{{ route("updatestatusPost", $invoice->id) }}" method="post">
                                <p>Current Status: {{ $invoice->status }}</p>
                                <select>
                                    <option>scheduled</option>
                                    <option>active</option>
                                    <option>invoicing</option>
                                    <option>to priced</option>
                                    <option>completed</option>
                                </select>
                                <br>
                                <div class="row" style="">
                                    <div class="col-md-6 mt-3">
                                        <button type="submit" class="btn btn-primary mt-1" style="float:left">Update <i class="far fa-save"></i></a>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <a href="{{ route('invoice',$invoice->id) }}" class="btn btn-warning mt-1" style="float:right"><i class="fas fa-arrow-left"> </i> Go Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
