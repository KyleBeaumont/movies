<?php
//Generic PDO Code
$dsn = 'mysql:host=localhost;dbname=movie_mayhem';
$username = 'root';
$password = 'Romans102001';
try{
  $db = new PDO($dsn,$username,$password);
} catch(PDOException $e){
  $error = $e->getMessage();
  echo $error;
  exit();
}
$sql = "SELECT * FROM genres";
$results = $db->query($sql);
$genres = $results->fetchAll(PDO::FETCH_COLUMN, 1);

   session_start();

   $movies = json_decode(file_get_contents('movies.json'), 1);

   if (isset($_SESSION['movies'])) {
    $movies = $_SESSION['movies'];
   } else {
    $_SESSION['movies'] = $movies;
   }

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