<?php

namespace DGDB\Domain\Entity;

use DGDB\Domain\Abstract\Entity;
use DGDB\Domain\Interface\Disc;
use DGDB\Domain\Trait\DiscDetails;

class StabilityCollectionDisc extends Entity implements Disc
{
    use DiscDetails;

    protected int $speed;
    protected int $glide;
    protected int $turn;
    protected int $fade;

    /**
     * @param string $name
     * @param string $manufacturer
     * @param string $plastic
     * @param int $speed
     * @param int $glide
     * @param int $turn
     * @param int $fade
     */
    public function __construct(string $name, string $manufacturer, string $plastic, int $speed, int $glide, int $turn, int $fade)
    {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->plastic = $plastic;
        $this->speed = $speed;
        $this->glide = $glide;
        $this->turn = $turn;
        $this->fade = $fade;
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
     * @return StabilityCollectionDisc
     */
    public function setName(string $name): StabilityCollectionDisc
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     * @return StabilityCollectionDisc
     */
    public function setManufacturer(string $manufacturer): StabilityCollectionDisc
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlastic(): string
    {
        return $this->plastic;
    }

    /**
     * @param string $plastic
     * @return StabilityCollectionDisc
     */
    public function setPlastic(string $plastic): StabilityCollectionDisc
    {
        $this->plastic = $plastic;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return StabilityCollectionDisc
     */
    public function setSpeed(int $speed): StabilityCollectionDisc
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getGlide(): int
    {
        return $this->glide;
    }

    /**
     * @param int $glide
     * @return StabilityCollectionDisc
     */
    public function setGlide(int $glide): StabilityCollectionDisc
    {
        $this->glide = $glide;
        return $this;
    }

    /**
     * @return int
     */
    public function getTurn(): int
    {
        return $this->turn;
    }

    /**
     * @param int $turn
     * @return StabilityCollectionDisc
     */
    public function setTurn(int $turn): StabilityCollectionDisc
    {
        $this->turn = $turn;
        return $this;
    }

    /**
     * @return int
     */
    public function getFade(): int
    {
        return $this->fade;
    }

    /**
     * @param int $fade
     * @return StabilityCollectionDisc
     */
    public function setFade(int $fade): StabilityCollectionDisc
    {
        $this->fade = $fade;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumbers(): string
    {
        return "{$this->speed}, {$this->glide}, {$this->turn}, {$this->fade}";
    }
}