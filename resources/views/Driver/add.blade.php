@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Add User</h5>
              </div>
              <div class="card-body">
                <form method="post" action="{{url('driver/save')}}" >
                    @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>first Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Region</label>
                        <select type="text" name="region_id" class="form-control">
                          @foreach ($region as $val)
                          <option value="{{$val->id}}">{{$val->region_name}}</option>
                          @endforeach
                        </select>
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