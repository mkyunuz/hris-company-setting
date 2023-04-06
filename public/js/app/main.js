const BASEURL = $("meta[name='base_url']").attr("content");

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    complete: (xhr, complete) => {
    	var xcrsf = xhr.getResponseHeader('xcrsf');
    }
});