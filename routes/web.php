<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\laravel_example\MovilManagement;
use App\Http\Controllers\apps\MovilList;
use App\Http\Controllers\apps\RRHHController;
use App\Http\Controllers\apps\StatusMovilController;
use App\Http\Controllers\apps\EstablecimientoController;
use App\Http\Controllers\apps\SectorController;
use App\Http\Controllers\apps\ServicioController;
use App\Http\Controllers\apps\EstudioController;
use App\Http\Controllers\apps\DistritoController;
use App\Http\Controllers\apps\OrdenTrabajoController;
use App\Http\Controllers\apps\CoberturaController;
use App\Http\Controllers\apps\OTPreview;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\apps\CapacidadCamaController;
use App\Http\Controllers\apps\AreaController;
use App\Http\Controllers\apps\ProfFuncionController;
use App\Http\Controllers\apps\FuncionarioController;
use App\Http\Controllers\apps\DepartamentoController;
use App\Http\Controllers\apps\DepartamentoNoMedController;


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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
//Route::get('/dashboard/analytics', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/dashboard/crm', $controller_path . '\dashboard\Crm@index')->name('dashboard-crm');
Route::get('/dashboard/ecommerce', $controller_path . '\dashboard\Ecommerce@index')->name('dashboard-ecommerce');

// locale
Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');

// layout
Route::get('/layouts/collapsed-menu', $controller_path . '\layouts\CollapsedMenu@index')->name('layouts-collapsed-menu');
Route::get('/layouts/content-navbar', $controller_path . '\layouts\ContentNavbar@index')->name('layouts-content-navbar');
Route::get('/layouts/content-nav-sidebar', $controller_path . '\layouts\ContentNavSidebar@index')->name('layouts-content-nav-sidebar');
Route::get('/layouts/navbar-full', $controller_path . '\layouts\NavbarFull@index')->name('layouts-navbar-full');
Route::get('/layouts/navbar-full-sidebar', $controller_path . '\layouts\NavbarFullSidebar@index')->name('layouts-navbar-full-sidebar');
//Route::get('/layouts/horizontal', $controller_path . '\layouts\Horizontal@index')->name('dashboard-analytics');
//Route::get('/layouts/vertical', $controller_path . '\layouts\Vertical@index')->name('dashboard-analytics');
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// Front Pages
Route::get('/front-pages/landing', $controller_path . '\front_pages\Landing@index')->name('front-pages-landing');
Route::get('/front-pages/pricing', $controller_path . '\front_pages\Pricing@index')->name('front-pages-pricing');
Route::get('/front-pages/payment', $controller_path . '\front_pages\Payment@index')->name('front-pages-payment');
Route::get('/front-pages/checkout', $controller_path . '\front_pages\Checkout@index')->name('front-pages-checkout');
Route::get('/front-pages/help-center', $controller_path . '\front_pages\HelpCenter@index')->name('front-pages-help-center');
Route::get('/front-pages/help-center-article', $controller_path . '\front_pages\HelpCenterArticle@index')->name('front-pages-help-center-article');

