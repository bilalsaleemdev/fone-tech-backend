@extends('layouts.master')


@section('abc')
  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Employee</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>

                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Phone Number</th>
                  <th>CNIC Number</th>
                  <th>Email Adress</th>
                </tr>
                @php
                  $counter = 1;
                @endphp
                @foreach ($data as $key => $value)
                  <tr>
                    <td>
                      {{$counter++}}.
                    </td>
                    <td>
                      {{$value}}
                    </td>
                    <td>
                      {{$value}}
                    </td>
                    <td>
                      {{$value}}
                    </td>
                    <td>
                      {{$value}}
                    </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>

@endsection
