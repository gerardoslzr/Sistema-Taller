<?php
include_once("conexion.php");
check_session();
  include_once 'vistas/layouts/header.php';
?>

    <title>Taller Rodriguez | Inicio</title>

  <?php 
  include_once 'vistas/layouts/nav.php';
  ?>

      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Resumen</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Resumen</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>

<?php 
  include_once 'vistas/layouts/footer.php';
?>