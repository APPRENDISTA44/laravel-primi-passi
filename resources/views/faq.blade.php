@extends('layouts.app')
@section('title')
  FAQ
@endsection

@section('content')
  <main>
    <div class="container">
      <div class="row">
        <div class="col">
          @foreach ($faqs_prima as $faq)
            <h2>{{$faq['question']}}</h2>
            <p>{{$faq['answer']}}</p>
          @endforeach
        </div>
        <div class="col">
          @foreach ($faqs_dopo as $faq)
            <h2>{{$faq['question']}}</h2>
            <p>{{$faq['answer']}}</p>
          @endforeach
        </div>

      </div>

    </div>
  </main>
@endsection
