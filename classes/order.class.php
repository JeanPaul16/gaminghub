<?php

class Order extends Connect {

    /** Set Client's Order considering
    *  @var string table_code
    */
    protected function setClientOrder ($table_code) {
        $params = [$table_code];
        $sql = "CALL client_place_order (?)";
        
        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Query Failed: ' . $e->getMessage();
        }
    }

    /**
     * Set Client's Order considering an @param array params = [
     *      @var string  item_code
     *      @var string  item_type_code
     *      @var int     quantity 
     * ]
     */    
    protected function setClientOrderType ($params) {
        $sql = "CALL client_place_order_type (?, ?, ?)";

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Query Failed: ' . $e->getMessage();
        }
    }

    /**
     * Initial orders load 
     * @return array orders
     */
    protected function getCurrentOrders () {
        $sql = "CALL staff_get_current_orders_information";
        
        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Initial order types load
     * @return array order_types
     */
    protected function getCurrentOrderTypes () {
        $sql = "CALL staff_get_current_presentations_on_orders";

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Load Orders to Management View based on @param string sql_query, @param array params = [
     *      @var string start_date,
     *      @var string end_date, 
     *      IF (table_code) = true
     *      @var string table_code
     *      IF (status_code) = true
     *      @var string status
     * ] 
     * 
     * @return array orders
     */
    protected function getOrdersManagement ($sql, $params) {
        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Load Orders to Management View based on @param string sql_query, @param array params = [
     *      @var string start_date,
     *      @var string end_date, 
     *      IF (table_code) = true
     *      @var string table_code
     *      IF (status_code) = true
     *      @var string status
     * ] 
     * 
     * @return array order_types
     */
    protected function getOrderTypesManagement ($sql, $params) {
        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Get menuItemName based on @param string item_code
     * @return string item_name
     */
    protected function getMenuItemName ($item) {
        $sql = "CALL util_get_menu_item_name (?)";

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($item);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Get menuItemName based on @param array params =  [
     *      @param string item_code, 
     *      @param string type_code
     * ]
     * @return string item_name
     */
    protected function getMenuItemTypeName ($item) {
        $sql = "CALL util_get_menu_item_type_name (?, ?)";

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($item);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }
    
    /**
     * Set status to order based on @param array params = [
     *      @var int    order_id,
     *      @var bool   status_identifier,
     *      @var string new_status
     * ]
     */
    protected function setOrderStatus ($params) {
        $sql = 'CALL staff_update_order_status (?, ?, ?)';

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Set comment to order based on @param array params = [
     *      @var int        order_id,
     *      @var comment    comment
     * ]
     */
    protected function setOrderComment ($params) {
        $sql = 'CALL staff_update_order_comment (:id, :comment)';
        
        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->bindParam(':id', $params['_id']);
            $stmt->bindParam(':comment', $params['_comment']);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }
}