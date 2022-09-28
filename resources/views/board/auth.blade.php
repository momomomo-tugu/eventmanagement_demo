@extends('layouts.eventmanager')

@section('title', 'login')

@section('content')
<div class="container">
    <form action="auth" method="post">
        @csrf
        <div class="addform_content">
            <label for="name" class="addform_label">ユーザーID</label>
            <br>
            <input type="text" name="name" id="name">
        </div>
        <div class="addform_content">
            <label for="password" class="addform_label">パスワード</label>
            <br>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="login">
        </div>
    </form>
@endsection