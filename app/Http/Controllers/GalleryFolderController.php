<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryFolderRequest;
use App\Models\GalleryFolder;
use App\Repository\Gallery\GalleryFolderRepository;
use Illuminate\Http\Request;

class GalleryFolderController extends Controller
{
    private GalleryFolderRepository $galleryFolderRepository;
    public function __construct(GalleryFolderRepository $galleryFolderRepository)
    {
        $this->galleryFolderRepository = $galleryFolderRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.gallery.folder.index", ["folders" => $this->galleryFolderRepository->getAll()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.gallery.folder.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryFolderRequest $request)
    {
        $this->galleryFolderRepository->create($request->validated());
        notify()->success("Folder is created");
        return redirect()->route("gallery-folder.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryFolder  $galleryFolder
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryFolder $galleryFolder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryFolder  $galleryFolder
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryFolder $galleryFolder)
    {
        return view("admin.gallery.folder.update", ["folder" => $galleryFolder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryFolder  $galleryFolder
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryFolderRequest $request, GalleryFolder $galleryFolder)
    {
        $this->galleryFolderRepository->update($galleryFolder->id, $request->validated());
        notify()->success("gallery folder is updated.");
        return redirect()->route("gallery-folder.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryFolder  $galleryFolder
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryFolder $galleryFolder)
    {
        $galleryFolder->delete();
        notify()->success("gallery folder is deleted");
        return redirect()->back();
    }
    public function folderDetails($slug)
    {
        $newData = GalleryFolder::where("slug", $slug)->with("galleries")->get();
        return view("admin.gallery.folder.image.index", ["galleries" => $newData]);
    }
}
