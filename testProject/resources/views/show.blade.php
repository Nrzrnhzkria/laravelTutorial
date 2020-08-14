@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Features</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($feature as $value)
                    @foreach ($product as $products)                        
                    
                <tr>
                    <td>1</td>
                    <td>{{ $products->name  }}</td>
                    <td>{{ $value->name }}</td>
                    <td>RM {{ $products->price  }}</td>
                <td><a class="btn btn-danger" href="{{ url('delete') }}/{{ $value->feat_id }}">Delete</a></td>
                </tr>    
                    @endforeach
                @endforeach
            </tbody>
          </table>
    </div>
</div>
    
@endsection