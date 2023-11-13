<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../css/web.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="./app.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    
    <div class="w-75" >
    <div id="mensajeError" class="alert alert-danger" style="display: none;"></div>
    <h2 class="mb-4">Password</h2>
    <input type="hidden" name="r" value="adduser">

 <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label"  >Contrasenya</label>
    <div class="col-sm-10">
        <input name="password" type="password" class="form-control" id="password"  required>
    </div>

    

    <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
    <a class="btn btn-success" onclick="inscripcio()">Acceder</a>
        <a href="index.php?r=" class="btn btn-danger">Salir</a>
    </div>
</div>  

</div>

</div>
</div>