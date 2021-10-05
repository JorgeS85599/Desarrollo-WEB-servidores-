<?php

class Player extends Member
{
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;


    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        parent::__construct($name,$birthDay,$country,$yellowCard,$redCard);
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
    }

    public function score() {
        $this->goals += 1;
    }

    public function playMinutes($min) {
        $this->minutes += $min;
    }

    public function render() {
        return '<div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">'.$this->dorsal.'</div>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">'.$this->name.'</h5>
                                <!-- Product price-->
                                <p>Posición: '.$this->position.'</p><br>
                                <p>Goles: '.$this->goals.'</p><br>
                                <p>Partidos: '.$this->matches.'</p><br>
                                <p>Minutos: '.$this->minutes.'</p><br>
                                <p>Edad: '.$this->age().'</p><br>
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