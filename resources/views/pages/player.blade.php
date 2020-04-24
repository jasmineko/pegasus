@extends('layout');
@section('content');

<!-- start content -->
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

                    <!-- content title -->
                    <h2 class="content__title">New Releases</h2>
                    <!-- end content title -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <video
            id="my-video"
            class="video-js"
            controls
            preload="auto"
            width="640"
            height="264"
            poster="MY_VIDEO_POSTER.jpg"
            data-setup="{}"
            >
                <source src="MY_VIDEO.mp4" type="video/mp4" />
                <source src="MY_VIDEO.webm" type="video/webm" />
                <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>
    </div>
</section>
<!-- end content -->

<script src="https://vjs.zencdn.net/7.7.5/video.js"></script>

@endsection;