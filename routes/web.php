<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Voyager admin routes (no locale prefix)
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return redirect('/en');
})->name('default');

// Locale routes group
Route::group(['prefix' => '{locale}', 'middleware' => 'locale'], function () {
    // Specific routes
    Route::get('/news', [MainController::class, 'news'])->name('news');
    Route::get('/news/{slug}', [MainController::class, 'getNews'])->name('getNews');

    Route::get('/about', [MainController::class, 'about'])->name('about');

    Route::get('/investment-offers', [MainController::class, 'investmentOffers'])->name('investmentOffers');
    Route::get('/investment-offers/{slug}', [MainController::class, 'getInvestmentOffer'])->name('getInvestmentOffer');

    Route::get('/tenders', [MainController::class, 'tenders'])->name('tenders');
    Route::get('/tenders/{slug}', [MainController::class, 'getTender'])->name('getTender');

    Route::get('/services', [MainController::class, 'services'])->name('services');
    Route::get('/services/{slug}', [MainController::class, 'getService'])->name('getService');

    Route::get('/consult-us/', [MainController::class, 'consult'])->name('consult');

    Route::get('/faqs', [MainController::class, 'faqPage'])->name('faqs');
    Route::get('/contact-us', [MainController::class, 'contactUsPage'])->name('contactUs');
    Route::post('/contact/submit', [MainController::class, 'submitContactForm'])->name('contact.submit');

    // Home page
    Route::get('/', [MainController::class, 'index'])->name('home');
});


// Language switch route
Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['az', 'en', 'ru'])) {
        session()->put('locale', $locale);

        // Get the current URL
        $previousUrl = url()->previous();

        // Parse the URL
        $urlParts = parse_url($previousUrl);

        // Extract the current path and explode it to get the locale
        $pathSegments = explode('/', $urlParts['path'] ?? '');

        // Replace the locale segment with the new locale
        if (isset($pathSegments[1]) && in_array($pathSegments[1], ['az', 'en', 'ru'])) {
            $pathSegments[1] = $locale;
        } else {
            array_unshift($pathSegments, $locale); // If no locale is present, prepend it
        }

        // Rebuild the URL
        $newPath = implode('/', $pathSegments);
        $newUrl = url($newPath);

        return redirect($newUrl);
    }

    return redirect()->back();
})->name('language.switch');

