<?php
  $company = 'Book Time';
  $title = 'Harry Potter Arrays';
  $topic = 'Books';
  $franchise = 'Harry Potter';

  // Let's create a simple array
  $books = array(
    'Harry Potter and the Sorcerer&#8217s Stone',
    'Harry Potter and the Chamber of Secrets',
    'Harry Potter and the Prisoner of Azkaban',
    'Harry Potter and the Goblet of Fire',
    'Harry Potter and the Order of the Phoenix',
    'Harry Potter and the Half-Blood Prince',
    'Harry Potter and the Deathly Hallows'
  );

  // Let's create an associative array
  $booksYears = array(
    'Harry Potter and the Sorcerer&#8217s Stone' => 1998,
    'Harry Potter and the Chamber of Secrets' => 1999,
    'Harry Potter and the Prisoner of Azkaban' => 1999,
    'Harry Potter and the Goblet of Fire' => 2000,
    'Harry Potter and the Order of the Phoenix' => 2003,
    'Harry Potter and the Half-Blood Prince' => 2005,
    'Harry Potter and the Deathly Hallows' => 2007
  );

  // Count how many items are stored in the array $books
  $booksLength = count($books);

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
      <p>There are <?php echo $booksLength; ?> books in the <em><?php echo $franchise; ?></em> franchise.</p>
      <ul class="list-group pb-4" style="max-width: 23rem;">
        <?php
          foreach ($books as $book) {
              echo '<li class="list-group-item">'.$book.'</li>';
          }
          // Let's unset $book so it can be used again later
          unset($book);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> book is <em><?php echo $books[4]; ?></em>.</p>
      <p>The best <em><?php echo $franchise; ?></em> movie is <em><?php echo $books[6]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> books were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 30rem;">
        <?php
          foreach ($booksYears as $book => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$book.'</em> '.$year.'</li>';
          }
          // Let's unset $book so it can be used again later
          unset($book);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>