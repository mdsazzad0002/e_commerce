<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CustomeOrderController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CustomFlowerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\EvaraController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\ProductOfferController;
use App\Http\Controllers\ReturnPolicyController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\PurchaseGuideController;
use App\Http\Controllers\ReaperController;
use App\Http\Controllers\ShippingPolicyController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Vendor\VendorAuthController;
use App\Http\Controllers\Vendor\VendorProductController;
use App\Http\Controllers\Vendor\VendorProfileController;
use App\Models\CustomFlower;

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
// Route::get('/pusher',function(){
//     return view('pushe');
// });
Route::get('/', [EvaraController::class,'index'])->name('home');
//Route::get('/product-category', [EvaraController::class,'category'])->name('product-category');
Route::get('/product-all', [EvaraController::class,'products'])->name('products');
Route::get('/free-delivery-product', [EvaraController::class,'free_delivery_product'])->name('free.delivery.product');

Route::get('/product-category/{id}', [EvaraController::class,'category'])->name('product-category');
Route::get('/product-sub-category/{id}', [EvaraController::class,'subCategory'])->name('product-sub-category');
Route::get('/filter-products', [EvaraController::class, 'filterProducts'])->name('filter.products');
// price filter
Route::get('/price-filter', [EvaraController::class, 'sorty_by'])->name('sort.by');

//Route::get('/product-detail', [EvaraController::class,'product'])->name('product-detail');
Route::get('/product-details/{id}', [EvaraController::class,'product'])->name('product-detail');

// SearhController
Route::get('/search-suggestions', [SearchController::class, 'suggestions']);
Route::get('/search-results', [SearchController::class, 'results']);
Route::get('/tracking-order', [SearchController::class, 'TrackingOrder'])->name('track.order');
Route::post('/track-customer-order', [SearchController::class, 'trackOrder']);

Route::get('/about-us', [PagesController::class,'about'])->name('about');
Route::get('/purchase-guide', [PagesController::class,'purchaseGuide'])->name('purchase-guide');
Route::get('/terms-condition', [PagesController::class,'termsCondition'])->name('terms-condition');
Route::get('/shipping-policy', [PagesController::class,'shippingPolicy'])->name('shipping-policy');
Route::get('/privacy-policy', [PagesController::class,'privacy_policy'])->name('privacy.policy');
Route::get('/return-policy', [PagesController::class,'returnPolicy'])->name('return-policy');
Route::get('/contact-us', [PagesController::class,'contact'])->name('contact');
Route::get('/faq', [PagesController::class,'faq'])->name('faq');

//Route::post('/cart', [CartController::class,'addToCart'])->name('cart');

Route::resources(['cart' => CartController::class]);
Route::post('/add-to-cart',[CartController::class,'add_to_cart'])->name('add.cart');
Route::get('/cart/get/items-new/', [CartController::class, 'getCartItems'])->name('cart.items.new');
Route::post('/cart/remove-new', [CartController::class, 'removeCartItem'])->name('cart.remove');

Route::get('/new-cart-page', [CartController::class, 'cart_page'])->name('new.cart.page');
Route::post('/update/cart', [CartController::class, 'updateCart'])->name('update.cart');



Route::get('/cart/delete-product/{rowId}',[CartController::class,'delete'])->name('cart.delete');
Route::get('/cart/page/delete/{id}',[CartController::class,'cart_page_delete_item'])->name('cart.page.item.delete');
Route::post('/cart/update-product',[CartController::class,'updateCart'])->name('cart.update-product');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order');

// custome order
Route::get('/cutome-order',[CustomeOrderController::class,'custome_order'])->name('cstome.order');
// Route::get('/get/colors/by/flower', [CustomeOrderController::class, 'getColorsByFlower'])->name('get.colors.by.flower');
Route::get('/get/flower/price',[CustomeOrderController::class,'getFlowerPrice'])->name('flower.price');
Route::get('/get-flower-colors', [CustomeOrderController::class,'getFlowerColors'])->name('getFlowerColors');
Route::get('/get-colors', [CustomeOrderController::class, 'getColors']);

Route::post('/store-custom-order', [CustomeOrderController::class, 'flowerStore'])->name('custome_order.store');

// Route::get('/custom-order', [CustomeOrderController::class, 'index']);
// Route::get('/get-colors/{flowerId}', [CustomeOrderController::class, 'getColors']);



// Route::post('/new-order',[CheckoutController::class,'newOrder'])->name('new-order');
// Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('complete-order');


// CustomerAuthController
Route::get('/login-register',[CustomerAuthController::class,'login'])->name('login-register');
Route::post('/login-check',[CustomerAuthController::class,'loginCheck'])->name('login-check');
Route::post('/new-customer',[CustomerAuthController::class,'newCustomer'])->name('new-customer');
Route::get('/customer-logout',[CustomerAuthController::class,'logout'])->name('customer-logout');



