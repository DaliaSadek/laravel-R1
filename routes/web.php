<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test', function(){
//     return 'welcome to my first Route';
// });


// Route::get('user/{name}/{age}', function($name,$age){
//     return 'The user name is: '. $name .' and age is :' .$age;
// });


//     Route::get('user/{name}/{age?}', function($name,$age=0){
// $msg ='The user name is: '. $name ;
//         if ($age>0){
//         return $msg.' and age is :' .$age;}
        
//             return $msg;
//     })->whereIn('name',['dalia','Heba']);

//  Route::prefix('product')->group(function(){
//     Route::get('/',function(){
//         return 'Product home page';
//     });

//     Route::get('laptop',function(){
//         return 'Laptop page';
//     });

//     Route::get('camera',function(){
//         return 'camera page';
//     });
//     Route::get('projector',function(){
//         return 'projector page';
//     });
//  });


Route::get('/', function () {
    return view('about');
});
  
Route::get('/about',function (){
    return view ('about');
});

Route::view('contact-me',"contact");

Route::prefix('support')->group(function(){
        Route::get('/',function(){
            return view('support');
        });
        Route::get('chat',function(){
                    return 'Chat page';
                });
            
        Route::get('call',function(){
                    return 'Call page';
                });
        Route::get('ticket',function(){
                    return 'ticket page';
                });

    });

    Route::prefix('training')->group(function(){
        Route::get('/',function(){
            return view('training');
        });
        Route::get('HR',function(){
                    return 'HR page';
                });
            
        Route::get('ICT',function(){
                    return 'ICT page';
                });
        Route::get('Marketing',function(){
                    return 'Marketing page';
                });
        Route::get('Logistics',function(){
                    return 'Logistics page';
                });

    });


    //    Route::fallback(function(){
    //     return redirect('/');
    //    });

       //Route::view('CV',"cv");

       Route::get('CV',function(){
        return view('cv');
       });
    //   
    //    Route::get('Login',function(){
    //     return view('login');
    //    });

    //    Route::post('receive', function(){
    //     return 'Data receive';
    //    })-> name('receive');

       Route::get('test1',[ExampleController::class,'test1']);
       Route::get('login', [ExampleController::class,'login']);
       Route::post('receive', [ExampleController::class,'receive']);
       Route::get('storeCar', [CarController::class,'store'])->name('storeCar');
       Route::get('addCar',[CarController::class, 'create']);
       Route::get('cars', [CarController::class,'index']);
       Route::get('editCar/{id}', [CarController::class,'Edit']);
       Route::put('updateCar/{id}', [CarController::class,'update'])->name('updateCar');

       Route::get('show-contact', [ContactController::class, 'show'])->name('contact');
       Route::post('send-contact', [ContactController::class, 'send'])->name('Send');