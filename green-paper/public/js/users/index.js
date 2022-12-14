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
    $("#alert").html("");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/user/store",
        data: {
            name: $("#edit-user-name").val(),
            cell: $("#edit-user-cell").val(),
            email: $("#edit-user-email").val(),
            password: $("#edit-user-password").val(),
            flag_admin: $("#edit-user-flag_admin").val(),
            birthday: $("#edit-user-birthday").val(),
            gender: $("#edit-user-gender").val(),
        },
        dataType: 'JSON',
        success: function (result) {
            $("#edit-user-name").val(null);
            $("#edit-user-cell").val(null);
            $("#edit-user-email").val(null);
            $("#edit-user-password").val(null);
            $("#edit-user-flag_admin").val(0);
            $("#edit-user-birthday").val(null);
            $("#edit-user-gender").val(null);
            userTableDataTable();
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
