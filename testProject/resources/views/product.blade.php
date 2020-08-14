@extends('layout.app')

@section('content')
<div class="container">
    <form action="{{ url('store')}}" method="POST"> 
    @csrf
    <div class="row">
        <div class='col-md-12'>         
            <div class="form-group">
                <label for="name">Product Name</label>
                <input name="name" type="text" class="form-control" required>
            </div>
        </div>

        <div class='col-md-12'>
            <div class="form-group">
                <label for="name">Features</label>
                <input name="feature[]" type="text" class="form-control" required>
            </div>
        </div>
        <div class='col-md-12'>
            <div class="form-group">
                <input name="feature[]" type="text" class="form-control" required>
            </div>
        </div>
        <div class='col-md-12'>
            <div class="form-group">
                <input name="feature[]" type="text" class="form-control" required>
            </div>
        </div>
        <div class='col-md-12'>
            <div class="form-group">
                <input name="feature[]" type="text" class="form-control" required>
            </div>
        </div>
        <div class='col-md-12'>
            <div class="form-group">
                <input name="feature[]" type="text" class="form-control" required>
            </div>
        </div>
        
        <div class='col-md-12'>
            <div class="form-group">
                <label for="phone">Price</label>
                <input name="price" type="text" class="form-control" required>
            </div>
        </div>
            
        <div class='col-md-12'>
            <button type='submit' class='btn btn-primary'> SUBMIT </button>
        </div>
    </div>
</form>
</div>
@endsection