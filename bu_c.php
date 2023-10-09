<?php 

// $item_code = $_POST['params']['item_code'];
    // $type_code = $_POST['params']['type_code'];
    // $cart_items = $_SESSION['cart_items'];
    // $length = count($cart_items); 

    // $index = 1;
    // foreach ($cart_items as $key => $val) {
    //     if ($key == 'table_code') continue;
        
    //     $index++;
    //     // echo $val['item_code'] . ' at ' . $val['type_code'];

    //     if ($val['item_code'] == $item_code && $val['type_code'] == $type_code) {
    //         $at = $index - 1;
    //         // echo 'it is the same : ' . $val['item_code'].$val['type_code'] . ' - ' . $item_code.$type_code . '  ';
    //         $cart_items['item_'.$at]['quantity']++;
            
    //     } else {
    //         // echo 'it not is the same : ' . $val['item_code'].$val['type_code'] . ' - ' . $item_code.$type_code . '  ';
    //         $cart_items['item_'.$index] = [
    //             'item_code' => $item_code,
    //             'type_code' => $type_code,
    //             'quantity' => 1
    //         ];
            
    //         var_dump($val['item_code']);
    //     }
    // }
    // $_SESSION['cart_items'] = $cart_items;


    // $itemColumns = array_column($cart_items, 'item_code');
    // $typeColumns = array_column($cart_items, 'type_code');
    // $itemKey = array_search($item, $itemColumns);
    // $typeKey = array_search($type, $typeColumns);

    // var_dump($cart_items[$itemKey]);
    

    // $key = array_search($item, array_column($cart_items, "item_code"));

    // echo $key;
    
    // $itemKeys = array_column($cart_items, 'item_code');

    // if (in_array($_POST['params']['item_code'], $itemKeys)) {
    //     echo 'exists';
    // } else {
    //     // echo $_POST['params']['item_code'] . ' doesn\'t exists';
    // }

    // var_dump($cart_items);