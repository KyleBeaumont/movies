<?php 
   session_start();

   $movies = json_decode(file_get_contents('movies.json'), 1);

   $genres = [
    'Fantasy',
    'Sci-Fi',
    'Action',
    'Comedy',
    'Drama',
    'Horror',
    'Romance',
    'Family',
  ];