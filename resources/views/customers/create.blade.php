@extends('layouts.master')

@section('content')

<div class="bd-example bd-example-tabs col-md-12">
	<form method="POST" action="/customer" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group mt-2 mr-auto">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active show" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="true">Debitur</a>
				{{-- 
				<a class="nav-item nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">NPWP</a>
				<a class="nav-item nav-link" id="correspondent-tab" data-toggle="tab" href="#correspondent" role="tab" aria-controls="correspondent" aria-selected="false">Koresponden</a>
				<a class="nav-item nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">Emergency</a>
				<a class="nav-item nav-link" id="spouse-tab" data-toggle="tab" href="#spouse" role="tab" aria-controls="spouse" aria-selected="false">Pasangan</a>
				<a class="nav-item nav-link" id="job-tab" data-toggle="tab" href="#job" role="tab" aria-controls="job" aria-selected="false">Pekerjaan</a>
				 --}}
			</div>
		</nav>
		<div class="tab-content border border-top-0 p-3" id="nav-tabContent">

			{{-- Customer tab --}}
			<div class="tab-pane fade active show" id="customer" role="tabpanel" aria-labelledby="customer">
				<div class="form-group">
					<label for="customer_ktp_number">Nomor KTP</label>
					<input type="text" class="form-control" id="customer_ktp_number" name="customer_ktp_number">
				</div>
				<div class="form-group">
					<label for="customer_name">Nama</label>
					<input type="text" class="form-control" id="customer_name" name="customer_name">
				</div>
				{{--
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="customer_birthplace">Tempat Lahir</label>
							<input type="text" class="form-control" id="customer_birthplace" name="customer_birthplace">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="customer_birthdate">Tanggal Lahir</label>
							<input type="text" class="form-control" id="customer_birthdate" name="customer_birthdate">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="ktp_address">Alamat</label>
					<input type="text" class="form-control" id="ktp_address" name="ktp_address">
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="ktp_rt">RT</label>
							<input type="text" class="form-control" id="ktp_rt" name="ktp_rt">
						</div>
						<div class="form-group">
							<label for="ktp_rw">RW</label>
							<input type="text" class="form-control" id="ktp_rw" name="ktp_rw">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="ktp_kelurahan">Kelurahan</label>
							<input type="text" class="form-control" id="ktp_kelurahan" name="ktp_kelurahan">
						</div>
						<div class="form-group">
							<label for="ktp_kecamatan">Kecamatan</label>
							<input type="text" class="form-control" id="ktp_kecamatan" name="ktp_kecamatan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="ktp_kota">Kota</label>
							<input type="text" class="form-control" id="ktp_kota" name="ktp_kota">
						</div>
						<div class="form-group">
							<label for="ktp_kodepos">Kode Pos</label>
							<input type="text" class="form-control" id="ktp_kodepos" name="ktp_kodepos">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="customer_home_phone_number">No Telepon Rumah</label>
							<input type="text" class="form-control" id="customer_home_phone_number" name="customer_home_phone_number">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="customer_mobile_phone_number">No HP</label>
							<input type="text" class="form-control" id="customer_mobile_phone_number" name="customer_mobile_phone_number">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="customer_email">Email</label>
							<input type="text" class="form-control" id="customer_email" name="customer_email">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="mother_maiden_name">Nama Gadis Ibu Kandung</label>
					<input type="text" class="form-control" id="mother_maiden_name" name="mother_maiden_name">
				</div>
				<div class="form-row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="gender">Jenis Kelamin</label>
							<select class="form-control" id="gender" name="gender">
								@foreach($gender as $key => $gender)
									<option value="{{ $key }}"> {{ $gender }} </option>
								@endforeach 
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="education">Pendidikan Terakhir</label>
							<select class="form-control" id="education" name="education">
								@foreach($education as $key => $edu)
									<option value="{{ $key }}"> {{ $edu }} </option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="customer_marital_status">Status Nikah</label>
							<select class="form-control" id="customer_marital_status" name="customer_marital_status">
								@foreach($marital_status as $key => $stats)
									<option value="{{ $key }}"> {{ $stats }} </option>
								@endforeach 
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="total_dependent">Jumlah Tanggungan</label>
							<input type="text" class="form-control" id="total_dependent" name="total_dependent">
						</div>
					</div>
				</div>
				--}}
			</div>

			{{-- NPWP tab --}}
			{{--
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="form-group">
					<label for="npwp_number">Nomor NPWP</label>
					<input type="text" class="form-control" id="npwp_number" name="npwp_number">
				</div>
				<div class="form-group">
					<label for="npwp_name">Nama NPWP</label>
					<input type="text" class="form-control" id="npwp_name" name="npwp_name">
				</div>
				<div class="form-group">
					<label for="npwp_address">Alamat</label>
					<input type="text" class="form-control" id="npwp_address" name="npwp_address">
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="npwp_rt">RT</label>
							<input type="text" class="form-control" id="npwp_rt" name="npwp_rt">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="npwp_kelurahan">Kelurahan</label>
							<input type="text" class="form-control" id="npwp_kelurahan" name="npwp_kelurahan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="npwp_kota">Kota</label>
							<input type="text" class="form-control" id="npwp_kota" name="npwp_kota">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="npwp_rw">RW</label>
							<input type="text" class="form-control" id="npwp_rw" name="npwp_rw">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="npwp_kecamatan">Kecamatan</label>
							<input type="text" class="form-control" id="npwp_kecamatan" name="npwp_kecamatan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="npwp_kodepos">Kodepos</label>
							<input type="text" class="form-control" id="npwp_kodepos" name="npwp_kodepos">
						</div>
					</div>
				</div>
			</div>
			--}}

			{{-- Correspondent tab --}}
			
			<div class="tab-pane fade" id="correspondent" role="tabpanel" aria-labelledby="correspondent-tab">
				<div class="form-group">
					<label for="correspondent_address">Alamat</label>
					<input type="text" class="form-control" id="correspondent_address" name="correspondent_address">
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="correspondent_rt">RT</label>
							<input type="text" class="form-control" id="correspondent_rt" name="correspondent_rt">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correspondent_kelurahan">Kelurahan</label>
							<input type="text" class="form-control" id="correspondent_kelurahan" name="correspondent_kelurahan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correspondent_kota">Kota</label>
							<input type="text" class="form-control" id="correspondent_kota" name="correspondent_kota">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correspondent_rw">RW</label>
							<input type="text" class="form-control" id="correspondent_rw" name="correspondent_rw">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correspondent_kecamatan">Kecamatan</label>
							<input type="text" class="form-control" id="correspondent_kecamatan" name="correspondent_kecamatan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correspondent_kodepos">Kodepos</label>
							<input type="text" class="form-control" id="correspondent_kodepos" name="correspondent_kodepos">
						</div>
					</div>
				</div>
			</div>
			

			{{-- Emergency tab --}}
			{{-- 
			<div class="tab-pane fade" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
				<div class="form-group">
					<label for="emergency_name">Nama</label>
					<input type="text" class="form-control" id="emergency_name" name="emergency_name">
				</div>
				<div class="form-group">
					<label for="emergency_home_phone_number">No Telepon Rumah</label>
					<input type="text" class="form-control" id="emergency_home_phone_number" name="emergency_home_phone_number">
				</div>
				<div class="form-group">
					<label for="emergency_mobile_phone_number">No HP</label>
					<input type="text" class="form-control" id="emergency_mobile_phone_number" name="emergency_mobile_phone_number">
				</div>
				<div class="form-group">
					<label for="emergency_email">Email</label>
					<input type="text" class="form-control" id="emergency_email" name="emergency_email">
				</div>
				<div class="form-group">
					<label for="emergency_relation">Hubungan</label>
					<input type="text" class="form-control" id="emergency_relation" name="emergency_relation">
				</div>
			</div>
			 --}}

			{{-- Spouse tab --}}
			{{-- 
			<div class="tab-pane fade" id="spouse" role="tabpanel" aria-labelledby="spouse-tab">
				<div class="form-group">
					<label for="spouse_ktp_number">Nomor KTP</label>
					<input type="text" class="form-control" id="spouse_ktp_number" name="spouse_ktp_number">
				</div>
				<div class="form-group">
					<label for="spouse_name">Nama</label>
					<input type="text" class="form-control" id="spouse_name" name="spouse_name">
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="spouse_birthplace">Tempat Lahir</label>
							<input type="text" class="form-control" id="spouse_birthplace" name="spouse_birthplace">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="spouse_birthdate">Tanggal Lahir</label>
							<input type="text" class="form-control" id="spouse_birthdate" name="spouse_birthdate">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="spouse_job_type">Pekerjaan</label>
					<input type="text" class="form-control" id="spouse_job_type" name="spouse_job_type">
				</div>
				<div class="form-group">
					<label for="spouse_address">Alamat</label>
					<input type="text" class="form-control" id="spouse_address" name="spouse_address">
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="spouse_rt">RT</label>
							<input type="text" class="form-control" id="spouse_rt" name="spouse_rt">
						</div>
						<div class="form-group">
							<label for="spouse_rw">RW</label>
							<input type="text" class="form-control" id="spouse_rw" name="spouse_rw">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="spouse_kelurahan">Kelurahan</label>
							<input type="text" class="form-control" id="spouse_kelurahan" name="spouse_kelurahan">
						</div>
						<div class="form-group">
							<label for="spouse_kecamatan">Kecamatan</label>
							<input type="text" class="form-control" id="spouse_kecamatan" name="spouse_kecamatan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="spouse_kota">Kota</label>
							<input type="text" class="form-control" id="spouse_kota" name="spouse_kota">
						</div>
						<div class="form-group">
							<label for="spouse_kodepos">Kode Pos</label>
							<input type="text" class="form-control" id="spouse_kodepos" name="spouse_kodepos">
						</div>
					</div>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="pisah_harta">
					<label class="form-check-label" for="pisah_harta">Pisah Harta</label>
				</div>
			</div>
			 --}}

			{{-- Job tab --}}
			{{-- 
			<div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="job-tab">
				<div class="form-group">
					<label for="customer_job_type">Pekerjaan</label>
					<select class="form-control" id="customer_job_type" name="customer_job_type">
						@foreach($job_types as $key => $type)
							@if($key !== 'IRT')
								<option value="{{ $key }}"> {{ $type }} </option>
							@endif
						@endforeach 
					</select>
				</div>
				<div class="form-row">
					<div class="col-md-9">
						<div class="form-group">
							<label for="job_name">Nama Usaha/Perusahaan Tempat Bekerja</label>
							<input type="text" class="form-control" id="job_name" name="job_name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="job_phone_number">No Telepon Kantor</label>
							<input type="text" class="form-control" id="job_phone_number" name="job_phone_number">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="job_position">Posisi</label>
							<input type="text" class="form-control" id="job_position" name="job_position">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="job_start_date">Tanggal Mulai Kerja/Usaha</label>
							<input type="text" class="form-control" id="job_start_date" name="job_start_date">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="job_info">Jenis Usaha</label>
							<input type="text" class="form-control" id="job_info" name="job_info">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="job_address">Alamat</label>
					<input type="text" class="form-control" id="job_address" name="job_address">
				</div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="job_rt">RT</label>
							<input type="text" class="form-control" id="job_rt" name="job_rt">
						</div>
						<div class="form-group">
							<label for="job_rw">RW</label>
							<input type="text" class="form-control" id="job_rw" name="job_rw">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="job_kelurahan">Kelurahan</label>
							<input type="text" class="form-control" id="job_kelurahan" name="job_kelurahan">
						</div>
						<div class="form-group">
							<label for="job_kecamatan">Kecamatan</label>
							<input type="text" class="form-control" id="job_kecamatan" name="job_kecamatan">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="job_kota">Kota</label>
							<input type="text" class="form-control" id="job_kota" name="job_kota">
						</div>
						<div class="form-group">
							<label for="job_kodepos">Kode Pos</label>
							<input type="text" class="form-control" id="job_kodepos" name="job_kodepos">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="nett_income">Penghasilan</label>
							<input type="text" class="form-control" id="nett_income" name="nett_income">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="other_obligation">Kewajiban Lainnya</label>
							<input type="text" class="form-control" id="other_obligation" name="other_obligation">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="job_npm">NPM</label>
							<input type="text" class="form-control" id="job_npm" name="job_npm">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="job_turnover">Turn Over</label>
							<input type="text" class="form-control" id="job_turnover" name="job_turnover">
						</div>
					</div>
				</div>
			</div>
			 --}}
		</div>
	</form>
</div>

@endsection