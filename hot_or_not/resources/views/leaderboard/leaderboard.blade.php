@extends('layouts.layout')

@section('content')

    <div class="row">
        <a href={{ route('add') }} class="btn btn-info" role="button">Link Button</a>
    </div>

    <table class="table table-responsive">
        <thread>
            <tr>
                <th>Ranking</th>
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
                    <td><img src="{{ 'img/candidates/' . $deelnemer->filename }}" alt=""></td>
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


@endsection