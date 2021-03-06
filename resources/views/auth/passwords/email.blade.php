@extends('layouts.app')

@section('content')
    @if (session('status'))
        {{ session('status') }}
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <input type="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @endif

        <button type="submit">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
@endsection
