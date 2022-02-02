<?php

use Illuminate\Support\Facades\Route;
// use App\catagory;
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

// Route::filter('user-filter', function() {
// 	$categorydata=catagory::all();
//     View::share('categorydata',$categorydata);
// });


Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login','AdminLoginController@LoginPage');
Route::get('/logout','AdminLoginController@logout');
Route::post('/checklogin','AdminLoginController@checklogin');
Route::get('/admin/ForgetPassword','AdminForgetPasswordController@ForgetPassword');
Route::get('/admin/Dashboard','AdminDashboardController@Dashboard');

Route::get('/admin/Register/adminReg','AdminRegistrationController@adminReg');

Route::get('/admin/State/ViewState','AdminStateController@ViewState');
Route::get('/admin/State/AddState','AdminStateController@AddState');
Route::get('/admin/State/updatestate/{id}','AdminStateController@updatestate');
Route::post('/insertstate','AdminStateController@insertstate');
Route::post('/savestate','AdminStateController@savestate');
Route::post('/deletestate','AdminStateController@deletestate');

Route::get('/admin/City/AddCity','AdminCityController@AddCity');
Route::get('/admin/City/ViewCity','AdminCityController@ViewCity');
Route::get('/admin/City/updatecity/{id}','AdminCityController@updatecity');
Route::post('/insertcity','AdminCityController@insertcity');
Route::post('/savecity','AdminCityController@savecity');
Route::post('/deletecity','AdminCityController@deletecity');


Route::get('/admin/User/ViewUser','AdminUserController@ViewUser');

Route::get('/admin/Category/AddCategory','AdminCategoryController@AddCategory');
Route::get('/admin/Category/ViewCategory','AdminCategoryController@ViewCategory');
Route::get('/admin/Category/updatecategory/{id}','AdminCategoryController@updatecategory');
Route::post('/insertcategory','AdminCategoryController@insertcategory');
Route::post('/savecategory','AdminCategoryController@savecategory');
Route::post('/deletecategory','AdminCategoryController@deletecategory');



Route::get('/admin/Company/AddCompany','AdminCompanyController@AddCompany');
Route::get('/admin/Company/ViewCompany','AdminCompanyController@ViewCompany');
Route::get('/admin/Company/updatecompany/{id}','AdminCompanyController@updatecompany');
Route::post('/insertcompany','AdminCompanyController@insertcompany');
Route::post('/savecompany','AdminCompanyController@savecompany');
Route::post('/deletecompany','AdminCompanyController@deletecompany');


Route::get('/admin/Model/AddModel','AdminModelController@AddModel');
Route::get('/admin/Model/ViewModel','AdminModelController@ViewModel');
Route::get('/admin/Model/updatemodel/{id}','AdminModelController@updatemodel');
Route::post('/insertmodel','AdminModelController@insertmodel');
Route::post('/savemodel','AdminModelController@savemodel');
Route::post('/deletemodel','AdminModelController@deletemodel');


Route::get('/admin/Parts/AddParts','AdminPartController@AddParts');
Route::get('/admin/Parts/ViewParts','AdminPartController@ViewParts');
Route::get('/admin/Parts/updateparts/{id}','AdminPartController@updateparts');
Route::get('/admin/Parts/saveparts','AdminPartController@saveparts');
Route::post('/insertparts','AdminPartController@insertparts');
Route::post('/saveparts','AdminPartController@saveparts');
Route::post('/deleteparts','AdminPartController@deleteparts');
Route::post('/changepartstatus','AdminPartController@changepartstatus');


Route::get('/admin/Order/ViewNewOrder','AdminOrderController@ViewNewOrder');
Route::get('/admin/Order/ViewProcessOrder','AdminOrderController@ViewProcessOrder');
Route::get('/admin/Order/ViewCompleteOrder','AdminOrderController@ViewCompleteOrder');
Route::get('/admin/Order/ViewCancelOrder','AdminOrderController@ViewCancelOrder');
Route::get('/admin/Order/ViewShippedOrder','AdminOrderController@ViewShippedOrder');
Route::post('/ChangeOrderStatus','AdminOrderController@ChangeOrderStatus');
Route::post('/CancelOrder','AdminOrderController@CancelOrder');
Route::post('/deleteneworder','AdminOrderController@deleteneworder');
Route::post('/deleteprocessorder','AdminOrderController@deleteprocessorder');
Route::post('/deletecompleteorder','AdminOrderController@deletecompleteorder');
Route::post('/deletecancelorder','AdminOrderController@deletecancelorder');



