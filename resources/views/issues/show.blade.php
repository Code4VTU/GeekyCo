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
                    <h4>Comments <span class="comments-amount">(4)</span></h4>

                    <ul>
                        <li>
                            <div class="avatar"><img
                                        src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70"
                                        alt=""/></div>
                            <div class="comment-content">
                                <div class="arrow-comment"></div>
                                <div class="comment-by">Kathy Brown<span class="date">12th, June 2015</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique
                                    sem,
                                    eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                            </div>
                        </li>

                        <li>
                            <div class="avatar"><img
                                        src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70"
                                        alt=""/></div>
                            <div class="comment-content">
                                <div class="arrow-comment"></div>
                                <div class="comment-by">John Doe<span class="date">15th, May 2015</span>
                                    <a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem
                                    felis,
                                    ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin
                                    mauris.</p>
                            </div>

                        </li>
                    </ul>
                </section>


                <div class="clearfix"></div>
                <div class="margin-top-35"></div>

                <div class="clearfix"></div>


                <!-- Add Comment -->
                <h4 class="comment">Add Comment</h4>
                <div class="margin-top-20"></div>

                <!-- Add Comment Form -->
                <form id="add-comment" class="add-comment">
                    <fieldset>

                        <div>
                            <label>Name:</label>
                            <input type="text" value=""/>
                        </div>

                        <div>
                            <label>Email: <span>*</span></label>
                            <input type="text" value=""/>
                        </div>

                        <div>
                            <label>Comment: <span>*</span></label>
                            <textarea cols="40" rows="3"></textarea>
                        </div>

                    </fieldset>

                    <a href="#" class="button color">Add Comment</a>
                    <div class="clearfix"></div>
                    <div class="margin-bottom-20"></div>

                </form>

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