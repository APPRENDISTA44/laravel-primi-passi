@extends('layouts.app')
@section('title')
  Homepage
@endsection

@section('content')
  <main>
    <section class="become">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2>DIVENTA UNO SVILUPPATORE WEB</h2>
            <h4>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h4>
            <ul>
              <li>6 mesi di corso intensivo online in diretta</li>
              <li>Nessuna competenza di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
          </div>
          <div class="col-6">
            <img src="{{asset('img/pc-black-gif.gif')}}" alt="pc">
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
