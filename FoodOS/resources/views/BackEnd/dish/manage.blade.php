@extends('BackEnd.master')
@section('title')
    Manage Dish Page
@endsection

@section('content')
    <div class="card my-4">
        {{--To update--}}
        @if(Session::get('sms'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get('sms')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session::get('smsdelete'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get('smsdelete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card-header">
            <h3 class="card-title">Dish Manage</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Dish Name</th>
                    <th>Details</th>
                    <th>Dish Image</th>
                    <th>Added 0n</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($dishes as $dish)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            {{$dish->dish_name}}
                        </td>
                        <td>
                            {{$dish->dish_detail}}
                        </td>
                        <td>
                            <img src="{{asset($dish->dish_image)}}" style="height: 50px; width: 50px;" class="img-fluid img-thumbnail">
                        </td>
                        <td>
                            {{$dish->created_at}}
                        </td>
                        <td>
                            @if($dish->dish_status == 1)
                                <a class="btn btn-outline-success" href="{{ route('dish_inactive',['dish_id'=>$dish->dish_id] ) }}">
                                    <i class="fas fa-arrow-up" title="Click to Inactive"></i>
                                </a>
                            @else
                                <a class="btn btn-outline-info" href="{{ route('dish_active',['dish_id'=>$dish->dish_id] ) }}">
                                    <i class="fas fa-arrow-down" title="Click to Active"></i>
                                </a>
                            @endif
                            <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{$dish->dish_id}}">
                                <i class="fas fa-edit" title="Click to Edit"></i>
                            </a>
                            <a class="btn btn-outline-danger" href="{{ route('dish_delete',['dish_id'=>$dish->dish_id]) }}">
                                <i class="fas fa-trash" title="Click to Delete"></i>
                            </a>

                        </td>
                    </tr>
                    {{--=======================================================================modal start here--}}
                    <div class="modal fade" id="edit{{$dish->dish_id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Dish</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('dish_update') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Dish Name</label>
                                            <input type="text" class="form-control" name="dish_name" value="{{$dish->dish_name}}">
                                            <input type="hidden" class="form-control" name="dish_id" value="{{$dish->dish_id}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Detail</label>
                                            <textarea type="text" class="form-control" name="dish_detail" rows="5">{{$dish->dish_detail}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Previous Image</label>
                                            <img src="{{asset($dish->dish_image)}}" style="height: 150px; width: 150px; border-radius: 50%">
                                            <input type="file" class="form-control" name="dish_image" accept="image/*">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="btn" value="Update">
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    {{--=======================================================================modal end here--}}

                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

