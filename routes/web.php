<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Account\SigninController;
use App\Http\Controllers\Account\SignupController;
use App\Http\Controllers\Account\SignoutController;
use App\Http\Controllers\JoinRequest\JoinRequestController;
use App\Http\Controllers\Message\MessageController;
use App\Http\Controllers\Reservation\ReservationController;
use App\Http\Controllers\Tenant\TenantReservationController;
use App\Http\Controllers\Tenant\HallController;
use App\Http\Controllers\Content\ContentController;
use App\Http\Controllers\Platform\FacilitiesController;
use App\Http\Controllers\Message\TenantMessageController;
use App\Http\Controllers\Location\DirectorateController;
use App\Http\Controllers\User\ProfileController;
// use App\Http\Controllers\Content\ContentController;
// use App\Http\Controllers\Message\Message;

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
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'show')->name('front.home');
    Route::post('/facilities', 'search')->name('front.facilities');
    // Route::get('/facilities/main/{name}', 'main')->name('front.facilities.main');
    Route::get('/facilities/main/{name}', 'main')->name('front.facilities.main');
    Route::get('/facilities/main/{name}/details', 'details')->name('front.facilities.details');
    // Route::get('/sendmail', 'sendEmail')->name('mail');
    
    // Route::post('/facilities/main/{name}/details','reservation')->name('front.facilities.reservation');
});

// Route::post('/',[MessageController::class, 'store'])->name('front.store');
//
Route::get('/signin', [SigninController::class, 'view'])->name('signin');
Route::post('/signin', [SigninController::class, 'authenticate']);
//
Route::get('/signup', [SignupController::class, 'view'])->name('signup.view');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::middleware('auth')->group(function(){
    Route::post('/signout', [SignoutController::class, 'signout'])->name('signout');
    Route::controller(JoinRequestController::class)->group(function(){
        Route::get('/joinRequest/facilityInfo','viewInfo')->name('facilityInfo');
        Route::post('/joinRequest/facilityInfo','storeInfo');

        Route::get('/joinRequest/facilityDetails', 'viewDetails')->name('facilitydetails');
        Route::post('/joinRequest/facilityDetails','storeDetails')->name('facilitydetails.store');
        
        Route::get('/joinRequest/facilityInfo/underview', 'underview')->name('underview');

        Route::get('/platform/requests/index','index')->name('requests.index');
        Route::get('/platform/requests/{name}/view','view')->name('requests.view');

        Route::post('/platform/requests/confirm/{name}','confirm')->name('requests.confirm');
        Route::post('/platform/requests/reject/{name}','reject')->name('requests.reject');
        Route::post('/platform/requests/reject/{name}','reject')->name('requests.reject');

    });
});

Route::controller(ReservationController::class)->group(function(){
        Route::post('/facilities/main/{name}/details','reservationCheck')->name('front.facilities.reservationCheck');
        Route::get('/user/reservations/index','userReservations')->name('user.reservation');
        Route::get('/user/reservations/details/{id}','reservationDetails')->name('user.reservation.Detail');
        Route::post('/user/reservations/cancel','reservationCancel')->name('user.reservation.Cancel');
        Route::post('/user/reservations/details/{id}','upload')->name('user.reservation.upload');
});

Route::controller(TenantReservationController::class)->group(function(){
    Route::get('/tenant/reservations/index','index')->name('tentant.reservation');
    Route::get('/tenant/reservations/{name}/list','reservationList')->name('tentant.reservation.list');
    Route::get('/tenant/reservations/{id}/view','view')->name('tentant.reservation.view');
    Route::post('/tenant/reservations/confirm','confirm')->name('tentant.reservation.confirming');
    Route::post('/tenant/reservations/reject','reject')->name('tentant.reservation.reject');
});

Route::controller(HallController::class)->group(function(){
    Route::get('/tenant/halls/index','index')->name('tenant.hall');
    Route::get('/tenant/halls/{name}/view','view')->name('tenant.hall.view');
    Route::get('/tenant/halls/add','add')->name('tenant.hall.add');
    Route::post('/tenant/halls/add','store')->name('tenant.hall.store');
    Route::get('/tenant/halls/{name}/edit','edit')->name('tenant.hall.edit');
    Route::post('/tenant/halls/edit','update')->name('tenant.hall.update');
});
Route::controller(ContentController::class)->group(function(){
    Route::get('/tenant/content','index')->name('tenant.content');
    Route::get('/tenant/content/{name}/services','service')->name('tenant.content.services');
    Route::post('/tenant/content/services','addService')->name('tenant.content.addService');
    Route::get('/tenant/content/{name}/extraservice','extraservice')->name('tenant.content.extraservice');
    Route::post('/tenant/content/extraservice','addExtraservice')->name('tenant.content.addExtraservice');
    Route::get('/tenant/content/{name}/durations','duration')->name('tenant.content.duration');
    Route::post('/tenant/content/addduration','addduration')->name('tenant.content.addduration');
    Route::get('/tenant/content/{name}/occasions','occasion')->name('tenant.content.occasion');
    Route::post('/tenant/content/occasions','addoccasion')->name('tenant.content.addoccasion');
    Route::get('/tenant/content/{name}/about','about')->name('tenant.content.about');
    Route::post('/tenant/content/about','editabout')->name('tenant.content.editabout');
    Route::get('/tenant/content/{name}/contact','contact')->name('tenant.content.contact');
    Route::post('/tenant/content/contact','editcontact')->name('tenant.content.editcontact');
    Route::get('/tenant/content/{name}/payment','payment')->name('tenant.content.payment');
    Route::post('/tenant/content/payment','addpayment')->name('tenant.content.addpayment');
    Route::get('/tenant/content/{name}/logo','logo')->name('tenant.content.logo');
    Route::post('/tenant/content/logo','editlogo')->name('tenant.content.editlogo');
});

