$(function(){
// alert(1);
    const $locationsEl = $("#locations");
    const $positionEl = $("#positions");

    const $wrapperContainer = $("#wrapper-content");
    const locationUrl = $wrapperContainer.attr("data-office-url");
    const positionUrl = $wrapperContainer.attr("data-position-url");
    

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

    $locationsEl.select2({
        placeholder: 'Pilih lokasi kantor',
	    theme: 'bootstrap-5',
	    allowClear: true,
	    data: getHelperData(locationUrl, "id", "office_name"),
        multiple: true,
        width: '100%'

	});
    $positionEl.select2({
        placeholder: 'Jabatan atasan',
	    theme: 'bootstrap-5',
	    allowClear: true,
	    data: getHelperData(positionUrl, "id", "position_name"),
        multiple: true,
        width: '100%'

	});
})