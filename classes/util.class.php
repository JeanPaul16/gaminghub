<?php

class Util {
    public function getInitSQL () {
        return $this->setInitialOrderSQLQuery();
    }

    public function getInitTypeSQL () {
        return $this->setInitialOrderTypeSQLQuery();
    }

    protected function setInitialOrderSQLQuery () {
        return "SELECT
            c._id,
            td._table_code,
            c._service_status,
            c._kitchen_status,
            c._comment,
            c._order_at
        FROM
            clientorder c
        INNER JOIN tabledistribution td ON
            td._id = c._table_id ";
    }

    protected function setInitialOrderTypeSQLQuery () {
        return "SELECT
            o._order_id AS _id,
            i._item_name,
            t._presentation,
            o._quantity,
            i._item_code,
            t._code
        FROM
            menuitems i
        INNER JOIN menuitemtype t ON
            i._id = t._menu_id
        INNER JOIN orderdetails o ON
            o._type_id = t._id
        INNER JOIN clientorder c ON
            c._id = o._order_id
        INNER JOIN tabledistribution td ON
            td._id = c._table_id ";
    }

    public function sortOrders ($orders, $orderDetails) {
        $currentOrders = [];
        $index = 0;

        if (count($orders) === 0) {
            return ['OrderException' => 'No results yet!'];
        }

        foreach ($orders as $_order) {
            array_push($currentOrders, $_order);
            $currentOrders[$index]['_order_details'] = [];

            foreach ($orderDetails as $_details) { 
                if (count(array_intersect($_order, $_details)) < 1) continue;
                
                unset($_details['_id']);

                array_push($currentOrders[$index]['_order_details'], $_details);
            }
            $index++;
        }

        return $currentOrders;
    }
}