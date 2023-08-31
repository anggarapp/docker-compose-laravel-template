<?php

namespace App\Services\Impl;

use App\Services\MobileUnitScheduleService;
use Illuminate\Support\Facades\Http;

class MobileUnitScheduleServiceImpl implements MobileUnitScheduleService
{
    public function getAll()
    {
        $csv_file = Http::get('https://raw.githubusercontent.com/uddpmibojonegoro/mobile-unit-schedule/main/jadwal_mu.csv')->body();
        $array = [];
        $rows = explode("\n", $csv_file);
        $headers = explode(";", $rows[0]);
        for ($item = 1; $item < count($rows) - 1; $item++) {
            $content = explode(";", $rows[$item]);
            $list = [];
            for ($contain = 0; $contain < count($headers); $contain++) {
                $list[$headers[$contain]] = $content[$contain];
            }
            array_push($array, (object)$list);
        }
        return $array;
    }
}
