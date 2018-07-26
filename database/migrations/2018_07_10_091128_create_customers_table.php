<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('customer_name');
			$table->string('customer_ktp_number');

			/*
			$table->string('customer_birthplace');
			$table->string('customer_birthdate');
			$table->string('customer_job_type');
			$table->string('customer_marital_status');
			$table->string('mother_maiden_name');
			$table->string('gender');
			$table->string('education');
			$table->string('customer_home_phone_number')->nullable();
			$table->string('customer_mobile_phone_number')->nullable();
			$table->string('customer_email')->nullable();
			$table->string('nett_income')->nullable();
			$table->string('other_obligation')->nullable();
			$table->string('total_dependent')->nullable();
			$table->string('pisah_harta')->nullable();
			$table->string('ktp_address')->nullable();
			$table->string('ktp_rt');
			$table->string('ktp_rw');
			$table->string('ktp_kelurahan');
			$table->string('ktp_kecamatan');
			$table->string('ktp_kota');
			$table->string('ktp_kodepos');
			$table->string('npwp_name')->nullable();
			$table->string('npwp_number')->nullable();
			$table->string('npwp_address')->nullable();
			$table->string('npwp_rt')->nullable();
			$table->string('npwp_rw')->nullable();
			$table->string('npwp_kelurahan')->nullable();
			$table->string('npwp_kecamatan')->nullable();
			$table->string('npwp_kota')->nullable();
			$table->string('npwp_kodepos')->nullable();
			$table->string('correspondent_address')->nullable();
			$table->string('correspondent_rt')->nullable();
			$table->string('correspondent_rw')->nullable();
			$table->string('correspondent_kelurahan')->nullable();
			$table->string('correspondent_kecamatan')->nullable();
			$table->string('correspondent_kota')->nullable();
			$table->string('correspondent_kodepos')->nullable();
			$table->string('emergency_name')->nullable();
			$table->string('emergency_mobile_phone_number')->nullable();
			$table->string('emergency_home_phone_number')->nullable();
			$table->string('emergency_email')->nullable();
			$table->string('emergency_relation')->nullable();
			$table->string('spouse_name')->nullable();
			$table->string('spouse_ktp_number')->nullable();
			$table->string('spouse_birthplace')->nullable();
			$table->string('spouse_birthdate')->nullable();
			$table->string('spouse_job_type')->nullable();
			$table->string('spouse_address')->nullable();
			$table->string('spouse_rt')->nullable();
			$table->string('spouse_rw')->nullable();
			$table->string('spouse_kelurahan')->nullable();
			$table->string('spouse_kecamatan')->nullable();
			$table->string('spouse_kota')->nullable();
			$table->string('spouse_kodepos')->nullable();
			$table->string('job_name')->nullable();
			$table->string('job_phone_number')->nullable();
			$table->string('job_position')->nullable();
			$table->string('job_start_date')->nullable();
			$table->string('job_info')->nullable();
			$table->string('job_address')->nullable();
			$table->string('job_rt')->nullable();
			$table->string('job_rw')->nullable();
			$table->string('job_kelurahan')->nullable();
			$table->string('job_kecamatan')->nullable();
			$table->string('job_kota')->nullable();
			$table->string('job_kodepos')->nullable();
			$table->string('job_npm')->nullable();
			$table->string('job_turnover')->nullable();
			$table->text('history')->nullable();
			*/
			$table->integer('user_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('customers');
	}
}
