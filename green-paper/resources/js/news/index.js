
$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "GET",
    url: "",
    data: $("#formId").serializeArray(),
    dataType: 'JSON',
    success: function (result) {
    },
    error: function () {
    }
});