// apps
Route::get('/app/email', $controller_path . '\apps\Email@index')->name('app-email');
Route::get('/app/chat', $controller_path . '\apps\Chat@index')->name('app-chat');
Route::get('/app/calendar', $controller_path . '\apps\Calendar@index')->name('app-calendar');
Route::get('/app/kanban', $controller_path . '\apps\Kanban@index')->name('app-kanban');
Route::get('/app/ecommerce/dashboard', $controller_path . '\apps\EcommerceDashboard@index')->name('app-ecommerce-dashboard');
Route::get('/app/ecommerce/product/list', $controller_path . '\apps\EcommerceProductList@index')->name('app-ecommerce-product-list');
Route::get('/app/ecommerce/product/add', $controller_path . '\apps\EcommerceProductAdd@index')->name('app-ecommerce-product-add');
Route::get('/app/ecommerce/product/category', $controller_path . '\apps\EcommerceProductCategory@index')->name('app-ecommerce-product-category');
Route::get('/app/ecommerce/order/list', $controller_path . '\apps\EcommerceOrderList@index')->name('app-ecommerce-order-list');
Route::get('app/ecommerce/order/details', $controller_path . '\apps\EcommerceOrderDetails@index')->name('app-ecommerce-order-details');
Route::get('/app/ecommerce/customer/all', $controller_path . '\apps\EcommerceCustomerAll@index')->name('app-ecommerce-customer-all');
Route::get('app/ecommerce/customer/details/overview', $controller_path . '\apps\EcommerceCustomerDetailsOverview@index')->name('app-ecommerce-customer-details-overview');
Route::get('app/ecommerce/customer/details/security', $controller_path . '\apps\EcommerceCustomerDetailsSecurity@index')->name('app-ecommerce-customer-details-security');
Route::get('app/ecommerce/customer/details/billing', $controller_path . '\apps\EcommerceCustomerDetailsBilling@index')->name('app-ecommerce-customer-details-billing');
Route::get('app/ecommerce/customer/details/notifications', $controller_path . '\apps\EcommerceCustomerDetailsNotifications@index')->name('app-ecommerce-customer-details-notifications');
Route::get('/app/ecommerce/manage/reviews', $controller_path . '\apps\EcommerceManageReviews@index')->name('app-ecommerce-manage-reviews');
Route::get('/app/ecommerce/referrals', $controller_path . '\apps\EcommerceReferrals@index')->name('app-ecommerce-referrals');
Route::get('/app/ecommerce/settings/details', $controller_path . '\apps\EcommerceSettingsDetails@index')->name('app-ecommerce-settings-details');
Route::get('/app/ecommerce/settings/payments', $controller_path . '\apps\EcommerceSettingsPayments@index')->name('app-ecommerce-settings-payments');
Route::get('/app/ecommerce/settings/checkout', $controller_path . '\apps\EcommerceSettingsCheckout@index')->name('app-ecommerce-settings-checkout');
Route::get('/app/ecommerce/settings/shipping', $controller_path . '\apps\EcommerceSettingsShipping@index')->name('app-ecommerce-settings-shipping');
Route::get('/app/ecommerce/settings/locations', $controller_path . '\apps\EcommerceSettingsLocations@index')->name('app-ecommerce-settings-locations');
Route::get('/app/ecommerce/settings/notifications', $controller_path . '\apps\EcommerceSettingsNotifications@index')->name('app-ecommerce-settings-notifications');
Route::get('/app/academy/dashboard', $controller_path . '\apps\AcademyDashboard@index')->name('app-academy-dashboard');
Route::get('/app/academy/course', $controller_path . '\apps\AcademyCourse@index')->name('app-academy-course');
Route::get('/app/academy/course-details', $controller_path . '\apps\AcademyCourseDetails@index')->name('app-academy-course-details');
Route::get('/app/logistics/dashboard', $controller_path . '\apps\LogisticsDashboard@index')->name('app-logistics-dashboard');
Route::get('/app/logistics/fleet', $controller_path . '\apps\LogisticsFleet@index')->name('app-logistics-fleet');
Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');
Route::get('/app/invoice/preview', $controller_path . '\apps\InvoicePreview@index')->name('app-invoice-preview');
Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
Route::get('/app/invoice/add', $controller_path . '\apps\InvoiceAdd@index')->name('app-invoice-add');
Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
Route::get('/app/user/view/account', $controller_path . '\apps\UserViewAccount@index')->name('app-user-view-account');
Route::get('/app/user/view/security', $controller_path . '\apps\UserViewSecurity@index')->name('app-user-view-security');
Route::get('/app/user/view/billing', $controller_path . '\apps\UserViewBilling@index')->name('app-user-view-billing');
Route::get('/app/user/view/notifications', $controller_path . '\apps\UserViewNotifications@index')->name('app-user-view-notifications');
Route::get('/app/user/view/connections', $controller_path . '\apps\UserViewConnections@index')->name('app-user-view-connections');
Route::get('/app/access-roles', $controller_path . '\apps\AccessRoles@index')->name('app-access-roles');
Route::get('/app/access-permission', $controller_path . '\apps\AccessPermission@index')->name('app-access-permission');

