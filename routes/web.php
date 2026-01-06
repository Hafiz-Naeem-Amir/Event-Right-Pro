<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Site\EventReport;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScennerController;
use App\Http\Controllers\Site\FAQController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\site\AboutController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\DynamicController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Site\SiteBlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Site\SiteEventController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Site\EventReportController;
use App\Http\Controllers\Site\SitePrivacyController;
use App\Http\Controllers\Admin\AdminCouponController;
use App\Http\Controllers\Site\SiteCategoryController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminNotificationController;


// site Routes
Route::get('/home', [DynamicController::class, 'pages'])->name('site.home');
Route::get('site/blog', [SiteBlogController::class, 'index'])->name('site.blog');
Route::get('site/event', [SiteEventController::class, 'index'])->name('site.events');
Route::get('site/contact', [ContactController::class, 'index'])->name('site.contact');
Route::post('site/contact/store', function () {
    return 'ROUTE HIT';
});

Route::post('site/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('site/category', [SiteCategoryController::class, 'index'])->name('site.category');
Route::get('site/FAQ', [FAQController::class, 'index'])->name('site.FAQ');

// Route::get('/events-category/{id}/{any}', [DynamicController::class, 'getcategory'])->name('site.category');
Route::get('event-detail/{id}', [DynamicController::class, 'eventDetail']);
Route::get('/blog-details/{id}', [DynamicController::class, 'getBlogdetail']);
Route::get('/event-category/{id}/{any}', [DynamicController::class, 'getcategory']);
Route::get('category/{id}', [DynamicController::class, 'all_category'])->name('category');
Route::get('site/privacy', [SitePrivacyController::class, 'index'])->name('site.privacy');
Route::post('/report-event', [EventReportController::class, 'store'])->name('report.event');



// Dashboard route – role based
Route::get('/dashboard', function () {
    $role = auth()->user()->user_type;

    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if ($role === 'organizer') {
        return redirect()->route('organizer.dashboard');
    }

    return redirect()->route('user.dashboard');
})->middleware('auth')->name('dashboard');

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    //user//
    Route::get('/admin/users', [AuthController::class, 'index'])->name('admin.users');
    Route::get('/admin/create', [AuthController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/user/store', [AuthController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/user/edit/{id}', [AuthController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/user/update/{id}', [AuthController::class, 'update'])->name('admin.user.update');
    Route::post('/admin/user/delete/{id}', [AuthController::class, 'destroy'])->name('admin.users.delete');
    ///orders//
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('/admin/orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
    Route::post('/admin/orders/store', [OrderController::class, 'store'])->name('admin.orders.store');
    Route::get('/admin/orders/edit/{id}', [OrderController::class, 'edit'])->name('admin.orders.edit');
    Route::post('/admin/orders/update/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/admin/orders/delete/{id}', [OrderController::class, 'destroy'])->name('admin.orders.delete');
    //category//
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::post('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    //notification//
    Route::get('/admin/notification', [AdminNotificationController::class, 'index'])->name('admin.notification');
    Route::post('/admin/notification/store', [AdminNotificationController::class, 'store'])->name('admin.notification.store');
    //blogs
    Route::get('/admin/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
    Route::get('/admin/blog/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog/store', [AdminBlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blog/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blog/update/{id}', [AdminBlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blog/delete/{id}', [AdminBlogController::class, 'destroy'])->name('admin.blog.delete');
    //events//
    Route::get('/admin/events', [EventsController::class, 'index'])->name('admin.events');
    Route::get('/admin/events/create', [EventsController::class, 'create'])->name('admin.events.create');
    Route::post('/admin/events/store', [EventsController::class, 'store'])->name('admin.events.store');
    Route::get('/admin/events/edit/{id}', [EventsController::class, 'edit'])->name('admin.events.edit');
    Route::put('/admin/events/update/{id}', [EventsController::class, 'update'])->name('admin.events.update');
    Route::delete('/admin/events/delete/{id}', [EventsController::class, 'destroy'])->name('admin.events.delete');
    Route::get('/admin/events/details', [EventsController::class, 'details'])->name('admin.events.details');
    Route::get('/admin/events/galery/{id}', [EventsController::class, 'show'])->name('admin.events.galery');
    Route::get('admin/events/{id}/delete-image/{image}', [EventsController::class, 'deleteImage'])->name('admin.events.deleteImage');
    Route::post('/add-event-gallery', [EventsController::class, 'addGalleryImages'])->name('admin.events.addGallery');
    //pages//
    Route::get('/admin/pages', [PageController::class, 'index'])->name('admin.pages');
    Route::get('/admin/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
    Route::post('/admin/pages/store', [PageController::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/edit/{id}', [PageController::class, 'edit'])->name('admin.pages.edit');
    Route::post('/admin/pages/update/{id}', [PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('/admin/pages/delete/{id}', [PageController::class, 'destroy'])->name('admin.pages.delete');
    // scanner
    Route::get('/admin/scanner', [ScennerController::class, 'index'])->name('admin.scanner');
    Route::get('/admin/scanner/create', [ScennerController::class, 'create'])->name('admin.scanner.create');
    Route::post('/admin/scanner/store', [ScennerController::class, 'store'])->name('admin.scanner.store');
    // wallet transaction
    Route::get('/admin/wallet', [AdminController::class, 'wallet'])->name('admin.wallet');
    // coupon
    Route::get('/admin/coupon', [AdminCouponController::class, 'index'])->name('admin.coupon');
    Route::get('/admin/coupon/create', [AdminCouponController::class, 'create'])->name('admin.coupon.create');
    // content
    Route::get('/admin/content', [ContentController::class, 'index'])->name('admin.content');
    Route::get('/admin/content/create', [ContentController::class, 'create'])->name('admin.content.create');
    Route::post('/admin/content/store', [ContentController::class, 'store'])->name('admin.content.store');
    Route::get('/admin/content/edit/{id}', [ContentController::class, 'edit'])->name('admin.content.edit');
    Route::post('/admin/content/update/{id}', [ContentController::class, 'update'])->name('admin.content.update');
    Route::delete('/admin/content/delete/{id}', [ContentController::class, 'destroy'])->name('admin.content.delete');
    // setting
    Route::get('/admin/setting', [AdminSettingController::class, 'index'])->name('admin.setting');
    Route::post('/admin/setting/store', [AdminSettingController::class, 'store'])->name('admin.setting.store');
Route::put('/admin/setting/update/{id}', [AdminSettingController::class, 'update'])->name('admin.setting.update');
});

// Organizer routes
Route::middleware(['auth', 'role:organizer'])->group(function () {
    Route::get('/organizer/dashboard', function () {
        return view('organizer.dashboard');
    })->name('organizer.dashboard');

    Route::get('/organizer/events', function () {
        return view('organizer.event');
    })->name('organizer.events');

    Route::get('/organizer/settings', function () {
        return view('organizer.setting');
    })->name('organizer.settings');
});

// User routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    Route::get('/user/profile', function () {
        return view('user.profile');
    })->name('user.profile');
});

// Profile routes – accessible to all logged in users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__ . '/auth.php';
Route::get('/{any}', [DynamicController::class, 'Pages'])->where('any', '.*');
