@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="margin-top-50"></div>
        <div class="eleven columns">
            <div class="padding-right">

                <form action="" method="get" class="list-search">
                    <button><i class="fa fa-search"></i></button>
                    <input type="text" name="query" placeholder="" value=""/>
                    <div class="clearfix"></div>
                </form>

                <!-- Notice -->

                @if(count($issues))
                    <ul class="job-list full">

                        @foreach($issues as $issue)
                            <li>
                                <a href="{{ url('issues/'.$issue->id) }}">
                                    <img src="images/{{ $issue->photos()->first()->photo }}" alt="">
                                    <div class="job-list-content">
                                        <h4>{{ $issue->title }} @if($issue->isFixed == 1) <span class="full-time">Неразрешено</span> @else <span class="temporary">Разрешено</span> @endif</h4>
                                        <div class="job-icons">
                                            <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $issue->created_at->diffForHumans() }}</span>
                                            <span><i class="fa fa-map-marker"></i> {{ $issue->city }}</span>
                                            <span><i class="fa fa-commenting" aria-hidden="true"></i> 0 comments</span>
                                        </div>
                                        <p>{{ $issue->description }}</p>
                                    </div>
                                </a>
                                <div class="clearfix"></div>
                            </li>
                        @endforeach

                    </ul>
                @else
                    <div class="notification notice closeable margin-bottom-40">
                        <p><span>Опааа!</span> Няма намерени резултати</p>
                    </div>
                @endif


                <div class="clearfix"></div>

                <div class="pagination-container">
                    <nav class="pagination">
                        {{ $issues->links() }}
                    </nav>
                </div>

            </div>
        </div>


        <!-- Widgets -->
        <div class="five columns">

            <!-- Sort by -->
            <div class="widget">
                <form action="">
                    <h4>Подреди по:</h4>

                    <!-- Select -->
                    <select data-placeholder="Choose Category" class="chosen-select-no-single">
                        <option selected="selected" name="asc" value="asc">Най-нови</option>
                        <option value="oldest" name="desc">Най-стари</option>
                    </select>

                    <div class="margin-top-30"></div>

                    <button class="button" type="submit">Подреди</button>
                </form>

            </div>

            <!-- Location -->
            <div class="widget">
                <h4>Местонахождение</h4>
                <form action="#" method="get">
                    <input type="text" placeholder="Град / Село / Кашон" name="city" value=""/>
                    <input type="text" placeholder="Адрес (улица)" name="address" value=""/>
                    <input type="text" id="zip" class="zip" name="zip" placeholder="Пощенски код" value=""/><br>

                    <button class="button">Търси</button>
                </form>
            </div>

        </div>
        <!-- Widgets / End -->
    </div>
@endsection