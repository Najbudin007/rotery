
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryFolderController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layouts.master');
});


Route::group(["middleware" => ["auth", "admin"]], function () {

    Route::get("/dashboard", [AdminController::class, "dashboard"])->name("dashboard");
    Route::resource("/user", UserController::class);
    Route::post("/deleteSelectedUser", [UserController::class, "deleteSelected"])->name("deleteSelectedUser");

    Route::resource("/role", RoleController::class);
    Route::post("/deleteSelectedRole", [RoleController::class, "deleteSelected"])->name("deleteSelectedRole");

    Route::resource("/permission", PermissionController::class);
    Route::post("/deleteSelectedPermission", [PermissionController::class, "deleteSelected"])->name("deleteSelectedPermission");

    Route::resource("/slider", SliderController::class);
    Route::post("/deleteSelectedSlider", [SliderController::class, "deleteSelected"])->name("deleteSelectedSlider");

    Route::resource("/notice", NoticeController::class);
    Route::post("/deleteSelectedNotice", [NoticeController::class, "deleteSelected"])->name("deleteSelectedNotice");

    Route::resource("/testimonial", TestimonialController::class);
    Route::post("/deleteSelectedTestimonial", [TestimonialController::class, "deleteSelected"])->name("deleteSelectedTestimonial");

    Route::resource("/news", NewsController::class);
    Route::post("/deleteSelectedNews", [NewsController::class, "deleteSelected"])->name("deleteSelectedNews");
    Route::delete("/deleteNewsFile", [NewsController::class, "deleteFile"])->name("deleteFile");

    Route::resource("/gallery-folder", GalleryFolderController::class);
    Route::get("/folder/{slug}", [GalleryFolderController::class, "folderDetails"])->name("folderDetail");
    Route::post("/upload-image", [GalleryController::class, "store"])->name("uploadImages");
    Route::delete("/delete-image", [GalleryController::class, "destroy"])->name("deleteImage");
    Route::resource("/gallery-images", GalleryController::class);

    Route::get("/add-video/{slug}", [GalleryController::class, "createVideo"])->name("createVideo");
    Route::post("/store-video", [GalleryController::class, "storeVideo"])->name("storeVideo");
    Route::get("/edit-video/{id}", [GalleryController::class, "editVideo"])->name("editVideo");
    Route::post("/update-video/{id}", [GalleryController::class, "updateVideo"])->name("updateVideo");
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource("/mail", MailController::class);
    Route::resource("/project-type", ProjectTypeController::class);
    Route::resource("/project", ProjectController::class);
});
Route::group(
    ["middleware" => ["auth", "member"], "prefix" => "member"],
    function () {
        Route::get("/dashboard", [MemberController::class, "dashboard"])->name("memberDashboard");
    }
);
require __DIR__ . '/auth.php';
