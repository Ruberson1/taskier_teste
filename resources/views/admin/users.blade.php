@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Usuários') }}</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark ">
                            <th class="text-center">Nome</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Perfil</th>
                            <th class="text-center">Ações</th>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    @if($user->id != Auth::user()->id)
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td class="text-center">
                                            <span class="text-bg-warning rounded-4 px-2">
                                                {{ $user->permissions[0]->name }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('user', $user->id) }}">ver</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