//Route::get('/app/eTraslados/paciente/add', $controller_path . '\apps\ETrasladosPacienteAdd@index')->name('app-eTraslados-paciente-add');


// pages
Route::get('/pages/profile-user', $controller_path . '\pages\UserProfile@index')->name('pages-profile-user');
Route::get('/pages/profile-teams', $controller_path . '\pages\UserTeams@index')->name('pages-profile-teams');
Route::get('/pages/profile-projects', $controller_path . '\pages\UserProjects@index')->name('pages-profile-projects');
Route::get('/pages/profile-connections', $controller_path . '\pages\UserConnections@index')->name('pages-profile-connections');
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-security', $controller_path . '\pages\AccountSettingsSecurity@index')->name('pages-account-settings-security');
Route::get('/pages/account-settings-billing', $controller_path . '\pages\AccountSettingsBilling@index')->name('pages-account-settings-billing');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/faq', $controller_path . '\pages\Faq@index')->name('pages-faq');
Route::get('/pages/pricing', $controller_path . '\pages\Pricing@index')->name('pages-pricing');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');
Route::get('/pages/misc-comingsoon', $controller_path . '\pages\MiscComingSoon@index')->name('pages-misc-comingsoon');
Route::get('/pages/misc-not-authorized', $controller_path . '\pages\MiscNotAuthorized@index')->name('pages-misc-not-authorized');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/login-cover', $controller_path . '\authentications\LoginCover@index')->name('auth-login-cover');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/register-cover', $controller_path . '\authentications\RegisterCover@index')->name('auth-register-cover');
Route::get('/auth/register-multisteps', $controller_path . '\authentications\RegisterMultiSteps@index')->name('auth-register-multisteps');
Route::get('/auth/verify-email-basic', $controller_path . '\authentications\VerifyEmailBasic@index')->name('auth-verify-email-basic');
Route::get('/auth/verify-email-cover', $controller_path . '\authentications\VerifyEmailCover@index')->name('auth-verify-email-cover');
Route::get('/auth/reset-password-basic', $controller_path . '\authentications\ResetPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/reset-password-cover', $controller_path . '\authentications\ResetPasswordCover@index')->name('auth-reset-password-cover');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-forgot-password-basic');
Route::get('/auth/forgot-password-cover', $controller_path . '\authentications\ForgotPasswordCover@index')->name('auth-forgot-password-cover');
Route::get('/auth/two-steps-basic', $controller_path . '\authentications\TwoStepsBasic@index')->name('auth-two-steps-basic');
Route::get('/auth/two-steps-cover', $controller_path . '\authentications\TwoStepsCover@index')->name('auth-two-steps-cover');

// wizard example
Route::get('/wizard/ex-checkout', $controller_path . '\wizard_example\Checkout@index')->name('wizard-ex-checkout');
Route::get('/wizard/ex-property-listing', $controller_path . '\wizard_example\PropertyListing@index')->name('wizard-ex-property-listing');
Route::get('/wizard/ex-create-deal', $controller_path . '\wizard_example\CreateDeal@index')->name('wizard-ex-create-deal');

