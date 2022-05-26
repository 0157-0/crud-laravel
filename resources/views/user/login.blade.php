@extends('layouts.app')

@section('content')
<!-- iniciodo componente -->

<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-stone-800 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-800 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Login
                </label>
                <form method="#" action="#" class="mt-10">
                                   
                    <div>
                        <input type="email" placeholder="E-mail" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>
        
                    <div class="mt-7">                
                        <input type="password" placeholder="Senha" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                    </div>

                    <div class="mt-7 flex">
                        <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">
                                Permanecer conectado
                            </span>
                        </label>
        
                       <div class="w-full text-right">     
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                               Esqueceu a senha?
                            </a>                                  
                       </div>
                    </div>
        
                    <div class="mt-7">
                        <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            <a href="{{route('inicio.index')}}">
                             Login
                            </a>
                        </button>
                    </div>
        
                   
        
                     <div class="mt-7">
                        <div class="flex justify-center items-center">
                            <a href="{{route('user.cadastro')}}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Criar uma conta
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection