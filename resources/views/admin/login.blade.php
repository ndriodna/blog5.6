@extends('crud.template.app-login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="card-panel">
                <div class="card-title">{{ ('Login') }}</div>
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ ('Login') }}">
                        @csrf
                        <div class="input-field col s12">
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required value="{{old('email')}}">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            <label for="email" class="">{{ ('E-Mail Address') }}</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            <label for="password" class="">{{ ('password') }}</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span>{{ ('Remember Me') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 center">
                                <button type="submit" class="btn-large">
                                {{ ('Login') }}
                                </button>
                                {{-- <a class="btn-flat" href="{{ route('password.request') }}">
                                    {{ ('Forgot Your Password?') }}
                                </a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection