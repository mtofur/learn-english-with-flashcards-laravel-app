@extends('layout')
@section('content')
<div class="container">
  <div class="row p-4 text-center">
    <h2>Learn English with FlashCardsWebSite</h2>
    <hr />
  </div>
  <div class="row g-2 row-flex">

  @foreach ($words as $word)

  <div class="col-4 text-center p-2 wordArea v">
<div class="word_ p-3 border content">
  <figure>
    <img class="wordPic" src="{{route('home')}}/uploads/words/{{$word->image}}" alt="" />
  </figure>
  <p class="englishWord">{{$word->englishword}}</p>
  <p class="englishSentence"> {{$word->englishsentence}}</p>
  <p class="turkishWord">{{$word->turkishword}}</p>
  <p><a class="youglish" href="https://youglish.com/pronounce/{{$word->englishword}}/english?" target="_blank">YouGlish: {{$word->englishword}}</a></p>
</div>
  </div>

    @endforeach

<div class="d-flex justify-content-center">
  {{$words->links()}}
</div>
  </div>
</div>
@endsection
