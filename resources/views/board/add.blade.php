@extends('layouts.eventmanager')

@section('title', 'add')

@section('content')
    <h2 class="subtitle">new event</h2>
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ( $errors->all() as $error) 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="add" method="post" class="addform" enctype="multipart/form-data">
        @csrf
        <div class="addform_title addform_content">
            <label for="event_title" class="addform_label">title</label>
            <br>
            <input type="text" name="event_title" id="event_title">
        </div>
        <div class="addform_image addform_content">
            <label for="event_image" class="addform_label">image</label>
            <br>
            <input type="file" name="event_image" id="event_image">
        </div>
        <div class="addform_period addform_content">
            <label for="start_date" class="addform_label">exhibition period</label>
            <div class="addform_period_detail">
                <input type="date" name="start_date" id="start_date">
                <p>～</p>
                <input type="date" name="fin_date" id="fin_date">
            </div>
        </div>
        <div class="addform_memo addform_content">
            <label for="memo" class="addform_label">memo</label>
            <br>
            <textarea name="event_memo" id="event_memo" class="addform_memo_box"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" value="register">
        </div>
    </form>
@endsection