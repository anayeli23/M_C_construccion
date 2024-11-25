<?php
function mostrarusuarios($usuarios)
{

?>

    <h2>LISTA DE USUARIOS DEL SISTEMA</h2>
    <br>
    <table border="1">
        <tr>
            <th> id </th>
            <th> username </th>
            <th> password </th>
            <th> perfil </th>
        </tr>
        <?php
        foreach ($usuarios as $usuarios) {
        }
        ?>
        <tr>
            <td> <?php echo $usuarios['id'] ?> </td>
            <td> <?php echo $usuarios['username'] ?> </td>
            <td> <?php echo $usuarios['password'] ?> </td>
            <td> <?php echo $usuarios['perfil'] ?> </td>
        </tr>

    </table>
<?php
}

?>