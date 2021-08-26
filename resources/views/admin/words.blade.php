@extends('admin.layout')

@section('content')
  <div class="row wrapper border-bottom white-bg page-heading">
                  <div class="col-lg-10">
                      <h2>Words</h2>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                              <a href="">Homepage</a>
                          </li>

                          <li class="breadcrumb-item active">
                              <strong>Words</strong>
                          </li>
                      </ol>
                  </div>
                  <div class="col-lg-2">

                  </div>
              </div>


          <div class="wrapper wrapper-content animated fadeInRight">
@if (session('success'))
    <div class="alert alert-success">{{session('success')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
@endif


@if (session('successDelete'))
    <div class="alert alert-warning">{{session('successDelete')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>
@endif


              <div class="row">
                  <div class="col-lg-12">
                      <div class="ibox ">
                          <div class="ibox-title">
                              <h5>Words Management <br><small>Can edit and delete words from here.</small></h5>
                              <div class="ibox-tools">
                                  <a class="collapse-link">
                                      <i class="fa fa-chevron-up"></i>
                                  </a>

                                  <a class="close-link">
                                      <i class="fa fa-times"></i>
                                  </a>
                              </div>
</div>


<div class="ibox-content" style="display: block;">

    <!-- Table Begining -->


    <table id="postsBlog" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#id</th>
                <th>English Word</th>
                <th>Turkish Word</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($GetWord as $GetWords)


            <tr>
                <td>{{$GetWords->id}}</td>
                <td>{{$GetWords->englishword}}</td>
                <td>{{$GetWords->turkishword}}</td>
                <td>{{$GetWords->image}}</td>
                <td>Active</td>

                <td class="text-center">
                  <a href="{{route('editWord', $GetWords->id)}}"><i class="btn btn-success fa fa-edit"></i></a> | <a href="{{route('deleteWord', $GetWords->id)}}" onclick="return confirm('Bu yazıyı silmek istediğinden emin misin?')"><i class="btn btn-danger fa fa-trash"></i></a>
                </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>#id</th>
              <th>English Word</th>
              <th>Turkish Word</th>
              <th>Image</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
        </tfoot>
    </table>


    <!-- End Table -->

</div>
                  </div>
@endsection
