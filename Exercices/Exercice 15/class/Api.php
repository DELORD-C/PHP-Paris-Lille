<?php

class Api {
    static function getMovieDetails (string $search) {
        $search = preg_replace('/\s+/', '%20', $search);
        $data = json_decode(file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $search));
        if (!empty($data->results)) {
            return $data->results[0];
        }
        return false;
    }

    static function getMoviePoster (string $search) {
        $search = preg_replace('/\s+/', '%20', $search);
        $data = json_decode(file_get_contents('https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=' . $search));
        if (!empty($data->results)) {
            if ($data->results[0]->poster_path != null) {
                return "https://www.themoviedb.org/t/p/w600_and_h900_bestv2" . $data->results[0]->poster_path;
            }
            return false;
        }
        return false;
    }
}