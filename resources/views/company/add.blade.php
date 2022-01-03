@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Add Company</h5>
              </div>
              <div class="card-body">
                <form method="post" action="{{url('company/save')}}" >
                    @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-secondary" value="save" >
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
@endsection