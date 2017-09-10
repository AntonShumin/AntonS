@extends('layouts.layout')

@section('content')

    <div id="upload">

        <form action="/leaderboard/add" method="post" enctype="multipart/form-data">

            <div class="col-md-12">
                <h3>Upload your beautiful picture</h3>
            </div>

            <div class="col-md-6">

                {{ csrf_field() }}
                <input type="text" class="form-control" name="name" placeholder="Name" aria-describedby="basic-addon2" required maxlength="10">
                <input type="file" class="form-control" name="file" id="file" accept="image/jpeg" required>
                <input type="submit" class="form-control" value="Upload" name="submit">

            </div>


        </form>

    </div>


    <div class="row link">
        <div class="col-md-12">

            <a href="{{route('leaderboard')}}"><h6>LEADERBOARD</h6></a>

        </div>

    </div>

@endsection