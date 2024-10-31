<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ContactController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects=Project::all();
    $abouts=About::all();
    $skills=Skill::all();

    return view('user.master' , compact('projects' , 'abouts' , 'skills'));
});

//   details contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
//Route::get('/admin/dashboard/contacts', [ContactController::class, 'showContacts'])->name('contacts.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');













// Admin routes with prefix 'admin'
Route::prefix('admin')->name('admin.')->group(function () {
    // Show admin login form
    Route::get('/login', [DashboardController::class, 'showLoginForm'])->name('login');
    // Handle admin login
    Route::post('/login', [DashboardController::class, 'adminlogin'])->name('login.submit');
    // Show admin registration form
    Route::get('/register', [DashboardController::class, 'showRegistrationForm'])->name('register');
    // Handle admin registration
    Route::post('/register', [DashboardController::class, 'adminregister'])->name('register.submit');

});
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/index', [DashboardController::class, 'dashboard'])->name('index');

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    // عرض نموذج لإنشاء مشروع جديد
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    // تخزين مشروع جديد
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    // عرض مشروع واحد
    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
    // عرض نموذج لتحرير مشروع
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    // تحديث مشروع موجود
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    // حذف مشروع
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

//    هذا خاص ب about


    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    // عرض نموذج إنشاء سجل جديد
    Route::get('about/create', [AboutController::class, 'create'])->name('about.create');
    // تخزين سجل جديد
    Route::post('about', [AboutController::class, 'store'])->name('about.store');
    // عرض نموذج تعديل سجل معين
    Route::get('about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    // تحديث سجل معين
    Route::put('about/{id}', [AboutController::class, 'update'])->name('about.update');
    // حذف سجل معين
    Route::delete('about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');
    // عرض سجل معين
    Route::get('about/{id}', [AboutController::class, 'show'])->name('about.show');



// عرض جميع التجارب
        // عرض جميع المهارات
        Route::get('/skills', [SkillsController::class, 'index'])->name('skills.index');

        // عرض نموذج إضافة مهارة جديدة
        Route::get('/skills/create', [SkillsController::class, 'create'])->name('skills.create');

        // تخزين مهارة جديدة
        Route::post('/skills', [SkillsController::class, 'store'])->name('skills.store');

        // عرض مهارة معينة
        Route::get('/skills/{skill}', [SkillsController::class, 'show'])->name('skills.show');

        // عرض نموذج تعديل مهارة معينة
        Route::get('/skills/{skill}/edit', [SkillsController::class, 'edit'])->name('skills.edit');

        // تحديث مهارة معينة
        Route::put('/skills/{skill}', [SkillsController::class, 'update'])->name('skills.update');

        // حذف مهارة معينة
        Route::delete('/skills/{skill}', [SkillsController::class, 'destroy'])->name('skills.destroy');

    Route::get('/contacts', [ContactController::class, 'showContacts'])->name('contacts.show');
    Route::get('/messages', [ContactController::class, 'showMessages'])->name('messages.show');
    Route::get('/dashboard', [ContactController::class, 'showDashboard'])->name('dashboard');
    Route::post('/messages/{id}/read', [ContactController::class, 'readMessage'])->name('messages.read');






});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
