<?php

namespace App\Http\Controllers;

use App\Models\SuspicioEntity;
use Illuminate\Http\Request;

class SuspiciousController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $entities = [];

        if ($search)
        {
            $entities = SuspicioEntity::search($search)
                ->orderBy('name')
                ->limit(100)
                ->get();
        }

        return view('index', compact('search', 'entities'));
    }
}