Route::controller(FacilitiesController::class)->group(function(){
    Route::get('/platform/facilities/index','index')->name('platform.facility');
    Route::get('/platform/facilities/{name}/view','view')->name('platform.facility.view');
    
});
Route::get('/joinRequest/facilityInfo/submit',[JoinRequestController::class,'submitdone'])->name('submitdone');
Route::post('/tenant/messages/send', [TenantMessageController::class, 'store'])->name('tenant.messages.store');
Route::controller(TenantMessageController::class)->group(function(){
    // Route::post('/tenant/messages/send','store')->name('tenant.messages.store');
    Route::get('/tenant/messages/index','index')->name('tenant.messages.index');
    // Route::post('/tenant/messages/replay','sendreplay')->name('tenant.messages.replay');
    Route::get('tenant/messages/view/{id}', 'view')->name('tenant.messages.view');
    Route::delete('tenant/messages/delete', 'destroy')->name('tenant.messages.destroy');
});
Route::post('/tenant/messages/replay',[TenantMessageController::class,'sendreplay'])->name('tenant.messages.replay');

// Route::get('joinerequest', function(){
//     return view('front.joinrequest');
// })->name('front.joinerequest');
//platform
// user
Route::get('platform/dashboard', function(){
    return view('platform.dashboard');
})->name('platform.dashboard');

Route::get('platform/users', function(){
    return view('platform.users.index');
})->name('users');

Route::get('platform/users/add', function(){
    return view('platform.users.add');
})->name('users.create');

Route::get('platform/users/view', function(){
    return view('platform.users.view');
})->name('users.view');

Route::get('platform/users/edit', function(){
    return view('platform.users.edit');
})->name('users.edit');

Route::get('platform/users/delete', function(){
    return view('platform.users.delete');
})->name('users.delete');

// role
Route::get('platform/roles', function(){
    return view('platform.roles.index');
})->name('roles');

Route::get('platform/roles/add', function(){
    return view('platform.roles.add');
})->name('roles.create');

Route::get('platform/roles/edit', function(){
    return view('platform.roles.edit');
})->name('roles.edit');

Route::get('platform/roles/delete', function(){
    return view('platform.roles.delete');
})->name('roles.delete');

Route::get('platform/roles/view', function(){
    return view('platform.roles.view');
})->name('roles.view');


// message
Route::post('/messages/send', [MessageController::class, 'store'])->name('messages.store');
Route::controller(MessageController::class)->group(function(){
    Route::get('/platform/messages/index','index')->name('messages.index');
    Route::get('/platform/messages/view/{id}', 'view')->name('messages.view');
    Route::delete('/platform/messages/delete/{id}', 'destroy')->name('messages.destroy');
    Route::post('/tenant/messages/replay', 'sendreplay')->name('messages.sendreplay');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/user/profile/{id}','view')->name('user.profile');
    Route::post('/user/profile/update','update')->name('user.profile.update');

});
// Route::get('platform/messages/index', function(){
// })->name('messages.index');

// Route::get('platform/messages/view', function(){
//     return view('platform.messages.view');
// })->name('messages.view');

Route::get('platform/messages/delete', function(){
    return view('platform.messages.delete');
})->name('messages.delete');

//halls
// Route::get('platform/halls/index', function(){
//     return view('platform.halls.index');
// })->name('halls.index');

Route::get('platform/halls/view', function(){
    return view('platform.halls.view');
})->name('halls.view');

Route::get('platform/halls/block', function(){
    return view('platform.halls.block');
})->name('halls.block');

//content
Route::get('platform/content/index', function(){
    return view('platform.content.index');
})->name('content.index');

Route::get('platform/content/logo', function(){
    return view('platform.content.logo');
})->name('content.logo');

Route::get('platform/content/banner', function(){
    return view('platform.content.banner');
})->name('content.banner');

Route::get('platform/content/description', function(){
    return view('platform.content.description');
})->name('content.description');

Route::get('platform/content/about', function(){
    return view('platform.content.about');
})->name('content.about');

Route::get('platform/content/services', function(){
    return view('platform.content.services');
})->name('content.services');

Route::get('platform/content/howregister', function(){
    return view('platform.content.howregister');
})->name('content.howregister');

Route::get('platform/content/contact', function(){
    return view('platform.content.contact');
})->name('content.contact');

Route::get('platform/content/socialmedia', function(){
    return view('platform.content.socialmedia');
})->name('content.socialmedia');



//city
Route::get('platform/city/index', function(){
    return view('platform.city.index');
})->name('city.index');

Route::get('platform/city/add', function(){
    return view('platform.city.add');
})->name('city.add');

//tenant
// user
Route::get('tenant/users', function(){
    return view('tenant.users.index');
})->name('tenant.users');

Route::get('tenant/users/add', function(){
    return view('tenant.users.add');
})->name('tenant.users.create');

Route::get('tenant/users/view', function(){
    return view('tenant.users.view');
})->name('tenant.users.view');

Route::get('tenant/users/edit', function(){
    return view('tenant.users.edit');
})->name('tenant.users.edit');

Route::get('tenant/users/delete', function(){
    return view('tenant.users.delete');
})->name('tenant.users.delete');

// role
Route::get('tenant/roles', function(){
    return view('tenant.roles.index');
})->name('tenant.role');

Route::get('tenant/roles/add', function(){
    return view('tenant.roles.add');
})->name('tenant.role.create');

Route::get('tenant/roles/edit', function(){
    return view('tenant.roles.edit');
})->name('tenant.role.edit');

Route::get('tenant/roles/delete', function(){
    return view('tenant.roles.delete');
})->name('tenant.role.delete');

Route::get('tenant/roles/view', function(){
    return view('tenant.roles.view');
})->name('tenant.role.view');


// message
// Route::get('tenant/messages/index', function(){
//     return view('tenant.messages.index');
// })->name('tenant.messages.index');

// Route::get('tenant/messages/view', function(){
//     return view('tenant.messages.view');
// })->name('tenant.messages.view');

// Route::get('tenant/messages/delete', function(){
//     return view('tenant.messages.delete');
// })->name('tenant.messages.delete');

// halls
// Route::get('tenant/halls/index', function(){
//     return view('tenant.halls.index');
// })->name('tenant.halls.index');

Route::get('tenant/halls/view', function(){
    return view('tenant.halls.view');
})->name('tenant.halls.view');

// Route::get('tenant/halls/add', function(){
//     return view('tenant.halls.add');
// })->name('tenant.halls.add');

Route::get('tenant/halls/edit', function(){
    return view('tenant.halls.edit');
})->name('tenant.halls.edit');

Route::get('tenant/halls/delete', function(){
    return view('tenant.halls.delete');
})->name('tenant.halls.delete');

// //reservation
// Route::get('tenant/reservations/index', function(){
//     return view('tenant.reservations.index');
// })->name('tenant.reservations.index');

Route::get('tenant/reservations/add', function(){
    return view('tenant.reservations.add');
})->name('tenant.reservations.add');

// Route::get('tenant/reservations/view', function(){
//     return view('tenant.reservations.view');
// })->name('tenant.reservations.view');

Route::get('tenant/reservations/edit', function(){
    return view('tenant.reservations.edit');
})->name('tenant.reservations.edit');

Route::get('tenant/reservations/delete', function(){
    return view('tenant.reservations.delete');
})->name('tenant.reservations.delete');



//content

// Route::get('tenant/content/index', function(){
//     return view('tenant.content.index');
// })->name('tenant.content.index');

// Route::get('tenant/content/logo', function(){
//     return view('tenant.content.logo');
// })->name('tenant.content.logo');

// Route::get('platform/content/banner', function(){
//     return view('platform.content.banner');
// })->name('content.banner');

// Route::get('platform/content/description', function(){
//     return view('platform.content.description');
// })->name('content.description');

// Route::get('tenant/content/about', function(){
//     return view('tenant.content.about');
// })->name('tenant.content.about');

// Route::get('platform/content/services', function(){
//     return view('platform.content.services');
// })->name('content.services');

Route::get('tenant/content/howregister', function(){
    return view('tenant.content.howregister');
})->name('tenant.content.howregister');

// Route::get('tenant/content/contact', function(){
//     return view('tenant.content.contact');
// })->name('tenant.content.contact');

Route::get('tenant/content/socialmedia', function(){
    return view('tenant.content.socialmedia');
})->name('tenant.content.socialmedia');

// Route::get('tenant/content/occasion', function(){
//     return view('tenant.content.occasion');
// })->name('tenant.content.occasion');

// Route::get('tenant/content/service', function(){
//     return view('tenant.content.service');
// })->name('tenant.content.service');

// Route::get('tenant/content/duration', function(){
//     return view('tenant.content.duration');
// })->name('tenant.content.duration');

//user 
Route::get('user/dashboard',function(){
    return view('user.dashboard');
})->name('user.dashboard');

// Route::get('user/reservations/index', function(){
//     return view('user.reservations.index');
// })->name('user.reservations.index');

Route::get('user/reservations/confirmation', function(){
    return view('user.reservations.confirmation');
})->name('user.reservations.confirmation');

Route::get('user/reservations/view', function(){
    return view('user.reservations.view');
})->name('user.reservations.view');


// Route::get('user/profile',function(){
//     return view('user.profile');
// })->name('user.profile');