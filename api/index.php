<?php
require_once 'vendor/propel/propel1/runtime/lib/Propel.php';
// Initialize Propel with the runtime configuration
Propel::init("build/conf/beaconnow_app-conf.php");
// Add the generated 'classes' directory to the include path
set_include_path("build/classes" . PATH_SEPARATOR . get_include_path());

//setup Slim
require 'vendor/autoload.php';
require 'vendor/slim/slim/Slim/Slim.php';

$app = new \Slim\Slim();
$app->view(new \JsonApiView());
$app->add(new \JsonApiMiddleware());

//include controllers
include_once('controllers/AppController.php');
include_once('controllers/UserController.php');
include_once('controllers/CommunityController.php');
include_once('controllers/StateController.php');
include_once('controllers/TimeZoneController.php');
include_once('controllers/ContactController.php');
include_once('controllers/SponsorController.php');
include_once('controllers/OrganizationController.php');

//user routes

$userCtrl = new UserController();
$app->get('/user', array($userCtrl, 'showList')); //need admin priviledges
$app->post('/user', array($userCtrl, 'add'));
//$app->put('/user/:id', array($userCtrl, 'update')); //can only edit its own account
//$app->put('/admin/user/:id', array($userCtrl, 'adminUpdate')); //need admin priviledges
//$app->delete('/admin/user/:id', array($userCtrl, 'delete')); //need admin priviledges

$app->post('/user/login', array($userCtrl, 'login'));
$app->get('/user/logout', array($userCtrl, 'logout'));
$app->get('/user/getLoggedInUser', array($userCtrl, 'getLoggedInUser'));
$app->post('/user/forgotpassword', array($userCtrl, 'forgotpassword'));
$app->post('/user/resetpassword', array($userCtrl, 'resetpassword'));

//community routes
$communityCtrl = new CommunityController();
$app->get('/community', array($communityCtrl, 'showList')); 
$app->post('/community', array($communityCtrl, 'add'));
$app->put('/community/:id', array($communityCtrl, 'update'));
$app->delete('/community/:id', array($communityCtrl, 'delete'));

//state routes
$stateCtrl = new StateController();
$app->get('/state', array($stateCtrl, 'showList')); 
//timezone routes
$stateCtrl = new TimeZoneController();
$app->get('/timezone', array($stateCtrl, 'showList')); 
//contact routes
$stateCtrl = new ContactController();
$app->get('/contact', array($stateCtrl, 'showList')); 

//sponsor routes
$sponsorCtrl = new SponsorController();
$app->get('/sponsor', array($sponsorCtrl, 'showList')); 
$app->post('/sponsor', array($sponsorCtrl, 'add'));
$app->put('/sponsor/:id', array($sponsorCtrl, 'update'));
$app->delete('/sponsor/:id', array($sponsorCtrl, 'delete'));

//organizations routes
$organizationCtrl = new OrganizationController();
$app->get('/organization', array($organizationCtrl, 'showList')); 
$app->post('/organization', array($organizationCtrl, 'add'));
$app->put('/organization/:id', array($organizationCtrl, 'update'));
$app->delete('/organization/:id', array($organizationCtrl, 'delete'));

$app->run();


