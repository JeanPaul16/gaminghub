<?php $ROOT_ = './'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Terminal de Cocina</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body class="_AD_B">
    <?php include($ROOT_.'includes/header.inc.php');?>
    <div class="container _AD_C">
        <div class="loader">
            <div class="loader_body">
                <h2>Gaming Hub</h2>
                <h3></h3>
                <h4>Cargando</h4>
            </div>
        </div>
        <table class="table_init" data-show-toggle="false">
            <thead>
                <tr>
                    <th>ID</th>
                    <th data-breakpoints="xs">Descripción</th>
                    <th>Mesa</th>
                    <th>Status</th>
                    <th data-breakpoints="xs">Hora</th>
                    <th data-breakpoints="xs">Comentarios</th>
                </tr>
            </thead>
            <tbody class="table_body">
            </tbody>
        </table>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>