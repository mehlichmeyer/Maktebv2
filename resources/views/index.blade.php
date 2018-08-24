@extends('master')

<div>

    <button type="button" class="btn btn-primary" id="addStudent" data-toggle="modal" data-target="#addUserModal">Add
        User
    </button>

</div>


<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Controlls</th>
            <th scope="col">Surname</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>


        @foreach($alumni as $singleAlumni)


            <tr>
                <th scope="row">{{$singleAlumni->id}}</th>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" id="editStudent" data-toggle="modal" data-target="#editUserModal{{$singleAlumni->id}}">Edit</button>
                    <form action="/remove/{{$singleAlumni->id}}">
                        <button type="submit" class="btn btn-primary btn-sm" id="removeStudent">Remove</button>
                    </form>
                </td>
                <td>{{$singleAlumni->surname}}</td>
                <td>{{$singleAlumni->name}}</td>
                <td>{{$singleAlumni->status}}</td>
            </tr>


            <div class="modal fade bd-example-modal-lg" id="editUserModal{{$singleAlumni->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        {!! Form::open(['action' => 'SchoolController@editStudent']) !!}

                        <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                {{ Form::text('id', $singleAlumni->id, ['class' => 'form-control', 'readonly' => 'true']) }}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Surname</label>
                                {{ Form::text('surname', $singleAlumni->surname, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                {{ Form::text('name', $singleAlumni->name, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                {{ Form::text('status', $singleAlumni->status, ['class' => 'form-control']) }}
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Form absenden</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>


        @endforeach
        </tbody>
    </table>
</div>




<div class="modal fade bd-example-modal-lg" id="addUserModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['action' => 'SchoolController@addStudent']) !!}

            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Surname</label>
                    {{ Form::text('surname', '', ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    {{ Form::text('name', '', ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    {{ Form::text('status', '', ['class' => 'form-control']) }}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Form absenden</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>