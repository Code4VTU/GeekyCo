@extends('layouts.app')

@section('content')
    <!-- Banner
    ================================================== -->
    <div id="banner" style="background-color: #202020" style="margin-bottom: 0px">
        <div class="container">
            <div class="sixteen columns">

                <div class="search-container">

                    <!-- Form -->
                    <form action="/issues">
                        <h2>Търси</h2>
                        <input type="text" class="ico-01" name="query" placeholder="ключови думи"/>
                        <input type="text" class="ico-02" name="city" placeholder="град, област, село"/>
                        <button><i class="fa fa-search"></i></button>

                        <!-- Announce -->
                        <div class="announce">
                            Има над <strong>15 000</strong> проблема за разрешаване!
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection