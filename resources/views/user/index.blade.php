@extends('layouts.default')

@section('title', 'Cadastro de Usuário')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @empty($user)
        <div class="mt-4">
            <form method="POST" action="{{ route('user.store') }}" class="row g-2 needs-validation" novalidate>
                @csrf
                <div class="col-md-4">
                    <label for="name" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Este campo é obrgatório
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="userName" class="form-label">Nome de Login</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="userName" name="userName"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Este campo é obrgatório
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">✉️</span>
                            <input type="text" class="form-control" id="email" name="email"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Este campo é obrgatório
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="zipCode" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="zipCode" name="zipCode" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="password" class="form-label">Senha <span style="font-size: 12px">(8 caracteres mínimo,
                                contendo
                                pelo menos 1 letra
                                e 1 número)</span></label>
                        <input type="text" class="form-control" id="zipCode" name="password" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    @endempty

    @isset($user)
        <div class="mt-4">
            <form method="POST" action="{{ route('user.edit') }}" class="row g-2 needs-validation" novalidate>
                @csrf
                <div class="col-md-4">
                    <label for="name" class="form-label">Nome completo</label>
                    <input type="text" class="form-control d-none" id="id" name="id" value="{{$user->id}}" required>

                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                    
                        required>
                    <div class="invalid-feedback">
                        Este campo é obrgatório
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="userName" class="form-label">Nome de Login</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="userName" name="userName"
                                value="{{ $user->userName }}" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Este campo é obrgatório
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">✉️</span>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Este campo é obrgatório
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="zipCode" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="zipCode" name="zipCode"
                            value="{{ $user->zipCode }}" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="password" class="form-label">Senha <span style="font-size: 12px">(8 caracteres mínimo,
                                contendo
                                pelo menos 1 letra
                                e 1 número)</span></label>
                        <input type="text" class="form-control" id="password" name="password"
                            value="{{ $user->password }}" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button class="btn btn-primary" type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    @endisset



@endsection
@push('scripts')
    <script src="{{ asset('js/validate.js') }}"></script>
@endpush
