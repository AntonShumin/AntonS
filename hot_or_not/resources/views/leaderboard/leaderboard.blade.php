@extends('layouts.layout')

@section('content')

    <div id="leaderboards">

        <div class="col-md-6">

            @if( count($deelnemers) == 1 )
                <a href="{{ route('leaderboard') }}" class="btn btn-info center-block" role="button">Back to the leaderboard</a>
            @else
                <a href="{{ route('add') }}" class="btn btn-info center-block" role="button">Upload a face</a>
            @endif

        </div>

        <table class="table table-responsive">
            <thread>
                <tr>
                    <th></th>
                    <th>Foto</th>
                    <th>Naam</th>
                    <th>Percentage</th>
                    <th>Hots</th>
                    <th>Nots</th>
                </tr>
            </thread>
            <tbody>
            @foreach($deelnemers as $index => $deelnemer)
                <tr>
                    <td>{{ $index + 1  }}</td>
                    <td><img src="{{ '/img/candidates/' . $deelnemer->filename }}" alt=""></td>
                    <td>{{ $deelnemer->name }}</td>
                    <td>{{ round( $deelnemer->sum ) . "%"  }}</td>
                    <td>{{ $deelnemer->hot }}</td>
                    <td>{{ $deelnemer->not }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <div class="row link">
            <div class="col-md-12">

                <a href="{{route('home')}}"><h6>PLAY</h6></a>

            </div>

        </div>

    </div>



@endsection