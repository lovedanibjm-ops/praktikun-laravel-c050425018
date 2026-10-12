<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class HitungTotalSksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $total = \App\Models\Matakuliah::sum('sks');
        return "Total sks: {$total}";
    }
}
