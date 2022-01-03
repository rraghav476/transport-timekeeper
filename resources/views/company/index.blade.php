@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Company Data</h4>
                <a href="{{ route('company.add', [app()->getLocale()]) }}" class="btn btn-primary float-right">Add New Company</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="display table" >
        <thead>
            <tr>
                <th>S No.</th>
                <th>Company Name</th>
                
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
          
            @foreach($company as $val)
            <tr>
                                <td>{{$val->id}}</td>
                                
                                 <td>{{$val->company_name}}</td>
                               <td> <a href="{{ route('company.status', [$val->id,app()->getLocale()]) }}">{{$val->status == 1 ? 'Inactive':'Active'}}</a>|
                               <a href="{{ route('company.edit', [ $val->id,app()->getLocale()]) }}">Edit</a> </td>

               
            </tr> 
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>S No.</th>
                <th>Company Name</th>
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
