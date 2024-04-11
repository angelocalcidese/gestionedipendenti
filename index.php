<!doctype html>
<html lang="it" data-bs-theme="auto">
<?php include("../portale/head.php"); ?>

<body>
  <?php include("../portale/header.php"); ?>

  <div class="container-fluid">
    <div class="row">
      <?php include("../portale/menu.php"); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Gestione</h1>
          
        </div>
        <div class="row">
          <div class="col">
            <div class="text-end">
              <button type="button" class="btn btn-sm btn-outline-secondary" onclick="openNewRow()">Nuovo Dipendente</button>
            </div>
          </div>
        </div>
        <?php include("modals.php"); ?>
        <h2>Dipendenti</h2>
        <div class="table-responsive small">
          <table class="table table-striped display" id="tabella" style="width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">CF</th>
                <th scope="col">Anno di nascita</th>
                <th scope="col">Ruolo</th>
                <th scope="col">Dett.</th>
                <th scope="col">Mod.</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <?php include("../portale/javascript.php"); ?>
</body>

</html>