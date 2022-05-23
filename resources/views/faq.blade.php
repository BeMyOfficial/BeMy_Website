@extends('layouts.main')


@section('container')
    <h1 class="text-center mt-5" style="color: aqua">Be My Frequenly Asked Question (FAQ)</h1>
    <div id="accordion" class="mt-5">

        <div class="card">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
              Collapsible Group Item #1
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
              Collapsible Group Item #2
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
              Collapsible Group Item #3
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>
      
      </div>
@endsection