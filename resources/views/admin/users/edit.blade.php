@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Manage {{$user->name}}</div>

                    <div class="card-body">
                        <form action="{{route('admin.users.update' , ['user'=>$user->id])}}" method="POST">
                            {{method_field('PUT')}}
                            @csrf
                            @foreach($roles as $role)
                                <div class="form-check">
                                    <input type="checkbox" name="roles[]" value="{{$role->id}}" {{$user->hasAnyRole($role->name)?'checked':''}} >
                                    <label>{{$role->name}}</label>
                                </div>
                            @endforeach
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
