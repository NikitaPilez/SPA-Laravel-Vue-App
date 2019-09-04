@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <socket-component></socket-component>
            <search-component></search-component>
        </div>
    </div>

@endsection
