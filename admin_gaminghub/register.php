<?php $ROOT_ = './'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Registro Trabajador</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body class="_AD_B">
    <?php include($ROOT_.'includes/header.inc.php');?>
    <div class="container _AD_C register">
        <div class="form_container">
            <div class="container_title">
                <h2 class="form_title">Registro</h2>
                <h3>Colaborador Gaming Hub</h3>
                <p class="disclaimer">Verifica que todos los datos están correctos.</p>
                <div class="line"></div>
            </div>
            <div class="form_container inner">
                <div class="staff_detail_min">
                    <label for="staff_name">Nombres</label>
                    <input type="text" name="staff_name" id="staff_name">
                </div>
                <div class="staff_detail_min">
                    <label for="staff_lastname">Apellidos</label>
                    <input type="text" name="staff_lastname" id="staff_lastname">
                </div>
                <div class="staff_detail_min">
                    <label for="staff_role" class="staff_role">Puesto</label>
                    <select name="staff_role" id="staff_role" class="custom-select sources" placeholder="Seleccione">
                        <option value="_WTR">Mesero</option>
                        <option value="_KTC">Cocinero</option>
                        <option value="_MGR">Gerente</option>
                    </select>
                </div>
                <div class="staff_detail_min staff_role_table_section">
                    <label for="staff_role_table" class="staff_role_table">Sección de Atención</label>
                    <select name="staff_role_table" id="staff_role_table" class="custom-select sources" placeholder="Seleccione">
                        <option value="_NS">Sección Switch</option>
                        <option value="_PS">Sección PlayStation</option>
                        <option value="_XB">Sección XBox</option>
                    </select>
                </div>
                <div class="staff_detail_min">
                    <label for="staff_username">Usuario</label>
                    <div class="notifier">
                        <p>
                            Sufijo de identificación según el alcance
                            de puesto. <span>Agregar solamente el identificador. Debe estar en mayúsculas</span>
                            E.g. <span>JLUIS_LOPEZ</span>
                        </p>
                    </div>
                    <div class="default_username">
                        <input type="text" name="staff_username" id="staff_username" class="staff_username" disabled>
                        <p id="user_identifier">_GH</p>
                    </div>
                </div>
                <div class="staff_detail_min">
                    <label for="staff_password">Contraseña</label>
                    <div class="notifier">
                        <p>
                            Mantener similitud al usuario.
                        </p>
                    </div>
                    <input type="password" name="staff_password" id="staff_password">
                </div>
                <div class="staff_detail_max">
                    <label for="staff_description">Descripción</label>
                    <div class="notifier">
                        <p>
                            Descripción breve de las actividades por realizar por el colaborador.
                        </p>
                    </div>
                    <textarea name="staff_description" id="staff_description" class="staff_description"></textarea>
                </div>
                <div class="staff_detail_min">
                    <button class="staff_button" id="_commit">Realizar Registro</button>
                </div>
            </div>
        </div>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>