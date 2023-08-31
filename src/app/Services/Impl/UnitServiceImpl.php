<?php

namespace App\Services\Impl;

use App\Repositories\UnitRepository;
use App\Services\UnitService;
use Illuminate\Support\Facades\Http;

class UnitServiceImpl implements UnitService
{
    private UnitRepository $unitRepository;

    public function __construct(UnitRepository $unitRepository)
    {
        $this->unitRepository = $unitRepository;
    }
    public function getUnits()
    {
    }
    public function getUnitById($id)
    {
    }
    public function getUnitBySlug($slug)
    {
    }
    public function deleteUnit($unitId)
    {
    }
    public function updateUnit($unitId, array $newDetails)
    {
    }
    public function createUnit(array $newDetails)
    {
    }
    public function findUnitWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
