<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return view('admin.portfolio.show', compact('project'));
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
            'projectShortDesc' => 'required'
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

        $update->title = $request->get('projectTitle');
        $update->short_description = $request->get('projectShortDesc');
        $update->content_title = ($request->get('projectContentTitle')) ? $request->get('projectContentTitle') : null;
        $update->client = ($request->get('projectClient')) ? $request->get('projectClient') : null;
        $update->content = ($request->get('projectContent')) ? $request->get('projectContent') : null;
        $update->project_url = ($request->get('projectUrl')) ? $request->get('projectUrl') : null;
        $update->logo = ($request->get('projectLogo')) ? $request->get('projectLogo') : null;
        $update->featured = ($request->get('projectFeatured') === 'yes') ? 1 : 0;

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

        return redirect()->route('adminAllProjects')->with('msg', 'successDeleteProject');
    }
}
