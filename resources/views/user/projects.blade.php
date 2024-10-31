<div class="section" id="projects">
    <div class="container">
        <div class="col-md-12">
            <h4 style="color: #3f729b">------</h4>
            <h1 class="size-50">My Projects</h1>
        </div>
        <br>
        <br>

        <!-- main container -->
        <div class="main-container portfolio-inner clearfix">
            <!-- portfolio div -->
            <div class="portfolio-div">
                <div class="portfolio">
                    <!-- portfolio_filter -->
                    <div class="categories-grid wow fadeInLeft">
                        <nav class="categories">
                            <ul class="portfolio_filter">
{{--                                <li><a href="" class="active" data-filter="*">All</a></li>--}}
{{--                                <li><a href="" data-filter=".photography">Photography</a></li>--}}
{{--                                <li><a href="" data-filter=".logo">Logo</a></li>--}}
{{--                                <li><a href="" data-filter=".graphics">Graphics</a></li>--}}
{{--                                <li><a href="" data-filter=".ads">Advertising</a></li>--}}
{{--                                <li><a href="" data-filter=".fashion">Fashion</a></li>--}}
                            </ul>
                        </nav>
                    </div>
                    <!-- portfolio_filter -->

                    <!-- portfolio_container -->
                    <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                        <!-- single work -->
                        @foreach($projects as $project)
                            <div class="col-md-4 col-sm-6 fashion logo">
                                <a id="demo01" href="#animatedModal" class="portfolio_item">
                                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="img-responsive">
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info">
                                                <span>{{ $project->name }}</span>
                                                <em>{{ $project->title }}</em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <!-- end single work -->
                    </div>
                    <!-- end portfolio_container -->
                </div>
                <!-- portfolio -->
            </div>
            <!-- end portfolio div -->
        </div>
        <!-- end main container -->
    </div>
</div>
