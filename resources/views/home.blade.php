@extends('layouts.app')

@section('content')
<div class="container">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRwk-ir9TMpFj_Dxx1_3hJBUmvaZEJe9Q&libraries=places"></script> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
