<?php
include 'conexao.php';

    $sql = "select * from departamento;";
    $con = Conexao::conectar();
    $lstDpto = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Despartamentos</title>
</head>
<body>
    <h1>Listar Despartamentos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>DESCRICAO</th>
        </tr>

        <?php foreach($lstDpto as $dpto){?>
            <tr>
                <th><?php echo $dpto['id']; ?></th>
                <th><?php echo $dpto['descricao'];?></th>
            </tr>
        <?php }?>
    </table>
</body>
</html>
