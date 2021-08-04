<?php
    $titulo = "Lista de Usuários";
    $pagina = "LISTA DE USUÁRIOS";
    $ativo = "LIST_USER";
  
  //Chamando o Headar
  require_once 'includes/header.php';
?>
<!-- JS -->
    <script src="./assets/js/jquery-3.3.1.js"></script>
    <!-- Modificar script abaixo -->
    <script src="./assets/js/jquery.dataTables.min.js"></script>
    <script src="./assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" crossorigin="anonymous"> 

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Lista de Usuários</h5>

        <table id="example" class="table table-striped table-bordered table-sm" style="font-size:12px">
            <thead class="thead-dark">
                <tr>
                    <th style="text-align: center;font-size:12px">CT</th>
                    <th style="text-align: center;font-size:12px">RAZ. SOCIAL</th>
                    <th style="text-align: center;font-size:12px">TIPO ATP</th>
                    <th style="text-align: center;font-size:12px">STATUS</th>
                    <th style="text-align: center;font-size:12px">TIPO TRT</th>
                    <th style="text-align: center;font-size:12px">TREINAMENTO</th>
                    <th style="text-align: center;font-size:12px">STATUS TRP</th>
                    <th style="text-align: center;font-size:12px">CONCLUSAO</th>
                    <th style="text-align: center;font-size:12px">MAIS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center;font-size:10px">CT</th>
                    <th style="text-align: center;font-size:10px">RAZ. SOCIAL</th>
                    <th style="text-align: center;font-size:10px">TIPO ATP</th>
                    <th style="text-align: center;font-size:10px">STATUS</th>
                    <th style="text-align: center;font-size:10px">TIPO TRT</th>
                    <th style="text-align: center;font-size:10px">TREINAMENTO</th>
                    <th style="text-align: center;font-size:10px">STATUS TRP</th>
                    <th style="text-align: center;font-size:10px">CONCLUSAO</th>
                    <th style="text-align: center;font-size:10px">MAIS</th>
                </tr>
            </tbody>
        </table>

        <!-- 
        <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
                <tr>
                <th scope="col" style="text-align:center">Usuário</th>
                <th scope="col" style="text-align:center">Status</th>
                <th scope="col" style="text-align:center">Users</th>
                <th scope="col" style="text-align:center">Completion</th>
                <th scope="col" style="text-align:center">Configuração</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    $2,500 USD
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> pending
                    </span>
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> pending
                    </span>
                </td>
                <td>
                    <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> pending
                    </span>
                </td>
                <td class="text-right">
                    <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Perfil Completo</a>
                        <a class="dropdown-item" href="#">Editar Usuário</a>
                        <a class="dropdown-item" href="#">Excluir Usuário</a>
                    </div>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [[ 1, "asc" ]],
                
                aLengthMenu: [
                    [20, 50, 100, 200, -1],
                    [20, 50, 100, 200, "Tudo"]
                ],
                iDisplayLength: 0
            });
        } );
    </script>

    <!-- Data Table -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<?php
  require_once 'includes/footer.php';
?>