@extends('BackEnd.master')
@section('title')
Homepage
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$dish}}</h3>

                    <p>Dish</p>
                </div>
                <div class="icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <a href="{{route('manage_dish_table')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">

                    <h3>{{$data}}</h3>

                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('manage_user_table')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$delivery_boys}}</h3>
                    <p>Delivery Boy</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="{{route('delivery_boy_manage')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->


@endsection

