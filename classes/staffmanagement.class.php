<?php

class StaffManagement extends Management {
    public function registerNewStaffUser ($params) {
        $this->setStaff($params);
    }

    public function updateStaffAccessLevel () {
        $this->updateAccessLevel();
    }

    public function staffLogin ($params) {
        return $this->getStaffDetails($params);
    }

    public function onUserSessionUpdate ($params) {
        $this->setStaffSession($params);
    }
}