{!! Form::open(array('url'=>'admin/role', 'method'=>'GET','autocomplete'=>'off', 'role'=>'search')) !!}
<input class="form-control mr-sm-2" name="searchTex" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
{{Form::close()}}