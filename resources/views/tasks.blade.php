@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="/task" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="task-email" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-6">
                                <input type="email" name="email" id="task-email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="task-address" class="col-sm-3 control-label">Address</label>

                            <div class="col-sm-6">
                                <input type="text" name="address" id="task-address" class="form-control" value="{{ old('address') }}">
                            </div>
                        </div>

                        <!-- Postal Code -->
                        <div class="form-group">
                            <label for="task-postal-code" class="col-sm-3 control-label">Postal Code</label>

                            <div class="col-sm-6">
                                <input type="text" name="postal_code" id="task-postal-code" class="form-control" value="{{ old('postal_code') }}">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="task-phone-number" class="col-sm-3 control-label">Phone Number</label>

                            <div class="col-sm-6">
                                <input type="text" name="phone_number" id="task-phone-number" class="form-control" value="{{ old('phone_number') }}">
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="task-date-of-birth" class="col-sm-3 control-label">Date of Birth</label>

                            <div class="col-sm-6">
                                <input type="date" name="date_of_birth" id="task-date-of-birth" class="form-control" value="{{ old('date_of_birth') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Postal Code</th>
                                <th>Phone Number</th>
                                <th>Date of Birth</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <td class="table-text"><div>{{ $task->email }}</div></td>
                                        <td class="table-text"><div>{{ $task->address }}</div></td>
                                        <td class="table-text"><div>{{ $task->postal_code }}</div></td>
                                        <td class="table-text"><div>{{ $task->phone_number }}</div></td>
                                        <td class="table-text"><div>{{ $task->date_of_birth }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{'/task/' . $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
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
