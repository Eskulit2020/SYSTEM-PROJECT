@extends('BackEnd.master')
@section('title')
    User Add Page
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
                        Create Administrator
                    </div>
                    <div class="card-body">

                        <form action="{{route('save_user_data')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <input type="text" class="form-control" name="usertype" value="admin" required>
                            </div>

                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block"> Add User</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
