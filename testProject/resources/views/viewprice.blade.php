@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card " style="width: 18rem; text-align:center;">
            <div class="card-body">
              <h1 class="card-title">{{ $product->name }}</h1>
            <h6 class="card-subtitle mb-2 text-muted">RM {{ $product->price }}</h6>
                <ul class="card-text">
                @foreach ($feature as $value)
                  <li>{{ $value->name }}</li>
                @endforeach
                </ul>
              <a href="#" class="btn btn-dark">Subscribe</a>
            </div>
          </div>
    </div>
</div>
@endsection