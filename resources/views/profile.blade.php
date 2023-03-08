@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile_store') }}" enctype="multipart/form-data">
                        @csrf

                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="row mb-3">
                            <label for="username" class="col-sm-3 offset-sm-1 col-form-label"><B>Nom du
                                    juge*</B></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @if ($errors->has('username')) is-invalid @endif"
                                    id="username" name="username" value="{{ old('username') }}">
                                @if($errors->has('username'))
                                <span class="text-danger">
                                    {{$errors->first('username')}}
                                </span>
                                @endif
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 offset-sm-1 col-form-label"><B>Email*</B></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @if ($errors->has('email')) is-invalid @endif"
                                    id="email" name="email" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                <span class=" text-danger">
                                    {{$errors->first('email')}}
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 offset-sm-1 col-form-label"><B>Mot de
                                    passe*</B></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @if ($errors->has('password')) is-invalid @endif"
                                    id="password" name="password" value="{{ old('password') }}">
                                @if($errors->has('password'))
                                <span class=" text-danger">
                                    {{$errors->first('password')}}
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file"
                                    class="form-control @error('image') is-invalid @enderror" name="avatar"
                                    value="{{ old('image') }}" required autocomplete="avatar">

                                <img src="/avatars/{{ Auth::user()->avatar }}" style="width:80px;margin-top: 10px;">

                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Upload Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection