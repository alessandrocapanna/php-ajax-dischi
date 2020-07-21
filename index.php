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
        <select class="autori" name="">
          <?php foreach ($database as $brano) { ?>
            <option value="<?php echo $brano['author']; ?> "> <?php echo $brano['author']; ?> </option>
          <?php } ?>
        </select>
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

    
  </body>
</html>
