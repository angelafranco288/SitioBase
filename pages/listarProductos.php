<?php
include_once ('../dataacces/listarProductos1.php');
$objListar = new clsProducto();
$nuevo = $objListar->mostrarProducto();
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Código Producto</th>
            <th>Nombre Producto</th>
            <th>Descripción Producto</th>
            <th>Unidad de Medida</th>
            <th>Marca Producto</th>
            <th>Precio Actual</th>
            <th>Cantidad Actual</th>
            <th>Estado Producto</th>
            <th>Usuario Creación</th>
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
            </tr>


        <?php } 
        ?>
    </tbody>
</table>
