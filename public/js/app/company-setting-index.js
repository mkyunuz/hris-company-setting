$(function(){

    const $wrapperContentEl= $("#wrapper-content");
    const $pph21EL = $(".enable_pph21");
    const $pph21Checked = $("input[name=enable_pph21]:checked");
    const $pph21AdditionalContainer = $("#pph21-additional-container");
    const $bpjsksEL = $(".enable_bpjsks");
    const $bpjsksChecked = $("input[name=enable_bpjsks]:checked");
    const $bpjsksAdditionalContainer = $("#bpjsks-additional-container");
    const $bpjsSettingEl = $("#bpjs-seting");
    
    const $bpjstkEL = $(".enable_bpjstk");
    const $bpjstkChecked = $("input[name=enable_bpjstk]:checked");
    const $bpjstkAdditionalContainer = $("#bpjstk-additional-container");
    
    const pph21Url = $wrapperContentEl.attr("data-pph21-url");
    const bpjsUrl = $bpjsSettingEl.attr("data-bpjs-url");

    // alert(bpjsUrl);
    $pph21EL.change(function(){
        initPph21($(this).val());
    })


    $bpjsksEL.change(function(){
        initBpjsks($(this).val());
    })
    $bpjstkEL.change(function(){
        initBpjstk($(this).val());
    })

    const pph21Data = (function(){
        var result = {};
        $.ajax({
            dataType: "JSON",
            url: pph21Url,
            async: false,
            success: (res) => {
                const { payload } = res
                result = payload
            }
        })
        return result;
    })()

    const bpjsData = (function(){
        var result = {};
        $.ajax({
            dataType: "JSON",
            url: bpjsUrl,
            async: false,
            success: (res) => {
                const { payload } = res
                result = payload
            }
        })
        return result;
    })()
    function initPph21(isEnable = 0)
    {
        if(isEnable == 1){
            $pph21AdditionalContainer.html(getTemplatePPh21());
            $("#npwp_company_name").focus();
        } else{
            $pph21AdditionalContainer.html("");
        }
    }
    function initBpjsks(isEnable = 0)
    {
        if(isEnable == 1){
            $bpjsksAdditionalContainer.html(getTemplateBpjsKs());
            $("#corporate_responsibility_bpjsks").focus()
        } else{
            $bpjsksAdditionalContainer.html("");
        }
    }

    function initBpjstk(isEnable = 0)
    {
        if(isEnable == 1){
            $bpjstkAdditionalContainer.html(getTemplateBpjsTK());
        } else{
            $bpjstkAdditionalContainer.html("");
        }
    }

    init()
    function init(){
        initPph21($pph21Checked.val())
        initBpjsks($bpjsksChecked.val())
        initBpjstk($bpjstkChecked.val())
    }


    function getTemplatePPh21(config = {})
    {
        var tpl = '<div class="mb-3 row">';
                tpl +='<div class="row">';
                    tpl +='<div class="col-sm-6">';
                        tpl +='<div class="card border-dashed no-shadow">';
                            tpl +='<div class="card-body">';
                                tpl +='<p>Nama & NPWP Perusahaan / Badan Usaha</p>';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-4 col-form-label">';
                                        tpl +='<p>Nama</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-8">';
                                        tpl +='<input type="text" class="form-control input-gray" id="npwp_company_name" name="npwp_company_name" value="'+(pph21Data.npwp_company_name || "")+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-4 col-form-label">';
                                        tpl +='<p>Nomor NPWP</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-8">';
                                        tpl +='<input type="text" class="form-control input-gray" id="npwp_company_number" name="npwp_company_number" value="'+(pph21Data.npwp_company_number || "")+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                            tpl +='</div>';
                        tpl +='</div>';
                        
                    tpl +='</div>';
                    tpl +='<div class="col-sm-6">';
                        tpl +='<div class="card border-dashed no-shadow">';
                            tpl +='<div class="card-body">';
                                tpl +='<p>Nama & NPWP Pemimpin Perusahaan / Kuasa</p>';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-4 col-form-label">';
                                        tpl +='<p>Nama</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-8">';
                                        tpl +='<input type="text" class="form-control input-gray" id="nppwp_owner_name" name="nppwp_owner_name" value="'+(pph21Data.nppwp_owner_name || "")+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-4 col-form-label">';
                                        tpl +='<p>Nomor NPWP</p>';
                                tpl +=' </label>';
                                    tpl +='<div class="col-sm-8">';
                                        tpl +='<input type="text" class="form-control input-gray" id="npwp_owner_number" name="npwp_owner_number" value="'+(pph21Data.npwp_owner_number || "")+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                            tpl +='</div>';
                        tpl +='</div>';
                        
                    tpl +='</div>';
                tpl +='</div>';
                
            tpl +='</div>';
        return tpl;
    }


    function getTemplateBpjsKs(config = {})
    {
        const {bpjsks = {}} = bpjsData
        const { corporate_responsibility = "", employee_responsibility = "", maximum_salary = ""} = bpjsks
        var tpl = '<div class="mb-3 row">';
                // tpl +='<div class="row">';
                    tpl +='<div class="col-sm-12">';
                        tpl +='<div class="card no-border no-shadow">';
                            tpl +='<div class="card-body">';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-5 col-form-label">';
                                        tpl +='<p>Iuran Bpjs ditanggung Perusahaan</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-3">';
                                        tpl +='<input type="text" class="form-control input-gray" id="corporate_responsibility_bpjsks" name="corporate_responsibility_bpjsks" value="'+corporate_responsibility+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-5 col-form-label">';
                                        tpl +='<p>Iuran Bpjs ditanggung peserta</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-3">';
                                        tpl +='<input type="text" class="form-control input-gray" id="employee_responsibility_bpjsks" name="employee_responsibility_bpjsks" value="'+employee_responsibility+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-5 col-form-label">';
                                        tpl +='<p>Batas maksimal upah</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-3">';
                                        tpl +='<input type="text" class="form-control input-gray" id="max_salary_bpjsks" name="salary_max_bpjsks" value="'+maximum_salary+'">';
                                    tpl +='</div>';
                                tpl +='</div>';
                            tpl +='</div>';
                        tpl +='</div>';
                    tpl +='</div>';
                // tpl +='</div>';
            tpl +='</div>';
        return tpl;
    }

    function getTemplateBpjsTK(config = {}) 
    {
        const {bpjstk = {}} = bpjsData
        const { jht = {}, jkk= {}, jkm={}, jp ={} } = bpjstk
        var corporateJht = jht.corporate_responsibility || 0;
        var employeeJht = jht.employee_responsibility || 0;
        var corporateJkk = jkk.corporate_responsibility || 0;
        var employeeJkk = jkk.employee_responsibility || 0;

        var corporateJkm = jkm.corporate_responsibility || 0;
        var employeeJkm = jkm.employee_responsibility || 0;

        var corporateJp = jp.corporate_responsibility || 0;
        var employeeJp = jp.employee_responsibility || 0;
        var maxSalaryJp = jp.maximum_salary || 0;
        
        var tpl = '<div class="mb-3 row">';
                tpl +='<div class="row">';
                    tpl +='<div class="col-sm-12">';
                        tpl +='<div class="card border-dashed no-shadow">';
                            tpl +='<div class="card-body">';
                                tpl +='<div class="row">';
                                    tpl +='<label for="" class="col-sm-4 col-form-label">';
                                        tpl +='<p>NPP</p>';
                                    tpl +='</label>';
                                    tpl +='<div class="col-sm-4">';
                                        tpl +='<input type="text" class="form-control input-gray" id="npp" name="npp" value="">';
                                    tpl +='</div>';
                                tpl +='</div>';
                                tpl +='<div class="mb-3 row">';
                                    tpl +='<label for="" class="col-sm-4 col-form-label">Dasar Perhitungan</label>';
                                    tpl +='<div class="col-sm-4">';
                                        tpl +='<select id="locations" name="bpjsks_basis" class="form-control select-default">';
                            
                                        tpl +='</select>';
                                    tpl +='</div>';
                                tpl +='</div>';
                                tpl +='<div class="row">';
                                    tpl +='<div class="col-sm-8">';
                                        tpl +='<table class="table table-sm align-middle">';
                                            tpl +='<thead>';
                                                tpl +='<tr>';
                                                    tpl +='<th>Nama Jaminan</th>';
                                                    tpl +='<th>Ditanggung Perusahaan</th>';
                                                    tpl +='<th>Ditanggung Karyawan</th>';
                                                    tpl +='<th>Batas Upah</th>';
                                                tpl +='</tr>';
                                                
                                                tpl +='<tbody>';
                                                    tpl +='<tr>';
                                                        tpl +='<td>Jaminan Hari Tual (JHT)</td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="corporate_jht" value="'+corporateJht+'" /></td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="employee_jht" value="'+employeeJht+'" /></td>';
                                                        tpl +='<td></td>';
                                                    tpl +='</tr>';
                                                    tpl +='<tr>';
                                                        tpl +='<td>Jaminan Kecelekaan Kerja (JKK)</td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray form-control-sm" name="corporate_jkk" value="'+corporateJkk+'" /></td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="employee_jkk" value="'+employeeJkk+'"/></td>';
                                                        tpl +='<td></td>';
                                                    tpl +='</tr>';
                                                    tpl +='<tr>';
                                                        tpl +='<td>Jaminan Kematian (JKM)</td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="corporate_jkm" value="'+corporateJkm+'" /></td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="employee_jkm" value="'+employeeJkm+'" /></td>';
                                                        tpl +='<td></td>';
                                                    tpl +='</tr>';
                                                    tpl +='<tr>';
                                                        tpl +='<td>Jaminan Kematian (JP)</td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="corporate_jp" value="'+corporateJp+'" /></td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="employee_jp" value="'+employeeJp+'" /></td>';
                                                        tpl +='<td><input type="text" class="form-control input-gray" name="maximum_salary" value="'+maxSalaryJp+'" /></td>';
                                                    tpl +='</tr>';
                                                    
                                                tpl +='</tbody>';
                                            tpl +='</thead>';
                                       tpl +=' </table>';
                                    tpl +='</div>';
                                tpl +='</div>';
                                
                            tpl +='</div>';
                        tpl +='</div>';
                        
                    tpl +='</div>';
                    
                tpl +='</div>';
                
            tpl +='</div>';

            return tpl;
    }
})