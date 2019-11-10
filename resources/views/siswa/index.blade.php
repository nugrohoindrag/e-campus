@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Siswa</h3>
                                        <div class="right">
                                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>End Name</th>
                                                    <th>Gender</th>
                                                    <th>Religion</th>
                                                    <th>Age</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data_siswa as $siswa)
                                                <tr>
                                                    <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->first_name}}</a></td>
                                                    <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->end_name}}</a></td>
                                                    <td>{{$siswa->gender}}</td>
                                                    <td>{{$siswa->religion}}</td>
                                                    <td>{{$siswa->age}}</td>
                                                    <td>{{$siswa->address}}</td>
                                                    <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                                    <td><a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')">Delete</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/create" method="POST">
                {{@csrf_field()}}
            <div class="form-group">
                <label for="InputFirstName">First Name</label>
                <input name="first_name" type="name" class="form-control" id="InputFirstName" aria-describedby="FirstNameHelp" placeholder="Input Your First Name">
            </div>
            <div class="form-group">
                <label for="InputLastName">Last Name</label>
                <input name="end_name" type="name" class="form-control" id="InputLastName" aria-describedby="LastNameHelp" placeholder="Input Your Last Name">
            </div>
            <div class="form-group">
                <label for="InputGender">Choose Your Gender</label>
                <select name="gender" class="form-control" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="Wanita">Wanita</option>
                    <option value="Pria">Pria</option>
                </select>
            </div>
            <div class="form-group">
                <label for="InputReligion">Choose Your Religion</label>
                <select name="religion" class="form-control" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Your Age</label>
                <input name="age" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Age">
            </div>
            <div class="form-group">
                <label for="AddressTextArea">Address</label>
                <input name="address" class="form-control" type="text" id="AddressTextArea" placeholder="Input Your Address"></textarea>
            </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@stop