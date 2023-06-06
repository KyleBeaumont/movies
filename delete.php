<?php
  require "data.php";

  if( isset($_POST['movie_id'])){
    $index = array_key_first(array_filter($movies, function($movie) {
        return $movie['movie_id'] == $_POST['movie_id'];
    }));

    unset($_SESSION['movies'][$index]);
  }
 header("Location: index.php")
?>