{{--
  Template Name: Strona
--}}

@extends('layouts.app')

  @section('content')

  <section class="section">
    <div class="container">
      <div class="text content-page">
        <h2 class="title">
          {{ the_title() }}
        </h2>
        <div class="content-page__main">
          {{ the_content() }}
        </div>
      </div>
    </div>
  </section>

@endsection