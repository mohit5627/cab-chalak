<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use Illuminate\Http\Request;

class CabController extends Controller
{
    public function index(Request $request)
    {
        // All active cabs - filter counts ke liye
        $allCabs = Cab::where('is_active', true)->get();

        // Dynamic filter counts
        $typeCounts = $allCabs->groupBy('type')->map->count();

        $fuelCounts = $allCabs->groupBy('fuel_type')->map->count();

        $acCount = $allCabs->where('ac', true)->count();

        // Cab listing query
        $query = Cab::where('is_active', true);

        // Cab Type filter
        $types = $request->input('type', []);

        if (!empty($types) && is_array($types)) {
            $query->whereIn('type', $types);
        }

        // Fuel Type filter
        $fuels = $request->input('fuel', []);

        if (!empty($fuels) && is_array($fuels)) {
            $query->whereIn('fuel_type', $fuels);
        }

        // AC filter
        if ($request->input('ac') == '1') {
            $query->where('ac', true);
        }

        // Sorting
        switch ($request->input('sort')) {

            case 'price_low':
                $query->orderBy('base_fare', 'asc');
                break;

            case 'price_high':
                $query->orderBy('base_fare', 'desc');
                break;

            default:
                $query->orderBy('base_fare', 'asc');
                break;
        }

        $cabs = $query->get();

        return view('frontend.cabs.index', compact(
            'cabs',
            'typeCounts',
            'fuelCounts',
            'acCount'
        ));
    }
}