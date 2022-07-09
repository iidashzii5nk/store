<?php
include('carrito.php');
include('templates/cabecera.php');
?>

    <!--El empty indica vacio pero se niega para decir que si hay productos para que los muestre
La variable $producto que se creo en carrito donde guarda en el array los productos aca se usa
y se puede usar ya que incluimos el archivo carrito.php-->

    <div class="tittlecar">
        <h3>Lista del carrito</h3>
    </div>
    <?php if (!empty($_SESSION['CARRITO'])) { ?>
 
        <div class="table-responsive">
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Total</th>
                        <th scope="col">--</th>
                    </tr>


                    <?php $total = 0; ?>
                    <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                        <tr>


                            <td><?php echo $producto['CANTIDAD'] ?></td>
                            <td><?php echo $producto['MARCA'] ?></td>
                            <td><?php echo $producto['NOMBRE'] ?></td>
                            <td>$<?php echo $producto['PRECIO'] ?></td>

                            <td>$<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2) ?></td>

                            <td>

                                <form action="" method="post">

                                    <input type="hidden" name="id" id="id" value="<?php echo $producto['ID'] ?>">

                                    <button name="btnAccion" value="Eliminar" type="submit">

                                        Eliminar

                                    </button>

                                </form>


                            </td>


                        </tr>
                        <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']) ?>
                    <?php } ?>

                    <tr>
                        <td>
                            <h3>Total</h3>
                        </td>
                        <td>
                            <h3>$<?php echo number_format($total, 2) ?></h3>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    <?php } else {
        echo "No hay productos";
    }
    ?>
<?php
include('templates/pie.php');
?>
