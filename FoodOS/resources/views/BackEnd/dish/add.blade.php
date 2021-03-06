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
                        Dish
                    </div>
                    <div class="card-body">

                        <form action="{{route('save_dish_data')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Dish Name</label>
                                <input type="text" class="form-control" name="dish_name" required>
                            </div>


                            <div class="form-group">
                                <label>Detail</label>
                                <textarea type="text" class="form-control" name="dish_detail" rows="5" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Dish Image</label>
                                <input type="file" class="form-control" name="dish_image" accept="image/*" required>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <div class="radio">
                                    <input type="radio" name="dish_status" value="1" required>Active
                                    <input type="radio" name="dish_status" value="0" required>Inactive
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Add Dish</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
