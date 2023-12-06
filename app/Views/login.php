<!DOCTYPE html>
<html lang="en">
  <head>
<base href="../../../" />
    <title>eBillMate </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?php echo base_url()?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
  </head>
  <body id="kt_body" class="app-blank">
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <a href="index.html" class="d-block d-lg-none mx-auto py-20">
          <img alt="Logo" src="<?php echo base_url()?>assets/media/logos/default.svg" class="theme-light-show h-25px" />
          <img alt="Logo" src="<?php echo base_url()?>assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
        </a>
        <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
          <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
            <div class="d-flex flex-stack py-2">
              <div class="me-2"></div>
            </div>
            <div class="py-20">
              <form class="form w-100"  id="login-form" method="POST">
                <div class="card-body">
                  <div class="text-start mb-10">
                    <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">Iniciar sesión</h1>
                    <!--<div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access & earn money</div>-->
                  </div>
                  <div class="fv-row mb-8">
                    <input type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control" required/>
                  </div>
                  <div class="fv-row ">
                    <input type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control" required/>
                  <div class="d-block py-1 mt-2"  style="height:10px">
                  <div id="form-error" class="error-msg text-danger" style="display:none"></div>
                    </div>
                  </div>
                  <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                    <div></div>
                    <!--<a href="authentication/layouts/fancy/reset-password.html" class="link-primary" data-kt-translate="sign-in-forgot-password">Olvide mi contraseña</a>-->
                  </div>
                  <div class="d-flex flex-stack">
                    <button type="submit" id="submit-btn" class="btn btn-primary flex-shrink-0">Ingresar</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="m-0">
            </div>
          </div>
        </div>
        <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(<?php echo base_url()?>assets/media/auth/bg11.png)"></div>
      </div>
    </div>
      <script>var hostUrl = "<?php echo base_url()?>";</script>
    <script src="<?php echo base_url()?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/js/scripts.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom/login.js"></script>
  </body>
</html>
