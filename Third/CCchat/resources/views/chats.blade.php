@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <chats  :user="{{auth()->user()}}"></chats>
        @else
            <chats :user=null></chats>
        @endif
    </div>
@endsection
