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
                    <a class="nav-link" href="#info">Informacion </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#contact">Solicitud de sucursal</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="w-100">
<img src="https://www.digitaltrends.com/wp-content/uploads/2020/02/gettyimages-494832555-scaled.jpg?fit=2560%2C1706&p=1" style="height:100vh;width:100%!important;object-fit:cover"/>

</div>

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h4 class=" text-center text-uppercase text-secondary mb-0">Sucursales aptas para manejar los desechos electronicos</h4>
        <div class="row justify-content-center">


<table id='places_table'>
<thead><tr><th>Nombre</th><th>Direccion</th><th>Municipio</th><th></th></tr></thead>
<tbody>
<?php foreach ($places as $place) :?>

<tr>
<td><?php echo $place->name?></td>
<td><?php echo $place->address?></td>
<td><?php echo $place->municipio?></td>
<td><button class="btn btn-sm btn-secondary details-btn"  data-bs-toggle="modal" data-bs-target="#place_details" data-id="<?php echo $place->id?>">Detalles</button>
 <a class="btn btn-sm btn-primary" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $place->lat?>,<?php echo $place->lon?>" target="_blank">Ver en Maps</a></td>
</tr>

<?php endforeach; ?>

</table>
        </div>
    </div>
</section>

<section class="page-section" id="info">
    <div class="container">
        <h4 class="text-center text-uppercase text-secondary mb-2">Informacion sobre los desechos electronicos</h4>
        <div class="row justify-content-center my-2">
            <div class="col-lg-8 col-xl-7 my-5">
                <p class="lead mb-0">
                    Los desechos electrónicos son aquellos que se generan por el desuso de aparatos electrónicos y eléctricos, como computadoras, celulares, televisores, electrodomésticos, entre otros. Estos desechos contienen sustancias tóxicas que pueden contaminar el suelo, el agua y el aire, afectando la salud de las personas y el medio ambiente.
                </p>
            </div>
            <div class="col-lg-8 col-xl-7 my-5">
                <p class="lead mb-0">
                    En El Salvador, la Ley de Gestión Integral de Residuos Sólidos (LGIRS) establece que los desechos electrónicos deben ser tratados de manera especial, ya que contienen sustancias tóxicas que pueden contaminar el suelo, el agua y el aire, afectando la salud de las personas y el medio ambiente.
                </p>
            </div>
        </div>
        <div class="row justify-content-center my-2">
            <div class="col-lg-8 col-xl-7 my-5">
                <p class="lead mb-0">

                Antes de desechar un dispositivo electrónico, considera si puede ser reacondicionado o reutilizado, algunas organizaciones aceptan donaciones de equipos electrónicos para repararlos y redistribuirlos a personas que los necesiten.
                </p>
            </div>
        </div>
        <h4 class="text-center text-uppercase text-secondary mb-2">Centros especializados</h4>
        <div class="row justify-content-center my-2">
            <div class="col-lg-8 col-xl-7 my-5">
                <p class="lead mb-0">

                 Busca centros de reciclaje especializados en electrónicos, estos lugares están equipados para manejar adecuadamente la destrucción de datos y la separación de componentes para su reciclaje. Programas de devolución del fabricante: Algunas compañías tienen programas de devolución de productos electrónicos antiguos, puedes devolver tus dispositivos obsoletos a los fabricantes para que los reciclen de manera adecuada.


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
                <h4 class="text-uppercase mb-4"></h4>
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
 <div class="portfolio-modal modal fade" id="place_details" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="row">
                                  <div class="col-md-6 col-lg-6 col-sm-12 m-0 d-inline-block">
                                    <div id="map_details" class="mb-3 " style="height:500px"> </div>
                                 </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 m-0 d-inline-block">
                                        <h1 id="place_name"></h1>
<strong class="text-bold">Descripcion</strong>
                                        <p class="mb-4" id="place_description"></p>
<strong class="text-bold">Direccion</strong>
                                        <p class="mb-4" id="place_direccion"></p>
 <a class="btn btn-primary" href="" id="open_maps" target="_blank">Ver en Maps</a></td>
                                    </div>
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
  var data = <?php echo json_encode($places)?>;

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

  $(".details-btn").click(function(){
        let id = $(this).data("id")
        let place = data.find(x => x.id == id)
        let lat = place.lat
        let lon = place.lon
        
console.log(place)
        $("#place_name").html(place.name)
        $("#place_description").html(place.description)
$("#place_direccion").html(place.address)
$("#open_maps").attr("href","https://www.google.com/maps/dir/?api=1&destination="+place.lat+","+place.lon)

        
        
        

      var locationpicker_details = $("#map_details").locationpicker({
      location: {
      latitude: lat, 
          longitude: lon
    },   
    radius: 0,
    zoom: 18,
    enableAutocomplete: true,
    enableAutocompleteBlur: true,
  });

  })

})

</script>
</body>
</html>
