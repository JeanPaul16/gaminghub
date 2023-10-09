<?php

include '../includes/autoLoader.inc.php';

// $order = new Order();
// $test->setClientOrder('GH-NS-01');
// $test->setClientOrderType(["DLC_01", "_01", 2]);
// $test->setClientOrderType(["LBS_01", "_01", 1]);
// $test->setClientOrderType(["SDS_01", "_02", 1]);



// $order->setClientOrder('GH-PS-01');
// $params = [
//     ["STU_01", "_11", 4],
//     ["STU_01", "_01", 3],
//     ["LBS_01", "_02", 2],
//     ["SBS_04", "_01", 1],
//     ["DLC_01", "_01", 1],
// ];

// foreach ($params as $param) {
//     $order->setClientOrderType($param);
// }

// $orders = new Staff();
// $order_vals = $orders->initializeOrders();
// $type_vals = $orders->initializeOrderTypes();

// var_dump($type_vals);


// echo 'success, check db';



// public function test () {
    //     $sql = 'SELECT * FROM tabledistribution';
    //     try {
    //         $stmt = $this->db_connect()->query($sql);

    //         while ($row = $stmt->fetch()) {
    //             var_dump($row);
    //         }
    //     } catch (PDOException $e) {
    //         echo 'Connection Failed: ' . $e->getMessage();
    //     }
    // }

    // public function test_2 ($id, $table_code) {
    //     $params = [$id, $table_code];
    //     $sql = "SELECT * FROM tabledistribution WHERE _id = ? AND _table_code = ?";
        
    //     try {
    //         $stmt = $this->db_connect()->prepare($sql);

    //         $stmt->execute($params);

    //         $vals = $stmt->fetchAll();

    //         foreach ($vals as $val) {
    //             echo $val['_table_desc'];
    //             echo '<br>';
    //         }
    //     } catch (PDOException $e) {
    //         echo 'Connection Failed: ' . $e->getMessage();
    //     }
    // }

// echo base64_encode(serialize(['table_code' => 'GH-NS-P1'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-NS-P2'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-NS-P3'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-NS-P4'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-PS-P1'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-PS-P2'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-PS-P3'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-PS-P4'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-XB-P1'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-XB-P2'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-XB-P3'])); echo '<br>';
// echo base64_encode(serialize(['table_code' => 'GH-XB-P4'])); echo '<br>';

// $client = new Client();
// $item = ['STU_01', '_12'];
// $name = $client->getMenuItemTypeOnOrder($item);
// var_dump($name);

session_start();

$orderDesc = [
    'table_code' => 'GH-XB-P4',
    'total' => '270',
    'LBS_01_02' => [
        'quantity' => 1,
        'price' => "200"
    ],
    'DLC_01_01' => [
        'quantity' => 3,
        'price' => '40'
    ],
    'STU_01_01' => [
        'quantity' => 4,
        'price' => '40'
    ],
    'STU_01_12' => [
        'quantity' => 1,
        'price' => '40'
    ]
];

// echo '<pre>';
// var_dump($_SESSION['cart_items']);
// echo '</pre>';

$client = new Staff();

$sql = 'SELECT * FROM clientorder WHERE (DATE(_order_at) BETWEEN ? AND ?)';
$results = $client->initializeOrders();
var_dump($results);


// $index = 0;

// // $client->registerClientOrder($orderDesc['table_code']);

// foreach ($orderDesc as $desc => $item) {
//     if (!is_array($item)) continue;

//     $item_code = substr($desc, 0, 6);
//     $type_code = substr($desc, 6, strlen($desc));

//     // $client->registerClientOrderTypes([$item_code, $type_code, $item['quantity']]);

//     // $index++;
//     // echo '<pre>';
//     // var_dump($desc);
//     // echo $index . '<br>';
//     // var_dump($item);
//     // echo '</pre>';
// }

// var_dump($_SESSION['cart_items']);

// echo 'Success';

// function connect() {
//     $dsn = "mysql:host=localhost;dbname=gaminghub";
//     try {
//         $conn = new PDO(
//             $dsn, 
//             $this->user, 
//             $this->password, 
//             array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
//         );
//         $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//         return $conn;
//     } catch (PDOException $e) {
//         echo 'Connection failed: ' . $e->getMessage();
//     }
// }

// $sql = 