// modal
Route::get('/modal-examples', $controller_path . '\modal\ModalExample@index')->name('modal-examples');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');
Route::get('/cards/advance', $controller_path . '\cards\CardAdvance@index')->name('cards-advance');
Route::get('/cards/statistics', $controller_path . '\cards\CardStatistics@index')->name('cards-statistics');
Route::get('/cards/analytics', $controller_path . '\cards\CardAnalytics@index')->name('cards-analytics');
Route::get('/cards/gamifications', $controller_path . '\cards\CardGamifications@index')->name('cards-gamifications');
Route::get('/cards/actions', $controller_path . '\cards\CardActions@index')->name('cards-actions');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-avatar', $controller_path . '\extended_ui\Avatar@index')->name('extended-ui-avatar');
Route::get('/extended/ui-blockui', $controller_path . '\extended_ui\BlockUI@index')->name('extended-ui-blockui');
Route::get('/extended/ui-drag-and-drop', $controller_path . '\extended_ui\DragAndDrop@index')->name('extended-ui-drag-and-drop');
Route::get('/extended/ui-media-player', $controller_path . '\extended_ui\MediaPlayer@index')->name('extended-ui-media-player');
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-star-ratings', $controller_path . '\extended_ui\StarRatings@index')->name('extended-ui-star-ratings');
Route::get('/extended/ui-sweetalert2', $controller_path . '\extended_ui\SweetAlert@index')->name('extended-ui-sweetalert2');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');
Route::get('/extended/ui-timeline-basic', $controller_path . '\extended_ui\TimelineBasic@index')->name('extended-ui-timeline-basic');
Route::get('/extended/ui-timeline-fullscreen', $controller_path . '\extended_ui\TimelineFullscreen@index')->name('extended-ui-timeline-fullscreen');
Route::get('/extended/ui-tour', $controller_path . '\extended_ui\Tour@index')->name('extended-ui-tour');
Route::get('/extended/ui-treeview', $controller_path . '\extended_ui\Treeview@index')->name('extended-ui-treeview');
Route::get('/extended/ui-misc', $controller_path . '\extended_ui\Misc@index')->name('extended-ui-misc');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');
Route::get('/icons/font-awesome', $controller_path . '\icons\FontAwesome@index')->name('icons-font-awesome');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');
Route::get('/forms/custom-options', $controller_path . '\form_elements\CustomOptions@index')->name('forms-custom-options');
Route::get('/forms/editors', $controller_path . '\form_elements\Editors@index')->name('forms-editors');
Route::get('/forms/file-upload', $controller_path . '\form_elements\FileUpload@index')->name('forms-file-upload');
Route::get('/forms/pickers', $controller_path . '\form_elements\Picker@index')->name('forms-pickers');
Route::get('/forms/selects', $controller_path . '\form_elements\Selects@index')->name('forms-selects');
Route::get('/forms/sliders', $controller_path . '\form_elements\Sliders@index')->name('forms-sliders');
Route::get('/forms/switches', $controller_path . '\form_elements\Switches@index')->name('forms-switches');
Route::get('/forms/extras', $controller_path . '\form_elements\Extras@index')->name('forms-extras');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');
Route::get('/form/layouts-sticky', $controller_path . '\form_layouts\StickyActions@index')->name('form-layouts-sticky');

// form wizards
Route::get('/form/wizard-numbered', $controller_path . '\form_wizard\Numbered@index')->name('form-wizard-numbered');
Route::get('/form/wizard-icons', $controller_path . '\form_wizard\Icons@index')->name('form-wizard-icons');
Route::get('/form/validation', $controller_path . '\form_validation\Validation@index')->name('form-validation');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
Route::get('/tables/datatables-basic', $controller_path . '\tables\DatatableBasic@index')->name('tables-datatables-basic');
Route::get('/tables/datatables-advanced', $controller_path . '\tables\DatatableAdvanced@index')->name('tables-datatables-advanced');
Route::get('/tables/datatables-extensions', $controller_path . '\tables\DatatableExtensions@index')->name('tables-datatables-extensions');

// charts
Route::get('/charts/apex', $controller_path . '\charts\ApexCharts@index')->name('charts-apex');
Route::get('/charts/chartjs', $controller_path . '\charts\ChartJs@index')->name('charts-chartjs');

// maps
Route::get('/maps/leaflet', $controller_path . '\maps\Leaflet@index')->name('maps-leaflet');

// laravel example
Route::get('/laravel/user-management', [UserManagement::class, 'UserManagement'])->name('laravel-example-user-management');
//Route::resource('/user-list', UserManagement::class);


