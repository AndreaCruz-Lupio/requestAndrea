@extends('admin.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xl-12">
        <h2>List of roles <a href="{{action('RoleController@create')}}}"><button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus"></span></button></a> </h2>
                
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xl-12">
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name </th>
              <th>Description</th>
              <th>Edit</th>
              <th>Remove</th>
            </tr>
          </thead>
          @foreach($role as $rol)
          <tbody>
            <tr>
              <th>{{$rol->idrole}}</th>
              <th>{{$rol->Name}}</th>
              <th>{{$rol->Description}}</th>
              <th><a href="{{URL::action('RoleController@edit', $rol->idrole)}}"><button type="" class="btn btn-sm btn-outline-secondary"><span data-feather="edit-3"></span></button></a></th>
              <!--<th><a href="" data-target="#modal-delete-{{$rol->idrole}}" data-toggle='modal'><button type="" class="btn btn-sm btn-outline-secondary"><span data-feather="trash"></span></button></a></th>-->
            </tr>
           <!-- @include('admin.role.modal')-->
            @endforeach
          </tbody>
        </table> 
      </div>
      {{$rol->render()}} 
    </div>
</div>


@endsection