<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Contract\ContractController;
use App\Http\Controllers\Contract\EmployeeContractController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\CertificateController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Employee\EmploymentHistoryController;
use App\Http\Controllers\Employee\FamilyController;
use App\Http\Controllers\Employee\FamilyDetailController;
use App\Http\Controllers\Job\JobPositionController;
use App\Http\Controllers\Job\JobTypeController;
use App\Http\Controllers\Payroll\EmployeeSalaryController;
use App\Http\Controllers\Payroll\SalaryAdvanceController;
use App\Http\Controllers\Payroll\SalaryGenerateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [AuthController::class, 'index'])->name('auth.index');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('employee', EmployeeController::class);
    Route::resource('family', FamilyController::class);
    Route::resource('family-details', FamilyDetailController::class);
    Route::resource('employment-history', EmploymentHistoryController::class);
    Route::resource('certificate', CertificateController::class);

    Route::post('uploadktp', [EmployeeController::class, 'uploadktp'])->name('uploadktp');

    Route::post('uploadkk', [FamilyController::class, 'uploadkk'])->name('uploadkk');

    Route::post('uploadsertif', [CertificateController::class, 'uploadsertif'])->name('uploadsertif');

    Route::resource('employee-contract', EmployeeContractController::class)->only(['index', 'store']);

    Route::get('excelEmployeeSalary', [EmployeeSalaryController::class, 'excelEmployeeSalary'])->name('excelEmployeeSalary');
    Route::get('excelSalaryAdvance', [EmployeeSalaryController::class, 'excelSalaryAdvance'])->name('excelSalaryAdvance');

    Route::resource('employee-salary', EmployeeSalaryController::class);
    Route::get('getSalary', [EmployeeSalaryController::class, 'getSalary'])->name('getSalary');
    Route::get('printPayslip/{id}', [EmployeeSalaryController::class, 'printPaySlip'])->name('printPayslip');

    Route::get('employee-profile/{id}', [ProfileController::class, 'employee'])->name('profile.employee');
    Route::get('family-profile/{id}', [ProfileController::class, 'family'])->name('profile.family');
    Route::get('history/{id}', [ProfileController::class, 'history'])->name('profile.history');
    Route::get('employee-certificate/{id}', [ProfileController::class, 'certificate'])->name('profile.certificate');
    Route::get('salary/{id}', [ProfileController::class, 'salary'])->name('profile.salary');

    Route::resource('user', UserController::class)->only(['edit', 'update']);
});

Route::group(['middleware' => ['auth', 'NotStaff']], function () {
    Route::resource('contract', ContractController::class);
    Route::get('getContract', [ContractController::class, 'getContract'])->name('getContract');
    Route::resource('employee-contract', EmployeeContractController::class)->only(['show', 'edit', 'update']);

    Route::resource('salary-advance', SalaryAdvanceController::class);
    Route::resource('salary-generate', SalaryGenerateController::class);

    Route::resource('job-position', JobPositionController::class);
    Route::resource('job-type', JobTypeController::class);
});

Route::group(['middleware' => ['auth', 'DirectorManager']], function () {
    Route::resource('employee', EmployeeController::class)->only('destroy');
    Route::resource('employee-contract', EmployeeContractController::class)->only('destroy');

    Route::resource('user', UserController::class);
});

Route::fallback(function () {
    abort(404);
});

Route::get('/asd', function () {
    return view('profile.riwayat-pekerjaan');
});
