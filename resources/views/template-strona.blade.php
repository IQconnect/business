{{--
  Template Name: Strona
--}}

@extends('layouts.app')

  @section('content')

  <section class="section">
    <div class="container">
      <h2 class="title">
        {{ the_title() }}
      </h2>
      <div class="content text">
        {{ the_content() }}
      </div>
    </div>
  </section>

@endsection