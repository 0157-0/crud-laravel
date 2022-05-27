
@extends('layouts.app')

@section('content')
<!-- component -->
<!-- This is an example component -->
<div class="my-10">
    <div class="bg-white rounded overflow-hidden shadow-lg">
      <div class="text-center p-6  border-b">
        <img
          class="h-24 w-24 rounded-full mx-auto"
          src="https://randomuser.me/api/portraits/men/24.jpg"
          alt="Randy Robertson"
        />
        <p class="pt-2 text-lg font-semibold">{{ $user->name}}</p>
        <p class="text-sm text-gray-600">{{ $user->email}}</p>
        <p class="text-sm text-gray-600">{{ $user->created_at}}</p>
        
      </div>
      <div class="border-b">
        <a href="{{route('user.editar', $user->id)}}" class="px-4 py-2 hover:bg-gray-100 flex">
          <div class="text-gray-800">
            <svg
              fill="none"
              stroke="currentColor"
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="1"
              viewBox="0 0 24 24"
              class="w-5 h-5"
            >
              <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
     
          <div class="pl-3">
           
            <p class="text-sm font-medium text-gray-800 leading-none">Configuração da conta</p>
            <p class="text-xs text-gray-500">Nome, e-mail, senha</p>
          </div>
        </a>
          
      <div class="">
        <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
          <p class="text-sm font-medium text-gray-800 leading-none">Voltar</p>
        </a>
        
        <a href="{{ route('user.deletar', $user->id) }}" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
          <p class="text-sm font-medium text-gray-800 leading-none">Excluir</p>
        </a>
        <a href="{{route('user.login')}}" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
          <p class="text-sm font-medium text-gray-800 leading-none">Logout</p>
        </a>
      </div>
      <form action="{{ route('user.deletar', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
      <button type="submit" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
        Excluir
      </button>
      </form>
    </div>
    
  </div>
 
  @endsection
