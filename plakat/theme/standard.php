<!-- Set background-->
<style>
.sheet {
    background: url(https://www.qrloype.no/wp-content/uploads/2022/01/matthew-smith-Rfflri94rs8-unsplash.jpeg) !important;
  background-repeat: no-repeat !important;;
  background-size: cover !important;;
  color: white;
}
  </style>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A3">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet">
  <div class="padding-10mm">

    <!-- Write HTML just like a web page -->
    <center>
    <br>
    
    <!-- Logo eller ikke logo -->

    <div class="logo">
      <center>
        <?php 

$favlogo = $_POST["logoswitch"];

switch ($favlogo) {
  case "ja":
    require 'assets/custom-logo.php';
    break;
  case "nei":
    require 'assets/logo.php';
    break;
  default:
    require 'assets/logo.php';
}

?>
      </center>
    </div>
    <br>
    <br>
    <br>
    <br>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=1000x1000&data=<?php echo $_POST["link"]; ?>" width="40%">
    <h1>Skann koden over</h1>
    <h4>Problemer med post? Kontakt arrangør og oppgi kode: <?php echo $_POST["id"]; ?></h4>
    <br>
    <br>
    <?php 

$favinfo = $_POST["infoswitch"];

switch ($favinfo) {
  case "ja":
    require 'assets/info.php';
    break;
  case "nei":
    echo "";
    break;
  default:
    echo "";
}

?>
    </center>

</div>

<!-- Bunn med info om LegendMotion og QR loype -->
<div class="element-to-stick-to-bottom ">
  <br>
  <img src="logo_white.png" width="20%">
  <h4>Ett produkt av</h4>
  <img src="legendmotion.png" width="5%">
  <h4>LegendMotion</h4>
  <br>
</div>

<style>
.element-to-stick-to-bottom {
  position: absolute;
  bottom: 0;
   width: 100%;
   background-color: #121212;
   color: white;
   text-align: center;
}

.info {
   width: 80%;
   background-color: #25262682;
   color: white;
   border: 1px solid #ffffff;
   border-radius: 15px;
   padding: 5px;
   margin: auto;
}

.logo {
   width: 70%;
}
</style>
</section>
  

</body>