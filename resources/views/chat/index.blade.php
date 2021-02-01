@extends('layouts.app-chat')
@section('content')
<!-- <chats :user="{{ auth()->user() }}"></chats> -->
<chats :user="{{ Auth::user() }}"></chats>
@endsection
