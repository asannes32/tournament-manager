<?php

namespace DGDB\Domain\Entity;

use DGDB\Domain\Abstract\Entity;

class Course extends Entity
{
    protected string $name;
    protected string $location;
    protected int $numberOfHoles;

    /**
     * @param string $name
     * @param string $location
     * @param int $numberOfHoles
     */
    public function __construct(string $name, string $location, int $numberOfHoles)
    {
        $this->name = $name;
        $this->location = $location;
        $this->numberOfHoles = $numberOfHoles;
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
     * @return Course
     */
    public function setName(string $name): Course
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return Course
     */
    public function setLocation(string $location): Course
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfHoles(): int
    {
        return $this->numberOfHoles;
    }

    /**
     * @param int $numberOfHoles
     * @return Course
     */
    public function setNumberOfHoles(int $numberOfHoles): Course
    {
        $this->numberOfHoles = $numberOfHoles;
        return $this;
    }
}