@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="padding: 10px;">{{ __('Dashboard') }}</div>

                <div class="card-body" style="padding: 10px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{route('uploadchoice')}}" type="btn" class="btn btn-primary btn-block">Proceed to Upload Choice</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
