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


  Route::get('/enviroment', function () {
   return view('enviroment');
});

   
Route::get('/verb-to-be-lesson', function () {
      return view('verb-to-be');
});

    Route::get('/verb-to-be-challenge/1', function () {
       return view('challenge.verb-to-be-1');
   });

    Route::get('/verb-to-be-challenge/2', function () {
        return view('challenge.verb-to-be-2');
    });

   Route::get('/verb-to-be-challenge/3', function () {
       return view('challenge.verb-to-be-3');
  });


Route::get('/present-simple-lesson', function () {
   return view('present-simple');
});

Route::get('/present-simple-challenge/1', function () {
   return view('challenge.present-simple-1');
});



// Route::get('/numbers-lesson', function () {
//    return view('numbers');
// });


//  Route::get("/", function () {
//     return view("enviroment");
//  });