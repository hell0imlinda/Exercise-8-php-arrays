<?php
  $company = 'Movie Time';
  $title = 'Arrays';
  $topic = 'Books';
  $franchise = 'Harry Potter';

  // Let's create a simple array
  $movies = array(
    'The Phantom Menace',
    'Attack of the Clones',
    'Revenge of the Sith',
    'A New Hope',
    'The Empire Strikes Back',
    'Return of the Jedi',
    'The Force Awakens',
    'Rogue One'
  );

  // Let's create an associative array
  $movieYears = array(
    'The Phantom Menace' => 1999,
    'Attack of the Clones' => 2002,
    'Revenge of the Sith' => 2005,
    'A New Hope' => 1977,
    'The Empire Strikes Back' => 1980,
    'Return of the Jedi' => 1983,
    'The Force Awakens' => 2015,
    'Rogue One' => 2016
  );

  // Count how many items are stored in the array $movies
  $moviesLength = count($movies);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $moviesLength; ?> movies in the <em><?php echo $franchise; ?></em> franchise.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movies as $movie) {
              echo '<li class="list-group-item">'.$movie.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> movie is <em><?php echo $movies[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> books were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movieYears as $movie => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>