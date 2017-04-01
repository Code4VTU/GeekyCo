@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Blog Posts -->
        <div class="eleven columns">
            <div class="padding-right">
                <div class="margin-top-50"></div>
                <!-- Post -->
                <div class="post-container">
                    <div class="row">
                        @foreach($issue->photos as $photo)
                            <div class="col-lg-3 col-md-2 col-xs-6 thumb">
                                <img width="400" height="300" src="/images/{{ $photo->photo }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <div class="post-content">
                        <a href="#"><h3>{{ $issue->title }} </h3></a>
                        <div class="meta-tags">
                            <span>{{ $issue->created_at->diffForHumans() }}</span>
                            <span><a href="#">0 коментари</a></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-bottom-25"></div>

                        <p>{{ $issue->description }}</p>

                    </div>
                </div>

                <!-- Comments -->
                <section class="comments">
                    <h4>Коментари <span class="comments-amount">({{ count($issue->comments) }})</span></h4>

                    <ul>
                        @foreach($issue->comments as $comment)
                            <li>
                                <div class="avatar"><img
                                            src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70"
                                            alt=""/></div>
                                <div class="comment-content">
                                    <div class="arrow-comment"></div>
                                    <div class="comment-by">{{ $comment->user->name }}<span class="date">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p>{{ $comment->body }}</p>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                </section>


                <div class="clearfix"></div>
                <div class="margin-top-35"></div>

                <div class="clearfix"></div>


                <!-- Add Comment -->
                @if(Auth::user())
                    <h4 class="comment">Добави коментар</h4>
                    <div class="margin-top-20"></div>

                    <!-- Add Comment Form -->
                    <form method="POST" action="/issues/{{$issue->id}}/comments" id="add-comment" class="add-comment">
                        {{ csrf_field() }}
                        <fieldset>
                            @if ($errors->has('body'))
                                <span class="help-block">
                                <strong style="color: #ef5350">{{ $errors->first('body') }}</strong>
                            </span>
                            @endif
                            <div>
                                <label>Коментар: <span>*</span></label>
                                <textarea name="body" cols="40" rows="3"></textarea>
                            </div>

                        </fieldset>

                        <button href="#" type="submit" class="button color">Добави</button>
                        <div class="clearfix"></div>
                        <div class="margin-bottom-20"></div>

                    </form>
                @else
                    <div class="notification notice closeable margin-bottom-40">
                        <p><span>Регистрирайте се, преди да може да коментирате</span></p>
                    </div>
                @endif

            </div>
        </div>
        <!-- Blog Posts / End -->


        <!-- Widgets -->
        <div class="five columns blog">

            <div class="widget">
                <div class="margin-bottom-40"></div>
                <div class="widget-box">
                    <p>Ако смятате, че проблемът е решен, моля сигнализирайте</p>
                    <a href="contact.html" class="button widget-btn"><i class="fa fa-bell" aria-hidden="true"></i>
                        Сигнализирай</a>
                </div>
            </div>


            <div class="clearfix"></div>
            <div class="margin-bottom-40"></div>

        </div>
        <!-- Widgets / End -->

    </div>
@endsection