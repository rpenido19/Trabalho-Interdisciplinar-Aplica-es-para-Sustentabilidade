$(document).ready(function () {
    $("#flag_admin").on("change", function () {
        userTableDataTable()
    })
    userTableDataTable();
});

function userTableDataTable() {
    if ($.fn.DataTable.isDataTable('#user-table')) {
        $('#user-table').DataTable().destroy();
    }
    $('#user-table').DataTable({
        responsive: true,
        language: { 'url': '//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json' },
        ajax: {
            url: '/user/dataTable',
            type: 'GET',
            data: {
                flag_admin: $("#flag_admin").val()
            }
        },
        columnDefs: [{ 'targets': '_all', 'defaultContent': '' }],
        columns: [
            { data: "name" },
            { data: "cell" },
            { data: "email" },
            { data: "birthday" },
            {
                data: "flag_admin", render: function (data, type) {
                    return data == 1 ? "Administrador" : "Cliente"
                }
            },
        ],
        "order": [[0, 'asc']],
        "lengthChange": false
    });
}

function createUser() {
    $('#createUser').modal('show')
}

function storeUser() {
    console.log("teste")
}