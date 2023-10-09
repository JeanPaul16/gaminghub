<?php 

function connectionDie () {
    http_response_code(401);
    echo "
    <div class=\"access_error\">
        <h1>Error</h1>
        <h2>401 Unauthorized Access</h2>
    </div>
    
    <p class=\"access_error_desc\">
    Acceso no autorizado. Si eres personal, dirígite al portal de incio de sesión.
    Si crees que esto es un error, comúnicate con la dirección.
    </p>
    ";
    exit;
}

if (!isset($_SESSION['staffInformation'])) {
    connectionDie();
}

$_USER = $_SESSION['staffInformation'];

if ($_USER['accessLevel']['level'] < 1 && basename($_SERVER['SCRIPT_FILENAME']) == 'register.php') {
    connectionDie();
}

if ($_USER['accessLevel']['level'] == 0 && basename($_SERVER['SCRIPT_FILENAME']) == 'management.php') {
    connectionDie();
}
?>
<header>
    <nav class="nav_bar _AD">
        <div class="nav_list_collection"></div>
        <ul class="nav_list">
            <div class="nav_logo">
                Gaming Hub
            </div>
            <li class="cursor_hover"  id="_service">
                <a href="<?php echo $ROOT_;?>service.php">Atención</a>
            </li>
            <li class="cursor_hover"  id="_kitchen">
                <a href="<?php echo $ROOT_;?>kitchen.php">Cocina</a>
            </li>
            <?php if ($_USER['accessLevel']['level'] > 0):?>
                <li class="cursor_hover"  id="_management">
                    <a href="<?php echo $ROOT_;?>management.php">Control</a>
                </li>
            <?php endif;?>
            <?php if ($_USER['accessLevel']['level'] > 1):?>
            <li class="cursor_hover"  id="_register">
                <a href="<?php echo $ROOT_;?>register.php">Registro</a>
            </li>
            <?php endif;?>
        </ul>
        <ul class="nav_list exit_section">
            <li class="time_handler">
                Martes 13, 2023. 01:45 AM
            </li>
            <li>
                <button class="exit_button">
                    <i class="fa-solid fa-right-from-bracket fa-flip-horizontal icon"></i>
                </button>
            </li>
        </ul>
        <div class="burger">
            <div class="on"><i class="fa-solid fa-bars icon"></i></div>
            <div class="turn_off off"><i class="fa-solid fa-xmark icon"></i></div>
		</div>
    </nav>
</header>