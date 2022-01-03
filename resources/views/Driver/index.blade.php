@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Driver</h4>
          <a href="{{ route('driver.add', [app()->getLocale()]) }}" class="btn btn-primary float-right">Add New Driver</a>
        </div>
            <div class="card-body">
              <div >
                <table id="myTable" class="table display" >
                  <thead>
                      <tr>
                          <th>S No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($drivers as $val)
                      <tr>
                          <td>{{$val->id}}</td>
                          <td>{{$val->full_name}}</td>
                          <td>{{$val->email}}</td>

                          <td> 
                          <a href="{{ route('driver.edit', [$val->id,app()->getLocale()]) }}"><i class="bi bi-pencil-square"></i></a>|
                            <a href="{{ route('driver.status', [$val->id,app()->getLocale()]) }}">
                            @if($val->status == 1)  
                              <i class="bi bi-toggle-off"></i>
                            @else
                              <i class="bi bi-toggle-on"></i>
                            @endif
                          </a>|
                          <a href=""><i class="fal fa-truck"></i></i></a>|
                          <a href=""><i class="bi bi-megaphone-fill"></i></a>|
                          <a href="{{ route('driver.delete', [$val->id,app()->getLocale()]) }}"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr> 
                  @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>S No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
              </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection