<?php

namespace DGDB\Domain\Entity;

use DGDB\Domain\Abstract\Entity;
use DGDB\Domain\Trait\PersonDetails;

class Player extends Entity
{
    use PersonDetails;

    protected ?int $pdgaNumber;
    protected ?int $rating;
    protected ?int $standing;
    protected ?string $homeCourse;
    protected ?string $sponsor;
    protected ?array $discs;

    /**
     * @param string $name
     * @param string $email
     * @param int $age
     * @param string $location
     * @param int|null $pdgaNumber
     * @param int|null $rating
     * @param int|null $standing
     * @param string|null $homeCourse
     * @param string|null $sponsor
     * @param array|null $discs
     */
    public function __construct(string $name, string $email, int $age, string $location, ?int $pdgaNumber, ?int $rating, ?int $standing, ?string $homeCourse, ?string $sponsor, ?array $discs)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->location = $location;
        $this->pdgaNumber = $pdgaNumber;
        $this->rating = $rating;
        $this->standing = $standing;
        $this->homeCourse = $homeCourse;
        $this->sponsor = $sponsor;
        $this->discs = $discs;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return "{$this->name} (#{$this->pdgaNumber}) from {$this->location}";
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
     * @return Player
     */
    public function setName(string $name): Player
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
     * @return Player
     */
    public function setEmail(string $email): Player
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
     * @return Player
     */
    public function setAge(int $age): Player
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
     * @return Player
     */
    public function setLocation(string $location): Player
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPdgaNumber(): ?int
    {
        return $this->pdgaNumber;
    }

    /**
     * @param int|null $pdgaNumber
     * @return Player
     */
    public function setPdgaNumber(?int $pdgaNumber): Player
    {
        $this->pdgaNumber = $pdgaNumber;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRating(): ?int
    {
        return $this->rating;
    }

    /**
     * @param int|null $rating
     * @return Player
     */
    public function setRating(?int $rating): Player
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStanding(): ?int
    {
        return $this->standing;
    }

    /**
     * @param int|null $standing
     * @return Player
     */
    public function setStanding(?int $standing): Player
    {
        $this->standing = $standing;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHomeCourse(): ?string
    {
        return $this->homeCourse;
    }

    /**
     * @param string|null $homeCourse
     * @return Player
     */
    public function setHomeCourse(?string $homeCourse): Player
    {
        $this->homeCourse = $homeCourse;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSponsor(): ?string
    {
        return $this->sponsor;
    }

    /**
     * @param string|null $sponsor
     * @return Player
     */
    public function setSponsor(?string $sponsor): Player
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getDiscs(): ?array
    {
        return $this->discs;
    }

    /**
     * @param array|null $discs
     * @return Player
     */
    public function setDiscs(?array $discs): Player
    {
        $this->discs = $discs;
        return $this;
    }
}