@extends('layouts.eventmanager')

@section('title', 'top')

@section('content')
    <ul class="event_index">
        @foreach ($events as $event)
            <a href="detail?id={{ $event->id }}" class="event_index_link">
                <li class="event_box">
                    <img src="{{ asset( $event->event_image) }}" alt="event_image" class="event_box_image">
                    <p class="event_box_title">{{ $event->event_title }}</p>
                    <div class="event_box_date">
                        <p>{{ $event->start_date->format('m/d') }}～{{ $event->fin_date->format('m/d') }}</p>
                    </div>
                </li>
            </a>
        @endforeach
    </ul>
@endsection