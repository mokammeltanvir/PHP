<?php
namespace OurApplication\Controller;

class PriceController
{
    private static $instance;
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function showPrice()
    {
        echo "<br/>The price is 1000TK<br/>";
    }
}
