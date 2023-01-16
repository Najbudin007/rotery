<?php

namespace App\Http\Controllers;

use App\Models\membersDetails;
use Illuminate\Http\Request;

class MembersDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $aboutUs = membersDetails::latest()->get();
            return datatables()->of($aboutUs)
                ->addColumn('action', function ($user) {
                    return view('components.tableButton', [
                        'view' => ["route" => "memberForm.show", "id" => $user->id],
                        // 'delete' => ["route" => "user.destroy", "id" => $user->id],
                    ]);
                })
                ->rawColumns(['action'])

                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.memberdetail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => "sometimes",
            'middle_name' => "sometimes",
            'family_name' => "sometimes",
            'dob' => "sometimes",
            'gender' => "sometimes",
            'married' => "sometimes",
            'former_member' => "sometimes",
            'alumnus' => "sometimes",
            'email' => "sometimes",
            'home_address' => "sometimes",
            'phone_number' => "sometimes",
            'country' => "sometimes",
            'postal_code' => "sometimes",
            'alternative_phone_number' => "sometimes",
            'mail_address' => "sometimes",
            "alternative_phone_number" => "sometimes",
            "job_title" => "sometimes",
            "res_business" => "sometimes",
            "classification" => "sometimes",
            "business_address" => "sometimes",
            "business_telephone" => "sometimes",
            "fax" => "sometimes",
            "business_email" => "sometimes",
            "residence" => "sometimes",
            "others" => "sometimes",
            "business" => "sometimes",
            "alternate_address" => "sometimes",
        ]);


        $input = $request->all();

        membersDetails::create($input);

        return redirect()->back()->with('success', 'Members Added  Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\membersDetails  $membersDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membersDetails = membersDetails::find($id);
        return view('admin.memberdetail.view', ["detail" => $membersDetails]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\membersDetails  $membersDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(membersDetails $membersDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\membersDetails  $membersDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, membersDetails $membersDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\membersDetails  $membersDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(membersDetails $membersDetails)
    {
        //
    }
}
