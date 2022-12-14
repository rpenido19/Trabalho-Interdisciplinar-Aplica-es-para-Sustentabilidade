<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success" onclick="createNew()"><i class="fas fa-plus-circle me-1"></i>Cadastrar</button>
                    </div>
                </div>
                <div class="table-responsive m-3">
                    <table class="dataTable table table-sm table-striped table-hover w-100" id="news-table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Tags</th>
                                <th>Data de Publicação</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script src="{{ asset('/js/news/index.js') }}"></script>
@include('news/create')
