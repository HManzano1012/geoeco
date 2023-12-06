<!DOCTYPE html>
<html lang="en" id="background">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RECICLAJE EN EL SALVADOR</title>
    <link rel="icon" type="image/png" href="./assets/img/logo/reciclar-simbolo.png" style="border-radius: 50%;" />
    <img alt="Logo de Reciclaje en El Salvador" style="max-width: 100px; width: 100px; z-index: 1000;" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    #map {
      width: 100%;
      height: 400px;
    }
</style></head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">
            <img src="assets/img/logo/reciclar-simbolo.png" alt="Logo de Reciclaje en El Salvador" class="navbar-logo" /> Geo Eco
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#portfolio">Sucursales</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#about">Sobre nuestro proyecto</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#contact">Solicitud de sucursal</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <header class="masthead bg-primary text-white text-center">
            <video autoplay loop muted playsinline poster="assets/videos/fondo.mp4" style="height: 540px; width: 100vw; object-fit: cover; position: relative; top: -366px;">
                <source src="assets/videos/fondo.mp4" type="video/mp4">
            </video>
            <div class="container d-flex align-items-center flex-column">

            </div>
        </header>
</header>

<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <h4 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sucursales</h4>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
<div class="col-md-12 m-5">
  <div class="row">
    <!--Filtros <select id="zone_filter" class="form-control col-3">
<option value="">Selecciona una zona</option>
<?php foreach ($zones as $zone) :?>
<option value="<?php echo $zone->ID?>"><?php echo $zone->ZoneName?></option>
<?php endforeach; ?>
</select>
     <select id="department_filter" class="form-control col-3">
<option value="">Selecciona un departmento</option>
</select>
     <select id="municipio_filter" class="form-control col-3">
<option value="">Selecciona un municipio</option>
</select>-->
  </div>
</div>
  

<table id='places_table'>
<thead><tr><th>Nombre</th><th>Direccion</th><th>Municipio</th><th>Descripcion</th><th></th></tr></thead>
<tbody>
<?php foreach ($places as $place) :?>

<tr>
<td><?php echo $place->name?></td>
<td><?php echo $place->address?></td>
<td><?php echo $place->municipio?></td>
<td><?php echo $place->description?></td>
<td><button class="btn btn-sm btn-secondary">Detalles</button> <a class="btn btn-sm btn-primary" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $place->lat?>,<?php echo $place->lon?>" target="_blank">Ver en Google Maps</a></td>
</tr>

<?php endforeach; ?>

</table>
        </div>
    </div>
</section>
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white">QUE PROPONE NUESTRO PROYECTO</h2>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="">
            <div class="lead">
                <p class="">El proyecto propone un sistema de programación para la gestión eficiente de residuos electrónicos, abordando desde la recopilación hasta la clasificación y reutilización. Se destaca la importancia de la concientización y se plantea la
                    implementación de un software que facilite la localización de puntos de reciclaje y promueva la educación sobre prácticas adecuadas de disposición electrónica.</p>
                <p class="">
                    Se identifican ventajas significativas como la mayor eficiencia en la recolección y clasificación, la reducción de costos operativos y el impacto ambiental minimizado. Sin embargo, se reconocen desafíos como la integración con sistemas existentes, la
                    seguridad de datos y la capacitación del personal.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
<h2 class="page-section-heading text-center text-uppercase text-white">QUE PROPONE NUESTRO PROYECTO</h2>
<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
</div>
        <div class="">
            <div class="lead">
                <p class="">El proyecto propone un sistema de programación para la gestión eficiente de residuos electrónicos, abordando desde la recopilación hasta la clasificación y reutilización. Se destaca la importancia de la concientización y se plantea la
                    implementación de un software que facilite la localización de puntos de reciclaje y promueva la educación sobre prácticas adecuadas de disposición electrónica.</p>
                <p class="">
                    Se identifican ventajas significativas como la mayor eficiencia en la recolección y clasificación, la reducción de costos operativos y el impacto ambiental minimizado. Sin embargo, se reconocen desafíos como la integración con sistemas existentes, la
                    seguridad de datos y la capacitación del personal.
                </p>
            </div>
        </div>

