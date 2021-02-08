@extends('layouts.app')

@section('content')
<nav class="blue lighten-1">
  <div class="nav-wrapper container">
    <a href="#!" class="brand-logo center">Rent a Girlfriend</a>
    <a href="#" data-activates="slide-out" class="button-collapse">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</nav><!-- navbar -->

<div class="row body-components-container">
  <ul class="collection" style="background-color: white">
    <li class="collection-item">
      <h4 class="header-font">Rent:</h4>
    </li>
    <li class="collection-item" style="padding: 0px">
      <div class="row" id="rent-girlfriend-container">
        <!-- ============== APPEND HERE ================= -->
      </div>
    </li>
    <li class="collection-item">
      <div class="view-more-container">
        <button class="btn btn-flat blue lighten-1 waves-effect waves-light white-text view-rent-btn" id="view-more-rent-girlfriend-btn">
          Load more
        </button>
      </div>
    </li> 
  </ul>
</div>
@endsection

@section('scripts')
  <script type="text/javascript" src="/js/admin/girlfriend.js"></script>
  <script type="text/javascript" src="/js/admin/rentgirlfriend.js"></script>
@endsection