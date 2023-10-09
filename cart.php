<?php $ROOT_ = './';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Carrito</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body>
<header>
        <nav class="nav_bar order_nav">
            <div class="nav_list_collection">
                <div class="info_content">
                    <h2>Gaming Hub</h2>
                    <div class="social_media">
                        <ul class="social_links">
                            <li>
                                <a href="./">
                                    <i class="fa-brands fa-square-instagram icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="./">
                                    <i class="fa-brands fa-facebook icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="./">
                                    <i class="fa-brands fa-tiktok icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="./">
                                    <i class="fa-brands fa-discord icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar_title">
                        <h3>Dirección</h3>
                        <div class="line"></div>
                    </div>
                    <p>Reparto San Juan. Centro de Salud Edgard Munguía, 1 C. al este, 1&#xbd; C. al norte.</p>
                    <div class="navbar_title">
                        <h3>Horarios</h3>
                        <div class="line"></div>
                    </div>
                    <div class="nav_bar_schedule">
                        <div class="columns">
                        <div class="schedule_column days">
                            <h3>Miércoles - Viernes</h3>
                            <h3>Sábado - Domingo</h3>
                            <h3>Lunes - Martes</h3>
                        </div>
                        <div class="schedule_column hours">
                            <h3>2:00 PM - 10:00 PM</h3>
                            <h3>11:00 AM - 11:00 PM</h3>
                            <h3>Cerrado</h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="parent_link">
                <div class="nav_logo">
                    <object data="<?php echo $ROOT_;?>sfx/images/logo/logo.svg" type="image/svg+xml" class="svg-object" id="LOGO_">
                        <img src="<?php echo $ROOT_;?>sfx/images/logo/logo_fallback.png" alt="logo_fallback.png" id="LOGOFALLBACK_">
                    </object>
                </div>
            </a>
            <div class="burger">
                <div class="on"><i class="fa-solid fa-bars icon"></i></div>
                <div class="turn_off off"><i class="fa-solid fa-xmark icon"></i></div>
            </div>
        </nav>
    </header>
    <div class="container in_order">
        <div class="welcome_container">
            <div class="img_container">
                <img src="<?php echo $ROOT_;?>sfx/images/stock/title_background.png" alt="title_background" loading="lazy" />  
            </div>
            <div class="text_container">
                <h2>Total DMG</h2>
                <div class="line"></div>
                <h1 class="total_order">C$ <span>0</span></h1>
                <div class="line"></div>
                <h2 table-data="GH-NS-P1" class="table_code">GH-NS-P1</h2>
            </div>
        </div>
    </div>
    <div class="container order">
        <div class="container_title">
            <div class="line"></div>
            <h2>Tu orden</h2>
            <div class="line"></div>    
        </div>
        <div class="menu_container">
            
        </div>
    </div>
    <div class="continue_to_order">
        <button class="make_order return">
            <i class="fa-solid fa-chevron-left icon"></i>
        </button>
        <button class="make_order commit">
            Realizar Pedido
        </button>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>