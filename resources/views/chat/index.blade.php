@extends('layouts.app-chat')
@section('content')
<chats :user="{{ auth()->user() }}"></chats>
@endsection
