@extends('layouts.app')

@section('content')
<h1> Listagem dos usuários </h1>

<ul>
@foreach($users as $user)
    <li>
        {{ $user->name}} - 
        {{ $user->email}} - 
        
      
        | <a href="{{route('user.show', ['id' => $user->id])}}"> Detalhes </a>
    </li>
@endforeach
</ul>
@endsection
