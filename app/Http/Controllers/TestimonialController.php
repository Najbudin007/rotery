<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Repository\Testimonial\TestimonialRepository;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private TestimonialRepository $testimonialRepository;
    public function __construct(TestimonialRepository $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            return datatables()->of($this->testimonialRepository->getAll())
                ->addColumn('action', function ($testimonial) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "testimonial.edit", "id" => $testimonial->id],
                        'delete' => ["route" => "testimonial.destroy", "id" => $testimonial->id],
                    ]);
                })
                ->addColumn('image', function ($user) {
                    return '<img src="/images/' . $user->image . '" style="height:50px;width:100%">';
                })
                ->addColumn("checkbox", function ($row) {
                    return '<input type="checkbox" name="per_checkbox" data-id="' . $row->id . '"> <label></label>';
                })
                ->rawColumns(['action', 'checkbox', "image"])
                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.testimonial.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $this->testimonialRepository->create($request->validated());
        notify()->success("testimonial is created");
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view("admin.testimonial.update", compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $this->testimonialRepository->update($testimonial->id, $request->validated());
        notify()->success("testimonial is updated");
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        notify()->success("testimonial is deleted");
        return redirect()->back();
    }
    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        Testimonial::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "Testimonials have been deleted."]);
    }
}
