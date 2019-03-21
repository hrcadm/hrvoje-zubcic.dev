<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function showAllProjects()
    {
        $projects = Project::all();

        return view('admin.portfolio.index');
    }

    public function newProject()
    {
        return view('admin.portfolio.create');
    }
}
