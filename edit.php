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
    <form class="form" method="post">
      <input type="text" class="form-control" name="movie_title" placeholder="Movie Title" required value="Labyrinth">
      <input type="text" class="form-control" name="director" placeholder="Director" required
          value="Jim Henson">
      <input type="number" class="form-control" name="year" placeholder="Year" required
          value="1986">
      <select class="form-control" name="genre_id">
          <option value="1">Fantasy</option>
      </select>
      <div class="error text-danger"></div>
      <button type="submit" class="button">Update Movie</button>
    </form>
  </main>
</body>
</html>