@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    {{ __('Login') }}
                    
                    @if ($userCount)
                        <a href="{{route('novo.usuario')}}">Registrar Novo Usuário</a>
                    @endif

                </div>

                <div class="card-body">

                    @if (session('warning'))
                        {{session('warning')}}
                    @endif

                    <form method="POST">
                        @csrf

                        <div class="row mb-3" style="margin-top: 8px">
                            <label for="siape" class="col-md-4 col-form-label text-md-end">{{ __('SIAPE') }}</label>

                            <div class="col-md-6">
                                <input id="siape" type="siape" class="form-control @error('siape') is-invalid @enderror" name="siape" value="{{ old('siape') }}" required autocomplete="siape" autofocus>

                                @error('siape')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Manter Conectado') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{route('motivos')}}" class="btn btn-primary">
                                    Voltar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueci Minha Senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
