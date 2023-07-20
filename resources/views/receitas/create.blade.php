<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="{{ route('receitas.store') }}" method="POST">
                    @csrf
                    
                    <x-input-label for="titulo" :value="__('Titulo:')"/>
                    <x-text-input type="text" name="titulo" id="titulo" required/>

                    <x-input-label for="descricao" :value="__('Descrição:')"/>
                    <x-text-input name="descricao" id="descricao" required/>

                    <x-input-label for="ingredientes" :value="__('Ingredientes:')"/>
                    <x-text-input name="ingredientes" id="ingredientes" required/>

                    <x-input-label for="instrucoes" :value="__('Instruções:')"/>
                    <x-text-input name="instrucoes" id="instrucoes" required />
                    </br>
                    </br>
                    <x-primary-button type="submit">Criar Receita</x-primary-button>
                </form>
               

                </div>
            </div>
        </div>
    </div>
</x-app-layout>