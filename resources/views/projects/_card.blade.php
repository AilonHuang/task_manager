<div class="col-3 my-3">
    <div class="card project-card">
        <ul class="icon-bar">
            <li><i class="fa fa-btn fa-times"></i></li>
            <li><i class="fa fa-btn fa-cog"></i></li>
        </ul>
        <a href="projects/{{$project->id}}">
            <img class="card-img-top" src="{{asset('storage/thumbs/cropped/' . $project->thumbnail)}}"
                 alt="Card image cap">
            <div class="card-body py-3">
                <h6 class="card-title text-center">{{$project->name}}</h6>
            </div>
        </a>
    </div>
</div>