//Movil Management
Route::get('/laravel/movil-management', [MovilManagement::class, 'MovilManagement'])->name('laravel-example-movil-management');
Route::resource('/movil-list', MovilManagement::class);
Route::get('/get-moviles-json', [MovilManagement::class, 'getMovilesJson'])->name('get-moviles-json');
Route::post('/get-movil-data', [MovilManagement::class, 'getMovilData']);


//Route::get('/laravel/movil-management', [MovilList::class, 'MovilManagement'])->name('laravel-example-movil-management');
//Route::resource('/movil/list', MovilList::class);
//Route::get('/app/movil/list', $controller_path . '\apps\MovilList@index')->name('app-movil-list');
//Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
Route::get('/app/movil/view/account', $controller_path . '\apps\MovilViewAccount@index')->name('app-movil-view-account');
Route::get('/app/movil/view/security', $controller_path . '\apps\MovilViewSecurity@index')->name('app-movil-view-security');
Route::get('/app/movil/view/billing', $controller_path . '\apps\MovilViewBilling@index')->name('app-movil-view-billing');
Route::get('/app/movil/view/notifications', $controller_path . '\apps\MovilViewNotifications@index')->name('app-user-movil-notifications');
Route::get('/app/movil/view/connections', $controller_path . '\apps\MovilViewConnections@index')->name('app-movil-view-connections');


//Orden de Trabajo
Route::get('/app/invoice/list2', $controller_path . '\apps\InvoiceList2@index')->name('app-invoice-list2');
Route::get('/app/invoice/preview2', $controller_path . '\apps\InvoicePreview2@index')->name('app-invoice-preview2');
Route::get('/app/invoice/print2', $controller_path . '\apps\InvoicePrint2@index')->name('app-invoice-print2');
Route::get('/app/invoice/edit2', $controller_path . '\apps\InvoiceEdit2@index')->name('app-invoice-edit2');

Route::get('/app/invoice/add2', $controller_path . '\apps\InvoiceAdd2@index')->name('app-invoice-add2');


//Funcionarios getProfesionesJson
Route::resource('/rrhh', RRHHController::class);
Route::get('/rrhh-list', $controller_path . '\apps\RRHHController@index')->name('rrhh-list');
Route::get('/get-profesiones-json', [ProfFuncionController::class, 'getProfesionesJson']);
Route::get('/get-conductores-json', [RRHHController::class, 'getConductoresJson']);
Route::get('/get-conductor-info/{idConductor}', [RRHHController::class, 'getConductorInfoJson']);
Route::get('/get-paramedicos-json', [RRHHController::class, 'getParamedicosJson']);

//StatusMovil

Route::post('/store-scraped-data', [StatusMovilController::class, 'storeScrapedData']);

Route::get('/pedido-traslado', $controller_path . '\apps\PedidoTraslado@index')->name('pedido-traslado');


Route::get('/get-areas/{idEst?}', [AreaController::class, 'getAreas']);
Route::get('/get-servicios/{idEst?}', [ServicioController::class, 'getServicios']);


Route::get('/get-departamentos/{idEst?}', [DepartamentoController::class, 'getDepartamentos']);
Route::get('/get-departamentos-por-servicio/{idEst}/{idServ}', [DepartamentoController::class, 'getDepartamentosPorServicio'])->name('get-departamentos-por-servicio');

Route::get('/get-departamentosNoMed/{idEst?}', [DepartamentoNoMedController::class, 'getDepartamentosNoMed']);


//Establecimiento>Servicio>Sector
Route::get('/establecimientos', [EstablecimientoController::class, 'index'])->name('establecimientos.index');
Route::get('/get-establecimientos-json', [EstablecimientoController::class, 'getEstablecimientosJson']);
Route::post('/guardar-establecimiento', [EstablecimientoController::class, 'guardarEstabInfo'])->name('guardar-establecimiento');
//Route::get('/get-servicios/{idEst}', [ServicioController::class, 'getServicios'])->name('get-servicios');
Route::get('/get-sectores/{idEst?}', [SectorController::class, 'getSectores'])->name('get-sectores');

