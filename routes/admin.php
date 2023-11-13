<?php

use App\Models\Admin\ProductTwo;
use Illuminate\Support\Facades\Route;
use App\Models\Admin\LeaveApplications;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\SmtpsController;
use App\Http\Controllers\Admin\StepsController;
use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\BankingsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\AddressesController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\VatAndTaxController;
use App\Http\Controllers\Admin\HrPoliciesController;
use App\Http\Controllers\Admin\NewsTrendsController;
use App\Http\Controllers\Admin\ProductTwoController;
use App\Http\Controllers\KPI\ManagementKpiController;
use App\Http\Controllers\Admin\DynamicCategorieController;
use App\Http\Controllers\Admin\EmployeeCategoryController;
use App\Http\Controllers\Admin\SalesTeamTargetsController;
use App\Http\Controllers\Admin\SalesYearTargetsController;
use App\Http\Controllers\Admin\TermsAndPoliciesController;
use App\Http\Controllers\Admin\LeaveApplicationsController;
use App\Http\Controllers\Admin\EmployeeDepartmentController;
use App\Http\Controllers\Admin\PolicyAcknowledgmentsController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('administrator')->group(static function () {

    // Guest routes
    Route::middleware('guest:admin')->group(static function () {
        // Auth routes
        Route::get('login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::post('login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store']);
        // Forgot password
        Route::get('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'create'])->name('admin.password.request');
        Route::post('forgot-password', [\App\Http\Controllers\Admin\Auth\PasswordResetLinkController::class, 'store'])->name('admin.password.email');
        // Reset password
        Route::get('reset-password/{token}', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'create'])->name('admin.password.reset');
        Route::post('reset-password', [\App\Http\Controllers\Admin\Auth\NewPasswordController::class, 'store'])->name('admin.password.update');
    });

    // Verify email routes
    Route::middleware(['auth:admin'])->group(static function () {
        Route::get('verify-email', [\App\Http\Controllers\Admin\Auth\EmailVerificationPromptController::class, '__invoke'])->name('admin.verification.notice');
        Route::get('verify-email/{id}/{hash}', [\App\Http\Controllers\Admin\Auth\VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('admin.verification.verify');
        Route::post('email/verification-notification', [\App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('admin.verification.send');
    });

    // Authenticated routes
    Route::middleware(['auth:admin', 'verified'])->group(static function () {
        // Confirm password routes
        Route::get('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'show'])->name('admin.password.confirm');
        Route::post('confirm-password', [\App\Http\Controllers\Admin\Auth\ConfirmablePasswordController::class, 'store']);
        // Logout route
        Route::post('logout', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
        // General routes
        Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.index');
        Route::get('profile', [\App\Http\Controllers\Admin\HomeController::class, 'profile'])->middleware('password.confirm.admin')->name('admin.profile');
        Route::resources([
            'vat-tax'              =>   VatAndTaxController::class,
            'employee-category'    =>   EmployeeCategoryController::class,
            'employee-department'  =>   EmployeeDepartmentController::class,
            'category'             =>   CategoryController::class,
            'brand'                =>   BrandController::class,
            'attribute'            =>   AttributeController::class,
            'colors'               =>   ColorsController::class,
            'smtps'                =>   SmtpsController::class,
            'products'             =>   StepsController::class,
            'industry'             =>   IndustryController::class,
            'product-two'          =>   ProductTwoController::class,
            'companies'            =>   CompaniesController::class,
            'leave-application'    =>   LeaveApplicationsController::class,
            'banking'              =>   BankingsController::class,
            'management-kpi'       =>   ManagementKpiController::class,


            'seo'                  =>   SeoController::class,
            'addresse'             =>   AddressesController::class,
            'dynamic-categorie'    =>   DynamicCategorieController::class,
            'event'                =>   EventsController::class,
            'faq'                  =>   FAQController::class,
            'sales-year-target'    =>   SalesYearTargetsController::class,
            'sales-team-target'    =>   SalesTeamTargetsController::class,
            'news-trend'           =>   NewsTrendsController::class,
            'hr-policie'           =>   HrPoliciesController::class,
            'policy-acknowledgment'=>   PolicyAcknowledgmentsController::class,
            'terms-policies'       =>   TermsAndPoliciesController::class,











        ]);
    });
});
