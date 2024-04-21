<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(Project::all())->collection;
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());
        return ProjectResource::make($project);
    }

    public function show(Project $project)
    {
        return ProjectResource::make($project);
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return ProjectResource::make($project);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return response('Successfully deleted', 200);
    }
}
