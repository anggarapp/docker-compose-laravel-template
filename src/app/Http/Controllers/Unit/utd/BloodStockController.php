<?php

namespace App\Http\Controllers\Unit\utd;

use App\Http\Controllers\Controller;
use App\Services\StockService;
use Illuminate\Http\Request;

class BloodStockController extends Controller
{
    private StockService $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    public function bloodStockPage()
    {
        $healthyStock = $this->stockService->getHealthyBloodStocks();
        $releaseStock = $this->stockService->getReleaseBloodStocks();
        return view('units.blood-transfusion.bloodstocks', [
            'healthy' => (object)$healthyStock,
            'release' => (object)$releaseStock,
        ]);
    }
}
