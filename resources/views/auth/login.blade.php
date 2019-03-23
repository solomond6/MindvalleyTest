@extends('layouts.master')

@section('content')
<div class="w-full max-w-xs items-center mt-32 m-auto">
    <div class="font-bold text-xl text-grey-darker text-center bg-grey-light p-2">Login</div>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="mb-4 {{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
            E-Mail Address
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="text-red text-xs italic">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-6">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password" required>
            @if ($errors->has('password'))
                <span class="text-red text-xs italic">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Sign In
          </button>
          <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="{{ route('password.request') }}">
            Forgot Password?
          </a>
        </div>
      </form>
      <p class="text-center text-grey text-xs">
        All rights reserved.
      </p>
</div>
@endsection
