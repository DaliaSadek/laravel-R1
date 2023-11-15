<?php

use Illuminate\Support\Facades\Route;

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