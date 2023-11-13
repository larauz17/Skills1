<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Apartamentos</title>
    <link rel="stylesheet" type="text/css" href="../css/web.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="./app.js"></script>
</head>


 <body class="bg-body-secondary">

 <nav class="navbar navbar-dark bg-dark  mb-5 ">
         <div class="container">
            <div class="col-8">
                <a href="index.php"><h2>Skills1</h2></a>
            </div>
            <div class="col-4">
                <div class="float-end">
                <a class="dropdown-item" href="index.php?r=accessinscripcio"><h2>Consulta Inscripcions</h2></a>
                </div>
            </div>
             
        </div>    
</nav>
<?php if($identified){
?>
<div class="container mt-5">
    <table id="usuariosTable" class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Cognom</th>
            <th>Data Naixament</th>
            <th>Adreça</th>

        </tr>
    </thead>
    <tbody>
        <?php
        // Itera sobre los datos y muestra cada fila en la tabla
        foreach ($usuaris as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Nom'] . "</td>";
            echo "<td>" . $row['Cognoms'] . "</td>";
            echo "<td>" . $row['DataNaixement'] . "</td>";
            echo "<td>" . $row['Adreca'] . "</td>";
            echo "</td>"; // Formulario de selección y botón de enviar
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<?php }
?>
    </div>
    </body>