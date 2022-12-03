@extends('layouts.default')

@section('title', 'Lista de Usuários')
@section('content')
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Nome Completo</th>
                <th scope="col">Login</th>
                <th scope="col">E-mail</th>
                <th scope="col">CEP</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->userName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->zipCode }}</td>
                    <td>
                        <a href="{{ route('user.view', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
