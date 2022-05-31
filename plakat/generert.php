<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A3 (BETA)</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Load Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A3 }</style>



<meta charset="UTF-8">

</head>

<?php 



# Start på en sjekk som sjekker om kunden har custom theme
# Dersom plakat feltet til theme er tomt skal vi gå til standard theme.


$favcolor = $_POST["plakat"];

switch ($favcolor) {
  case "pirate":
    require 'theme/pirate.php';
    break;
  case "space":
    require 'theme/space.php';
    break;
  case "foralle":
    require 'theme/foralle.php';
    break;
  default:
    require 'theme/standard.php';
}



# Dersom det ikke er tomt så sjekker vi om det stemmer overens med noen themes vi har.
# Dersom de ikke stemmer så går vi igjen tilbake til standard theme som en failback.

 ?>

</html>