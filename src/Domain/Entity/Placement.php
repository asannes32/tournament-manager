<?php

namespace DGDB\Domain\Entity;

use DGDB\Domain\Abstract\Entity;

class Placement extends Entity
{
    protected Player $player;
    protected Tournament $tournament;
    protected int $score;

    /**
     * @param Player $player
     * @param Tournament $tournament
     * @param int $score
     */
    public function __construct(Player $player, Tournament $tournament, int $score)
    {
        $this->player = $player;
        $this->tournament = $tournament;
        $this->score = $score;
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param Player $player
     * @return Placement
     */
    public function setPlayer(Player $player): Placement
    {
        $this->player = $player;
        return $this;
    }

    /**
     * @return Tournament
     */
    public function getTournament(): Tournament
    {
        return $this->tournament;
    }

    /**
     * @param Tournament $tournament
     * @return Placement
     */
    public function setTournament(Tournament $tournament): Placement
    {
        $this->tournament = $tournament;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @param int $score
     * @return Placement
     */
    public function setScore(int $score): Placement
    {
        $this->score = $score;
        return $this;
    }
}