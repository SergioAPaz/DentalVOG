<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
  <link rel="stylesheet" href="styles/css/index.css">


</head>

<body>

  <?php
  include('snipps/navbar.html');

  ?>



    <div class="container" style="background-color:transparent;text-align: center;margin-top: 50px">
      <br>
      <div class="float-left col-sm-6">
        <img src="styles\images\logo.png" class="img-fluid" style="max-height: 190px">
      </div>
      <div class="float-right col-sm-6 mq6" style="text-align: right;background-color: #F5EFF6;border-radius: 6px;">
        <h3 class="mq3" style="color:#803578">Agenda tu cita</h2>
          <h5 class="mq4" style="color:#803578">Tel. 421-45-14 y 614-2-499723</h5>
          <h5 class="mq5" style="color:#803578">C.Zaragoza 409-A Col. Las granjas </h5>
      </div>

      <div class="col-sm-12" style=" border: 2px solid #F5EFF6;border-radius: 4px;text-align: center;clear:both;
      display: inline-table;margin-top: 15px;padding-top: 10px">
        <div>
          <h3 class="mq7" style="color: #873375;">¡Descubre todo lo que Dental VOG puede hacer por tu sonrisa y la de tu familia!</h3>

          <div class="row" style="padding-top: 20px">
            <div class="col-6 col-sm-6 col-md-3">
              <img src="styles\images\muela2.jpg" style="max-width: 65px">
              <h3 style="color:#873375">Implantes dentales</h3>
              <p>Vuelva a sonreír, sustituyendo las piezas naturales perdidas por piezas de la máxima calidad.</p>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <img src="styles\images\muela3.jpg" style="max-width: 75px;margin-top: 4px">
              <h3 style="color:#873375">Limpieza dental</h3>
              <p>Para mantener el estado de salud general de tus dientes y encías.</p>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <img src="styles\images\muela4.jpg" style="max-width: 75px;margin-top: 4px">
              <h3 style="color:#873375">Ortodoncia</h3>
              <p>Corrección de malposición dental o apiñamiento que impida la correcta función al masticar.</p>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <img src="styles\images\muela6.jpg" style="max-width: 75px;margin-top: -14px">
              <h3 style="color:#873375">Endodoncia</h3>
              <p>Contamos con especialistas con años de experiencia que te brindarán el tratamiento adecuado.</p>
            </div>

          </div>
          <h3 class="mq7" style="color: #873375;margin-top: 10px;font-size: 19px">Y muchos mas, acércate con nosotros tenemos el tratamiento adecuado para ti.</h3>
        </div>
      </div>


      <div class="row mq13" style="background-color: #F5EFF6;margin-top: 25px;min-height: 150px;">
        <div class=" mq12 col-6 col-sm-6 col-md-4">

          <h4 style="color:#873375">Somos expertos en Implantología y Estética Dental</h4>

        </div>
        <div class="mq11 col-6 col-sm-6 col-md-4">

          <h4 style="color:#873375">Todos los tratamientos en el mismo lugar</h4>
        </div>
        <div class="mq10 col-md-4 ">

          <h4 style="color:#873375">Contamos con tecnologia de vanguardia para todo tratamiento</h4>
        </div>
      </div>
      <br>
      <br>
      <div class="row mq16" style="text-align: center;padding: 15px;border-radius: 4px;overflow: hidden;">
        <h3 style="color:#873375">Nuestra ubicación</h3>
        <div class="row" style="background-color: #F5EFF6;width: 100%;margin-left: 0;border-radius: 4px">
          <div class="col-lg-9" style="padding-left: 0;padding-right: 0">
            <div id="map" style="width:100%;height:400px;background:gray;border-radius: 4px 0px 0px 4px;"></div>
          </div>
          <div class="col-md-12 col-lg-3 mq14" style="color: #873375;">
            <h4>Telefonos</h4>
            <p>6144214514 y 6142499723</p>
            <h4>Domicilio</h4>
            <p>C.Zaragoza 409-A Col. Las granjas</p>
          </div>

        </div>

      </div>


      <br>
      <br>
      <br>
      
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>

    <footer>
        <div class="container-fluid margintop">
            <div class="row" style="background-color: #F5EFF6;height: 110px">

            </div>
        </div>
    </footer>






    <script>
      function myMap() {
        var mapOptions = {
          center: new google.maps.LatLng(28.745362, -106.133085),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIk0yuKx5kscUd-K1M7-5nUZ_P_bTA85k&callback=myMap"></script>

</body>

</html>