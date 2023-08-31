<?php

namespace App\Services;

interface StockService
{
    public function getHealthyBloodStocks();
    public function getReleaseBloodStocks();
}
