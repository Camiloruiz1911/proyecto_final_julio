<?php 

if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error="."Invalid ID");
    exit();
}
$id = $_GET['id'];
include_once "controller/conexion.php";
$con = new Conexion();
$con = $con->conectar();


if(!$con) {
    header("Location: index.php?error="."Sin conexion");
    exit();
}

$sql = "SELECT * FROM `registropersonas` WHERE Id = :id";
$con=$con->prepare($sql);
$con->bindparam(':id', $id);
$con->execute();

if($con->RowCount() == 0){
    header("Location: index.php?error="."No existe el dato");
}

$registro = $con->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'Layout/Layout.php'; ?>
    <div class="container mt-5">
        <!-- Aquí va el contenido de tu página, por ejemplo el formulario de actualización -->
        <h2>Actualizar Registro</h2>
        <!-- Formulario centrado -->
    <form action="controller/registro.php" method="POST">
      <div class="row">
        <div class="col">
        <div class="col">
        <div>
      

      </div>
        <label fot="Nombre" class="">Nombre</label>
      <input type="text" class="form-control" id="Name" Value="<?php echo htmlspecialchars($registro['Nombre']) ?>" name="nombre">
        </div>
      </div>
     
   <div class="row">  
    <div class="col">
    <label fot="Apellido" class="Form-label">Apellido</label>
      <input type="text" class="form-control" id="Name" Value="<?php echo htmlspecialchars($registro['Apellido']) ?>" name="apellido">
    </div>

    <div class="row">  
    <div class="col">
    <label fot="Cedula" class="Form-label">Cedula</label>
      <input type="text" class="form-control" id="Name" Value="<?php echo htmlspecialchars($registro['Id']) ?>" disabled name="id">
    </div>

    <div class="col">

    <div class="row">  
   
    <label fot="Edad" class="Form-label">Edad</label>
      <input type="text" class="form-control" id="Name" Value="<?php echo htmlspecialchars($registro['Edad']) ?>" name="edad">
    </div>
   </div>
     
      <div class="row">
        <div class="col">
        <label fot="Correo" class="Form-label">correo</label>
      <input type="email" class="form-control" id="Name" Value="<?php echo htmlspecialchars($registro['Correo']) ?>" name="correo">
        </div>
    <div class="col">
    <label fot="Apellido" class="Form-label">Telefono</label>
      <input type="text" class="form-control" id="Name" Value="<?php echo htmlspecialchars($registro['Telefono']) ?>" name="telefono">
    </div>
    </div>

       <div class="row">
  <div class="col text-center">
    <button class="btn btn-info" type="submit">Enviar</button>
  </div>
</div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>