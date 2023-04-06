@extends('layouts.app')

@section('content')
<div class="container" id="wrapper-content" data-office-url="{{route('office.data')}}" data-position-url="{{route('position.data')}}">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('department.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="department_name" class="col-sm-4 col-form-label">Nama Departmen</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="department_name" name="department_name" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="locations" class="col-sm-4 col-form-label control-label-desc">
                                <p>Lokasi Kantor</p>
                                <p class="subtitle">Pilih di kantor mana saja departmen ini berada </p>
                            </label>
                            <div class="col-sm-8">
                                <select id="locations" name="offices[]" class="form-control select-default" aria-label="Jabatan">
                                    
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-4 col-form-label control-label-desc">
                                <p>Jabatan Kepala Department</p>
                                <p class="subtitle">Buat jabatan batu untuk kepala departmen </p>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="position" name="position" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="leader_positions" class="col-sm-4 col-form-label">Atasan Langsung</label>
                            <div class="col-sm-4">
                                <select id="leader_positions" name="leader_position" class="form-control select-default"></select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control select-default" name="leader_employee">
                                    <option value="">Nama Atasan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        

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
<script src="{{asset('js/app/department-form.js')}}" ></script>
@endpush
@endsection
