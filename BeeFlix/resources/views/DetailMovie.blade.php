<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Movie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: orange">
    @section('content')
    <div class="container-fluid" style="background-color: orange">
        <h2>BeeFlix</h2>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-dark" onclick="window.location = '{{url()->previous()}}'">KEMBALI</button>
            <button type="button" class="btn btn-outline-dark" onclick="window.location = '{{url('/')}}'">LIHAT SEMUA FILM</button>
        </div>
        <br>
        <br>
        <div class="container-fluid" style="background-color: rgb(0, 0, 0);">
            <br>
            <div class="container-fluid" style="background-color:white; padding-top: 10px">
                <div class="card-group">
                    <div class="card" style="border: none">
                        <img class="card-img" src="{{$movie->photo}}" style="height:500px" alt="Image">
                        <br>
                    </div>
                    <div class="card" style="border: none">
                        <div class="card-body"><h4>{{$movie->title}}</h4></div>
                        <img class="card-img" src="{{$movie->rating}}" style="height:5%; width:30%; padding-left:20px;" alt="Image">
                        <div class="card-body" style="height: 50%">{{$movie->description}}</div>
                        <div class="card-body" style="height: 100%">Kategori: <a href=" {{url('/MainMenu'.'/'.$movie->genre_id)}}">{{$genre->name}}</a></div>
                    </div>
                    <div class="card" style="border: none">
                        <div class="card-body"><h4>EPISODE</h4></div>
                        <div class="card-body" style="height: 200%">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Episode</th>
                                        <th>Judul</th>
                                    </tr>
                                </thead>
                                @foreach($episode as $Episode)
                                    <tr>
                                        <td>{{$Episode->episode}}</td>
                                        <td>:{{$Episode->title}}</td>
                                    </tr>
                                @endforeach
                            </table>
                            {{$episode->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    @show
</body>
</html>