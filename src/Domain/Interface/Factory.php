<?php

namespace DGDB\Domain\Interface;

use DGDB\Domain\Abstract\Entity;

interface Factory
{
    public static function create(array $data): Entity;
}