<?php

use Illuminate\Support\Facades\Route;
 Route::get('/', function () {
             return view('home');
    });

  Route::get('/lessons', function () {
     return view('lessons');
  });

  Route::get('/creators', function () {
    return view('creators');
 });


  Route::get('/challenges', function () {
     return view('challenges');
  });


   
   Route::get('/verb-to-be-lesson', function () {
       return view('verb-to-be');
   });

   
//      Route::get('/', function () {
//       return view('challenge.verb-to-be-1');
//   });

//  Route::get('/', function () {
//      return view('challenge.verb-to-be-2');
//  });

  // Route::get('/', function () {
  //     return view('challenge.verb-to-be-3');
  // });





// Route::get("/", function () {
//    return view("enviroment");
// });