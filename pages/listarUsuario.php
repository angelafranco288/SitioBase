<?php
include_once ('../dataacces/listarUsuarios1.php');
$objListar = new clsUsuario();
$nuevo = $objListar->mostrarUsuario();
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Nombre Usuario</th>
            <th>Identificación</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Dirección</th>
            <th>Perfil Usuario</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($fila = mysqli_fetch_row($nuevo)){
        ?>
            <tr>
                <td> <?php echo"".$fila[0]; ?> </td>
                <td> <?php echo"".$fila[1]; ?> </td>
                <td> <?php echo"".$fila[2]; ?> </td>
                <td> <?php echo"".$fila[3]; ?> </td>
                <td> <?php echo"".$fila[4]; ?> </td>
                <td> <?php echo"".$fila[5]; ?> </td>
                <td> <?php echo"".$fila[6]; ?> </td>
                <td> <?php echo"".$fila[7]; ?> </td>
                <td> <?php echo"".$fila[8]; ?> </td>
                <td> <?php echo"".$fila[9]; ?> </td>
            </tr>


        <?php } 
        ?>
    </tbody>
</table>
