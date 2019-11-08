<!DOCTYPE Html>
<html>
    <head>
        <title>E-Campus</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Mahasiswa</h1>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Add Data Mahasiswa
                    </button>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>First Name</th>
                        <th>End Name</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <th>Age</th>
                        <th>Address</th>
                    </tr> 
                    @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->first_name}}</td>
                        <td>{{$siswa->end_name}}</td>
                        <td>{{$siswa->gender}}</td>
                        <td>{{$siswa->religion}}</td>
                        <td>{{$siswa->age}}</td>
                        <td>{{$siswa->address}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

<!-- Modal -->
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
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label for="InputGender">Choose Your Gender</label>
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select name="gender" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="Wanita">Wanita</option>
                        <option value="Pria">Pria</option>
                    </select>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label for="InputReligion">Choose Your Religion</label>
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select name="religion" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Your Age</label>
                <input name="age" type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Age">
            </div>
            <div class="form-group">
                <label for="AddressTextArea">Address</label>
                <textarea name="address" class="form-control" id="AddressTextArea" rows="3" placeholder="Input Your Address"></textarea>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>