</div>
</section>
<section class="page-section" id="contact">
    <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-2">Eres una sucursal apta para el manejo de desechos eletronicos?</h4>
<h5 class="text-center">Si es asi, dejanos agregar tu sucursal a nuestra pagina</h5>
        <div class="row justify-content-center my-2">
            <div class="col-lg-8 col-xl-7 my-5">
                <form id="add_suc" action="" method="POST">
                    <div class="mb-3">
                        <label for="name">Ingresa el nombre de tu negocio</label>
                        <input class="form-control" id="name" type="text" placeholder="Nombre" name="name" required />
                    </div>
                    <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="name">Descripcion</label>
                        <textarea class="form-control" id="description" type="text" placeholder="Descripcion" name="description" required></textarea>
                    </div>
                  <div class="col-md-6">
                        <label for="name">Direccion</label>
                        <textarea class="form-control" id="address" type="text" placeholder="Direccion" name="address" required></textarea>
                    </div>
                    <div class="mb-3 ">
                        <label for="name">Municipio</label>
<select class="form-control" id="municipio" name="municipio" required>
<option value="">Selecciona un municipio</option>
<?php foreach ($municipios as $mun) {?>
<option value="<?php echo $mun->ID?>"><?php echo $mun->MunName?></option>

<?php } ?>
</select>
                    </div>

<input type="hidden" name="longitude" id="longitude"/>
<input type="hidden" name="latitude" id="latitude"/>

                    <div id="map" class="mb-3">
                    </div>
                <strong>Toma el marcador y colocalo en la ubicacion de tu sucursal</strong>
<button class="btn btn-primary btn-xl" type="submit">Guardar Solicitud</button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Visita nuestra cede</h4>
                <p class="lead mb-0">
                    Alameda Franklin Delano Roosevelt
                    <br />San Salvador
                </p>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">CONOCE NUESTRAS PAGINAS WEB Y FOROS </h4>
                <a href="https://www.facebook.com/" target="_blank" class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Programación IV</h4>
                <p class="lead mb-0">
                    Creada con la intención de informar a la población
                </p>
            </div>
        </div>
    </div>
</footer>
<input type="hidden" value="<?php echo base_url()?>" id="base_url"/>
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; UNAB 2023</small></div>
</div>
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
          <div class="modal-dialog modal-xl">index.php
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmwAo6or9sygWFNNVTZs5qOQ8hA7M9PXI"></script>
<script type="text/javascript" src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready(function(){

  let lat = 13.6956365
  let lon = -88.9483076
  $("#latitude").val(lat)
  $("#longitude").val(lon)
  var locationpicker = $('#map').locationpicker({
    location: {
      latitude: lat, 
      longitude: lon
    },   
    radius: 0,
    zoom: 9,
    onchanged: function(currentLocation, radius, isMarkerDropped) {
      $("#latitude").val(currentLocation.latitude)
      $("#longitude").val(currentLocation.longitude)
    },
    onclicked: function(currentLocation, radius, isMarkerDropped) {
      alert("test")
      $("#latitude").val(currentLocation.latitude)
      $("#longitude").val(currentLocation.longitude)
    },
    enableAutocomplete: true,
    enableAutocompleteBlur: true,
    autocompleteOptions: {
      types: ['(cities)'],
      componentRestrictions: {country: 'sv'}
    },
  });

  let tables_datatable =  $("#places_table").DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
    },
    searching: false,
    paging: true,
    info: false,
    lengthChange: false,
  })



  $("#municipio").select2()
  $("#zone_filter").select2()
  $("#department_filter").select2()
  $("#municipio_filter").select2()

  $('#add_suc').submit(function(e){
    e.preventDefault()
    let data = $(this).serialize()
    let hostURL = $("#base_url").val()
    $.ajax({
      method:"POST",
      url:hostURL + "api/savesuc",
      data: data,
      dataType:"json",
      success: function(response){
        $('#add_suc').trigger("reset")
        $('#municipio').trigger("change")

        Swal.fire({
          text: "Hemos recibido tu solicitud, te notificaremos cuando se haya revisado",
          icon: "success"
        });
      }
    })
  })

})

</script>


</body>
</html>
