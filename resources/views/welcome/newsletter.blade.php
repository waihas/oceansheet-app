@extends('welcome.layouts.basic')
@section('title', 'Get Notified at Launch!')

@section('stylesheets')
@endsection

@section('content')

    <newsletter>
        @csrf
    </newsletter>

@endsection

@section('scripts')
@endsection