Route::get('/admin/Services/ViewServices','AdminServicesController@ViewServices');
Route::get('/admin/Services/AddServices','AdminServicesController@AddServices');
Route::get('/admin/Services/updateservices/{id}','AdminServicesController@updateservices');
Route::post('/insertservice','AdminServicesController@insertservice');
Route::post('/saveservice','AdminServicesController@saveservice');
Route::post('/deleteservice','AdminServicesController@deleteservice');
Route::post('/changeservicestatus','AdminServicesController@changeservicestatus');

Route::get('/admin/ServicesOrder/ViewNewOrder','AdminServicesOrderController@ViewNewOrder');
Route::get('/admin/ServicesOrder/AddNewOrder','AdminServicesOrderController@AddNewOrder');
Route::get('/admin/ServicesOrder/ViewProcessOrder','AdminServicesOrderController@ViewProcessOrder');
Route::get('/admin/ServicesOrder/ViewCancelOrder','AdminServicesOrderController@ViewCancelOrder');
Route::get('/admin/ServicesOrder/ViewCompleteOrder','AdminServicesOrderController@ViewCompleteOrder');
Route::get('/admin/ServicesOrder/updateserviceorder/{id}','AdminServicesOrderController@updateserviceorder');
Route::post('/insertserviceorder','AdminServicesOrderController@insertserviceorder');
Route::post('/saveserviceorder','AdminServicesOrderController@saveserviceorder');
Route::post('/deletenewserviceorder','AdminServicesOrderController@deletenewserviceorder');
Route::post('/deleteprocessserviceorder','AdminServicesOrderController@deleteprocessserviceorder');
Route::post('/deletecompleteserviceorder','AdminServicesOrderController@deletecompleteserviceorder');
Route::post('/changeorderstatus','AdminServicesOrderController@changeorderstatus');
Route::post('/cancelorder','AdminServicesOrderController@cancelorder');

Route::get('/admin/news/addnews','AdminNewsController@addnews');
Route::get('/admin/news/viewnews','AdminNewsController@viewnews');
Route::get('/admin/news/updatenews/{id}','AdminNewsController@updatenews');
Route::post('/insertnews','AdminNewsController@insertnews');
Route::post('/savenews','AdminNewsController@savenews');
Route::post('/deletenews','AdminNewsController@deletenews');
Route::post('/changenewsstatus','AdminNewsController@changenewsstatus');

Route::get('/admin/oldvehicle/viewoldvehicle','AdminOldVehicleController@viewoldvehicle');
Route::post('/deleteoldvehicle','AdminOldVehicleController@deleteoldvehicle');
Route::post('/changevehiclestatus','AdminOldVehicleController@changevehiclestatus');


Route::get('/admin/rtoagent/addagent','AdminAgentController@addagent');
Route::get('/admin/rtoagent/viewagent','AdminAgentController@viewagent');
Route::get('/admin/rtoagent/updateagent/{id}','AdminAgentController@updateagent');
Route::post('/insertagent','AdminAgentController@insertagent');
Route::post('/saveagent','AdminAgentController@saveagent');
Route::post('/deleteagent','AdminAgentController@deleteagent');
Route::post('/changeagentstatus','AdminAgentController@changeagentstatus');

Route::get('/admin/plan/addplan','AdminPlanController@addplan');
Route::get('/admin/plan/viewplan','AdminPlanController@viewplan');
Route::get('/admin/plan/updateplan/{id}','AdminPlanController@updateplan');
Route::post('/insertplan','AdminPlanController@insertplan');
Route::post('/saveplan','AdminPlanController@saveplan');
Route::post('/deleteplan','AdminPlanController@deleteplan');
Route::post('/changeplanstatus','AdminPlanController@changeplanstatus');
// Route::get('/download/{file}','AdminPlanController@download');


Route::get('/admin/feedback/viewfeedback','AdminFeedbackController@viewfeedback');
Route::post('/deleteviewfeedback','AdminFeedbackController@deleteviewfeedback');

Route::get('/admin/ratingReview/ratingReview','AdminRatingReviewController@viewRatingReview');
Route::post('/deletereview','AdminRatingReviewController@deletereview');

