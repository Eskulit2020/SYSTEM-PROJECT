@extends('BackEnd.master')
@section('title')
    Manage User Page
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
            <h3 class="card-title">User Manage</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            {{$user->usertype}}
                        </td>
                        <td>
                            <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{$user->id}}">
                                <i class="fas fa-edit" title="Click to Edit"></i>
                            </a>
                            <a class="btn btn-outline-danger" href="{{ route('user_delete',['id'=>$user->id]) }}">
                                <i class="fas fa-trash" title="Click to Delete"></i>
                            </a>

                        </td>
                    </tr>
                    {{--=======================================================================modal start here--}}
                    <div class="modal fade" id="edit{{$user->id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('user_update') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                            <input type="hidden" class="form-control" name="id" value="{{$user->id}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="usertype" value="{{$user->usertype}}">
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
