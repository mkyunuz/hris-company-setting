$(function(){
// alert(1);
    const $departmentEL = $("#department_id");
    const $positionEl = $("#leader_positions");

    const $wrapperContainer = $("#wrapper-content");
    const departmentUrl = $wrapperContainer.attr("data-department-url");
    function getHelperData(url, id, text)
    {
        var result = [];
		$.ajax({
			url: url,
			dataType: "JSON",
			async: false,
			success: function (res) {
                const {payload = []} = res
				payload.map((val, idx) => {
					result.push({ id: val[id], text: val[text]})
				})
			}
		})
		return result;
    }
    $departmentEL.select2({
        placeholder: 'Pilih department',
	    theme: 'bootstrap-5',
	    allowClear: true,
	    data: getHelperData(departmentUrl, "id", "department_name"),
        multiple: false,
        width: '100%'

	});
})