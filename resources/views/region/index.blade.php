@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Region Data</h4>
                <a href="{{ route('region.add', [app()->getLocale()]) }}" class="btn btn-primary float-right">Add New Region</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table display" style="width:100%">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Region Name</th>
                
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
          
            @foreach($regions as $key => $val)
            <tr>
                                <td>{{$key+1}}</td>
                                 <td>{{$val->region_name}}</td>
                               <td> <a href="{{ url('region/status').'/'.$val->id}}">{{ $val->status == NULL ? 'Inactive':'Active'}}</a>|
                               <a href="{{ url('region/edit').'/'.$val->id }}">Edit</a> </td>

               
            </tr> 
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>S No.</th>
                <th>Region Name</th>
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