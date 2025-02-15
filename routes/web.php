<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Presensi;
use App\Exports\AttendanceExport;

Route::group(['middleware' => 'auth'], function () {
    Route::get('presensi', Presensi::class)->name('presensi');
    Route::get('attendance/export', function () {
        return \Maatwebsite\Excel\Facades\Excel::download(
            new AttendanceExport(),
            'attendances.xlsx'
        );
    })->name('attendance-export');
});

Route::get('/login', function () {
    return redirect('admin/login');
})->name('login');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('selamatdatang');
});
