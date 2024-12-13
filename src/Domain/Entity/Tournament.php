<?php

namespace DGDB\Domain\Entity;

use DateTime;
use DGDB\Domain\Abstract\Entity;

class Tournament extends Entity
{
    protected string $name;
    protected Course $course;
    protected DateTime $date;
    protected Player $director;
    protected int $numOfRounds;
    protected ?array $volunteers;

    /**
     * @param string $name
     * @param Course $course
     * @param DateTime $date
     * @param Player $director
     * @param Volunteer[] $volunteers
     * @param int $numOfRounds
     */
    public function __construct(string $name, Course $course, DateTime $date, int $numOfRounds, Player $director, ?array $volunteers = null)
    {
        $this->name = $name;
        $this->course = $course;
        $this->director = $director;
        $this->numOfRounds = $numOfRounds;
        $this->date = $date;
        $this->volunteers = $volunteers;
    }

    /**
     * @return string
     */
    public function getAnnouncement(): string
    {
        return "Come play {$this->name} at {$this->course} on {$this->date->format('m-d-Y')} for {$this->numOfRounds} rounds of fun hosted by {$this->director->getSignature()}!";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tournament
     */
    public function setName(string $name): Tournament
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Course
     */
    public function getCourse(): Course
    {
        return $this->course;
    }

    /**
     * @param Course $course
     * @return Tournament
     */
    public function setCourse(Course $course): Tournament
    {
        $this->course = $course;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return Tournament
     */
    public function setDate(DateTime $date): Tournament
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Player
     */
    public function getDirector(): Player
    {
        return $this->director;
    }

    /**
     * @param Player $director
     * @return Tournament
     */
    public function setDirector(Player $director): Tournament
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumOfRounds(): int
    {
        return $this->numOfRounds;
    }

    /**
     * @param int $numOfRounds
     * @return Tournament
     */
    public function setNumOfRounds(int $numOfRounds): Tournament
    {
        $this->numOfRounds = $numOfRounds;
        return $this;
    }

    /**
     * @return Volunteer[]|null
     */
    public function getVolunteers(): ?array
    {
        return $this->volunteers;
    }

    /**
     * @param Volunteer[]|null $volunteers
     * @return Tournament
     */
    public function setVolunteers(?array $volunteers): Tournament
    {
        $this->volunteers = $volunteers;
        return $this;
    }
}