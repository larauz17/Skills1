<!doctype html>
<html lang="en">

<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    
    <h2 class="mb-4">Confirmacio</h2>
    <div class="container" class="w-75">
    <div class="form-group row">
    <label for="newname1" class="col-sm-2 col-form-label">ID-Resguard</label>
    <div class="col-sm-10">
    <p><?=$id;?></p>
    </div>
</div>       
 <div class="form-group row">
    <label for="newname1" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
    <p><?=$nom;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="newlastname" class="col-sm-2 col-form-label">Cognom</label>
    <div class="col-sm-10">
    <p><?=$cognom;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="borndate" class="col-sm-2 col-form-label">Data Naixament</label>
    <div class="col-sm-10">
    <p><?=$datanaix;?></p>
    </div>
</div>
<div class="form-group row">
    <label for="adress" class="col-sm-2 col-form-label">Adreça</label>
    <div class="col-sm-10">
        <p><?=$adreca;?></p>
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        <a href="index.php?r=" class="btn btn-danger">Salir</a>
    </div>
</div>        

</div>
</div>