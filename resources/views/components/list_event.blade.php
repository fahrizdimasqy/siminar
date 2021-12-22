
<div class="row">
    @foreach($events as $key => $event)
    <div class="col-md-4">
        <div class="card mb-3">
        <img class="card-img-top" src="/img/{{$event->image}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($event->desc, 80) }}</p>
            <p class="card-text bold">{{$event->event_date}}</p>
            <a href="{{route('register',$event->id)}}" class="btn btn-primary">Register</a>
        </div>
         </div>
    </div>
    @endforeach
</div>
