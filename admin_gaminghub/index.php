<?php $ROOT_ = './'; session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Admin Login</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body class="_AD_B">
    <div class="container _AD_C login_container">
        <div class="inner_login_container">
            <div class="logo_container">
                <div class="nav_logo">
                    <object data="https://www.dev.gaminghub.com/sfx/images/logo/logo.svg" type="image/svg+xml" class="svg-object" id="LOGO_">
                        <img src="https://www.dev.gaminghub.com/sfx/images/logo/logo_fallback.png" alt="logo_fallback.png" id="LOGOFALLBACK_">
                    </object>
                </div>
                <div class="login_title">
                    <div class="line"></div>
                    <h1>Gaming Hub</h1>
                    <h2>Ingreso de Personal</h2>
                    <div class="line"></div>
                </div>
            </div>
            <div class="login_input form_container inner">
                <div class="staff_detail_min">
                    <label for="username">Usuario</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="staff_detail_min">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="staff_detail_min">
                    <button class="staff_button" id="_commit">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>