@extends('admin.index')
@section('content')
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Purchase</h4>
        {!! Form::open(['url' => url('/purchase/store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Product Name</label>
              <select class="js-example-basic-single w-100" id="product_id" name="product_id">
                @foreach ($products as $product)
                  <option value="{{ $product->products_id }}">{{ $product->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Supplier Name</label>
              <select class="js-example-basic-single w-100" id="supplier_id" name="supplier_id">
                @foreach ($suppliers as $supplier)
                  <option value="{{ $supplier->supplier_id }}">{{ $supplier->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="stock">Stock</label>
              <input name="stock" type="number" class="form-control" placeholder="stock" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="comment">Comment</label>
              <input name="comment" type="text" class="form-control" placeholder="comment" />
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary me-2" style="color: white">
          Submit
        </button>
        <button type="button" class="btn btn-secondary">
          Cancel
        </button>
        {!! Form::close() !!}

      </div>
    </div>
  </div>
@endsection
