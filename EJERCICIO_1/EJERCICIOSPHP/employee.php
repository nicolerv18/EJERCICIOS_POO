<?php


class employee {
    private $name;
    private $lastName;
    private $appointment;

    public function __construct($name, $lastName, $appointment) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->appointment = $appointment;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAppointment() {
        return $this->appointment;
    }
}