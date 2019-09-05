@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <privatechat-component :users="{{json_encode($users)}}" :user="{{json_encode($user)}}"></privatechat-component>
    @endif
@endsection
