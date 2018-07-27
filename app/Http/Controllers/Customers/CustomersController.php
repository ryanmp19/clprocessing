<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\NPWP;
use Config;
use Datatables;

class CustomersController extends Controller
{
	public function index()
	{
		// return Datatables::of(Customer::query()->make(true));
		// $customers = [
		// 	'id'		=> 1, 
		// 	'name'		=> 'test', 
		// 	'createdby'	=> 1,
		// ];
		// return view('customers.index', compact($customers));
		return view('customers.index');
	}

	public function create()
	{
		$job_types = Config::get('enums.job_types');
		$marital_status = Config::get('enums.marital_status');
		$gender = Config::get('enums.gender');
		$education = Config::get('enums.education');
		// dd($job_types);
		return view('customers.create', compact('job_types', 'marital_status', 'gender', 'education'));
	}

	public function store()
	{
		auth()->user()->createCustomer(
			new Customer(request([
				'customer_name', 'customer_ktp_number'
			]))
		);

		// auth()->id->createCustomer(new Customer([
		// 	'customer_name'					=> request('customer_name'),
		// 	'customer_ktp_number'			=> request('customer_ktp_number'),

			
		// 	'customer_birthplace'			=> request('customer_birthplace'),
		// 	'customer_birthdate'			=> request('customer_birthdate'),
		// 	'customer_job_type'				=> request('customer_job_type'),
		// 	'customer_marital_status'		=> request('customer_marital_status'),
		// 	'mother_maiden_name'			=> request('mother_maiden_name'),
		// 	'gender'						=> request('gender'),
		// 	'education'						=> request('education'),
		// 	'customer_home_phone_number'	=> request('customer_home_phone_number'),
		// 	'customer_mobile_phone_number'	=> request('customer_mobile_phone_number'),
		// 	'customer_email'				=> request('customer_email'),
		// 	'nett_income'					=> request('nett_income'),
		// 	'other_obligation'				=> request('other_obligation'),
		// 	'total_dependent'				=> request('total_dependent'),
		// 	'pisah_harta'					=> request('pisah_harta'),
		// 	'ktp_address'					=> request('ktp_address'),
		// 	'ktp_rt'						=> request('ktp_rt'),
		// 	'ktp_rw'						=> request('ktp_rw'),
		// 	'ktp_kelurahan'					=> request('ktp_kelurahan'),
		// 	'ktp_kecamatan'					=> request('ktp_kecamatan'),
		// 	'ktp_kota'						=> request('ktp_kota'),
		// 	'ktp_kodepos'					=> request('ktp_kodepos'),
		// 	'npwp_name'						=> request('npwp_name'),
		// 	'npwp_number'					=> request('npwp_number'),
		// 	'npwp_address'					=> request('npwp_address'),
		// 	'npwp_rt'						=> request('npwp_rt'),
		// 	'npwp_rw'						=> request('npwp_rw'),
		// 	'npwp_kelurahan'				=> request('npwp_kelurahan'),
		// 	'npwp_kecamatan'				=> request('npwp_kecamatan'),
		// 	'npwp_kota'						=> request('npwp_kota'),
		// 	'npwp_kodepos'					=> request('npwp_kodepos'),
		// 	'correspondent_address'			=> request('correspondent_address'),
		// 	'correspondent_rt'				=> request('correspondent_rt'),
		// 	'correspondent_rw'				=> request('correspondent_rw'),
		// 	'correspondent_kelurahan'		=> request('correspondent_kelurahan'),
		// 	'correspondent_kecamatan'		=> request('correspondent_kecamatan'),
		// 	'correspondent_kota'			=> request('correspondent_kota'),
		// 	'correspondent_kodepos'			=> request('correspondent_kodepos'),
		// 	'emergency_name'				=> request('emergency_name'),
		// 	'emergency_mobile_phone_number'	=> request('emergency_mobile_phone_number'),
		// 	'emergency_home_phone_number'	=> request('emergency_home_phone_number'),
		// 	'emergency_email'				=> request('emergency_email'),
		// 	'emergency_relation'			=> request('emergency_relation'),
		// 	'spouse_name'					=> request('spouse_name'),
		// 	'spouse_ktp_number'				=> request('spouse_ktp_number'),
		// 	'spouse_birthplace'				=> request('spouse_birthplace'),
		// 	'spouse_birthdate'				=> request('spouse_birthdate'),
		// 	'spouse_job_type'				=> request('spouse_job_type'),
		// 	'spouse_address'				=> request('spouse_address'),
		// 	'spouse_rt'						=> request('spouse_rt'),
		// 	'spouse_rw'						=> request('spouse_rw'),
		// 	'spouse_kelurahan'				=> request('spouse_kelurahan'),
		// 	'spouse_kecamatan'				=> request('spouse_kecamatan'),
		// 	'spouse_kota'					=> request('spouse_kota'),
		// 	'spouse_kodepos'				=> request('spouse_kodepos'),
			
		// ]));

		return redirect('/');
	}

	public function show()
	{
		// dont forget to make history and add comment in view

		return view('customer.show');
	}
}