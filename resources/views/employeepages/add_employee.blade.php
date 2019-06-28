@extends('layouts.master')


@section('abc')

<div class="row">
<div class="col-md-2">


  </div>
            <div class="col-md-8">
                      <!-- general form elements -->
                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Add Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">

                          <div class="box-body">

                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                              <label>Phone Number</label>
                              <input type="text" class="form-control" placeholder="03012345678">
                            </div>

                            <div class="form-group">
                              <label>CNIC Numer</label>
                              <input type="text" class="form-control" placeholder="36501-6695211-3">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputPassword1">Conferm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>

@endsection
