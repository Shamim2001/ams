@extends('backend.layout.app')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                @include('backend.components.quiz.quiz',['quiz'=>$quiz])
                @if($winners->count() > 0)
                    <div class="row">
                        @foreach($winners as $winner)
                            @php
                                $user = \App\Models\User::findOrFail($winner->user_id)
                            @endphp
                            <div class="col-md-4">
                                <div class="card" style="background-color: #b400ffab;">
                                    <div class="card-body text-center">
                                        <div class="text-center">
                                            <img style="border-radius: 50px;" src="https://ui-avatars.com/api/?name={{$user->name}}&format=svg&background=random" alt="">
                                        </div>
                                        <p class="my-2 text-uppercase font-bold text-white">{{ $winner->position ?? '' }}</p>
                                        <span class="badge bg-primary">{{ $user->unique_id }}</span>
                                        <h4>{{ $user->name ?? '' }}</h4>
                                        <p class="text-white"><i class="mdi mfp-img-mobile"></i> {{ $user->phone ?? ' ' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Make Lottery Winners - {{$recordsWithMaxTotalMark->count() ?? ''}}</h4>
                                </div>
                                <div class="card-body bg-primary">
                                    <ul class="list-group bg-primary">
                                        @foreach($recordsWithMaxTotalMark as $item)
                                            <li class="list-group-item" style="background-color: transparent;">
                                                <h5>{{ $item?->user?->name }}</h5>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card bg-success">
                                <div class="card-header">
                                    <h4 class="card-title">Output</h4>
                                </div>
                                <div class="card-body bg-success">
                                    <div class="text-center">
                                        <h2 id="display">Display</h2>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-primary btn-lg mt-4" id="give-a-try">Give A Try</button>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('admin.save-winners',$quiz->id) }}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group-item my-4">
                                            <li class="list-group-item p-2 bg-success rounded mb-2">
                                                <h1><strong>1 <sup>st</sup> Winner: <span id="first-position"></span></strong></h1>
                                                <input type="hidden" name="winner[first]" value="" id="firstWinner">
                                            </li>
                                            <li class="list-group-item p-2 bg-primary rounded mb-2">
                                                <h1><strong>2 <sup>nd</sup> Winner: <span id="second-position"></span></strong></h1>
                                                <input type="hidden" name="winner[second]" value="" id="secondWinner">
                                            </li>
                                            <li class="list-group-item p-2 bg-warning rounded mb-2">
                                                <h1><strong>3 <sup>rd</sup> Winner: <span id="third-position"></span></strong></h1>
                                                <input type="hidden" name="winner[third]" value="" id="thirdWinner">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                        <button class="float-end btn btn-primary" type="submit">Save Winners</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        window.onload = function () {
            const inp = document.getElementById('inp')
            const nameList = document.getElementById('name-list')
            const display = document.getElementById('display')
            const giveATry = document.getElementById('give-a-try')
            const firstPosition = document.getElementById('first-position')
            const secondPosition = document.getElementById('second-position')
            const thirdPosition = document.getElementById('third-position')

            const firstWinner = document.getElementById('firstWinner')
            const secondWinner = document.getElementById('secondWinner')
            const thirdWinner = document.getElementById('thirdWinner')

            const participantNames = @json($recordsWithMaxTotalMark)

                // inp.addEventListener('keypress', function (event) {
                //     if (event.key === 'Enter') {
                //         let newNames = event.target.value.split(', ')
                //         if (newNames[0] !== '') {
                //             newNames.forEach(name => {
                //                 participantNames.push(name)
                //                 let item = createListItem(name)
                //                 nameList.appendChild(item)
                //                 event.target.value = ''
                //             })
                //         }
                //     }
                // })

                giveATry.addEventListener('click', function () {
                    if (participantNames.length === 0) {
                        alert('There is No Entry')
                    } else {
                        let shuffledNames = shuffle(participantNames)

                        for (let i = 1; i < shuffledNames.length; i++) {
                            (function (i, count) {
                                setTimeout(() => {
                                    let rand = Math.floor(Math.random() * (shuffledNames.length))
                                    display.innerHTML = shuffledNames[rand].user.name
                                    if (count === shuffledNames.length - 1) {
                                        if (!firstPosition.innerHTML) {
                                            firstPosition.innerHTML = shuffledNames[rand].user.name
                                            firstWinner.value = shuffledNames[rand].user.id
                                            let ind = participantNames.indexOf(shuffledNames[rand])
                                            participantNames.splice(ind, 1)
                                        } else  if (!secondPosition.innerHTML) {
                                            secondPosition.innerHTML = shuffledNames[rand].user.name
                                            secondWinner.value = shuffledNames[rand].user.id
                                            let ind = participantNames.indexOf(shuffledNames[rand])
                                            participantNames.splice(ind, 1)
                                        } else if (!thirdPosition.innerHTML) {
                                            thirdPosition.innerHTML = shuffledNames[rand].user.name
                                            thirdWinner.value = shuffledNames[rand].user.id
                                            let ind = participantNames.indexOf(shuffledNames[rand])
                                            participantNames.splice(ind, 1)
                                        } else {
                                            alert('Raffle Draw Alreay Completed')
                                        }
                                    }
                                }, i)
                            })(i*100, i)
                        }
                    }
                })
        }



        function createListItem(name) {
            let li = document.createElement('li')
            li.className = 'list-group-item'
            li.innerHTML = name
            return li
        }
        function shuffle(arr) {
            let shuffledArr = [...arr]
            for (let i = shuffledArr.length - 1; i > 0; i--) {

                let rand = Math.floor(Math.random() * (i + 1))
                let temp = shuffledArr[rand]
                shuffledArr[rand] = shuffledArr[i]
                shuffledArr[i] = temp
            }
            return shuffledArr
        }
    </script>
@endsection
