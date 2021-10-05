<?php

class Trainer extends Member
{

    private $charge;

    /**
     * @param $charge
     */
    public function __construct($name,$birthDay,$country,$yellowCard,$redCard,$charge)
    {
        parent::__construct($name,$birthDay,$country,$yellowCard,$redCard);
        $this->charge = $charge;
    }


    public function render()
    {
        return '<div class="col mb-5">
                    <div class="card h-100" style="background-color: #0a53be">
                        <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Trainer</div>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">'.$this->name.'</h5>
                                <!-- Product price-->
                                <p>Edad: '.$this->age().'</p><br>
                                <p>Cargo: '.$this->charge.'</p><br>
                                <p>Tarjetas Amarillas: '.$this->yellowCard.'</p><br>
                                <p>Tarjetas Rojas: '.$this->redCard.'</p><br>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">'.$this->country.'</a></div>
                        </div>
                    </div>
                </div>';
    }
}