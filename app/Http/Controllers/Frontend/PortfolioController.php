<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        $all = Portfolio::where('is_active', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        $projectsAll = $all;
        $projectsWeb = $all->where('category', 'website');
        $projectsApp = $all->where('category', 'mobile-app');
        $projectsGraphics = $all->where('category', 'graphic-design');

        return view('frontend.portfolio', compact('projectsAll', 'projectsWeb', 'projectsApp', 'projectsGraphics'));
    }
}


