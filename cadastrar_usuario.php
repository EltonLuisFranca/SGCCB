<?php
  $titulo = "Cadastro de Usuário";
  $pagina = "CADASTRO DE USUÁRIO";
  $ativo = "CAD_USER";
  //Chamando o Headar
  require_once 'includes/header.php';
?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Cadastrar Usuário</h5>

    <form action="cadastrar_usuario.php" method="POST">
    <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome Completo">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Data de Nascimento">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <div class="input-group mb-4">
          <input class="form-control" placeholder="Birthday" type="text">
          <div class="input-group-append">
            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group has-success">
        <input type="text" placeholder="Success" class="form-control is-valid" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group has-danger">
        <input type="email" placeholder="Error Input" class="form-control is-invalid" />
      </div>
    </div>
  </div>
    </form>

  </div>
</div>


  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
<?php
  require_once 'includes/footer.php';
?>