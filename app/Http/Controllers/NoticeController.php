<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use App\Repository\Notice\NoticeRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    private NoticeRepository $noticeRepository;
    public function __construct(NoticeRepository $noticeRepository)
    {
        $this->noticeRepository = $noticeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Notice::select('*'))
                ->addColumn('action', function ($notice) {
                    return view('components.tableButton', [
                        'edit' => ["route" => "notice.edit", "id" => $notice->id],
                        'delete' => ["route" => "notice.destroy", "id" => $notice->id],
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
        return view('admin.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.notice.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        $this->noticeRepository->create($request->validated());
        notify()->success("slider is created");
        return redirect()->route('notice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view("admin.notice.update", compact("notice"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, Notice $notice)
    {
        $this->noticeRepository->update($notice->id, $request->validated());

        notify()->success("Notice is updated");
        return redirect()->route('notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();
        notify()->success("notice is created");
        return redirect()->back();
    }
    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;
        Notice::whereIn('id', $ids)->delete();
        return response()->json(["code" => 1, "msg" => "Notices have been deleted."]);
    }
}