Route::get('/get-sectores-establecimiento/{idEst?}', [SectorController::class, 'getSectoresPorEstablecimiento'])->name('get-sectores-establecimiento');


Route::get('/get-estructura-establecimiento/{idEst}', [EstablecimientoController::class, 'getEstructuraEstablecimiento']);
Route::get('/get-data-establecimiento/{idEst}', [EstablecimientoController::class, 'getDataEstablecimiento']);




//Moviles
// Route::get('/moviles', [MovilController::class, 'index'])->name('moviles.index');
// Route::get('/get-moviles-json', [MovilController::class, 'getMovilesJson']);
// Route::get('/get-status-moviles/{idMovil}', [StatusMovilController::class, 'getStatusMoviles'])->name('get-status-moviles');

//Establecimiento/Estudios
Route::get('/get-estudios/{idEst}', [EstudioController::class, 'getEstudios'])->name('get-estudios');
Route::get('/asignar-estudios', [EstudioController::class, 'addEstudioToEstablecimiento'])->name('asignar-estudios');


Route::get('/distritos', [DistritoController::class, 'index'])->name('distritos.index');
Route::get('/get-distritos-json/{regionID?}', [DistritoController::class, 'getDistritosJson']);


Route::get('/app/ot-management', [OrdenTrabajoController::class, 'otManagement'])->name('app-ot-management');
Route::resource('/ot-list', OrdenTrabajoController::class);
//Route::get('/app/ot-preview/{idOT}', [OrdenTrabajoController::class, 'showOT'])->name('app-ot-preview');
Route::resource('ordenTrabajos', OrdenTrabajoController::class);


Route::get('/app/funcionario-management', [FuncionarioController::class, 'FuncionarioManagement'])->name('app-funcionario-management');

Route::resource('/funcionario-list', FuncionarioController::class);





Route::get('configuraciones-por-region/{idRegion}/{tipoCobertura}', [CoberturaController::class, 'getConfiguracionesPorRegion']);


Route::get('/app/ot/preview/', $controller_path . '\apps\OTPreview@index')->name('app-ot-preview');
Route::get('/get-ot-json/{idOT}', [OrdenTrabajoController::class, 'getOrdenesTrabajo']);

Route::get('/app/ot/print', $controller_path . '\apps\OTPrint@index')->name('app-ot-print');


Route::get('/qrcode', [QrCodeController::class, 'index']);



Route::get('/capacidad', [CapacidadCamaController::class, 'index'])->name('capacidad.index');
Route::get('/capacidad/create', [CapacidadCamaController::class, 'create'])->name('capacidad.create');
Route::post('/capacidad/store', [CapacidadCamaController::class, 'store'])->name('capacidad.store');
Route::get('/capacidad/{capacidadCama}', [CapacidadCamaController::class, 'show'])->name('capacidad.show');
Route::get('/capacidad/{capacidadCama}/edit', [CapacidadCamaController::class, 'edit'])->name('capacidad.edit');
Route::put('/capacidad/{capacidadCama}', [CapacidadCamaController::class, 'update'])->name('capacidad.update');
Route::delete('/capacidad/{capacidadCama}', [CapacidadCamaController::class, 'destroy'])->name('capacidad.destroy');

// Ruta para buscar capacidades por establecimiento y servicio
Route::get('/capacidad/buscar/{establecimientoID}/{servID?}', [CapacidadCamaController::class, 'buscarCapacidadesPorEstablecimiento']);
Route::get('/capacidad/filtrar/{idEst}/{idEst_Area_Serv_Depto?}', [CapacidadCamaController::class, 'filtrarCapacidades']);




Route::get('/funcionarios/check/{funcCI}', [FuncionarioController::class, 'checkFuncionarioByCI']);
