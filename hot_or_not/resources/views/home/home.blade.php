@extends('layouts.layout')


@section('content')

    <div id="comparison" class="row">

        @foreach($deelnemers as $deelnemer)

            <div class="col-md-6">

                <form method="POST" action="/">

                    {{ csrf_field() }}
                    <input type="hidden" name="hot" value="{{ $deelnemer->id }}">
                    <input type="hidden" name="not" value="{{ $deelnemer->oponent_id }}">
                    <button type="submit">
                        <img src="{{ 'img/candidates/' . $deelnemer->filename }}" class="pic"
                             alt="{{ $deelnemer->name }}">
                    </button>

                </form>

            </div>

        @endforeach

    </div>

    <div class="row link">
        <div class="col-md-12">

            <a href="{{route('leaderboard')}}"><h6>LEADERBOARD</h6></a>

        </div>

    </div>

@endsection
