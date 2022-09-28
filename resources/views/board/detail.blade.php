@extends('layouts.eventmanager')

@section('title', 'detail')

@section('content')
    <div class="event_info">
        <img src="{{ asset($target->event_image) }}" alt="event_image" class="event_info_image">
        <div class="event_info_text">
            <p class="event_info_title">{{ $target->event_title }}</p>
            <div class="event_info_date">
                <p>{{ $target->start_date->format('m/d') }}～{{ $target->fin_date->format('m/d') }}</p>
            </div>
            <p class="event_info_memo">{{ $target->event_memo }}</p>
        </div>
    </div>

@endsection