@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="margin-top-35"></div>

        <!-- Submit Page -->
        <div class="sixteen columns">
            <div class="submit-page">

                <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                    <div class="form">
                        <h5>Име</h5>
                        <input class="search-field" name="name" type="text" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

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

                    <div class="form">
                        <h5>Парола</h5>
                        <input class="search-field" name="password" type="password" placeholder="" value="">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong style="color:#ef5350">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form">
                        <h5>Потвърди паролата</h5>
                        <input class="search-field" name="password_confirmation" type="password" placeholder="" value="">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong style="color:#ef5350">{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>


                    <button type="submit" href="#" class="button pull-right margin-bottom-50">Регистрация <i
                                class="fa fa-arrow-circle-right"></i></button>
                </form>


            </div>
        </div>

    </div>
@endsection