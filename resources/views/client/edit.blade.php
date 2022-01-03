@extends("layouts.adminDashboard")
@section("content")
<div class="panel-header panel-header-sm">
      </div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Edit Client</h5>
            </div>
            <div class="card-body">
            <form method="Post" action="{{ url('client/update').'/'.$client->id }}">
                @csrf
                
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Client</label>
                    <input type="text" name="client_name" class="form-control" value={{$client->client_name}}>
                    </div>
                </div>
                </div>
                <div class="row ">
                <div class="col-md-6"><input type="submit" class="btn btn-secondary" value="Save" href="" style="margin-left: 269px;
                    margin-top: 20px;
                    margin-bottom: 31px"></div>
                
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection