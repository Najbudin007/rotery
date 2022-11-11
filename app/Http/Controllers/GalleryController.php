<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryImageRequest;
use App\Models\Gallery;
use App\Models\GalleryFolder;
use Illuminate\Http\Request;
use App\Repository\Gallery\GalleryRepository;

class GalleryController extends Controller
{
    private GalleryRepository $galleryRepository;
    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(GalleryImageRequest $request)
    {
        $this->galleryRepository->create($request->validated());
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view("admin.gallery.folder.image.update", compact("gallery"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryImageRequest $request, Gallery $gallery)
    {
        $this->galleryRepository->update($gallery, $request->validated());
        notify()->success("gallery is updated");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->galleryRepository->deleteGallery($request->all());
        return true;
    }
    public function createVideo($slug)
    {
        $folder_id = GalleryFolder::where("slug", $slug)->first();

        return view("admin.gallery.folder.video.create", ["folder_id" => $folder_id->id]);
    }
    public function storeVideo(GalleryImageRequest $request)
    {
        $this->galleryRepository->storeVideo($request->validated());
        notify()->success("gallery video is added");
        return redirect()->back();
    }
    public function editVideo($id)
    {
        $video = Gallery::find($id);
        return view("admin.gallery.folder.video.update", compact("video"));
    }
    public function updateVideo(GalleryImageRequest $request, $id)
    {
        $this->galleryRepository->updateVideo($request->validated(), $id);
        notify()->success("gallery video is updated");
        return redirect()->back();
    }
}
