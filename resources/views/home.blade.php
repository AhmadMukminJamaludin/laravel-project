@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="page-head-line">DASHBOARD</h1>
        </div>
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif            
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ __('Dashboard') }}
                </div>
                <div class="panel-body">
                    <p>{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
