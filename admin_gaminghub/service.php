<?php $ROOT_ = './'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Gaming Hub - Terminal de Servicio</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body style="overflow:hidden;"  class="_AD_B">
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
                <!-- <tr order-id="1">
                    <td>01</td>
                    <td class="items">
                        <ul class="item_descriptions">
                            <li item-code="SDS_01_02">Porky2 <span>1</span></li>
                            <li item-code="DLC_01_01">Papas <span>2</span></li>
                            <li item-code="STU_01_01">Gaseosa <span>1</span></li>
                        </ul>
                    </td>
                    <td table-code="GH-NS-P1">GH-NS-P1</td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label to_confirm">Por Confirmar</div>
                            <div class="confirmation_options">
                                <button class="confirm">Confirmar</button>
                                <button class="cancel">Cancelar</button>
                            </div>
                        </div>
                    </td>
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios"></textarea>
                    </td>
                </tr>
                <tr order-id="2">
                    <td>02</td>
                    <td class="items">
                        <ul class="item_descriptions">
                            <li item-code="LBS_01_01">Burger Combo <span>1</span></li>
                            <li item-code="DLC_02_01">Salchipapas <span>2</span></li>
                            <li item-code="STU_01_01">Gaseosa <span>1</span></li>
                            <li item-code="STU_01_12">Toña <span>2</span></li>
                        </ul>
                    </td>
                    <td table-code="GH-XB-P2">GH-XB-P2</td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label confirmed">En Preparación</div>
                            <div class="confirmation_options">
                                <button class="commit">Finalizar</button>
                            </div>
                        </div>
                    </td>
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios"></textarea>
                    </td>
                </tr>
                <tr order-id="3">
                    <td>03</td>
                    <td class="items">
                        <ul class="item_descriptions">
                            <li item-code="STU_01_01">Gaseosa <span>2</span></li>
                        </ul>
                    </td>
                    <td table-code="GH-NS-P1">GH-NS-P1</td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label canceled">Cancelado</div>
                            <div class="confirmation_options"></div>
                        </div>
                    </td>
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios"></textarea>
                    </td>
                </tr>
                <tr order-id="4">
                    <td>04</td>
                    <td class="items">
                        <ul class="item_descriptions">
                            <li item-code="STU_01_01">Gaseosa <span>1</span></li>
                            <li item-code="STU_01_12">Toña <span>2</span></li>
                            <li item-code="DLC_01_01">Papas <span>2</span></li>
                        </ul>
                    </td>
                    <td table-code="GH-PS-P2">GH-PS-P2</td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label delivered">Entregado</div>
                            <div class="confirmation_options"></div>
                        </div>
                    </td>
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios"></textarea>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>