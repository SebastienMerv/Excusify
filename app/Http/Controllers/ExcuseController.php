<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcuseController extends Controller
{
    public function getExcuse()
    {
        $partie1 = \App\Models\Excuse::inRandomOrder()->first()->partie1;
        $partie2 = \App\Models\Excuse::inRandomOrder()->first()->partie2;
        $partie3 = \App\Models\Excuse::inRandomOrder()->first()->partie3;

        return response()->json([
            'excuse' => $partie1 . ' ' . $partie2 . ' ' . $partie3
        ]);
    }
}
