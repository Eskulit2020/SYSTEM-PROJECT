@extends('BackEnd.master')
@section('title')
    Delivery Boy Page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-5 my-lg-5">
                @if(Session::get('sms'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('sms')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">
                        Delivery Boy
                    </div>
                    <div class="card-body">

                        <form action="{{route('delivery_save')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Delivery Boy Name</label>
                                <input type="text" class="form-control" name="delivery_boy_name" required>
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" name="delivery_boy_phone_number" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="delivery_boy_password" required>
                            </div>

                            <div class="form-group">
                                <label>Added On</label>
                                <input type="date" class="form-control" name="added_on" required>
                            </div>

                            <div class="form-group">
                                <label>Delivery Boy Status</label>
                                <div class="radio">
                                    <input type="radio" name="delivery_boy_status" value="1" required>Active
                                    <input type="radio" name="delivery_boy_status" value="0" required>Inactive
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block"> Add Delivery Boy</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
