<?php

class Team
{
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoreGoals;
    private $concededGoals;

    /**
     * @param $name
     * @param $players
     * @param $matches
     * @param $won
     * @param $lost
     * @param $tie
     * @param $scoreGoals
     * @param $concededGoals
     */
    public function __construct($name, $players, $matches, $won, $lost, $tie, $scoreGoals, $concededGoals)
    {
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }

    public function signPlayer($player) {
        array_push($this->players,$player);
    }

    public function render() {
        $html = '';
        foreach ($this->players as $player) {
            $html .= $player->render();
        }
        return $html;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }




}