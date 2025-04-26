<?php


class BasicPlan extends Plan {
    public function __construct( $type = "Basic Plan", $price = 50000, $services = "Acceso general") {
        parent::__construct($type, $price, $services);
    }
}
