@extends('layouts.master')

@section('content')

  <div class="jumbotron" id="banner-hechizos">
    <h1>Hechizos</h1>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2 left-sidebar sticky-top">
        Filtrar
      </div>
        <div class="col-sm-10 infinite-scroll">
          @foreach (array_chunk($spells->getCollection()->all(), 4) as $row)
            <div class="row tight-margin update">
              @foreach ($row as $spell)
                <article class="col-sm-3 tight-margin">
                  <div class="thumbnail tile">
                    <img src="/img/Luz.jpg"
                    onError="{{ asset('img/' . $spell->image) }}"
                    style="width:100%">
                    <div class="caption">
                      <p> {{ $spell->name }}. </p>
                    </div>
                  </div>
                </article>
              @endforeach
            </div>
          @endforeach
          <div class="update">
            {{ $spells->links() }}
          </div>
        </div>
    </div>
  </div>

  <script type="text/javascript">
      $('ul.pagination').hide();
      $(function() {
          $('.infinite-scroll').jscroll({
              autoTrigger: true,
              loadingHtml: '<img class="center-block" src={{ asset("img/loading.gif") }} alt="Loading..." />',
              padding: 0,
              nextSelector: '.pagination a[rel~="next"]',
              contentSelector: 'div.update',
              callback: function() {
                  $('ul.pagination').remove();
              }
          });
      });
  </script>

@endsection
