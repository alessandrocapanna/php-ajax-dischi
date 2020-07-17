<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <img src="img/logo.jpeg" alt="logo">
        <input type="text" name="" value="" placeholder="inserisci nome artista">
        <button type="button" name="button">cerca</button>
      </div>
    </header>

    <main>
      <div class="container">
        <?php foreach ($database as $brano) { ?>
          <div class="brano">
            <img src="<?php echo $brano['poster']; ?>" alt="poster">
            <h2><?php echo $brano['title']; ?></h2>
            <p><?php echo $brano['author']; ?></p>
            <p><?php echo $brano['year']; ?></p>
          </div>
        <?php }  ?>
      </div>
    </main>

    <script type="text/javascript" src="dist/app.js">

    </script>
  </body>
</html>
