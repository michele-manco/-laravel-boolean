@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1>Domande frequenti</h1>
        <h2>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.
        </h2>
      </div>
      <div id="sx"class="col-md-6">
        @foreach ($lista_faq_sx as $singola_faq )
          <div class="faq">
            <h3 class="question"> {{ $singola_faq['q'] }} <i class="fas fa-plus pull-right"></i></h3>
            <p class="answer">  {{ $singola_faq['a'] }}</p>
          </div>
        @endforeach
      </div>
      <div id="dx"class="col-md-6">
        @foreach ($lista_faq_dx as $singola_faq )
          <div class="faq">
            <h3 class="question"> {{ $singola_faq['q'] }} <i class="fas fa-plus pull-right"></i></h3>
            <p class="answer">  {{ $singola_faq['a'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>



@endsection
