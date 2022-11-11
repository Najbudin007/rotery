<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserPermission;
use App\Models\UserRole;
use App\Repository\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRepository $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                                                                                                                                                                                if (request()->ajax()) {
            return datatables()->of(User::latest()->get())
                ->addColumn('action', function ($user) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "user.edit", "id" => $user->id],
                        'delete' => ["route" => "user.destroy", "id" => $user->id],
                    ]);
                })
                ->addColumn('role', function ($user) {
                    return $user->role->name ?? "not defined";
                })
                ->addColumn("checkbox", function ($row) {
                    return '<input type="checkbox" name="per_checkbox" data-id="' . $row->id . '"> <label></label>';
                })
                ->rawColumns(['action', 'checkbox', "roll"])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $this->userRepository->store($request->validated());
        notify()->success("user is created");
        return redirect()->route("user.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("admin.user.update", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $this->userRepository->update($user, $request->validated());
        notify()->success("user is updated");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "Permissions have been deleted."]);
    }
}
