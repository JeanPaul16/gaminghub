<?php

$rows_json = '../content/rows.json';

$_ROWS = [];
$index = 0;

foreach ($currentOrders as $orders) {
    $currentID = ($index + 1) < 10 ? '0'.($index + 1) : ($index + 1);
    
    $currentItems = '<ul class="item_descriptions">';
    foreach ($orders['_order_details'] as $details) {
        $currentItems .= "
        <li item-code=\"{$details['_item_code']}{$details['_code']}\">
            {$details['_presentation']} <span>{$details['_quantity']}</span>
        </li>
        ";
    }
    $currentItems .= '</ul>';

    $currentOrder = [];
    // $currentOrder['_id'] = ($index + 1) < 10 ? '0'.($index + 1) : ($index + 1);
    $index++;
}