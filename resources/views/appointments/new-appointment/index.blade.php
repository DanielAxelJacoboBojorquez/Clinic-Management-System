@extends('layouts.app')

@section('header')
    <h5>Appointment / New Appointment</h5>
@stop

@section('content')
    <h1><i class="far fa-list-alt"></i> <b>Doctor Appointment</b></h1>
    <a href="#" class="btn btn-success"><i class="far fa-list-alt"></i><b>Appointment List</b></a>
    <br><br>
    <h2>Doctor Appointment</h2>
    <div class="container">
        <label for="Patient Id" class="ml-2">Patient Id</label><input type="text" name="id" id="id" placeholder="Patient Id"><br>
        <label for="Department Name" class="ml-2">Department Name</label>
        <select name="department" id="department" name="department" class="ml-2">
            <option value="department">Doctor Department</option>
        </select>
        <label for="Doctor" class="ml-2">Doctor</label>
        <select name="doctor" id="doctor" class="ml-2">
            <option value="doctor">Select doctor</option>
        </select>
        <label for="Appointment Date" class="ml-2">Appointment Date</label><input type="text" placeholder="Appointment Date" name="date" id="date">
        <label for="Available schendule" class="ml-2"></label><input type="datetime" name="schendule" id="schendule" placeholder="Select schendule">
        <label for="Problem" class="ml-2">Problem</label><input type="text" name="problem" id="problem" placeholder="Problem">
    </div>
@stop
