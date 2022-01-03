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
               <form  action="{{ url('region/update').'/'.$region->id }}" method="POST">
                    @csrf
                 
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Region</label>
                        <input type="text" name="region_name" class="form-control" placeholder="Home Address" value={{$region->region_name}}>
                      </div>
                    </div>
                  </div>
                 <div class="row ">
                    <div class="col-md-6"><input type="submit" class="btn btn-secondary" value="Save"  style="margin-left: 269px;
                       margin-top: 20px;
                       margin-bottom: 31px"></div>
                    
                  </div>
                </form>
              </div>
            </div>
@endsection