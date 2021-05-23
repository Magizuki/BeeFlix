<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: orange">
    @section('content')
    <div class="container-fluid" style="background-color: orange">
        <h2>BeeFlix</h2>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-dark" onclick="window.location = '{{url()->previous()}}'" >KEMBALI</button>
            <button type="button" class="btn btn-outline-dark" onclick="window.location = '{{url('/')}}'">LIHAT SEMUA FILM</button>
        </div>
        <br>
        <br>
        <div class="container-fluid" style="background-color: rgb(245, 113, 6);">
            <br>
            <div class="container-fluid" style="background-color:rgb(245, 113, 6); padding-top: 10px">
                <h4>DRAMA</h4>
                <div class="card-group">
                    @foreach($drama as $movie)
                        <div class="card">
                            <img class="card-img-top" src="{{$movie->photo}}" style="height:500px" alt="Drama Image">
                            <div class="card-body" style="background-color: black; color: white; text-align: center"> {{$movie->title}} </div>
                        <button type="button" class="btn btn-dark" onclick="window.location = '{{url('/MainMenu'.'/'.$movie->id.'/'.$movie->genre_id)}}'">LIHAT FILM</button> 
                        </div>
                    @endforeach
                </div>
                <br>
                <h4>KIDS</h4>
                <div class="card-group">
                    @foreach($kids as $movie)
                        <div class="card">
                            <img class="card-img-top" src="{{$movie->photo}}" style="height:500px" alt="Kids Image">
                            <div class="card-body" style="background-color: black; color: white; text-align: center"> {{$movie->title}} </div>
                            <button type="button" class="btn btn-dark"  onclick="window.location = '{{url('/MainMenu'.'/'.$movie->id.'/'.$movie->genre_id)}}'" >LIHAT FILM</button> 
                        </div>
                    @endforeach
                </div>
                <br>
                <h4>TV SHOW</h4>
                <div class="card-group">
                    @foreach($tvShow as $movie)
                        <div class="card">
                            <img class="card-img-top" src="{{$movie->photo}}" style="height:500px" alt="TV Show Image">
                            <div class="card-body" style="background-color: black; color: white; text-align: center"> {{$movie->title}} </div>
                            <button type="button" class="btn btn-dark"  onclick="window.location = '{{url('/MainMenu'.'/'.$movie->id.'/'.$movie->genre_id)}}'">LIHAT FILM</button> 
                        </div>
                    @endforeach
                </div>
                <br>
            </div>
            <br>
        </div>
    </div>
    @show
 
</body>
</html>