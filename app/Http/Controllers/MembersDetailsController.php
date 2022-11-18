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
            $aboutUs = membersDetails::get();
            return datatables()->of($aboutUs)
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'experties_area' => 'required',
            'duty_stations' => 'required',
            'job_title' => 'required',
        ]);


        $input = $request->all();

        membersDetails::create($input);

        return redirect()->back()->with('success' , 'Members Added  Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\membersDetails  $membersDetails
     * @return \Illuminate\Http\Response
     */
    public function show(membersDetails $membersDetails)
    {
        //
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
