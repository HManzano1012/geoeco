<!DOCTYPE html>
<html lang="en">
  <head> 
<base href="../"/>
    <title>GeoEco</title>
    <meta charset="utf-8" />

    <link rel="icon" type="image/png" href="./assets/img/logo/reciclar-simbolo.png" style="border-radius: 50%;" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

  </head>
<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '0px', lg: '0px'}">
          <div class="app-container container-fluid d-flex align-items-stretch flex-stack mt-lg-8" id="kt_app_header_container">
            <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
              <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-1" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
              </div>
            </div>

            <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
              <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-1 me-lg-0">

                <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-275px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start"></div>

              </div>
            </div>
          </div>
        </div>

        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
          <div id="kt_app_sidebar" class="app-sidebar flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
            <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">

              <a href="../../demo55/dist/index.html">
                <img alt="Logo" src="assets/img/logo/reciclar-simbolo.png" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
                <img alt="Logo" src="assets/img/logo/reciclar-simbolo.png" class="h-25px theme-dark-show" />
              </a>


              <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                  <i class="ki-outline ki-abstract-14 fs-1"></i>
                </div>
              </div>

            </div>

            <div class="app-sidebar-menu flex-column-fluid">

              <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">

                <div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                  <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">

                    <span class="menu-link">
                      <span class="menu-icon">
                        <i class="ki-outline ki-category fs-2"></i>
                      </span>
                      <span class="menu-title">Dashboards</span>
                      <span class="menu-arrow"></span>
                    </span>


                    <div class="menu-sub menu-sub-accordion"></div>
                  </div>
                </div>

              </div>

            </div>


            <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">

              <div class="">

                <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                  <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
                    <img src="assets/media/avatars/300-1.jpg" alt="image" />
                  </div>

                  <div class="d-flex flex-column align-items-start justify-content-center ms-3">
                    <span class="text-gray-500 fs-8 fw-semibold">Hello</span>
                    <a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary">Jeroen van Basten</a>
                  </div>

                </div>


                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">

                  <div class="menu-item px-5">
                    <a href="../../demo55/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
                  </div>

                </div>

              </div>

            </div>

          </div>


          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

            <div class="d-flex flex-column flex-column-fluid">

              <div id="kt_app_toolbar" class="app-toolbar pt-2 pt-lg-10">

                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">

                  <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">

                      <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">Geo Eco</h1>


                    </div>


                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                    </div>

                  </div>

                </div>

              </div>


              <div id="kt_app_content" class="app-content flex-column-fluid">

                <div id="kt_app_content_container" class="app-container container-fluid">
<table class="table" id="places_table">
<thead>
<tr>
<th>Nombre del negocio</th>
<th>Descripción</th>
<th>Dirección</th>
<th></th>
</tr>
</thead>
<tbody>
<?php foreach($places as $place): ?>
<tr>
<td><?php echo $place->name; ?></td>
<td><?php echo $place->description; ?></td>
<td><?php echo $place->address; ?></td>

<td><button class="btn btn-sm btn-secondary details-btn"  data-bs-toggle="modal" data-bs-target="#place_details" data-id="<?php echo $place->id?>">Detalles</button>

</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
                </div>

              </div>




</div>

              </div>

            </div>


            <div id="kt_app_footer" class="app-footer">

              <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">

                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-semibold me-1">2023&copy;</span>
                  <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>


              </div>

            </div>

          </div>

        </div>

      </div>

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
<button data-id="" id="aprove" class="btn btn-secondary" data-bs-dismiss="modal" type="button">
Aprobar
                                        </button>
 <a class="btn btn-primary" href="" id="open_maps" target="_blank">Ver en Maps</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>var hostUrl = "assets/";</script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmwAo6or9sygWFNNVTZs5qOQ8hA7M9PXI"></script>
<script type="text/javascript" src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
  $('#places_table').DataTable();
} );

var data = <?php echo json_encode($places)?>;
$(".details-btn").click(function(){
  let id = $(this).data("id")
    let place = data.find(x => x.id == id)
    let lat = place.lat
    let lon = place.lon

    console.log(place)
    $("#place_name").html(place.name)
    $("#place_description").html(place.description)

    $("#place_direccion").html(place.address)
    if(place.active == 1){
      $("#aprove").hide()
    }else{
    $("#aprove").attr("data-id",place.id)
    $("#aprove").show()
}
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

$("#aprove").click(function(){
  let id = $(this).data("id")
    Swal.fire({
      title: '¿Estas seguro?',
      text: "¿Quieres aprobar este negocio?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, aprobar!',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "api/place/aprove",
          type: "POST",
          data: {id:id},
          success: function(response){
            alert("Negocio aprobado")
            location.reload()
          }
        })
      }
    })
  })
})
</script>

  </body>


</html>
