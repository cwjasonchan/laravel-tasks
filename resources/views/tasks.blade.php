@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    WIT Student Registration
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Student Form -->
                    <form action="/task" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Name -->
                        <div class="form-group">
                            <label for="student-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="student-name" class="form-control" value="{{ old('name') }}">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="student-email" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-6">
                                <input type="email" name="email" id="student-email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="student-address" class="col-sm-3 control-label">Address</label>

                            <div class="col-sm-6">
                                <input type="text" name="address" id="student-address" class="form-control" value="{{ old('address') }}">
                            </div>
                        </div>

                        <!-- Postal Code -->
                        <div class="form-group">
                            <label for="student-postal-code" class="col-sm-3 control-label">Postal Code</label>

                            <div class="col-sm-6">
                                <input type="text" name="postal_code" id="student-postal-code" class="form-control" value="{{ old('postal_code') }}">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="student-phone-number" class="col-sm-3 control-label">Phone Number</label>

                            <div class="col-sm-6">
                                <input type="text" name="phone_number" id="student-phone-number" class="form-control" value="{{ old('phone_number') }}">
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="student-date-of-birth" class="col-sm-3 control-label">Date of Birth</label>

                            <div class="col-sm-6">
                                <input type="date" name="date_of_birth" id="student-date-of-birth" class="form-control" value="{{ old('date_of_birth') }}">
                            </div>
                        </div>

                        <!-- Add Student Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Student
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Student Registrated -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Student Registrated
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Name</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            <!-- Elapsed time -->
            <div class="panel panel-default">
                <div class="panel-body">
                    Response time: {{ $elapsed * 1000 }} milliseconds.
                </div>
            </div>
        </div>
    </div>
@endsection
