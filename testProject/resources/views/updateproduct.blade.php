@extends('layout.app')

@section('content')
<div class="container">
<form action="{{ url('update/product') }}/{{ $product->product_id }}" method="POST"> 
    @csrf
    <div class="row">
            <div class='col-md-12'>         
                <div class="form-group">
                    <label for="name">Product Name</label>
                <input name="name" type="text" class="form-control" value="{{ $product->name }}" required>
                </div>
            </div>

            <div class='col-md-12'>
                <div class="form-group">
                    <label for="name">Features</label>
                    @foreach ($feature as $value)
                    <input name="feature[]" type="text" class="form-control" value="{{ $value->name }}" required>
                    <input name="feat_id[]" type="hidden" class="form-control" value="{{ $value->feat_id }}" required>
                    <br>
                    @endforeach
                </div>
            </div>
            
            <div class='col-md-12'>
                <div class="form-group">
                    <label for="phone">Price (RM)</label>
                    <input name="price" type="text" class="form-control" Value="{{ $product->price }}" required>
                </div>
            </div>
                
            <div class='col-md-12'>
                <button type='submit' class='btn btn-primary'> UPDATE </button>
            </div>    
    </div>
</form>
</div>
@endsection