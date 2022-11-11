<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectTypeRequest;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(ProjectType::select('*'))
                ->addColumn('action', function ($projectType) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "project-type.edit", "id" => $projectType->id],
                        'delete' => ["route" => "project-type.destroy", "id" => $projectType->id],
                    ]);
                })
                ->addColumn("checkbox", function ($row) {
                    return '<input type="checkbox" name="per_checkbox" data-id="' . $row->id . '"> <label></label>';
                })
                ->rawColumns(['action', 'checkbox'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.projectType.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projectType.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectTypeRequest $request)
    {
        $data = $request->validated();
        ProjectType::create($data);
        notify()->success("Project Type is created");
        return redirect()->route("project-type.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $projectType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectType $projectType)
    {
        return view("admin.projectType.update", compact("projectType"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectTypeRequest $request, ProjectType $projectType)
    {
        $projectType->update($request->validated());
        notify()->success("Project Type is updated");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();
        notify()->success("Project Type is deleted");
        return redirect()->back();
    }
}
