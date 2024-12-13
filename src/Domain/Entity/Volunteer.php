<?php

namespace DGDB\Domain\Entity;

use DGDB\Domain\Abstract\Entity;
use DGDB\Domain\Trait\PersonDetails;

class Volunteer extends Entity
{
    use PersonDetails;

    /** @var string $role */
    protected string $role;

    /**
     * @param string $name
     * @param string $email
     * @param int $age
     * @param string $location
     * @param string $role
     */
    public function __construct(string $name, string $email, int $age, string $location, string $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->location = $location;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return "{$this->name} from {$this->location}";
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
     * @return Volunteer
     */
    public function setName(string $name): Volunteer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Volunteer
     */
    public function setEmail(string $email): Volunteer
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Volunteer
     */
    public function setAge(int $age): Volunteer
    {
        $this->age = $age;
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
     * @return Volunteer
     */
    public function setLocation(string $location): Volunteer
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return Volunteer
     */
    public function setRole(string $role): Volunteer
    {
        $this->role = $role;
        return $this;
    }
}