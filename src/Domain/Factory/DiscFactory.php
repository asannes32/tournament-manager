<?php

namespace DGDB\Domain\Factory;

use DGDB\Domain\Abstract\Entity;
use DGDB\Domain\Entity\SingleStabilityDisc;
use DGDB\Domain\Entity\StabilityCollectionDisc;
use DGDB\Domain\Interface\Factory;

class DiscFactory implements Factory
{
    /**
     * @param array $data
     * @return Entity
     */
    public static function create(array $data): Entity
    {
        switch ($data['manufacturer']) {
            case 'Discraft':
                return new SingleStabilityDisc($data['name'], $data['manufacturer'], $data['plastic'], $data['stability']);
            default:
                list($speed, $glide, $turn, $fade) = explode(',', $data['stability']);
                return new StabilityCollectionDisc($data['name'], $data['manufacturer'], $data['plastic'], $speed, $glide, $turn, $fade);
        }
    }
}