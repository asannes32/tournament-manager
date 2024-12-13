<?php

namespace DGDB\Domain\Entity;

use DGDB\Domain\Abstract\Entity;
use DGDB\Domain\Interface\Disc;
use DGDB\Domain\Trait\DiscDetails;

class SingleStabilityDisc extends Entity implements Disc
{
    use DiscDetails;

    protected float $stability;

    /**
     * @param string $name
     * @param string $manufacturer
     * @param string $plastic
     * @param float $stability
     */
    public function __construct(string $name, string $manufacturer, string $plastic, float $stability)
    {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->plastic = $plastic;
        $this->stability = $stability;
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
     * @return SingleStabilityDisc
     */
    public function setName(string $name): SingleStabilityDisc
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
     * @return SingleStabilityDisc
     */
    public function setManufacturer(string $manufacturer): SingleStabilityDisc
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
     * @return SingleStabilityDisc
     */
    public function setPlastic(string $plastic): SingleStabilityDisc
    {
        $this->plastic = $plastic;
        return $this;
    }

    /**
     * @return float
     */
    public function getStability(): float
    {
        return $this->stability;
    }

    /**
     * @param float $stability
     * @return SingleStabilityDisc
     */
    public function setStability(float $stability): SingleStabilityDisc
    {
        $this->stability = $stability;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumbers(): string
    {
        return "{$this->stability}";
    }
}