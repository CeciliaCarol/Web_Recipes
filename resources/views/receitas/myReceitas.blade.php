<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Suas Receitas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Suas receitas recentes!") }}
                   <form action="{{ route('receitas.create') }}">
                    @csrf
                   <x-primary-button type="submit" >Criar nova receita</x-primary-button>
                   </form>

                   @foreach ($receitas as $receita)
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1615147342761-9238e15d8b96?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1001&q=80" 
                        class="card_image" alt="brown couch"/>
                        <div class="card_content">
                            <time datetime="2021-03-30"
                            class="card_date">30 de Março de 2021</time>
                            <span class="card_title">{{ $receita-> titulo }}</span>
                            <p class="card_des">{{ $receita-> descricao }}</p>
                            <p class="card_footer">By {{ $receita->user->name }}</p>
                        </div>
                    </div>
                    @endforeach
                    
                 

                </div>
            </div>
        </div>
    </div>
<script>

</script>
    <style>
     body {
       
        
        align-items: center;
       
        padding: 0;
        margin: 0;
     }

     * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
     }

     @media (min-width: 576px) {
        :root {
            --font-size-title: 40px;
        }
     }

     .card {
        max-width: 960px;
        border-radius: 32px;
        box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.4);
        padding: 20px 20px 28px 20px;
        box-sizing: border-box;
        margin: 20px;
        display: flex;
        flex-direction: column;
        background-color: #;
     }

     @media (min-width: 576px) {
        .card {
            flex-direction: row;
            align-items: center;
            margin: 40px;
            padding: 32px;
        }
     }

     .card_image {
        width: 100%;
        max-width: 300px;
        border-radius: 32px;
        -o-object-fit: cover;
        object-fit: cover;
        margin-bottom: 18px;
     }

     @media (min-width: 576px) {
        .card_image {
            width: 45%;
            max-height: none;
            min-height: 400px;
            margin-bottom: 0;
        }
     }

     @media (min-width: 576px) {
        .card_content {
            width: 55%;
            padding-left: 40px;
        }
     }

     .card_date {
        display: block;
        font-family: sans-serif;
        font-size: 14px;
        line-height: 1.2;
        text-transform: uppercase;
        color: #222022;
        margin-bottom: 6px;
     }

     @media (min-width: 576px) {
        .card_date {
            margin-bottom: 8px;
        }
     }

     .card_title {
        font-family: serif;
        font-size: 32px;
        line-height: 1.2;
        color: #222022;
        -webkit-box-decoration-break: clone;
        box-decoration-break: clone;
        background-image: linear-gradient(90deg, #FFEF7E, #B7F9E9);
        background-size: 100% 42%;
        background-repeat: no-repeat;
        background-position: 0 85%;
        padding: 0 4px;
        margin-left: -4px;
     }
    
     .card_des {
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 14px;
        padding: 2px;
     }

     .card_footer {
        bottom: 0;
     }

       
    </style>

</x-app-layout>