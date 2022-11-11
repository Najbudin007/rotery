<?php

namespace App\Http\Controllers;

use App\DataTables\PermissionDataTable;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->ajax()) {
            return datatables()->of(Permission::select('*'))
                ->addColumn('action', function ($permission) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "permission.edit", "id" => $permission->id],
                        'delete' => ["route" => "permission.destroy", "id" => $permission->id],
                    ]);
                })
                ->addColumn("checkbox", function ($row) {
                    return '<input type="checkbox" name="per_checkbox" data-id="' . $row->id . '"> <label></label>';
                })
                ->rawColumns(['action', 'checkbox'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.permission.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $data = $request->validated();
        Permission::create($data);
        notify()->success("Permission is created.");
        return redirect()->route("permission.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view("admin.permission.update", compact("permission"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $data = $request->validated();
        $permission->update($data);
        notify()->success("Permission is updated.");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        notify()->success("Permission is deleted.");
        return redirect()->back();
    }
    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        Permission::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "Permissions have been deleted."]);
    }
}
