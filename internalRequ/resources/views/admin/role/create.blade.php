@extends('admin.plantilla')
@section('contenido')
<h2>Role Registration</h2>
  @if(count($errors)>0)
  <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
      </ul>
  </div>
  @endif
  {!!Form::open(array('url'=>'admin/role', 'method'=> 'POST', 'autocomplete'=>'off'))!!}
  {{Form::token()}}
  <div class="card-header">
        <div class="form-group row">
          <label for="name" class="col-form-label text-md-right">Name</label>
          <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="Name" value=""  autofocus>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-form-label text-md-right">Descriptione</label>
          <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="Description" value=""  autofocus>
          </div>
        
        <div class="form-group row">
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="submit" class="btn btn-sm btn-outline-secondary">Save</button>
         </div>
          <button type="reset" class="btn btn-sm btn-outline-secondary">Cancel</button>
        </div>        
  </div>
  {!!Form::close()!!}

@endsection