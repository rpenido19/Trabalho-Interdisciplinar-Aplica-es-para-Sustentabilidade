<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#filters" aria-expanded="false" aria-controls="filters"><i class="fas fa-filter me-1"></i>Filtros</button>
                        <button type="button" class="btn btn-success" onclick="createUser()"><i class="fas fa-plus-circle me-1"></i>Cadastrar</button>
                    </div>
                    <div class="collapse mt-3" id="filters">
                        <form class="row" id="user-filters">
                            @csrf
                            <div class="col-12 col-md-2">
                                <label for="flag_admin" class="form-label">Tipo de Usuário</label>
                                <select class="form-control" name="flag_admin" id="flag_admin">
                                    <option selected>Todos</option>
                                    <option value="1">Administrador</option>
                                    <option value="0">Cliente</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive m-3">
                    <table class="dataTable table table-sm table-striped table-hover w-100" id="user-table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Aniversário</th>
                                <th>Tipo de Usuário</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="{{ asset('/js/users/index.js') }}"></script>
@include('user/create')
