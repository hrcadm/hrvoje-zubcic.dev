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
            'projectShortDesc' => 'required',
            'projectLogo' => 'required|file'
        ]);

        $newProject = new Project();

        $newProject->title = $request->get('projectTitle');
        $newProject->short_description = $request->get('projectShortDesc');
        $newProject->content_title = ($request->get('projectContentTitle')) ? $request->get('projectContentTitle') : null;
        $newProject->client = ($request->get('projectClient')) ? $request->get('projectClient') : null;
        $newProject->content = ($request->get('projectContent')) ? $request->get('projectContent') : null;
        $newProject->project_url = ($request->get('projectUrl')) ? $request->get('projectUrl') : null;
        $newProject->logo = ($request->get('projectLogo')) ? $request->get('projectLogo') : null;
        $newProject->featured = ($request->get('projectFeatured') === 'yes') ? 1 : 0;
        $newProject->logo = str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg');

        $request->projectLogo->storeAs('public/projectLogos', str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg'));

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
            'projectShortDesc' => 'required'
        ]);

        $update = Project::findOrFail($id);

        // remove old logo image
        Storage::delete('public/projectLogos' . $update->logo);

        $update->title = $request->get('projectTitle');
        $update->short_description = $request->get('projectShortDesc');
        $update->content_title = ($request->get('projectContentTitle')) ? $request->get('projectContentTitle') : null;
        $update->client = ($request->get('projectClient')) ? $request->get('projectClient') : null;
        $update->content = ($request->get('projectContent')) ? $request->get('projectContent') : null;
        $update->project_url = ($request->get('projectUrl')) ? $request->get('projectUrl') : null;
        $update->logo = ($request->get('projectLogo')) ? $request->get('projectLogo') : null;
        $update->featured = ($request->get('projectFeatured') === 'yes') ? 1 : 0;
        $update->logo = str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg');


        // store new logo image
        $request->projectLogo->storeAs('public/projectLogos', str_replace(' ','',strtolower($request->get('projectTitle')) . '.jpg'));

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
