<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function projects()
    {
        $table = datatables()->of(Project::latest()->get())
            ->toJson();

        return $table;
    }
}
