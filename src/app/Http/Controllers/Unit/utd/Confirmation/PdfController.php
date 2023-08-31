<?php

namespace App\Http\Controllers\Unit\utd\Confirmation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PdfController extends Controller
{
    public function getPdf(string $mail_url)
    {
        $pdfFile = Http::get('http://' . env('INTERNAL_APP_ADDRESS') . '/api/consultation/pdf/d2fed01a501802b3442ff1168266a400f5c9bc89')->body();
        // dd($pdfFile);
        return response()->streamDownload(function () use ($pdfFile) {
            echo $pdfFile;
        }, $mail_url, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
