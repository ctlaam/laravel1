@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img style="height: 100px;border-radius: 99999px" src="https://play-lh.googleusercontent.com/MoaYYQjGtmGLhG9HbjCDKyj44kwHj1HfbCI2Am70elRm35vJ-u4y4X5uEJjP97MAAsU" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>
                   {{$user -> username}}
                </h1>
            </div>
            <div class="d-flex">
                <div class="pe-3"><strong>153 posts</strong></div>
                <div class="pe-3"><strong>23k Followers</strong></div>
                <div class="pe-3"><strong>212 Following</strong></div>
            </div>
            <div class="pt-4 fw-bold">FreeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together.
                LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div class="fw-bold"><a href="">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img style="width: 400px" src="http://www.imgcomfort.com/no/-/media/corporatesite/socialshareimages/img-logo1200x600.jpg" alt="">
        </div>
        <div class="col-4">
            <img style="width: 400px" src="http://www.imgcomfort.com/no/-/media/corporatesite/socialshareimages/img-logo1200x600.jpg" alt="">
        </div>
        <div class="col-4">
            <img style="width: 400px" src="http://www.imgcomfort.com/no/-/media/corporatesite/socialshareimages/img-logo1200x600.jpg" alt="">
        </div>
    </div>

</div>
@endsection
