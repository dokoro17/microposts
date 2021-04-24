@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        <imag class="rounded imag-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' =>500]) }}" alt="">
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">
                @include('microposts.microposts')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Micoroposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' =>'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection                                                                                                                         