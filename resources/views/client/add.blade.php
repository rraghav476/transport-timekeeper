@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
<div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Add Client</h5>
              </div>
              <div class="card-body">
                <form method="post" action="{{route('client.save', app()->getLocale())}}" enctype="multipart/form-data">
                    @csrf
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" name="client_name" for="client_name" class="form-control" placeholder="company_name" value="">
                      </div>
                    </div>
                  </div>
                 
                   
                  <div class="row ">
                    <div class="col-md-6"><input type="submit" class="btn btn-secondary" value="save" style="margin-left: 269px;margin-top: 20px;margin-bottom: 31px"></div>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
@endsection