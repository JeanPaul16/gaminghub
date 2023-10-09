<?php $ROOT_ = './'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Control</title>
    <?php include($ROOT_.'includes/styleLoader.inc.php');?>
</head>
<body class="_AD_B">
    <?php include($ROOT_.'includes/header.inc.php');?>
    <div class="container _AD_C filter">
        <div class="loader">
            <div class="loader_body">
                <h2>Gaming Hub</h2>
                <h3>Control</h3>
                <h4>Cargando</h4>
            </div>
        </div>
        <div class="filter_container">
            <h2 class="filter_title">Filtrar Por</h2>
            <div class="filter_container inner">
                <div class="filter_box date">
                    <h2 class="filter_title">Fecha</h2>
                    <div class="date_input" id="date_picker_div">
                        <input type="text" name="date_picker" id="date_picker" placeholder="Hoy" data-input class="date_picker">
                        <div class="date_clear">
                            <a title="clear" data-clear>
                                X
                            </a>
                        </div>
                    </div>
                </div>
                <div class="filter_box table">
                    <label for="table_select" class="filter_title">Mesa</label>
                    <select name="table_select" id="table_select" class="custom-select sources" placeholder="Todas">
                        <option value="ALL" selected>Todos</option>
                        <option value="GH-NS-P1">GH-NS-P1</option>
                        <option value="GH-NS-P2">GH-NS-P2</option>
                        <option value="GH-NS-P3">GH-NS-P3</option>
                        <option value="GH-NS-P4">GH-NS-P4</option>
                        <option value="GH-PS-P1">GH-PS-P1</option>
                        <option value="GH-PS-P2">GH-PS-P2</option>
                        <option value="GH-PS-P3">GH-PS-P3</option>
                        <option value="GH-PS-P4">GH-PS-P4</option>
                        <option value="GH-XB-P1">GH-XB-P1</option>
                        <option value="GH-XB-P2">GH-XB-P2</option>
                        <option value="GH-XB-P3">GH-XB-P3</option>
                        <option value="GH-XB-P4">GH-XB-P4</option>
                    </select>
                </div>
                <div class="filter_box status">
                    <label for="status_select" class="filter_title">Status</label>
                    <select name="status_select" id="status_select" class="custom-select sources" placeholder="Todos">
                        <option value="ALL" selected>Todos</option>
                        <option value="CPD">Por Confirmar</option>
                        <option value="CND">Cancelado</option>
                        <option value="INP">En Preparación</option>
                        <option value="DLD">Entregado</option>
                    </select>
                </div>
                <div class="filter_box order_box">
                    <label for="order_select" class="filter_title">Orden</label>
                    <select name="order_select" id="order_select" class="custom-select sources" placeholder="DESC">
                        <option value="DESC" selected>DESC</option>
                        <option value="ASC">ASC</option>
                    </select>
                </div>
            </div>
        </div>
        <table class="table_init" data-show-toggle="false">
            <thead>
                <tr>
                    <th>ID</th>
                    <th data-breakpoints="xs">Descripción</th>
                    <th>Mesa</th>
                    <th data-breakpoints="xs">Hora</th>
                    <th data-breakpoints="xs">Comentarios</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="table_body">
                <tr order-id="1">
                    <td>01</td>
                    <td class="items">
                        <ul class="item_descriptions">
                            <li item-code="SDS_01_02">Porky2 <span>1</span></li>
                            <li item-code="DLC_01_01">Papas <span>2</span></li>
                            <li item-code="STU_01_01">Gaseosa <span>1</span></li>
                        </ul>
                    </td>
                    <td table-code="GH-NS-P1">GH-NS-P1</td>
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios" disabled></textarea>
                    </td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label to_confirm">Por Confirmar</div>
                        </div>
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
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios" disabled></textarea>
                    </td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label confirmed">En Preparación</div>
                        </div>
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
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios" disabled></textarea>
                    </td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label canceled">Cancelado</div>
                        </div>
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
                    <td>6:00 AM</td>
                    <td>
                        <textarea class="comments_input" name="comments" placeholder="Comentarios" disabled></textarea>
                    </td>
                    <td>
                        <div class="confirmation">
                            <div class="confirmation_label delivered">Entregado</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include($ROOT_.'includes/footer.inc.php');?>
</body>
</html>