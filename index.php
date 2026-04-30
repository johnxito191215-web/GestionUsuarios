<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Lista de Usuarios</h2>

<a href="crear.php">➕ Crear Usuario</a>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

<?php
$sql = "SELECT * FROM usuarios";
$resultado = $conn->query($sql);

while($fila = $resultado->fetch_assoc()){
?>
<tr>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['cedula']; ?></td>
    <td><?php echo $fila['telefono']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>">✏️ Editar</a>
        <a href="eliminar.php?id=<?php echo $fila['id']; ?>">🗑️ Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>