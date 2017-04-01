@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="margin-top-35"></div>

        <!-- Submit Page -->
        <div class="sixteen columns">
            <div class="submit-page">

                <!-- Notice -->
                <div class="notification notice closeable margin-bottom-40">
                    <p><span>Видял си проблем?</span> Регистрирай се, за да споделиш за случващото се.</p>
                </div>


                <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <!-- Email -->
                    <div class="form">
                        <h5>Имейл</h5>
                        <input class="search-field" name="email" type="text" placeholder="mail@example.com"
                               value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Title -->
                    <div class="form">
                        <h5>Парола</h5>
                        <input class="search-field" name="password" type="password" required placeholder="" value="">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong style="color:#ef5350">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>


                    <button type="submit" href="#" class="button pull-right margin-bottom-50">Вход <i
                                class="fa fa-arrow-circle-right"></i></button>
                </form>


            </div>
        </div>

    </div>
@endsection