<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $blog = blog::get();
            return datatables()->of($blog)
                ->addColumn('action', function ($blog) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "blogs.edit", "id" => $blog->id],
                        'delete' => ["route" => "blogs.destroy", "id" => $blog->id],
                    ]);
                })
                ->addColumn('image', function ($blogs) {
                    return '<img src="/images/' . $blogs->image . '" style="height:50px;width:100%">';
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
        return view('admin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
        ]);

        $data =  new blog();

        if (isset($request->image)) {
            $data->image = save_image($request->image);
        }
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->author = $request->author;
        $data->status = $request->status;
        notify()->success("Blogs Created Successfully");
        $data-> save();
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = blog::find($id);
        return view('admin.blogs.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data =  blog::find($id);

        if (isset($request->image)) {
            $data->image = save_image($request->image);
        }
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->author = $request->author;
        $data->status = $request->status;
        notify()->success("Blogs Updated Successfully");
        $data->update();
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = blog::find($id);
        $data->delete();
        notify()->success("Blogs Deleted Successfully");
        return redirect()->back();
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        blog::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "Blogs have been deleted."]);
    }
}
