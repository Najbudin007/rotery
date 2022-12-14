<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (request()->ajax()) {
            $aboutUs = aboutUs::get();
            return datatables()->of($aboutUs)
                ->addColumn('action', function ($aboutUs) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "aboutUs.edit", "id" => $aboutUs->id],
                        'delete' => ["route" => "aboutUs.destroy", "id" => $aboutUs->id],
                    ]);
                })
                ->addColumn("checkbox", function ($row) {
                    return '<input type="checkbox" name="per_checkbox" data-id="' . $row->id . '"> <label></label>';
                })
                ->addColumn("created_at", function ($row) {
                    return $row->created_at =  $row->created_at->diffForHumans();
                })
                ->rawColumns(['action', 'checkbox', "created_at"])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.aboutUs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutUs.create');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes',
            'status' => 'sometimes',
        ]);

        $data =  new aboutUs();

        if (isset($request->image)) {
            $data->image = save_image($request->image);
        }
        // Who we are images section
        if (isset($request->who_image1)) {
            $data->who_image1 = save_image($request->who_image1);
        }
        if (isset($request->who_image2)) {
            $data->who_image2 = save_image($request->who_image2);
        }
        if (isset($request->who_image3)) {
            $data->who_image3 = save_image($request->who_image3);
        }
        if (isset($request->who_image4)) {
            $data->who_image4 = save_image($request->who_image4);
        }

        // Why Us image Section
        if (isset($request->why_image1)) {
            $data->why_image1 = save_image($request->why_image1);
        }
        if (isset($request->why_image2)) {
            $data->why_image2 = save_image($request->why_image2);
        }
        if (isset($request->why_image3)) {
            $data->why_image3 = save_image($request->why_image3);
        }
        if (isset($request->why_image4)) {
            $data->why_image4 = save_image($request->why_image4);
        }

        // Glimpse Image Section
        if (isset($request->glimpse1)) {
            $data->glimpse1 = save_image($request->glimpse1);
        }
        if (isset($request->glimpse2)) {
            $data->glimpse2 = save_image($request->glimpse2);
        }
        if (isset($request->glimpse3)) {
            $data->glimpse3 = save_image($request->glimpse3);
        }

         $data->title = $request->title;
         $data->description = $request->description;
         $data->summary = $request->summary;
         $data->status = $request->status;
         notify()->success("About Us Created Successfully");
         $data -> save();
         return redirect()->route('aboutUs.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(aboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUs = aboutUs::find($id);
        return view('admin.aboutUs.edit', compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = aboutUs::find($id);
        // about banner image 
        if (isset($request->image)) {
            $data->image = save_image($request->image);
        }

        // who we are image Section
        if (isset($request->who_image1)) {
            $data->who_image1 = save_image($request->who_image1);
        }
        if (isset($request->who_image2)) {
            $data->who_image2 = save_image($request->who_image2);
        }
        if (isset($request->who_image3)) {
            $data->who_image3 = save_image($request->who_image3);
        }
        if (isset($request->who_image4)) {
            $data->who_image4 = save_image($request->who_image4);
        }

        // why we are image Section
        if (isset($request->why_image1)) {
            $data->why_image1 = save_image($request->why_image1);
        }
        if (isset($request->why_image2)) {
            $data->why_image2 = save_image($request->why_image2);
        }
        if (isset($request->why_image3)) {
            $data->why_image3 = save_image($request->why_image3);
        }
        if (isset($request->why_image4)) {
            $data->why_image4 = save_image($request->why_image4);
        }

        // Glimpse of images section
        if (isset($request->glimpse1)) {
            $data->glimpse1 = save_image($request->glimpse1);
        }
        if (isset($request->glimpse2)) {
            $data->glimpse2 = save_image($request->glimpse2);
        }
        if (isset($request->glimpse3)) {
            $data->glimpse3 = save_image($request->glimpse3);
        }

         $data->title = $request->title;
         $data->description = $request->description;
         $data->summary = $request->summary;
         $data->status = $request->status;
         notify()->success("About Us Updated Successfully");
         $data -> update();
         return redirect()->route('aboutUs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = aboutUs::find($id);
        $data->delete();
        notify()->success("AboutUs Deleted Successfully");
        return redirect()->back();
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        aboutUs::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "AboutUs have been deleted."]);
    }
}
