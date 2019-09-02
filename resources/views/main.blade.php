@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <prop-component :urldata="{{json_encode($urlData)}}"></prop-component>
        </div>
        <div class="row">
            <ajax-component></ajax-component>
        </div>
        <div class="row">
            <chartline-component></chartline-component>
        </div>
        <div class="row">
            <chartpie-component></chartpie-component>
        </div>
        <div class="row">
            <chartrandom-component></chartrandom-component>
        </div>
    </div>
@endsection
