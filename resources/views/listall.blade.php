@extends('layouts.app')


@section('content')


    <div>

        <button type="button" class="btn btn-primary center-block" id="addStudent" data-toggle="modal"
                data-target="#addUserModal">
            Nouveau etudient
        </button>

    </div>


    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Controlls</th>
                <th scope="col">surname</th>
                <th scope="col">name</th>
                <th scope="col">birthdate</th>
                <th scope="col">handicapnumber</th>
                <th scope="col">insurancenumber</th>
                <th scope="col">socialsecuritycoverage</th>
                <th scope="col">handicaptype</th>
                <th scope="col">handicapdegree</th>
                <th scope="col">handicapcardenddate</th>
                <th scope="col">insurancecardenddate</th>
                <th scope="col">telephonenumber</th>
                <th scope="col">identitycardnumber</th>
                <th scope="col">mothersname</th>
                <th scope="col">fathersname</th>
                <th scope="col">entrydate</th>
                <th scope="col">exitdate</th>
                <th scope="col">comment</th>

            </tr>
            </thead>
            <tbody>


            @foreach($alumni as $singleAlumni)


                <tr>
                    <th scope="row">{{$singleAlumni->id}}</th>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" id="editStudent" data-toggle="modal"
                                data-target="#editUserModal{{$singleAlumni->id}}">Modifier
                        </button>
                        <button type="button" class="btn btn-primary btn-sm" id="editStudent" data-toggle="modal"
                                data-target="#deleteUserModal{{$singleAlumni->id}}">Efacer
                        </button>
                        {{--<form action="/remove/{{$singleAlumni->id}}">--}}
                        {{--<button type="submit" class="btn btn-primary btn-sm" id="removeStudent">Remove</button>--}}
                        {{--</form>--}}
                    </td>

                    <td>{{$singleAlumni->surname}}</td>
                    <td>{{$singleAlumni->name}}</td>
                    <td>{{$singleAlumni->birthdate}}</td>
                    <td>{{$singleAlumni->handicapnumber}}</td>
                    <td>{{$singleAlumni->insurancenumber}}</td>
                    <td>{{$singleAlumni->socialsecuritycoverage}}</td>
                    <td>{{$singleAlumni->handicaptype}}</td>
                    <td>{{$singleAlumni->handicapdegree}}</td>
                    <td>{{$singleAlumni->handicapcardenddate}}</td>
                    <td>{{$singleAlumni->insurancecardenddate}}</td>
                    <td>{{$singleAlumni->telephonenumber}}</td>
                    <td>{{$singleAlumni->identitycardnumber}}</td>
                    <td>{{$singleAlumni->mothersname}}</td>
                    <td>{{$singleAlumni->fathersname}}</td>
                    <td>{{$singleAlumni->entrydate}}</td>
                    <td>{{$singleAlumni->exitdate}}</td>
                    <td>{{$singleAlumni->comment}}</td>


                </tr>




            @endforeach
            </tbody>
        </table>
    </div>


    @foreach($alumni as $singleAlumni)



        <div class="modal fade bd-example-modal-lg" id="editUserModal{{$singleAlumni->id}}" tabindex="-1"
             role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier etudient</h5>
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
                            <label for="exampleInputEmail1">Birthdate</label>
                            {{ Form::date('birthdate', $singleAlumni->birthdate, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Handicapnuber</label>
                            {{ Form::text('handicapnumber', $singleAlumni->handicapnumber, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Insurancenumber</label>
                            {{ Form::text('insurancenumber', $singleAlumni->insurancenumber, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Socialsecuritycoverage</label>
                            {{ Form::text('socialsecuritycoverage', $singleAlumni->socialsecuritycoverage, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Handicaptype</label>
                            {{ Form::text('handicaptype', $singleAlumni->handicaptype, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Handicapdegree</label>
                            {{ Form::text('handicapdegree', $singleAlumni->handicapdegree, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Handicapcardenddate</label>
                            {{ Form::date('handicapcardenddate', $singleAlumni->handicapcardenddate, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Insurancecardenddate</label>
                            {{ Form::date('insurancecardenddate', $singleAlumni->insurancecardenddate, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephonenumber</label>
                            {{ Form::text('telephonenumber', $singleAlumni->telephonenumber, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Identitycardnumber</label>
                            {{ Form::text('identitycardnumber', $singleAlumni->identitycardnumber, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Mothersname</label>
                            {{ Form::text('mothersname', $singleAlumni->mothersname, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Fathersname</label>
                            {{ Form::text('fathersname', $singleAlumni->fathersname, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Entrydate</label>
                            {{ Form::date('entrydate', $singleAlumni->entrydate, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Exitdate</label>
                            {{ Form::date('exitdate', $singleAlumni->exitdate, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Comment</label>
                            {{ Form::textarea('comment', $singleAlumni->comment, ['class' => 'form-control']) }}
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anullér</button>
                        <button type="submit" class="btn btn-primary">Confirméz</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


        <div class="modal fade bd-example-modal-lg" id="deleteUserModal{{$singleAlumni->id}}" tabindex="-1"
             role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Suppremér l'etudiént {{$singleAlumni->surname}}
                            , {{$singleAlumni->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="center-block">Vous'etes sure d'supprimer ete etudiént?</div>
                    <div class="modal-footer">
                        <form action="/remove/{{$singleAlumni->id}}">
                            <button type="submit" class="btn btn-primary btn-sm" id="removeStudent">Confirméz</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    @endforeach

    <div class="modal fade bd-example-modal-lg" id="addUserModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau etudient.</h5>
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
                        <label for="exampleInputEmail1">Birthdate</label>
                        {{ Form::date('birthdate', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Handicapnuber</label>
                        {{ Form::text('handicapnumber', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Insurancenumber</label>
                        {{ Form::text('insurancenumber', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Socialsecuritycoverage</label>
                        {{ Form::text('socialsecuritycoverage', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Handicaptype</label>
                        {{ Form::text('handicaptype', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Handicapdegree</label>
                        {{ Form::text('handicapdegree', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Handicapcardenddate</label>
                        {{ Form::date('handicapcardenddate', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Insurancecardenddate</label>
                        {{ Form::date('insurancecardenddate', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephonenumber</label>
                        {{ Form::text('telephonenumber', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Identitycardnumber</label>
                        {{ Form::text('identitycardnumber', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mothersname</label>
                        {{ Form::text('mothersname', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Fathersname</label>
                        {{ Form::text('fathersname', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Entrydate</label>
                        {{ Form::date('entrydate', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Exitdate</label>
                        {{ Form::date('exitdate', '', ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Comment</label>
                        {{ Form::textarea('comment', '', ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anullér</button>
                    <button type="submit" class="btn btn-primary">Confirméz</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
