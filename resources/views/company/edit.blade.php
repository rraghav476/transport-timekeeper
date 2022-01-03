@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Company</h5>
              </div>
              <div class="card-body">
                <form action="{{ url('company/update').'/'.$company->id }}" method="post">
                    @csrf
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Company</label>
                        <input type="text" name="company_name" class="form-control" placeholder="Company Name" value="{{$company->company_name}}">
                      </div>
                    </div>
                  </div>
                 <div class="row ">
                    <div class="col-md-6"><input type="submit" class="btn btn-secondary" value="Save" style="margin-left: 269px;
                        margin-top: 20px;
                        margin-bottom: 31px">
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
@endsection