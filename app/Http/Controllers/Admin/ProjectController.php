<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * List all Projects
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.portfolio.index', compact('projects'));
    }

    /**
     * Show create Form for Project
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Show Edit form for Project
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.portfolio.edit', compact('project'));
    }

    /**
     * Show instance of Project
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $logo = storage_path('app/projectLogos/' . $project->logo);

        return view('admin.portfolio.show', compact('project', 'logo'));
    }

    /**
     * Create new Project
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'projectTitle' => 'required',
            'projectFeatured' => 'required',
            'mainTechs' => 'required',
            'hasContent' => 'required',
        ]);

        $newProject = new Project();

        $newProject->title = $request->get('projectTitle');
        $newProject->client = ($request->get('projectClient')) ? $request->get('projectClient') : null;
        $newProject->content = ($request->get('projectContent')) ? $request->get('projectContent') : null;
        $newProject->project_url = ($request->get('projectUrl')) ? $request->get('projectUrl') : null;
        $newProject->featured = ($request->get('projectFeatured') === '1') ? 1 : 0;
        $newProject->has_content = ($request->get('hasContent') === '1') ? 1 : 0;
        $newProject->main_techs = $request->get('mainTechs');
        $newProject->tech_stack = $request->get('techStack');

        if($request->has('projectLogo'))
        {
            $newProject->logo = str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg');

            $request->projectLogo->storeAs('public/projectLogos', str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg'));
        } else {
            $newProject->logo = null;
        }

        $newProject->save();

        return redirect()->route('adminAllProjects')->with('msg', 'successNewProject');
    }

    /**
     * Update Project
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'projectTitle' => 'required',
            'projectFeatured' => 'required',
            'mainTechs' => 'required',
            'hasContent' => 'required',
        ]);

        $update = Project::findOrFail($id);

        // remove old logo image
        Storage::delete('public/projectLogos' . $update->logo);

        $update->title = $request->get('projectTitle');
        $update->client = ($request->get('projectClient')) ? $request->get('projectClient') : null;
        $update->content = ($request->get('projectContent')) ? $request->get('projectContent') : null;
        $update->project_url = ($request->get('projectUrl')) ? $request->get('projectUrl') : null;
        $update->featured = ($request->get('projectFeatured') === '1') ? 1 : 0;
        $update->has_content = ($request->get('hasContent') === '1') ? 1 : 0;
        $update->main_techs = $request->get('mainTechs');
        $update->tech_stack = $request->get('techStack');

        if($request->has('projectLogo'))
        {
            $update->logo = str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg');

            // store new logo image
            $request->projectLogo->storeAs('public/projectLogos', str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg'));
        }

        $update->save();

        return redirect()->route('adminAllProjects')->with('msg', 'successUpdateProject');
    }

    /**
     * Delete Project
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $delete = Project::findOrFail($id);
        $delete->delete();

        // remove logo image with model
        Storage::delete('public/projectLogos' . $delete->logo);

        return redirect()->route('adminAllProjects')->with('msg', 'successDeleteProject');
    }
}
