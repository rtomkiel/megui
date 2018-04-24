@extends('global.loginbase')

@section('content')
<div class="container text-center">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
          @csrf
          <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Efetuar login</h1>
        
        <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
        <input input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Digite o seu e-mail" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Sua senha" required>
        @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>E-mail ou senha inválidos.</strong>
        </span>
        @endif
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar') }}
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</div>
@endsection
