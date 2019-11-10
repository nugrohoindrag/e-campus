@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                        <form action="/siswa/{{{$siswa->id}}}/update" method="POST">
                                            {{@csrf_field()}}
                                            <div class="form-group">
                                                <label for="InputFirstName">First Name</label>
                                            <input name="first_name" type="name" class="form-control" id="InputFirstName" aria-describedby="FirstNameHelp" placeholder="Input Your First Name" value="{{$siswa->first_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="InputLastName">Last Name</label>
                                                <input name="end_name" type="name" class="form-control" id="InputLastName" aria-describedby="LastNameHelp" placeholder="Input Your Last Name" value="{{$siswa->end_name}}">
                                            </div>
                                            <div class="form-group">
                                                    <label for="InputGender">Choose Your Gender</label>
                                                    <select name="gender" class="form-control" id="inlineFormCustomSelect" value="{{$siswa->gender}}">
                                                        <option selected>Choose...</option>
                                                        <option value="Wanita" @if($siswa->gender == 'Wanita') selected @endif>Wanita</option>
                                                        <option value="Pria" @if($siswa->gender == 'Pria') selected @endif>Pria</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                    <label for="InputReligion">Choose Your Religion</label>
                                                    <select name="religion" class="form-control" id="inlineFormCustomSelect" value="{{$siswa->religion}}">
                                                        <option selected>Choose...</option>
                                                        <option value="Islam" @if($siswa->religion == 'Islam') selected @endif>Islam</option>
                                                        <option value="Kristen" @if($siswa->religion == 'Kristen') selected @endif>Kristen</option>
                                                        <option value="Buddha" @if($siswa->religion == 'Buddha') selected @endif>Buddha</option>
                                                        <option value="Hindu" @if($siswa->religion == 'Hindu') selected @endif>Hindu</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Your Age</label>
                                                <input name="age" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Age" value="{{$siswa->age}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="AddressTextArea">Address</label>
                                                <input name="address" type="text" class="form-control" id="AddressInput" placeholder="Input Your Address" value="{{$siswa->address}}"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </form>
								</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
</div>

@stop
@section('content1')
            <h1>Edit Data Mahasiswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                <form action="/siswa/{{{$siswa->id}}}/update" method="POST">
                    {{@csrf_field()}}
                    <div class="form-group">
                        <label for="InputFirstName">First Name</label>
                    <input name="first_name" type="name" class="form-control" id="InputFirstName" aria-describedby="FirstNameHelp" placeholder="Input Your First Name" value="{{$siswa->first_name}}">
                    </div>
                    <div class="form-group">
                        <label for="InputLastName">Last Name</label>
                        <input name="end_name" type="name" class="form-control" id="InputLastName" aria-describedby="LastNameHelp" placeholder="Input Your Last Name" value="{{$siswa->end_name}}">
                    </div>
                    <div class="form-group">
                            <label for="InputGender">Choose Your Gender</label>
                            <select name="gender" class="form-control" id="inlineFormCustomSelect" value="{{$siswa->gender}}">
                                <option selected>Choose...</option>
                                <option value="Wanita" @if($siswa->gender == 'Wanita') selected @endif>Wanita</option>
                                <option value="Pria" @if($siswa->gender == 'Pria') selected @endif>Pria</option>
                            </select>
                    </div>
                    <div class="form-group">
                            <label for="InputReligion">Choose Your Religion</label>
                            <select name="religion" class="form-control" id="inlineFormCustomSelect" value="{{$siswa->religion}}">
                                <option selected>Choose...</option>
                                <option value="Islam" @if($siswa->religion == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if($siswa->religion == 'Kristen') selected @endif>Kristen</option>
                                <option value="Buddha" @if($siswa->religion == 'Buddha') selected @endif>Buddha</option>
                                <option value="Hindu" @if($siswa->religion == 'Hindu') selected @endif>Hindu</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Your Age</label>
                        <input name="age" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Age" value="{{$siswa->age}}">
                    </div>
                    <div class="form-group">
                        <label for="AddressTextArea">Address</label>
                        <input name="address" type="text" class="form-control" id="AddressInput" placeholder="Input Your Address" value="{{$siswa->address}}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
@endsection