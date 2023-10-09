<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://www.dev.gaminghub.com/css/styles.css">
    <link rel="stylesheet" href="https://www.dev.gaminghub.com/css/normalize.css">
</head>
<body>
<?php
http_response_code(401);
echo "
<div class=\"access_error\">
    <h1>Error</h1>
    <h2>401 Unauthorized Access</h2>
</div>

<p class=\"access_error_desc\">
Acceso no autorizado. No tienes el permiso para acceder a este directorio utilizando las credenciales actuales.
Si crees que esto es un error, comúnicate con la dirección de https://www.gaminghub.com .
</p>
";
exit;
?>
</body>
</html>