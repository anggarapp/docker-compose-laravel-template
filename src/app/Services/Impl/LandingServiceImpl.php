<?php

namespace App\Services\Impl;

use App\Services\LandingService;
use Illuminate\Support\Facades\Http;

class LandingServiceImpl implements LandingService
{
    public function getStockData()
    {
        $csv_file = Http::get('https://raw.githubusercontent.com/uddpmibojonegoro/blood-stock-update/main/data_stock.csv')->body();
        $rows = explode("\n", $csv_file);
        $array = [];
        $component = explode(",", $rows[0]);
        $summary = explode(",", $rows[1]);
        for ($item = 0; $item < count($component); $item++) {
            $array[$component[$item]] = $summary[$item];
        }
        return $array;
    }

    public function getScheduleData()
    {
        $csv_file = Http::get('https://raw.githubusercontent.com/uddpmibojonegoro/mobile-unit-schedule/main/jadwal_mu.csv')->body();
        // dd($csv_file);
        $array = [];
        $rows = explode("\n", $csv_file);
        // dd($rows);
        $headers = explode(";", $rows[0]);
        for ($item = 1; $item < count($rows) - 1; $item++) {
            $content = explode(";", $rows[$item]);
            $list = [];
            for ($contain = 0; $contain < count($headers); $contain++) {
                $list[$headers[$contain]] = $content[$contain];
            }
            array_push($array, (object)$list);
        }
        // dd($array);
        return $array;
    }
}
