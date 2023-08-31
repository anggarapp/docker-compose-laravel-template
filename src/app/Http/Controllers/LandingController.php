<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LandingService;
use App\Services\MobileUnitScheduleService;
use App\Services\StockService;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    protected MobileUnitScheduleService $mobileUnitScheduleService;
    protected StockService $stockService;

    public function __construct(StockService $stockService, MobileUnitScheduleService $mobileUnitScheduleService)
    {
        $this->stockService = $stockService;
        $this->mobileUnitScheduleService = $mobileUnitScheduleService;
    }
    public function index()
    {
        $stock_datas = $this->stockService->getReleaseBloodStocks();
        $schedule_datas = $this->mobileUnitScheduleService->getAll();
        // dd($schedule_datas);
        return view('landing', [
            'stocks' => (object)$stock_datas,
            'schedules' => (object)$schedule_datas
        ]);
    }

    public function indexutd()
    {
        $stock_datas = $this->stockService->getReleaseBloodStocks();
        $schedule_datas = $this->mobileUnitScheduleService->getAll();
        // dd($schedule_datas);
        return view('units.blood-transfusion.index', [
            'stocks' => (object)$stock_datas,
            'schedules' => (object)$schedule_datas
        ]);
    }

    public function test()
    {
        $products = DB::connection('mysql_simdondar')->table('master_kantong')->get();
        return $products;
    }
}
