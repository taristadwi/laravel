<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
        function product(){
            return view('products');
        }


// //Halaman Product
// Route::prefix('products')->group(function () {
//     Route::get('category/marbel-edu-games', function () {
//         return redirect('https://www.educastudio.com/category/marbel-edu-games');
//         // echo'<iframe src="https://www.educastudio.com/category/marbel-edu-games" style="width:100vw; height:100vh"></iframe>';
//     });
//     Route::get('category/marbel-and-friends-kids-games', function () {
//         return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
//     });
   
//     Route::get('category/riri-story-books-animations', function () {
//         return redirect('https://www.educastudio.com/category/riri-story-books-animations');
//     });
   
//     Route::get('category/kolak-kids-songs', function () {
//         return redirect('https://www.educastudio.com/category/kolak-kids-songs');
//     });
//    });

    

//Halaman News
// Route::get('/news', function () {
//     return redirect('https://www.educastudio.com/news');
// });

// Route::get('news/{title}', function ($title) {
//     return redirect('https://www.educastudio.com/news/' . $title);
// });

//Halaman Program
// Route::prefix('programs')->group(function () {
//     Route::get('karir', function () {
//         return redirect('https://www.educastudio.com/program/karir');
//     });
//     Route::get('magang', function () {
//         return redirect('https://www.educastudio.com/program/magang');
//     });
   
//     Route::get('kunjungan-industri', function () {
//         return redirect('https://www.educastudio.com/program/kunjungan-industri');
//     });
//    });

//Halaman About Us
// Route::get('/about-us', function() {
//     return redirect('https://www.educastudio.com/about-us');
// });
// //Halaman Contact Us
// Route::get('/ContactUs', [ContactUsController::class, 'ContactUs']); -->
}
