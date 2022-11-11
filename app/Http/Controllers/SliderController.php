<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Repository\Slider\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    private SliderRepository $sliderRepository;
    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            return datatables()->of($this->sliderRepository->getAll())
                ->addColumn('action', function ($slider) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "slider.edit", "id" => $slider->id],
                        'delete' => ["route" => "slider.destroy", "id" => $slider->id],
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
        return view('admin.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.sliders.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $data = $request->validated();
        $this->sliderRepository->create($data);
        notify()->success("slider is created");
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view("admin.sliders.update", compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $this->sliderRepository->update($slider->id, $request->validated());
        notify()->success("slider is updated");
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        notify()->success("slider is deleted");
        return redirect()->back();
    }
    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        Slider::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "Sliders have been deleted."]);
    }
}