Route::get('/admin/insuranceCompany/viewinscompany','AdminInsuranceCompanyController@viewinscompany');
Route::get('/admin/insuranceCompany/addinscompany','AdminInsuranceCompanyController@addinscompany');
Route::get('/admin/insuranceCompany/updateinscompany/{id}','AdminInsuranceCompanyController@updateinscompany');
Route::post('/insertinscompany','AdminInsuranceCompanyController@insertinscompany');
Route::post('/saveinscompany','AdminInsuranceCompanyController@saveinscompany');
Route::post('/deleteinscompany','AdminInsuranceCompanyController@deleteinscompany');
Route::post('/changeinscompanystatus','AdminInsuranceCompanyController@changeinscompanystatus');

Route::get('/admin/trainingSchool/addtrainingschool','AdminTrainingSchoolsController@addtrainingschool');
Route::get('/admin/trainingSchool/viewtrainingschool','AdminTrainingSchoolsController@viewtrainingschool');
Route::get('/admin/trainingSchool/updatetrainingschool/{id}','AdminTrainingSchoolsController@updatetrainingschool');
Route::post('/inserttrainingschool','AdminTrainingSchoolsController@inserttrainingschool');
Route::post('/savetrainingschool','AdminTrainingSchoolsController@savetrainingschool');
Route::post('/deletetrainingschool','AdminTrainingSchoolsController@deletetrainingschool');
Route::post('/changetrainingstatus','AdminTrainingSchoolsController@changetrainingstatus');

Route::get('/admin/Tow/ViewCancelRequest','AdminTowController@ViewCancelRequest');
Route::get('/admin/Tow/ViewNewRequest','AdminTowController@ViewNewRequest');
Route::get('/admin/Tow/ViewCompleteRequest','AdminTowController@ViewCompleteRequest');
Route::post('/deletetow','AdminTowController@deletetow');
Route::post('/changetowstatus','AdminTowController@changetowstatus');
Route::post('/cancelrequest','AdminTowController@cancelrequest');



Route::get('/admin/Mechanic/ViewMechanic','AdminMechanicController@View_Mechanic');
Route::get('/admin/Mechanic/AddMechanic','AdminMechanicController@Add_Mechanic');
Route::get('/admin/Mechanic/updatemechanic/{id}','AdminMechanicController@updatemechanic');
Route::post('/insertmechanic','AdminMechanicController@insertmechanic');
Route::post('/savemechanic','AdminMechanicController@savemechanic');
Route::post('/deletemechanic','AdminMechanicController@deletemechanic');
Route::post('/changemechanicstatus','AdminMechanicController@changemechanicstatus');

Route::get('/admin/Package/addpackage','AdminPackageController@addpackage');
Route::get('/admin/Package/updatepackage/{id}','AdminPackageController@updatepackage');
Route::get('/admin/Package/viewpackage','AdminPackageController@viewpackage');
Route::post('/insertpackage','AdminPackageController@insertpackage');
Route::post('/savepackage','AdminPackageController@savepackage');
Route::post('/deletepackage','AdminPackageController@deletepackage');
Route::post('/changepackagestatus','AdminPackageController@changepackagestatus');

Route::get('/admin/PackageService/addpackageservice','AdminPackageServiceController@addpackageservice');
Route::get('/admin/PackageService/updatepackageservice/{id}','AdminPackageServiceController@updatepackageservice');
Route::get('/admin/PackageService/viewpackageservice','AdminPackageServiceController@viewpackageservice');
Route::post('/insertpackageservice','AdminPackageServiceController@insertpackageservice');
Route::post('/savepackageservice','AdminPackageServiceController@savepackageservice');
Route::post('/deletepackageservice','AdminPackageServiceController@deletepackageservice');

Route::get('/admin/Tow/ViewCancelRequest','AdminTowController@ViewCancelRequest');
Route::get('/admin/Tow/ViewNewRequest','AdminTowController@ViewNewRequest');
Route::get('/admin/Tow/ViewCompleteRequest','AdminTowController@ViewCompleteRequest');
Route::get('/admin/Tow/ViewprocessRequest','AdminTowController@ViewprocessRequest');
Route::post('/deletetow','AdminTowController@deletetow');
Route::post('/changetowstatus','AdminTowController@changetowstatus');
Route::post('/cancelrequest','AdminTowController@cancelrequest');



/****************************************** User Route **************************************/


Route::get('/Users/Home','UserDashboardcontroller@Homepage');


Route::get('/Users/Login','UserLoginController@Loginpage');
Route::get('/logout','UserLoginController@logout');
Route::get('/Users/Login/Register','UserLoginController@Registerpage');

