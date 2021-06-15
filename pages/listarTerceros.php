<?php
include_once ('../dataacces/listarTerceros1.php');
$objListar = new clsTercero();
$nuevo = $objListar->mostrarTercero();
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Dirección</th>
            <th>Descripción</th>
            <th>Estado Tercero</th>
            <th>Estado Cliente</th>
            <th>Estado Proveedor</th>
            <th>Contacto</th>
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
