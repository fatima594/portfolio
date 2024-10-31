<div style="background: black" class="section" id="about">
    <div class="container">
        @foreach($abouts as $about)
        <div class="col-md-6" data-aos="fade-up">
            <h4 style="color: #3f729b">------</h4>
            <h1 class="size-50">Know More About <br /> {{$about->title}}</h1>
            <div class="h-50"></div>
            <h5 style="color: white">{{$about->body}}</h5>
            <div class="h-50"></div>

            <div class="h-50"></div>
        </div>
        @endforeach
        <div class="col-md-6 about-img-div">
{{--            <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>--}}
            <img src="{{ Storage::url($about->image) }}" alt="{{ $about->title }}" class="img-responsive">
        </div>
</div>
