@extends('layouts.app')

@section('content')
<div class="container" id="wrapper-content" data-pph21-url="{{ $pph21SettingUrl }}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('company.payroll.setting.save')}}" method="POST" autocomplete="off">
                        @csrf
                        <h5>PPH 21 Karyawan</h5>
                        <div class="mb-3 row">
                            <label for="locations" class="col-sm-5 col-form-label control-label-desc">
                                <p>Apakah perusahaan membayarkan pajak karyawan?</p>
                            </label>
                            <div class="col-sm-3">
                                <div class="d-flex checkbox-group">
                                    <div class="custom-checkbox solid">  
                                        <input type="radio" {{ $clientSetting->enable_pph21 ? 'checked' : '' }} class="enable_pph21" name="enable_pph21" value="1">  
                                        <div class="box">  
                                            Ya
                                        </div>
                                    </div>
                                    <div class="custom-checkbox solid">  
                                        <input type="radio" {{ $clientSetting->enable_pph21 ? '' : 'checked' }} class="enable_pph21" name="enable_pph21" value="0">  
                                        <div class="box">  
                                            Tidak
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pph21-additional-container"></div>
                        <hr />
                        <h5 class="mt-5">BPJS Kesahatan & Ketenagakerjaan</h5>

                        <div class="mb-3 row" id="bpjs-seting" data-bpjs-url="{{ $bpjsSettingUrl }}">
                            <label for="" class="col-sm-5 col-form-label control-label-desc">
                                <p>Apakah perusahaan mengikutsertakan bpjs kesehatan?</p>
                            </label>
                            <div class="col-sm-3">
                                <div class="d-flex checkbox-group">
                                    <div class="custom-checkbox solid">  
                                        <input type="radio" {{ $clientSetting->enable_bpjsks ? 'checked' : '' }}  class="enable_bpjsks" name="enable_bpjsks" value="1">  
                                        <div class="box">  
                                            Ya
                                        </div>
                                    </div>
                                    <div class="custom-checkbox solid">  
                                        <input type="radio" {{ $clientSetting->enable_bpjsks ? '' : 'checked' }} class="enable_bpjsks" name="enable_bpjsks" value="0">  
                                        <div class="box">  
                                            Tidak
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bpjsks-additional-container"></div>

                        <div class="mb-3 row">
                            <label for="" class="col-sm-5 col-form-label control-label-desc">
                                <p>Apakah perusahaan mengikutsertakan bpjs ketenagakerjaan?</p>
                            </label>
                            <div class="col-sm-3">
                                <div class="d-flex checkbox-group">
                                        <div class="custom-checkbox solid">  
                                            <input type="radio" {{ $clientSetting->enable_bpjstk ? 'checked' : '' }} class="enable_bpjstk" name="enable_bpjstk" value="1">  
                                            <div class="box">  
                                                Ya
                                            </div>
                                        </div>
                                        <div class="custom-checkbox solid">  
                                            <input type="radio" {{ $clientSetting->enable_bpjstk ? '' : 'checked' }} class="enable_bpjstk" name="enable_bpjstk" value="0">  
                                            <div class="box">  
                                                Tidak
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div id="bpjstk-additional-container"></div>
                        

                        
                        
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
<script src="{{asset('js/app/company-setting-index.js')}}" ></script>
@endpush
@endsection
