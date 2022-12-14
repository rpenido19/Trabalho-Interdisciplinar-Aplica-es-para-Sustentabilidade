$(document).ready(function () {
    newsTableDataTable();
});


function newsTableDataTable() {
    if ($.fn.DataTable.isDataTable('#news-table')) {
        $('#news-table').DataTable().destroy();
    }
    $('#news-table').DataTable({
        responsive: true,
        language: { 'url': '//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json' },
        ajax: {
            url: '/news/dataTable',
            type: 'GET',
            data: {}
        },
        columnDefs: [{ 'targets': '_all', 'defaultContent': '' }],
        columns: [
            { data: "title" },
            { data: "author" },
            { data: "tags" },
            { data: "published_at", render: function (data, type) {
                date = new Date(data)
                return date.toLocaleDateString('pt-br')
            } },
        ],
        "order": [[0, 'asc']],
        "lengthChange": false
    });
}

function createNew() {
    $("#alert").html("");
    $('#createNew').modal('show')
}

function storeNews() {
    $("#alert").html("");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/news/store",
        data: {
            author: $("#edit-news-autor").val(),
            title: $("#edit-news-titulo").val(),
            tags: $("#edit-news-tags").val(),
            description: $("#edit-news-noticia").val(),
            url: $("#edit-news-url").val(),
            published_at: $("#edit-news-published_at").val(),
            formFile: $("#edit-news-formFile").val(),
        },
        dataType: 'JSON',
        success: function (result) {
            $("#edit-news-titulo").val(null);
            $("#edit-news-autor").val(null);
            $("#edit-news-tags").val(null);
            $("#edit-news-noticia").val(null);
            $("#edit-news-formFile").val(null);
            $("url").val(null);
            $("published_at").val(null);
            newsTableDataTable();
            $("#alert").html(
                `<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        ` + result.message + `
                    </div>
                </div>`);
        },
        error: function () {
            $("#alert").html(
                `<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Erro ao cadastrar
                    </div>
                </div>`);
        }
    });
}
