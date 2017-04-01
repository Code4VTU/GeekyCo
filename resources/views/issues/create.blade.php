@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="margin-top-35"></div>

        <!-- Submit Page -->
        <div class="sixteen columns">
            <div class="submit-page">

                <!-- Notice -->
                <div class="notification notice closeable margin-bottom-40">
                    <p><span>Нещо нередно?</span> Регистрирай се, за да споделиш за случващото се.</p>
                </div>


                <form role="form" method="POST" action="{{ url('issues') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- Email -->
                    <div class="form">
                        <h5>Заглавие *</h5>
                        <input class="search-field" name="title" type="text" placeholder=""
                               value="{{ old('title ') }}">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Description -->
                    <div class="form">
                        <h5>Описание *</h5>
                        <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form">
                        <h5>Глад/Село *</h5>
                        <input class="search-field" name="city" type="text" placeholder=""
                               value="{{ old('city ') }}">
                        @if ($errors->has('city'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form">
                        <h5>Пощенски код</h5>
                        <input class="search-field" name="zip" type="text" placeholder="5000"
                               value="{{ old('zip ') }}">
                        @if ($errors->has('zip'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('zip') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form">
                        <h5>Адрес</h5>
                        <input class="search-field" name="address" type="text" placeholder="ул. Иларион Драгостинов 8"
                               value="{{ old('address') }}">
                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form">
                        <h5>Телефонен номер</h5>
                        <input class="search-field" name="phone" type="text" placeholder=""
                               value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form">
                        <h5>Снимки</h5>
                        <input type="file" name="photos[]" multiple>
                    </div>

                    @if(Auth::user())
                        <div class="form">
                            <label><input name="isAnonymous" type="checkbox" value="1">Публикувай анонимно</label>
                        </div>
                    @endif

                    <button type="submit" href="#" class="button pull-right margin-bottom-50">Изпрати <i
                                class="fa fa-arrow-circle-right"></i></button>
                </form>


            </div>
        </div>

    </div>
@endsection