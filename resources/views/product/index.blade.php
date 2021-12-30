@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->role === 'admin')
        <product-admin />
    @elseif(Auth::check() && Auth::user()->role === 'user')
        <product-user />
    @else
        <product-index></product-index>
    @endif
@endsection
