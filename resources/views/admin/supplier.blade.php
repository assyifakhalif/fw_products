@extends('admin.index')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add Supplier</h4>
      <p class="card-description">
        Input Data
      </p>
      {!! Form::open(array('url' => url('supplier/store'), 'method' => 'POST', 'class' => 'form-horizontal')) !!}
        <div class="form-group">
          {!!Form::label('name', 'Name',array ('class' => 'col-sm-3 control-label'))!!}
          <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group">
          <label for="companyName">Company Name</label>
          <input type="text" class="form-control" id="name_company" placeholder="Company Name" name="name_company">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea rows="4" cols="50" type="text" class="form-control" id="address" placeholder="Address" name="address"></textarea>
        </div>
        <div class="form-group">
          <label for="contact">Company Email</label>
          <input type="text" class="form-control" id="contact" placeholder="Company Email" name="contact">
        </div>
        <div class="form-group">
          <label for="telp">Supplier Phone Number</label>
          <input type="text" class="form-control" id="telp" placeholder="Supplier Phone Number" name="telp">
        </div>
        <div class="form-group">
          <label for="information">Information</label>
          <textarea class="form-control" id="information" rows="4" placeholder="Information" name="information"></textarea>
        </div>
        <button type="submit" class="btn btn-primary me-2" style="color: white">Submit</button>
        <button type="button" class="btn btn-light">Cancel</button>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection