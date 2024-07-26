@extends('frontend.layout.app')
@section('title',$title)
@section('content')
    @include('frontend.components.component.breadcome_section',['title'=>$title])

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <div class="p-2 border border-primary rounded">
                        <h1 class="m-0 p-0" id="countdown"></h1>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-9 mx-auto text-center">
                    <h3 class="mb-2">{{ $vote->title ?? 'Vote Title' }}</h3>
                    <p>{!! $vote->description ?? 'Vote Description' !!}</p>
                </div>
            </div>

            <div class="row">
                @foreach($vote->voteOptions as $option)
                    @php
                        $user_vote = App\Models\VoteCount::where('user_id',auth()->id())->where('vote_option_id',$option->id)->where('vote_id',$vote->id)->first();
                        $exist_vote =  App\Models\VoteCount::where('user_id',auth()->id())->where('vote_id',$option->vote->id)->first();
                        $voteMember = \App\Models\User::where('unique_id',$option->title)->first();
                    @endphp
                    <div class="col-md-3">
                        <div class="card shadow-sm border">
                            <img src="{{ asset($voteMember->image) ?? defaultImage()}}" alt="{{ $option->title ?? '' }}">
                            <div class="card-body">
                                <h4 class="font-bold mt-2">{{ $voteMember->name ?? 'User Name' }}</h4>
                                <h6>Vote : {{ $option->hit_count ?? 0 }}</h6>
                                @if($user_vote)
                                <div class="my-2 text-center mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" style="height: 50px;">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                @endif
                            </div>
                            <div class="card-footer text-center  @if($user_vote) bg-success text-white @endif">
                                @if($user_vote)
                                    <a href="{{route('vote-count',$option->id) }}" class="voteGivenBtn text-white">
                                        Vote Already Done
                                    </a>
                                @else
                                    <a href="{{route('vote-count',$option->id) }}" class="voteGivenBtn">
                                        Vote Given Now
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var counterTime = true;
        function updateCountdown() {
            // Get the timestamp value from the Blade template
            const timestamp = new Date('{{ $vote->end_date }}').getTime();
            const now = new Date().getTime();

            // Calculate the remaining time in milliseconds
            const remainingTime = timestamp - now;

            if (remainingTime <= 0) {
                // Display a message when time has expired
                document.getElementById('countdown').innerHTML = 'Time expired';
                document.querySelector('.voteGivenBtn').style.cursore="not-allowed"

            } else {
                // Calculate days, hours, minutes, and seconds
                const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                // Display the countdown
                document.getElementById('countdown').innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        }

        // Update the countdown every second
        setInterval(updateCountdown, 1000);

        // Initial update
        updateCountdown();
    </script>
@endsection



