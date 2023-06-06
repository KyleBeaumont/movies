<?php
  require "data.php";
//UPDATE AND REPLACE THE DATA WE RECRIVED FROM THE NEW INPUT/ENTRANCE
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $new = [
      // 'movie_id' => $_GET['id'],
      'movie_id' => $_POST['movie_id'],
      'movie_title' => $_POST['movie_title'],
      'director' => $_POST['director'],
      'year' => $_POST['year'],
      'genre' => $_POST['genre']
    ];
    $movies = array_map(function($m) use ($new){
      if ($m['movie_id']== $new['movie_id']){
        return $new;
      }
      return $m;
    }, $movies);
    $_SESSION['movies'] = $movies;

    header("Location: movie.php?id={$movie['movie_id']}");
  }

  //check if we actually have the movie id, find the moive in the array
  if (isset($_GET['id'])){
    $movie = current(array_filter($movies,function($movie){
      return $movie['movie_id'] == $_GET['id'];
      // == only compares value 
      // return $movie['movie_id'] === intval( $_GET['id']);
      // convert the string into the interger
    }));

    // to test the output of the $movie
    //  var_dump($movie);
    //  exit();

// come back to this page if it does not find any matching id 
  
    if (!$movie){
      header("Location:index.php");
    }
  }else{
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Movie</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="main">
    <?php require "header.php"; ?>
    <h2 class="form-title">Edit Movie</h2>
    <form class="form" method="post" action="delete.php">
      <input type="hidden" name="movie_id" value="<?php echo $movie['movie_id']; ?>">
      <button class="button danger">delete</button>

      
    </form>
  </main>
</body>
</html>