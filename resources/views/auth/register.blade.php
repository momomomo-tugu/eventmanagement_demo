@extends('layouts.eventmanager')

@section('title', 'register')

@section('content')
<div class="container">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="addform_content">
            <label for="name" class="addform_label">ユーザーID</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="addform_content">
            <label for="password" class="addform_label">パスワード</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="addform_content">
            <label for="password_confirmation" class="addform_label">パスワードをもう一度入力してください</label>
            <br>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <div>
            <input type="submit" value="register">
        </div>
    </form>
@endsection
