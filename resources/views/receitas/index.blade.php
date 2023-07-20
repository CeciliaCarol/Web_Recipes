<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pra Você') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Receitas recentes!") }}
                    @foreach ($receitas as $receita)
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $receita-> titulo }}</h3>
                        </div>
                        <div class="card-body">
                            <p>{{ $receita-> descricao }}</p>
                            <a href="{{ route('receitas.show', ['receita' => $receita]) }}">Ver Mais</a>
                        </div>
                        <div class="card-footer">
                            <p>{{ $receita->user->name }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>
        .card {
            margin:.5rem;
        background-color: cadetblue;
        border-radius: 10px;
        width: 40%;
        }

        .card-header {
            background-color: gainsboro;
            border-radius: 10px;
            text-align: center;
            padding: 4px;
        }

        .card-body {
            margin: 2px;
            text-align: start;
            padding: 5px;
        }

        .card-footer {
            padding: 5px;
            background-color: gainsboro;
            border-radius: 10px;
            
        }
    </style>
</x-app-layout>