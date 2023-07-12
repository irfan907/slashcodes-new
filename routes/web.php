<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', 'HomeController@index')->name('home');




Route::get('/about-us', function () {
    return view('about.index');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/leave-application-form', function () {
    return view('leave-application-form');
})->name('leave-application-form');


Route::get('/services', function () {
    return view('services.index');
})->name('services');


Route::get('/services/branding', function () {
    return view('services.branding');
})->name('services_branding');

Route::get('/services/digital-marketing', function () {
    return view('services.digital');
})->name('services_digital');

Route::get('/services/marketing-strategy', function () {
    return view('services.strategy');
})->name('services_strategy');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/services/digital-marketing/seo', function () {
    return view('services.seo');
})->name('services_seo');

Route::get('/services/digital-marketing/smm', function () {
    return view('services.smm');
})->name('services_smm');

Route::get('/services/digital-marketing/ppc', function () {
    return view('services.ppc');
})->name('services_ppc');


Route::get('/services/ui-ux-designs', function () {
    return view('services.ui-ux');
})->name('services_uiux');


Route::get('/services/printing-packaging-solution', function () {
    return view('services.printing');
})->name('services_printing');


Route::get('/services/web-development', function () {
    return view('services.web');
})->name('services_web');

Route::get('/services/web-development/magento', function () {
    return view('services.magento');
})->name('services_magento');

Route::get('/services/software-development', function () {
    return view('services.software');
})->name('services_software');

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');


Route::get('/our-work', 'HomeController@workList')->name('projects');
Route::get('/our-work/{slug}', 'HomeController@workDetail')->name('projects_detail');

Route::post('contact-form', 'HomeController@contactForm')->name('contact-form')->middleware(ProtectAgainstSpam::class);
Route::post('leave-form', 'HomeController@leaveForm')->name('leave-form')->middleware(ProtectAgainstSpam::class);
Route::post('quote-form', 'HomeController@saveQuoteForm')->name('quote-form')->middleware(ProtectAgainstSpam::class);

Route::get('cost-calculator', 'HomeController@getCostCalculator')->name('get-cost-calculator');
Route::post('cost-calculator', 'HomeController@saveCostCalculator')->name('save-cost-calculator')->middleware(ProtectAgainstSpam::class);

Route::get('/casestudies', function () {
    return view('casestudies.index');
})->name('casestudies');

Route::get('/casestudies/vieu', function () {
    return view('casestudies.vieu');
})->name('casestudies_vieu');

Route::get('/casestudies/the-ratchet-shop', function () {
    return view('casestudies.ratchet');
})->name('casestudies_ratchet');

Route::get('/casestudies/ozone', function () {
    return view('casestudies.ozone');
})->name('casestudies_ozone');

Route::get('/casestudies/stubbee', function () {
    return view('casestudies.stubbee');
})->name('casestudies_stubbee');

Route::get('/casestudies/scholars-school-system', function () {
    return view('casestudies.scholars');
})->name('casestudies_scholars');

Route::get('/casestudies/synopsis-crm', function () {
    return view('casestudies.synopsis-crm');
})->name('casestudies_synopsis_crm');


Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
})->name('offline');







Route::get('/webstories', function () {
    return view('stories.index');
})->name('stories');

Route::get('/webstories/what-are-the-7-types-of-digital-marketing', function () {
    return view('stories.7-types-of-dm');
})->name('stories.7-types-of-dm');

Route::get('/webstories/website-redesign-2022', function () {
    return view('stories.website-redesign-2022');
})->name('stories.website-redesign-2022');

Route::get('/webstories/what-metaverse-is', function () {
    return view('stories.what-metaverse-is');
})->name('stories.what-metaverse-is');


Route::get('/webstories/ai-in-analytics-helps-in-deep-customer-insights', function () {
    return view('stories.ai-in-analytics-helps-in-deep-customer-insights');
})->name('stories.ai-in-analytics');


Route::get('/webstories/six-types-of-branding-services', function () {
    return view('stories.six-types-of-branding-services');
})->name('stories.six-types-of-branding-services');

// Route::get('/webstories/branding-benefits', function () {
//     return view('stories.branding-services');
// })->name('stories.branding-services');





Route::get('/blog/six-things-about-branding-services', function () {
    return redirect('https://cynosuredesigns.co.uk/blog/six-types-of-branding-services');
});


// Route::get('/sitemap', function () {
//     return view('sitemap');
// })->name('sitemap');

Route::get('/sitemap', 'HomeController@sitemap')->name('sitemap');;
Route::get('/sitemap.xml', 'HomeController@sitemapxml')->name('sitemapxml');


Route::get('/blog/tag/{slug}', 'PostController@tag')->name('post-tag');
Route::get('/blog/{slug}', 'PostController@show')->name('post-detail');
Route::get('/blog', 'PostController@index')->name('blog');

Route::get('/careers/{slug}', 'CareerController@show')->name('career-detail');
Route::get('/careers', 'CareerController@index')->name('careers');
Route::post('career-form', 'CareerController@careersForm')->name('careers-form')->middleware(ProtectAgainstSpam::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
