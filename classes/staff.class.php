<?php

class Staff extends Order {
    public function initializeOrders () {
        return $this->getCurrentOrders();
    }

    public function initializeOrderTypes () {
        return $this->getCurrentOrderTypes();
    }

    public function initializeOrdersManagement ($sql, $params) {
        return $this->getOrdersManagement($sql, $params);
    }

    public function initializeOrderTypesManagement ($sql, $params) {
        return $this->getOrderTypesManagement($sql, $params);
    }
    
    public function updateOrderStatus ($params) {
        $this->setOrderStatus($params);
    }

    public function updateOrderComment ($params) {
        $this->setOrderComment($params);
    }
}