<?php

if (!isset($_POST['params'])) return;

include '../includes/autoLoader.inc.php';
$_STAFF = new Staff();
$_UTIL = new Util();

$params = $_POST['params'];

$sqlParams = [];

$startDate = new DateTime(substr($params['dateValue'][0], 0, 32));
$endDate = new DateTime(substr($params['dateValue'][1], 0, 32));
array_push($sqlParams, 
    $startDate->format('Y-m-d'),
    $endDate->format('Y-m-d')
);

$orderSQL = $_UTIL->getInitSQL() . "
    WHERE
        (DATE(c._order_at) BETWEEN ? AND ?)";
$orderTypeSQL = $_UTIL->getInitTypeSQL() . "
    WHERE
        (DATE(c._order_at) BETWEEN ? AND ?)";

foreach ($params['selectValues'] as $key => $value) {
    if ($key === 'order_select') continue;
    
    if ($value !== 'ALL') {
        $string = $key === 'table_select' ? "td._table_code = ?" : "c._service_status = ?";

        $orderSQL .= " AND {$string}";
        $orderTypeSQL .= " AND {$string}";

        if ($key === 'status_select') {
            $serviceString = '';
            switch ($value) {
                case 'CPD': 
                    $serviceString = 'Por Confirmar';
                    break;
                case 'CND': 
                    $serviceString = 'Cancelado';
                    break;
                case 'INP': 
                    $serviceString = 'En Preparación';
                    break;
                case 'DLD': 
                    $serviceString = 'Entregado';
                    break;
            };
            array_push($sqlParams, $serviceString);
        } else {
            array_push($sqlParams, $value);
        }
    }
}

$orderSQL .= ' 
ORDER BY 
    c._id 
';

$orderTypeSQL .= ' 
ORDER BY 
    c._id 
';

$orderSQL .= $params['selectValues']['order_select'] === 'DESC' ? 'DESC' : 'ASC';
$orderTypeSQL .= $params['selectValues']['order_select'] === 'DESC' ? 'DESC' : 'ASC';

$orders = $_STAFF->initializeOrdersManagement($orderSQL, $sqlParams);
$orderDetails = $_STAFF->initializeOrderTypesManagement($orderTypeSQL, $sqlParams);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($_UTIL->sortOrders($orders, $orderDetails));
// var_dump($_UTIL->sortOrders($orders, $orderDetails));
// var_dump($orderSQL);
// var_dump($orderTypeSQL);