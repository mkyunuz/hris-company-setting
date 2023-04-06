@extends('layouts.app')

@section('content')
<div class="container" id="wrapper-content" data-department-url="{{route('department.data')}}">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('position.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="department_id" class="col-sm-4 col-form-label">Department</label>
                            <div class="col-sm-8">
                                <select id="department_id" name="department_id" class="form-control select-default">
                                    
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="locations" class="col-sm-4 col-form-label">
                                Jabatan
                            </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="position" name="position_name" value="">
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
<script src="{{asset('js/app/position-form.js')}}" ></script>
@endpush
@endsection
