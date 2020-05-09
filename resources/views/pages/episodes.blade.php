@extends('layout');
@section('content');

<!-- content -->
<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content tabs nav -->
                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">SERIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">DORAMA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a>
                        </li>
                    </ul>
                    <!-- end content tabs nav -->
                    <h2 class="content__title">{{$title->name}}</h2>
                    <!-- end content title -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-2" aria-labelledby="2-tab">
                <div class="episodes_block">
                    <div class="episodes flex">
                        <div class="episodes_block__left">
                            <img class = "episod_title_img" src="{{ URL::asset($title->thumbnail) }}" alt="">
                        </div>
                        <div class="episodes_block__right">
                            <table class = 'information_episode'>
                                <tbody class = "information_episode__body">
                                    <tr>
                                        <td class ="information_episode__td">Rating:</td>
                                        <td class ="information_episode__td">{{ $title->rating }}/10</td>
                                    </tr>
                                    <tr>
                                        <td class ="information_episode__td">Status:</td>
                                        <td class ="information_episode__td">{{ $title->status }}</td>
                                    </tr>
                                    <tr>
                                        <td class ="information_episode__td">Aired:</td>
                                        <td class ="information_episode__td">{{ $title->release_date }}</td>
                                    </tr>
                                    <tr>
                                        <td class ="information_episode__td">Country:</td>
                                        <td class ="information_episode__td">{{ $title->country }}</td>
                                    </tr>
                                    <tr>
                                        <td class ="information_episode__td">Genres:</td>
                                        <td class ="information_episode__td">{{ $title->genre }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="episode_detials"> {{ $title->description }} </div>
                    <div class="video_episodes">
                        <div class="swiper-container" id = 'session_buttons'>
                                <div class="swiper-wrapper " id = "wrapper_buttons">
                                    <div class="swiper-slide">
                                        <button>1</button>
                                    </div>
                                    <div class="swiper-slide"><button>2</button></div>
                                    <div class="swiper-slide">
                                        <button>3</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button>4</button>
                                    </div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                    <div class="swiper-slide">Slide 10</div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="arrow_right" id = "next_session"></div>
                                <div class="arrow_left" id = "prev_session"></div>
                        </div>
                        <div class="video_block">
                            <video id = 'video_realCase' controls>
                                <source src = "{{ URL::asset('img/video_ep.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-container" id = 'episode_buttons'>
                                <div class="swiper-wrapper " id = "wrapper_buttons_episode">
                                    <div class="swiper-slide">
                                        <button>1</button>
                                    </div>
                                    <div class="swiper-slide"><button>2</button></div>
                                    <div class="swiper-slide">
                                        <button>3</button>
                                    </div>
                                    <div class="swiper-slide">
                                        <button>4</button>
                                    </div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                    <div class="swiper-slide">Slide 10</div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="arrow_right" id = "next_session"></div>
                                <div class="arrow_left" id = "prev_session"></div>
                        </div>
                    </div>
                </div>
                @foreach ($episodes->pluck('season')->sortDesc()->unique() as $season)
                    <div class="row">
                    <h2 class="content__title">Season {{$season}}</h2>
                    @foreach (\App\Episode::episodes_by_season($episodes, $season) as $episode)
                        <!-- card -->
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="{{ URL::asset($episode->thumbnail) }}" alt="">
                                        <a href="#" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#">{{ $episode->name }}</a></h3>
                                        <h3 class="card__title"><a href="#">Episode {{ $episode->episode_no }}</a></h3>
                                        <span class="card__category">
                                    </span>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{ $episode->rating }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        @endforeach
                    </div>
                    @endforeach

            </div>
        </div>
        <!-- end content tabs -->
    </div>
</section>
<!-- end content -->
@endsection;
