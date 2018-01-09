<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/5
 * Time: 14:20
 */
class Automobile{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make,$model)
    {
        $this->vehicleMake=$make;
        $this->vehicleModel=$model;
    }

    public function getMakeandModel()
    {
        return $this->vehicleMake.' '.$this->vehicleModel;
    }
}

class AutomobileFactory{
    public static function create($make,$model){
        return new Automobile($make,$model);
    }
}
$veyron=AutomobileFactory::create('大众汽车公司','迈腾');
print_r($veyron->getMakeandModel());

