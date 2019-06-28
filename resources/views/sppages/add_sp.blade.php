  @extends('layouts.master')


@section('abc')


  @if($errors->any())
      <div class="alert alert-danger">
       <ul>
         @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
      </ul>
      </div>
  @endif


  <div class="row">
  <div class="col-md-2">

  </div>
              <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">Add Service Provider</h3>
                          </div>
                          <!-- /.box-header -->

                          <!-- form start -->
                          <form action = "{{url('/serviceprovider')}}" method="post">
                            @csrf

                            <div class="box-body">

                              <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                              </div>

                              <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phon_number" class="form-control"placeholder="03017657993">
                              </div>

                              <div class="form-group">
                                <label>CNIC Numer</label>
                                <input type="text" name="cnic" class="form-control" placeholder="36501-6695211-3">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="conform_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Conferm Password</label>
                                <input type="password" name="password"class="form-control" id="exampleInputPassword2" placeholder="Conferm Password">
                              </div>
                            </div>
                            <div class="box-footer">

                              <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                          </form>
                        </div>
                    </div>
                  </div>
{{--
                  <button onclick = "ok()"> Click me</button>
                  <p id="demo"></p> --}}

@endsection

@section('scripts')
  {{-- <script>
  function ok(){
      firebase.auth().createUserWithEmailAndPassword("office@gamil.com", "123456").then(function(success){
        console.log('success',success);
    }).catch(function(error) {
  console.log('error123',error);
});
}
</script> --}}
@endsection
