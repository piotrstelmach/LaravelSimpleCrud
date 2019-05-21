@extends('layouts.crudLayout')

@section('crudContent')
    <div class="container">
        <input type="button" class="btn btn-primary" value="Add Employee" onclick="location.href='{{url('/newEmployee')}}'"><br><br>
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Last name</th>
                <th>Date of birth</th>
                <th>Salary</th>
                <th>If Employed</th>
                <th>Date of employed</th>
                <th>Country</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach($employees as $key=>$employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->date_of_birth}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$employee->if_employed}}</td>
                    <td>{{$employee->date_of_employ}}</td>
                    <td>{{$employee->country}}</td>
                    <td><a href="{{route('updateEmployee',$employee->id)}}">Update employee</a></td>
                    <td><a href="{{route('deleteEmployee',$employee->id)}}">Delete employee</a></td>
                </tr>
            @endforeach
        </table><br>
        {{$employees->links()}}
    </div>
@endsection
