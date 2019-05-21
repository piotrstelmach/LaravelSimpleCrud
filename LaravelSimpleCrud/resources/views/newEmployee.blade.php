@extends('layouts.crudLayout')

@section('crudContent')
    <div class="container">
    <form action="{{action('HomeController@storeNewEmployee')}}" method="POST">
        {{csrf_field()}}
        <div class="col-xs-4">
        <label for="newName">Name</label>
        <input class="form-control"  id="newName" type="text" name="newName"><br>
        <label for="newLastName">Last name</label>
        <input class="form-control"  id="newLastName" type="text" name="newLastName"><br>
        <label for="newDateBirth">Date of birth</label>
        <input class="form-control"  id="newDateBirth" type="text" name="newDateBirth"><br>
        <label for="newSalary">Salary</label>
        <input class="form-control"  id="newSalary" type="text" name="newSalary"><br>
        <label for="newIfEmployed">If employed(for new default is 1)</label>
        <input class="form-control"  id="newIfEmployed" type="text" name="newIfEmployed" value="1"><br>
        <label for="newDateEmploy">Date of employ</label>
        <input class="form-control"  id="newDateEmploy" type="text" name="newDateEmploy"><br>
        <label for="newCountry">Country</label>
        <input class="form-control" id="newCountry" type="text" name="newCountry"><br>
        <button class="btn btn-primary" type="submit">Add new employee</button>
        </div>
    </form>
    </div>
@endsection