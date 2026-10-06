<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->get('/', 'Home::index');

$routes->get('about', 'Home::about');

$routes->get('contact', 'Home::contact');

$routes->get('create', 'Crud::create');
$routes->post('create', 'Crud::create');

$routes->get('read', 'Crud::read');

$routes->get('delete/(:num)', 'Crud::delete/$1');

$routes->get('edit/(:num)', 'Crud::edit/$1');
$routes->post('edit/(:num)', 'Crud::edit/$1');

$routes->get('/', 'Admin::index');
$routes->post('/', 'Admin::index');

$routes->get('dashboard', 'Admin::dashboard');
$routes->get('logout', 'Admin::logout');

$routes->post('change-password', 'Admin::change_password');
$routes->post('reset-password-request', 'Admin::reset_password_request');

$routes->get('reset-password/(:any)', 'Admin::reset_password/$1');

$routes->post('reset-password-update', 'Admin::reset_password_update');


$routes->get('patients', 'Patients::index');
$routes->post('patients', 'Patients::index');

$routes->get('patients/searchPatients', 'Patients::searchPatients');
$routes->get('OPD-consultation', 'Patients::OPD_consultation');
$routes->post('patients/saveOPD', 'Patients::saveOPD');
$routes->post('OPD-consultation', 'Patients::OPD_consultation');
$routes->get(
    'pharmacybilling/searchPatients',
    'PharmacyBilling::searchPatients'
);
$routes->get('pharmacy-billing', 'Pharmacy::index');
$routes->post('pharmacy-billing', 'Pharmacy::index');
$routes->post('pharmacy/getPatientOPD', 'Pharmacy::getPatientOPD');
$routes->post('pharmacy/getOPDPrescription', 'Pharmacy::getOPDPrescription');



$routes->get('stock-management', 'Stock::index');
$routes->post('stock-management', 'Stock::index');

$routes->get('pharmacy-billing', 'Pharmacy::index');

$routes->get('patient-history', 'Patients::patient_history');

$routes->get('my-profile', 'Admin::my_profile');

$routes->get('medical-certificates', 'Patients::medical_certificates');

$routes->get('BP-patients', 'Patients::BP_patients');

$routes->get('sugar-patients', 'Patients::sugar_patients');

$routes->get('reminders', 'Patients::reminders');


$routes->group('pharmacybilling', function ($routes) {

    // Get all
    $routes->get('getData', 'PharmacyBilling::getData');

    // Get single by ID
    $routes->get('getDataWhere/(:num)', 'PharmacyBilling::getDataWhere/$1');

    // Insert
    $routes->post('insert', 'PharmacyBilling::insert');

    // Update by ID
    $routes->post('update/(:num)', 'PharmacyBilling::update/$1');

    // Delete by ID
    $routes->post('delete/(:num)', 'PharmacyBilling::delete/$1');

});