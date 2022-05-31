<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A3 (BETA)</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A3 }</style>


  <style>
#background123 {
  
}
.sheet {
    background: url(https://www.qrloype.no/wp-content/uploads/2022/01/matthew-smith-Rfflri94rs8-unsplash.jpeg) !important;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}
  </style>


</head>




<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A3 background123">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
    <center>
    <br>
    <h1>Velkommen til QR Loype</h1>
    <h2>Dette er en test plakat som blir generert som A3</h2>
    <br>
    <br>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=512x512&data=https://forms.gle/AMx4YjRRqDe8pZJE7" width="40%">
    </center>
  </section>

</body>

</html>