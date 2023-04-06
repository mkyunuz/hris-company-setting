@extends('layouts.app')

@section('content')
<div class="container" id="wrapper-content" data-office-url="{{route('office.data')}}" data-position-url="{{route('position.data')}}">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('employee.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="department_name" class="col-sm-4 col-form-label">Nama Karyawan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="employee_name" name="employee_name" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-4 col-form-label control-label-desc">
                                <p>Jenis Kelamin</p>
                            </label>
                            <div class="col-sm-8">
                                <select id="gender" name="gender" class="form-control">
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="Laki - laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea type="text" class="form-control" name="address" rows="4"></textarea>
                            </div>
                        </div>
                        <!-- <div class="mb-3 row">
                            <label for="locations" class="col-sm-4 col-form-label control-label-desc">
                                <p>Lokasi Kantor</p>
                                <p class="subtitle">Pilih di kantor mana saja departmen ini berada </p>
                            </label>
                            <div class="col-sm-8">
                                <select id="locations" name="offices[]" class="form-control select-default" aria-label="Jabatan">
                                    
                                </select>
                            </div>
                        </div> -->
                        <div class="bg-gray-100 clear-spacer-x clear-spacer-bottom card-spacer-xy text-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push("scripts")
<script src="{{asset('js/app/employee-form.js')}}" ></script>
@endpush
@endsection
