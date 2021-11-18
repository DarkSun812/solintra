@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/fondo2.jpg')}}'); background-size: cover; background-position: top center; padding-bottom: 40%;">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('BIENVENIDO a SOL-INTRA') }}

            </div>
        </div>
    </div>
</div>
@endsection
