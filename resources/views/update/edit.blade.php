@extends('layout')
@section('dashboard-content')
    <h1>Update Announcement form</h1>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('success') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::get('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('failed') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ URL::to('update-update') }}/{{ $update->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1"> Announcement</label>
            <input type="text" class="form-control" value="{{ $update->update }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter update " name="update">
        </div>
        <button type="submit" class="btn btn-primary"> Update </button>
    </form>
 
@stop
