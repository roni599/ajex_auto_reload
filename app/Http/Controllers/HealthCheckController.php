<?php

namespace App\Http\Controllers;

use App\Models\ESPData;
use Illuminate\Http\Request;

class HealthCheckController extends Controller
{
    public function fetchData()
    {
        $data=ESPData::all();
        try {
            $data = ESPData::all();
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching data: ' . $e->getMessage()], 500);
        }
    }
}