// CustomerAuthController  Dashboard
Route::middleware(['customer'])->group(function () {

    Route::get('/my-dashboard',[CustomerAuthController::class,'dashboard'])->name('customer.dashboard');
    // CustomerAuthController New Route
    Route::get('/show-customer-order/{id}',[CustomerAuthController::class,'showCustomerOrder'])->name('show-customer-order');
    Route::get('/customer/invoice-show/{id}', [CustomerAuthController::class,'showCustomerInvoice'])->name('customer-invoice-show');
    Route::get('/customer/invoice-download/{id}', [CustomerAuthController::class,'showCustomerDownload'])->name('customer-invoice-download');
    Route::post('/editCustomer',[CustomerAuthController::class,'editCustomer'])->name('editCustomer');


});


/*
 // CustomerAuthController  Dashboard
Route::get('/my-dashboard',[CustomerAuthController::class,'dashboard'])->name('customer.dashboard');


*/


//Wishlist
Route::resource('wishlist',WishListController::class);
Route::post('/wishlist-add', [WishListController::class,'wishListAdd'])->name('wishlist.ad');
Route::post('/wishlist/cart/add', [WishListController::class, 'wishlist_addToCart'])->name('wish.cart.add');



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::get('/vendor-login-register', [VendorAuthController::class, 'index'])->name('vendor-login-register');
Route::post('/vendor-login', [VendorAuthController::class, 'login'])->name('vendor.login');
Route::post('/new-vendor', [VendorAuthController::class, 'register'])->name('new-vendor');


// vendor AuthController  Dashboard
Route::middleware(['vendor'])->group(function () {

    Route::get('/vendor-dashboard', [VendorAuthController::class, 'dashboard'])->name('vendor.dashboard');
    Route::get('/vendor-logout', [VendorAuthController::class, 'logout'])->name('vendor.logout');
    Route::get('/vendor-profile', [VendorProfileController::class, 'index'])->name('vendor.profile');
    // for vendor product
    Route::resource('vendor-product', VendorProductController::class);
    // for vendor Profile
    Route::post('/edit-vendor-profile',[VendorProfileController::class,'editVendorProfile'])->name('edit.vendor.profile');

});

Route::get('/get-sub-category-by-category',[ProductController::class,'getSubCategoryByCategory'])->name('get-sub-category-by-category');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {


    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    //Resource Route for Category Controller
    //    Route::resources(['categories' => CategoryController::class]);
    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    //Resource Route for Brand Controller
    Route::resource('brand', BrandController::class);
    //Resource Route for unit Controller
    Route::resource('unit', UnitController::class);

    Route::resource('color', ColorController::class);
    Route::resource('size', SizeController::class);
    Route::resource('product', ProductController::class);
    Route::resource('product_offer', ProductOfferController::class);
    Route::get('/delete-variants/{id}', [ProductController::class, 'delete_variants'])->name('delete.variants');
    Route::get('/delete-image/{id}', [ProductController::class, 'deleteProductImage'])->name('productImage.delete');

    //Order Module

    Route::resource('order', OrderController::class);
    Route::get('/order/invoice-show/{id}', [OrderController::class,'showInvoice'])->name('order.invoice-show');
    Route::get('/order/invoice-download/{id}', [OrderController::class,'showDownload'])->name('order.invoice-download');
    Route::get('/orders/filter', [OrderController::class, 'filter'])->name('orders.filter');
    Route::post('/orders/updateStatus', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');



    //Feature Module
    Route::resource('feature', FeatureController::class);
    //Courier  Module
    Route::resource('courier', CourierController::class);
    //User
    Route::resource('user', UserController::class)->middleware('superAdmin');
    
    //Custom Order
    Route::resource('custom-flower', CustomFlowerController::class)->middleware('superAdmin');
    Route::post('/flower-store', [CustomFlowerController::class, 'flower_store'])->name('flower.store');
    Route::post('/flower-delete/{id}', [CustomFlowerController::class, 'flower_delete'])->name('flower.delete');
    Route::post('/flower-color/store', [CustomFlowerController::class, 'flower_color_store'])->name('flower.color.store');
    Route::post('/flower-color-delete/{id}', [CustomFlowerController::class, 'flower_color_delete'])->name('flower.color.delete');
    Route::resource('reaper', ReaperController::class)->middleware('superAdmin');
    //Ad Module
    Route::resource('ad', AdController::class);
    //Setting Module
    Route::resource('setting', SettingController::class);

    Route::resource('purchase-guide-form', PurchaseGuideController::class);
    Route::resource('shipping-policy-form', ShippingPolicyController::class);
    Route::get('/shipping-fee', [ShippingPolicyController::class, 'shipping_fee'])->name('shipping.fee');
    Route::put('/shipping-fee-update/{id}', [ShippingPolicyController::class, 'shipping_fee_update'])->name('shipping-fee.update');
    Route::resource('return-policy-form', ReturnPolicyController::class);
    Route::resource('privacy-policy-form', PrivacyPolicyController::class);
    Route::resource('terms-condition-form', TermsConditionController::class);
    Route::resource('about-us-form', AboutUsController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('contact-us-form', ContactUsController::class);
});
// clear
Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
    session()->flash('message', 'Successfully Clear.'); 
    return back();
});
