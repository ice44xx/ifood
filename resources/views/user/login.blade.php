@extends('layouts.main')
@section('title', 'Login')
@section('content')
    <div class="m-5">
        @if (session()->has('success'))
            {{ session()->get('success') }}
        @endif
        @if (auth()->check())
            <p>Você esta logado {{ auth()->user()->fullName }}</p>
        @else
            @error('error')
                <span>{{ $message }}</span>
            @enderror
            <form action={{ route('login.store') }} method="POST" class="form d-flex flex-column w-100">
                @csrf
                <input type="email" name="email" value="sami@gmail.com" placeholder="Email">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
                <input type="password" name="password" value="020619!Ns" placeholder="Sua senha">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
                <button type="submit">Entrar</button>
            </form>
        @endif
    </div>
@endsection
