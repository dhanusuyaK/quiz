@extends('layouts.main')
@section('title', 'Setting')
@section('content')

<div class="container">
<div class="mt-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select class="form-select" name="active" aria-label="Default select example">
                        <option selected value="private">Private</option>
                        <option value="public">Public</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Active</label>
                <div class="col-sm-10">
                    <select class="form-select" name="active" aria-label="Default select example">
                        <option selected value="N">NO</option>
                        <option value="Y">YES</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Start Date & Time</label>
                <div class="col-md-auto">
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="col-md-auto">
                    <input type="time" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
            </div>
            <div class="mt-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">End Date & Time</label>
                <div class="col-md-auto">
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="col-md-auto">
                    <input type="time" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
            </div>
            <div class="mt-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Show Results</label>
                <div class="col-sm-10">
                    <select class="form-select" name="show_results" aria-label="Default select example">
                        <option selected value="N">NO</option>
                        <option value="Y">YES</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Show Summary</label>
                <div class="col-sm-10">
                    <select class="form-select" name="show_summary" aria-label="Default select example">
                        <option selected value="N">NO</option>
                        <option value="Y">YES</option>
                    </select>
                </div>
            </div>
        </div>





















@endsection