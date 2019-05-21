@extends('layouts.crudLayout')

@section('crudContent')
    <div class="container">
    <form action="{{action('HomeController@storeUpdatedEmployee',$employee->id)}}" method="put">
        {{csrf_field()}}
        <div class="col-xs-4">
        <label for="newName">Name</label>
        <input class="form-control" id="newName" type="text" name="newName" value="{{$employee->name}}"><br>
        <label for="newLastName">Last name</label>
        <input class="form-control" id="newLastName" type="text" name="newLastName" value="{{$employee->last_name}}"><br>
        <label for="newDateBirth">Date of birth</label>
        <input class="form-control" id="newDateBirth" type="text" name="newDateBirth" value="{{$employee->date_of_birth}}"><br>
        <label for="newSalary">Salary</label>
        <input class="form-control" id="newSalary" type="text" name="newSalary" value="{{$employee->salary}}"><br>
        <label for="newIfEmployed">If employed(for new default is 1)</label>
        <input class="form-control" id="newIfEmployed" type="text" name="newIfEmployed" value="{{$employee->if_employed}}"><br>
        <label for="newDateEmploy">Date of employ</label>
        <input class="form-control" id="newDateEmploy" type="text" name="newDateEmploy" value="{{$employee->date_of_employ}}"><br>
        <label for="newCountry">Country</label>
        <input class="form-control" id="newCountry" type="text" name="newCountry" value="{{$employee->country}}"><br>
        <button class="btn btn-primary" type="submit">Update employee</button>
        </div>
    </form>
    </div>
@endsection