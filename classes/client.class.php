<?php

class Client extends Order {
    public function registerClientOrder ($table_code) {
        $this->setClientOrder($table_code);
    }

    public function registerClientOrderTypes ($_params) {
        $this->setClientOrderType($_params);
    }

    public function getMenuItemOnOrder ($item) {
        return $this->getMenuItemName($item);
    }

    public function getMenuItemTypeOnOrder ($item) {
        return $this->getMenuItemTypeName($item);
    }
}