<?php

class FizzBuzz extends Controller
{
    public function index()
    {
        $songs = $this->model->getAllSongs();
        $filteredSongs = $songs;
        usort($filteredSongs, function($a, $b) {
            return strcmp($a->artist, $b->artist);
        });

        require APP . 'view/_templates/header.php';
        require APP . 'view/home/fizzbuzz.php';
        require APP . 'view/_templates/footer.php';
    }
}
