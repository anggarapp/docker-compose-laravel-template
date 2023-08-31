<?php

namespace App\Repositories;

interface UnitRepository
{
    public function getAllUnits();
    public function getUnitById($unitId);
    public function deleteUnit($unitId);
    public function updateUnit($unitId, array $newDetails);
    public function createUnit(array $newDetails);
}
