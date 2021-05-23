<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Episode;
use App\Genre;

class MovieController extends Controller
{
    public function GenerateMainMenuView(){

        $Drama = Movie :: where("genre_id","=",' 1')->get();
        $Kids = Movie :: where("genre_id","like",2)->get();
        $TVShow = Movie :: where("genre_id","like",3)->get();

        
        return view('MainMenu',[
            'drama' => $Drama,
            'kids' => $Kids,
            'tvShow' => $TVShow
        ]);

    }

    public function GenerateDetailMovieView($id,$genreID){

        $Genre = Genre :: where ("id","=",$genreID)->first();

        $Movie = Movie :: where("id","=",$id)->first();
           

        $Episode = Episode :: where("movie_id","=",$id)->paginate(3);

        return view('DetailMovie',[
            'movie' => $Movie,
            'episode' => $Episode,
            'genre' => $Genre
        ]);

    }

    public function GenerateGenreMovieView($id){

        $movies = Movie :: where("genre_id","=",$id)->get();

        return view('GenreMovie',['Movie' => $movies]);

    }
}
