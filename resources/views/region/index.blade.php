@extends("layouts.adminDashboard")
@section("content")
      <div class="panel-header ">
        <!-- <canvas id="bigDashboardChart"></canvas> -->
      </div>
      <div class="container mx-2 position-relative">
          <div class="card m-4 shadow p-3 mb-5 bg-body rounded position-absolute top-0 start-0 translate-middle">
                <div class="body ">
                @foreach ($regions as $val)
                    {{$val}}
                @endforeach
                </div>
          </div>
        
      </div>
@endsection