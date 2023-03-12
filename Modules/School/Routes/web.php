<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// School
Route::middleware(['auth', 'admin'])->prefix('school')->group(function () {
    // // Session
    // Route::prefix('session')->group(function () {
    //     Route::post('/create', [\Modules\School\Http\Livewire\Session\CreateSession::class, '__invoke'])->name('school.session.create');
    //     Route::post('/browse', [\Modules\School\Http\Livewire\Session\BrowseBySession::class, '__invoke'])->name('school.session.browse');
    // });
    //
    // // Attendance
    // Route::prefix('attendance')->group(function () {
    //     Route::get('/attendance-type-update', [\Modules\School\Http\Livewire\Attendance\AttendanceTypeUpdate::class, '__invoke'])->name('school.attendance.attendance-type-update');
    // });
    //
    // Class
    // Route::prefix('class')->group(function () {
    //     Route::get('', [\Modules\School\Http\Livewire\Class\ViewClasses::class, '__invoke'])->name('school.class');
    // });
    //
    // // Student
    // Route::prefix('student')->group(function () {
    //     Route::get('', [\Modules\School\Http\Livewire\Student\Students::class, '__invoke'])->name('school.student');
    // });
    //
    // // Section
    // Route::prefix('class')->group(function () {
    //     Route::get('create', [\Modules\School\Http\Livewire\Section\CreateSection::class, '__invoke'])->name('school.section.create');
    // });
    //
    // // Teacher
    // Route::prefix('class')->group(function () {
    //     Route::get('assign-teacher', [\Modules\School\Http\Livewire\Teacher\AssignTeacher::class, '__invoke'])->name('school.teacher.assign-teacher');
    // });
    //
    //
    // Route::prefix('mark')->group(function () {
    //     Route::post('update-final-marks-submission-status', [\Modules\School\Http\Livewire\Mark\UpdateFinalMarksSubmissionStatus::class, '__invoke'])->name('school.mark.update-final-marks-submission-status');
    // });
});
