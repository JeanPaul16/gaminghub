<?php

class Management extends Connect {
    /**
     * Register new staff considering an @param array params = [
     *      @var string name
     *      @var string last_name
     *      @var string username
     *      @var string password_hash
     *      @var string description
     *      @var string role
     * ]
     */    
    protected function setStaff ($params) {
        $sql = "CALL staff_register_user (:name, :lastname, :username, :password, :desc, :role)";

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->bindParam(':name', $params['name']);
            $stmt->bindParam(':lastname', $params['lastname']);
            $stmt->bindParam(':username', $params['username']);
            $stmt->bindParam(':password', $params['password']);
            $stmt->bindParam(':desc', $params['desc']);
            $stmt->bindParam(':role', $params['role']);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Query Failed: ' . $e->getMessage();
        }
    }

    /**
     * Update the newly created staff based on "Manager" 
     * access level.
     */
    protected function updateAccessLevel () {
        $sql = "CALL staff_update_access_level";

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    /**
     * Get Staff Details on Login commit considering a @var string username
     */
    protected function getStaffDetails ($params) {
        $sql = 'CALL staff_login_verification (?)';

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }

    protected function setStaffSession ($params) {
        $sql = 'CALL staff_update_session (?, ?)';

        try {
            $stmt = $this->db_connect()->prepare($sql);
            $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'Query Failed ' . $e->getMessage();
        }
    }
}