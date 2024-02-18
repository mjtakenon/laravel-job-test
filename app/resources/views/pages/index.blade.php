@extends('components.app')
@section('title', 'laravel template')
@section('contents')
    <div id="app">
        @include('components.header')
        <index-page></index-page>
        @include('components.footer')
    </div>
@endsection
