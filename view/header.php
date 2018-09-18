<!DOCTYPE html>
<html class="<?= $title ?>" lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> | instaLookup</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">





    <?php
    if(isset($stylesheets))
    {
        foreach($stylesheets as $style)
        {
          echo '<link href="/css/'.$style.'" rel="stylesheet">';
          echo "\n";

        }
    }
    ?>

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a data-toggle="collapse" data-target=".nav-collapse" class="navbar-brand" href="/">instaLookup</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a data-toggle="collapse" data-target=".nav-collapse" href="/sites/UserPanel">User Panel</a></li>
            <li><a data-toggle="collapse" data-target=".nav-collapse" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
            <li><a data-toggle="collapse" data-target=".nav-collapse" href="/user/doLogout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    <h1><?= $heading ?></h1>
