@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Update Invoice Note') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{ route("updatenote",["invoice_id" => $invoice->id, "note_id" => $note->id]) }}" method="post">
                    <div class="row p-3">
                        <div class="col-md-12">
                            <h2>Update Note:</h2> 
                        </div>
                    </div>
                    <div class="row mt-3" style="border: 1px solid #000;">
                        <div class="col-md-12" style="background:gray;">
                            <p>Date Created: {{ date('d/m/Y H:ma', strtotime($note->date_time)) }}</p> 
                        </div>
                        <div class="col-md-12">
                            <textarea class="mt-1" style="width: 100%;">{{ $note->note }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-1" style="float:rleft">Update <i class="far fa-save"></i></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('invoice',$invoice->id) }}" class="btn btn-warning mt-1" style="float:right"><i class="fas fa-arrow-left"> Go Back</i></a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
