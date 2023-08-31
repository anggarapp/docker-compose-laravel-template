<?php

namespace App\Services\Impl;

use App\Services\StockService;
use Illuminate\Support\Facades\Http;

class StockServiceImpl implements StockService
{
    public function getHealthyBloodStocks()
    {
        $csv_file = Http::get('https://raw.githubusercontent.com/uddpmibojonegoro/blood-stock-update/main/healthy_data_stock.csv')->body();
        $rows = explode("\n", $csv_file);
        $array = [];
        $component = explode(",", $rows[0]);
        $summary = explode(",", $rows[1]);
        for ($item = 0; $item < count($component); $item++) {
            $array[$component[$item]] = $summary[$item];
        }
        return $array;
    }
    public function getReleaseBloodStocks()
    {
        $csv_file = Http::get('https://raw.githubusercontent.com/uddpmibojonegoro/blood-stock-update/main/release_data_stock.csv')->body();
        $rows = explode("\n", $csv_file);
        $array = [];
        $component = explode(",", $rows[0]);
        $summary = explode(",", $rows[1]);
        for ($item = 0; $item < count($component); $item++) {
            $array[$component[$item]] = $summary[$item];
        }
        return $array;
    }
}
