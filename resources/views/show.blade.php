<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle;
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .flex-1 {
            flex: 1;
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .mx-10 {
            margin-left: 4rem;
            margin-right: 4rem;
        }

        .my-10 {
            margin-left: 4rem;
            margin-right: 4rem;
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .p-10 {
            padding: 6rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .py-10 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }

        th {
            padding: 1rem 1rem;
            text-align: left;
        }

        td {
            padding: 0.5rem 1rem;

            border-bottom: 1px solid black;
        }

        .form-control {
            padding: 0.5rem;
            width: 100%;
            color: white;
            background: none;
            border-bottom: 1px solid beige;
        }


        .form-label {
            margin-right: 1rem;
            margin-top: auto;
            margin-bottom: auto;
        }

        select option {
            margin: 40px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 0;
            color: #fff;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        }
        .button-a{
            padding: 0.5rem;
            border: 1px solid black;
            border-radius: 5px;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="min-h-screen p-10  bg-gray-100 dark:bg-gray-900 sm:items-center">
        <div class="bg-white dark:bg-gray-800 overflow-hidden my-10  shadow sm:rounded-lg">
            <div>
                <h1 class="text-gray-600 dark:text-gray-400 text-center">Usuário</h1>
            </div>
            
            <div class="p-6">
            <div class=" flex "> 
            <a class=" button-a mx-10 text-gray-600 dark:bg-gray-800  dark:text-gray-400" href="/">Voltar</a>
        </div>
                <div class=" mt-2 text-gray-600 dark:text-gray-400 text-sm">

                    <div class="card-body mx-10">
                        @if(isset($pessoa))
                        <form name="pessoa" id="pessoa" method="post" action="{{url('editar')}}">
                        <input type="hidden" name="id" value="{{ $pessoa->id }}">
                            @else
                            <form name="pessoa" id="pessoa" method="post" action="{{url('editar')}}">
                                @endif
                                {{ csrf_field() }}
                                <div class="flex py-4">
                                    <label for="Nome" class="form-label">Nome:</label>
                                    <input type="text" required class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome', $pessoa->nome ?? '') }}">
                                </div>
                                <div class="flex py-4">
                                    <label for="Sexo" class="form-label">Sexo:</label>
                                    <select name="sexo" class="form-control" required>
                                        <option value="Feminino" {{  isset($pessoa) ? ($pessoa->sexo == "Feminino" ? 'selected' : '') : ''}}>
                                            Feminino
                                        </option>
                                        <option value="Masculino" {{  isset($pessoa) ? ($pessoa->sexo == "Masculino" ? 'selected' : '') : ''}}>
                                            Masculino
                                        </option>
                                    </select>
                                </div>
                                <div class="flex py-4">
                                    <label for="cpf" class="form-label">CPF:</label>
                                    <input type="text"  required class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf', $pessoa->cpf ?? '') }}">
                                </div>
                                <div class="flex py-4">
                                    <label for="nascimento" class="form-label">Nascimento:</label>
                                    <input type="text" required class="form-control @error('nascimento') is-invalid @enderror" name="nascimento" value="{{ old('nascimento', $pessoa->nascimento ?? '') }}">
                                </div>
                                <div class="flex py-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="text" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $pessoa->email ?? '') }}">
                                </div>
                                <div class="flex py-4">
                                    <label for="celular" class="form-label">Celular:</label>
                                    <input type="text" required class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular', $pessoa->celular ?? '') }}">
                                </div>

                                <div class="flex py-4">
                                    <label for="profissao" class="form-label">Profissão:</label>
                                    <select name="profissao" class="form-control" required>
                                    @foreach($profissoes as $profissao)
                                        <option value="{{$profissao->id}}" {{  isset($pessoa) ? ($pessoa->Profissoes->id == $profissao->id ? 'selected' : '') : '' }}>
                                        {{ $profissao->nome }}
                                        </option>
                                    @endforeach
                                      
                                    </select>
                                </div>
                                <button type="submit" class="button-a text-gray-600 dark:bg-gray-800  dark:text-gray-400">Salvar</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>