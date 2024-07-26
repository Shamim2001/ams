<div class="card mb-2">
    <div class="row mb-3">
        <div class="col-md-12">
            <iframe class="img-fluid w-100 h-100"
                    style="min-height: 450px;"
                    {!! $quiz->video !!} title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-8">
                <h3>{{ $quiz->title ?? "" }}</h3>
                <p>{!! $quiz->description ?? "" !!}</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="">
                    @if($quiz->status == 'published')
                        <h3>Running....</h3>
                        <h3 id="endTime"></h3>
                    @else
                        @if($quiz->status == 'unpublished')
                            <a href="javascript:void(0)" class="btn btn-danger float-end">Finished</a>
                        @else
                            <a href="{{ route('admin.quiz-published',$quiz->id) }}" class="btn btn-primary float-end">Published Now</a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <ul class="nav gap-4">
                    <li class="nav-item"><a href="{{ route('admin.quiz.show',[$quiz->id,'prize']) }}" class="btn btn-primary">Prize</a></li>
                    <li class="nav-item"><a href="{{ route('admin.quiz.show',[$quiz->id,'question']) }}" class="btn btn-primary">Question And Answer</a></li>
                    <li class="nav-item"><a href="{{ route('admin.quiz.show',[$quiz->id,'leader-board']) }}" class="btn btn-primary">Leader Board</a></li>
                    @if($quiz->status == 'unpublished')
                        <li class="nav-item">
                            <a href="{{ route('admin.quiz.show',[$quiz->id,'lottery']) }}" class="btn btn-primary">Lottery And Winders</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>



@section('script')
    <script>
        const data =new Date("{{ $quiz->end_time }}").getTime()
        const status = "{{ $quiz->status }}"
        // Update the count down every 1 second
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = data - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (status == 'published') {
                document.getElementById("endTime").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
            }
            if (distance < 0) {
                $.get("{{ route('admin.quiz-unpublished',$quiz->id) }}", function (data, status) {
                    alert("Quiz Time End....");
                });
                clearInterval(x);
                document.getElementById("endTime").innerHTML = "YOUR QUIZ TIME EXPIRED";
            }
        }, 1000);
    </script>
@endsection
