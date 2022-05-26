@extends('layouts.app')

@section('content')
<!-- iniciodo componente -->
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
      <div
        class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
        <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
          Junte-se a nós
        </div>
        <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
          @if ($errors->any())
          <ul class="erros'>
            @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
            @endforeach
          </ul>
        @endif
        </div>

        <div class="mt-10">
          <form action="{{ route('user.store')}}" method="post">
            @csrf
            <div class="flex flex-col mb-5">
              <label
                for="name"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >Nome:</label
              >
              <div class="relative">
                <div class="inline-flex  items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                  <i class="fas fa-user text-blue-500"></i>
                </div>

                <input
                  id="name"
                  type="name"
                  name="name"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400"
                    value="{{ old('name') }}"
                  placeholder="Digite seu nome"
                />
              </div>
            </div>

            <!-- parte do email -->
            <div class="flex flex-col mb-5">
              <label
                for="email"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >E-mail:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-at text-blue-500"></i>
                </div>

                <input
                  id="email"
                  type="email"
                  name="email"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400"
                    value="{{ old('email') }}"
                  placeholder="Digite o seu e-mail"
                />
              </div>
            </div>

            <!-- parte da senha -->

            <div class="flex flex-col mb-6">
              <label
                for="password"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Senha:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-lock text-blue-500"></i>
                  </span>
                </div>

                <input
                  id="password"
                  type="password"
                  name="password"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400"
                    value="{{ old('password') }}"
                  placeholder="Digite sua senha"
                />
              </div>
            </div>

            <div class="flex w-full">
              <button
                type="submit"
                class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-blue-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                "
              >
                <span class="mr-2 uppercase">Inscrever-se</span>
                <span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="flex justify-center items-center mt-6">
        <a
          href="{{route('user.login')}}"
          target="_blank"
          class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-xs text-center
          "
        >
          <span class="ml-2">
              Já tem uma conta?
            <a
              href="{{route('user.login')}}"
              class="text-xs ml-2 text-blue-500 font-semibold"
              >Conectar-se aqui</a
            ></span
          >
        </a>
      </div>
    </div>

@endsection