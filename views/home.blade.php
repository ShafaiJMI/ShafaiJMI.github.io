@extends('backend.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-6">
            <div class="row">
            <div class="col-md-6">
                <div class="card mx-2 my-2 rounded-3 shadow">
                   <br><p>Events</p><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mx-2 my-2 rounded-3 shadow">
                    <br><p>Services</p><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mx-2 my-2 rounded-3 shadow">
                    <br><p>Reviews</p><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mx-2 my-2 rounded-3 shadow">
                    <br><p>Slides</p><br>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow rounded-3 mx-2 my-2">
                <div class="card-body">
            <h6>Recent Queries</h6>
</div>
        </div>
        </div>
            
        </div>
</div>

@endsection
