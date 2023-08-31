<?php

namespace App\Services;

interface UnitService
{
    public function getUnits();
    public function getUnitById($id);
    public function getUnitBySlug($slug);
    public function deleteUnit($unitId);
    public function updateUnit($unitId, array $newDetails);
    public function createUnit(array $newDetails);
}