Route::get('/Users/Cart','UserShopcartController@Shopcart');
Route::get('/Users/Cart/{id}','UserShopcartController@AddToCart');
Route::post('/AddToCart2','UserShopcartController@AddToCart2');
Route::get('/deletepart/{id}','UserShopcartController@deletepart');
Route::post('/increaseQty','UserShopcartController@increaseQty');
Route::post('/decreaseQty','UserShopcartController@decreaseQty');

Route::post('/registeruser','UserLoginController@registeruser');
Route::post('/checkuserlogin','UserLoginController@checkuserlogin');
Route::post('/useremail','UserLoginController@useremail');
Route::post('/userverifyemail','UserLoginController@userverifyemail');
Route::get('/Users/Login/otpmail','UserLoginController@show1');
Route::get('/Users/Login/EmailVerify','UserLoginController@EmailVerify');
Route::get('/Users/Login/forgotpassword','UserLoginController@forgetpass');
Route::get('/Users/Login/FPEmailVerify','UserLoginController@forpassemail');
Route::get('/Users/Login/conformpass','UserLoginController@confpasswd');
Route::post('/passwordCheck','UserLoginController@passwordCheck');
Route::post('/checkOTP','UserLoginController@checkOTP');

Route::get('/Users/Service/servicedisplay','UserDashboardcontroller@homeservice');

Route::get('/downloadpart/{file}','UserCatagoryController@downloadpart');
Route::get('/Users/Catagories','UserCatagoryController@Catagories');
Route::get('/Users/Catagories/{id}','UserCatagoryController@Catagories');
Route::get('/Users/Catagories/Products/{id}','UserCatagoryController@Products');
// Route::get('/download/{file}','UserProductController@download');
Route::get('/Users/Catagories/index','UserCatagoryController@popup');
Route::get('/Users/Catagories/homecata','UserDashboardcontroller@homecatagory');
Route::get('/Users/Catagories/homeprod/{id}','UserDashboardcontroller@homeProducts');
Route::get('/Users/Catagories/{id}','UserCatagoryController@listcatagories');
Route::post('/searchdata','UserCatagoryController@searchdata');



Route::get('/Users/Checkout','UserCheckoutController@Checkout');
Route::get('/Users/Blog','UserBlogController@Blog');
Route::get('/Users/Blogsingle','UserBlogController@BlogSingle');
Route::get('/Users/MyAccount','UserMyAccountController@MyAccount');

Route::get('/Users/Order/OrderHistory','UserOrderController@OrderHistory');
Route::get('/Users/Order/OrderInformation/{id}','UserOrderController@OrderInformation');
Route::get('/Users/Order/OrderInformation/{id}','UserOrderController@OrderInformation');
Route::get('/Users/Order/OrderInformation/{id}','UserOrderController@OrderInformation');
Route::post('/cancelOrder','UserOrderController@cancelOrder');
Route::post('/placeOrder','UserOrderController@placeOrder');
Route::get('/Users/Order/getInfopage','UserOrderController@getInfopage');
Route::post('/getInfo','UserOrderController@getInfo');
Route::post('payment', 'UserOrderController@payment');
Route::post('payment/status', 'UserOrderController@paymentCallback');


Route::get('/Users/Catagories/Products','UserCatagoryController@catlist');



Route::get('/Users/Feedback','UserFeedentryController@Feedbackentry');
Route::post('/enterfeedback','UserFeedentryController@enterfeedback');

Route::get('/Users/News','UserNewsController@newslist');
Route::get('/Users/News/Newsdetails/{id}','UserNewsController@newsdetails');


Route::get('/Users/TrainingSchool','UserTrainingSchlistController@Trainingshcl');
Route::get('/Users/TrainingSchool/Trainingsclmap','UserTrainingSchlistController@Trainingshclmap');

Route::get('/Users/InsuranceCompany','UserInsuranceCompanyController@InsuranceCompany');
Route::get('/Users/InsuranceCompany/insucompanydetail/{id}','UserInsuranceCompanyController@InsuranceCompanyDetails');
Route::get('/download/{file}','UserInsuranceCompanyController@download');

Route::get('/Users/Mechanic','UserMechanicsController@mechanicslist');
Route::get('/Users/Mechanic/mechanicmap','UserMechanicsController@mechanicsmap');

Route::get('/Users/RTOAgent','UserRTOAgentController@RTOAgentlist');
Route::get('/Users/RTOAgent/rtoagentmap','UserRTOAgentController@RTOAgentmap');

