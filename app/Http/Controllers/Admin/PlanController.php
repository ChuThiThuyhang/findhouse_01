<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Plan;

class PlanController extends Controller
{
    public function showPlan()
    {
        $plans = Plan::all();
        
        return view('admin.plan.showPlan', compact('plans'));
    }
}
