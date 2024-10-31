<div style="background: #111116" class="section" id="skills">
    <div class="container">
        <div class="col-md-12">
            <h4 style="color: #3f729b">------</h4>
            <h1 class="size-50">My Skills</h1>
            <div class="h-50"></div>
        </div>
        <div class="col-md-12">
            @foreach($skills as $skill)
                <div class="timeline" style="margin-bottom: 20px;">
                    <div class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <h3 class="timeline-event-thumbnail">{{$skill->name}}</h3>
                            <h4 style="color: #3f729b">{{$skill->proficiency}}%</h4>
                            <p style="color: white">{{$skill->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