Route::get('/Users/Track/track','UserTrackController@TrackParcel');
Route::get('/Users/Track/tracktimeline','UserTrackController@Tracktimeline');
Route::post('/track','UserTrackController@track');

Route::get('/Users/Service/servicelist','UserServiceController@servicelist');
Route::get('/Users/Service/servicedetail/{id}','UserServiceController@servicedetail');
Route::get('/Users/Service/servicedisplay','UserServiceController@servicedis');
Route::get('/servicesortcar','UserServiceController@servicesortcar');
Route::get('/servicesortbike','UserServiceController@servicesortbike');
Route::post('/checkedServices','UserServiceController@checkedServices');
Route::get('/Users/Service/getInfopage','UserServiceController@getInfopage');
Route::post('/getInfo','UserServiceController@getInfo');
Route::get('/Users/Service/serviceCart','UserServiceController@serviceCart');
Route::get('/deleteservice/{id}','UserServiceController@deleteservice');
Route::get('/Users/Service/vehicleInfo','UserServiceController@vehicleInfopage');
Route::post('/getVehicleInfo','UserServiceController@getVehicleInfo');
Route::post('/getmodelsService','UserServiceController@getmodelsService');
Route::post('/placeServiceOrder','UserServiceController@placeServiceOrder');
Route::get('/Users/Service/serviceHistory','UserServiceController@serviceHistory');
Route::get('/Users/Service/serviceInformation/{id}','UserServiceController@serviceInformation');

Route::get('/Users/Tow','Usertowcontroller@towservice');
Route::post('/inserttow','Usertowcontroller@inserttow');
Route::get('/Users/Tow/tracktow','Usertowcontroller@towtimeline');
Route::get('/Users/Tow/track','Usertowcontroller@towtimeline');
Route::post('/towstatus','Usertowcontroller@towstatus');
Route::get('/Users/Tow/towHistory','Usertowcontroller@towHistory');
Route::get('/Users/Tow/towInformation/{id}','Usertowcontroller@towinfo');

Route::get('/Users/OldVehicle','UserOldvehiclecontroller@Oldvehicle');
Route::get('/Users/OldVehicle/oldvehicleform','UserOldvehiclecontroller@oldvehicleform');
Route::get('/Users/OldVehicle/updvehicle','UserOldvehiclecontroller@updatevehicle');
Route::get('/Users/OldVehicle/myads','UserOldvehiclecontroller@myads');

Route::post('/insertvehicle','UserOldvehiclecontroller@insertvehicle');
Route::post('/saveads','UserOldvehiclecontroller@saveads');
Route::post('/deleteoldvehicle','UserOldvehiclecontroller@deleteoldvehicle');
Route::get('/Users/OldVehicle/updvehicle/{id}','UserOldvehiclecontroller@updatevehicle');
Route::get('/Users/OldVehicle/popup','UserOldvehiclecontroller@popup');

Route::get('/Users/OldVehicle/oldvehicledetail/{id}','UserOldvehiclecontroller@OldVehicleDetail');
Route::post('/getmodels','UserOldvehiclecontroller@getmodels');
Route::post('/getstate','UserOldvehiclecontroller@getstate');



Route::get('/Users/Packages','UserPackagesController@Package');
Route::get('/Users/Packages/vehicleInfo','UserPackagesController@vehicleInfopage');
Route::post('/getmodelsPackage','UserPackagesController@getmodelsPackage');
Route::get('/Users/Packages/SelectPackage/{id}','UserPackagesController@SelectPackage');
Route::post('/placePackageOrder','UserPackagesController@placePackageOrder');
Route::get('/Users/Packages/packageInformation/{id}','UserPackagesController@packageInformation');




Route::get('/basic_email','MailController@basic_email');
Route::get('/html_email','MailController@html_email');
Route::get('/attachment_email','MailController@attachment_email');
Route::get('/Users/Mail','MailController@show');



Route::get('/Users/Tow','Usertowcontroller@towservice');
Route::post('/inserttow','Usertowcontroller@inserttow');
Route::get('/Users/Tow/tracktow','Usertowcontroller@towtimeline');
Route::get('/Users/Tow/track','Usertowcontroller@towtimeline');
Route::post('/towstatus','Usertowcontroller@towstatus');
Route::get('/Users/Tow/towHistory','Usertowcontroller@towHistory');
Route::get('/Users/Tow/towInformation/{id}','Usertowcontroller@towinfo');