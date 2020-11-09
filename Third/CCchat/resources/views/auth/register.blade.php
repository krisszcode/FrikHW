@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mothername" class="col-md-4 col-form-label text-md-right">{{ __('Mother\'s name') }}</label>

                            <div class="col-md-6">
                                <input id="mothername" type="text" class="form-control @error('mothername') is-invalid @enderror" name="mothername" value="{{ old('Mother\'s name') }}" required autocomplete="mothername" autofocus>

                                @error('mothername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pet" class="col-md-4 col-form-label text-md-right">{{ __('What pet do you like?') }}</label>

                            <div class="col-md-6">
                                <select id="pet" type="text" class="form-control" name="pet">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option value="cat">Cat</option>
                                    <option value="dog">Dog</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('Do you have bike?') }}</label>
                            <div class="col-md-6">
                                    <input type="checkbox" id="bike" name="bike" value="bike">
                                    <label for="bike"> I have a bike</label><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vehicle2" class="col-md-4 col-form-label text-md-right">{{ __('Do you have car?') }}</label>
                            <div class="col-md-6">
                                <input type="checkbox" id="car" name="car" value="car">
                                <label for="car"> I have a car</label><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="office" class="col-md-4 col-form-label text-md-right">{{ __('Where is your office') }}</label>

                            <div class="col-md-6 ">
                                <input type="radio" id="office" name="office" value="Hungary" class="@error('office') is-invalid @enderror">
                                <label for="office">Hungary</label>
                                <input type="radio" id="office" name="office" value="Poland" class="@error('office') is-invalid @enderror">
                                <label for="office">Poland</label>
                                <input type="radio" id="office" name="office" value="Germany" class="@error('office') is-invalid @enderror">
                                <label for="office">Germany</label>

                                @error('office')
                                <span class="invalid-feedback" role="alert">
                                        <strong>Select at least one option!</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
