<?php
// criando a conexão entre o PHP e o MySQL
$conn = new PDO("mysql:host=localhost;dbname=fiap", "root", "");

$stmt = $conn->prepare("select title, local_event, start_at, end_at, site from events");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<?php require("inc/header.php"); ?>

<div class="wrapper">
  <?php
  require_once("inc/navbar.php");
  require_once("inc/sidebar.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require_once("inc/page-header.php"); ?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Eventos Cadastrados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Local</th>
                        <th>Início</th>
                        <th>Término</th>
                        <th>Site</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if (!$results) {
                ?>
                  <tr>
                      <td colspan="5">Nenhum registro encontrado</td>
                  </tr>
                <?php 
                exit();
              }
              foreach ($results as $row) {
                echo "<tr>";          
                foreach ($row as $key => $value) {
                  if($key !="id"){
                    echo "<td>$value</td>";
                  }
                }
                echo "</tr>";
              }   
              ?>
                </tbody>
              </table>             
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once("inc/footer.php") ?>