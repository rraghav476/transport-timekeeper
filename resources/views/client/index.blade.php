@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Client Data</h4>
          <a href="{{ route('client.add', [app()->getLocale()]) }}" class="btn btn-primary float-right">Add New Company</a>
        </div>
            <div class="card-body">
              <div >
                <table id="myTable" class="table display" >
                  <thead>
                      <tr>
                          <th>S No.</th>
                          <th>Client Name</th>
                          <th>Action</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($clients as $val)
                      <tr>
                          <td>{{$val->id}}</td>
                          <td>{{$val->client_name}}</td>
                          <td> <a href="{{ route('client.status', [$val->id,app()->getLocale()]) }}">{{$val->status == 1 ? 'Inactive':'Active'}}</a>|
                          <a href="{{ route('client.edit', [$val->id,app()->getLocale()]) }}">Edit</a> </td>
                      </tr> 
                  @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>S No.</th>
                          <th>Client Name</th>
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
      <!-- <div class="panel-header "> -->
        <!-- <canvas id="bigDashboardChart"></canvas> -->
      <!-- </div>
      <div class="container mx-2 position-relative">
          <div class="card m-4 shadow p-3 mb-5 bg-body rounded position-absolute top-0 start-0 translate-middle">
                <div class="body ">
                @foreach ($clients as $val)
                    {{$val}}
                @endforeach
                </div>
          </div>
        
      </div> -->
@endsection