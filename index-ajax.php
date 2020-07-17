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

      </div>
    </main>

    
    <script id="brano-template" type="text/x-handlebars-template">
      <div class="brano">
        <img src="{{foto}}" alt="poster">
        <h2>{{titile}}</h2>
        <p>{{author}}</p>
        <p>{{year}}</p>
      </div>
    </script>

    <script type="text/javascript" src="dist/app.js">

    </script>
  </body>
</html>
