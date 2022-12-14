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
            { data: "id" },
            { data: "title" },
            { data: "author" },
            { data: "tags" },
            { data: "created_at" },
        ],
        "order": [[0, 'asc']],
        "lengthChange": false
    });
}

function createNew() {
    $('#createNew').modal('show')
}
