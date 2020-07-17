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
        <select class="autori" name="autori">
        </select>
      </div>
    </header>

    <main>
      <div class="container">
      </div>
    </main>

    <?php // NOTE: template option?>
    <script id="option-template" type="text/x-handlebars-template">
      <option value="{{author}}">{{author}}</option>
    </script>

    <?php // NOTE: template brano ?>
    <script id="brano-template" type="text/x-handlebars-template">
      <div class="brano">
        <img src=" {{poster}} " alt="poster">
        <h2>{{title}}</h2>
        <p>{{author}}</p>
        <p>{{year}}</p>
      </div>
    </script>

    <script type="text/javascript" src="dist/app.js">

    </script>
  </body>
</html>
