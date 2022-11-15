
<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;
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
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SummerNoteController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
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
    Route::resource("/setting", SiteSettingController::class);
    Route::resource("/aboutUs", AboutUsController::class);
    Route::post("/delete_Selected_aboutUs", [AboutUsController::class, "deleteSelected"])->name("delete_Selected_aboutUs");
    Route::post('/editor-upload', [SummerNoteController::class, "store"])->name("editor-upload");
});

// FrontEnd Routes
Route::group(
    ["middleware" => ["auth", "member"], "prefix" => "member"],
    function () {
        Route::get("/dashboard", [MemberController::class, "dashboard"])->name("memberDashboard");
    }
);
Route::get('/about-our-club', [FrontEndController::class, 'aboutUs'])->name('about-our-club');
Route::get('/members/{slug?}', [FrontEndController::class, 'members'])->name('members');
Route::get('/charter-members', [FrontEndController::class, 'charterMembers'])->name('charterMember');
Route::get('/projects/{slug}', [FrontEndController::class, 'singleProject'])->name('singleProject');
Route::get('/projects', [FrontEndController::class, 'allProject'])->name('allProject');
Route::get('/membership', [FrontEndController::class, 'membership'])->name('membership');
Route::get('/contact-us', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/all-news', [FrontEndController::class, 'news'])->name('allNews');
Route::get('/home-about', [FrontEndController::class, 'homeAboutUs'])->name('homeAbout');
Route::get('/rotary-photos', [FrontEndController::class, 'photo'])->name('photo');
Route::get('/rotary-videos', [FrontEndController::class, 'videos'])->name('videos');


require __DIR__ . '/auth.php';
