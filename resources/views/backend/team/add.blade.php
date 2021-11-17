@extends('backend.lib.layout')

@section('heading')
    Add Team Member's Info
@endsection

@section('main_content')
<form role="form" action="{{ url('/dashboard/team/add/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="Name" placeholder="Ashikur Rahaman">
      </div>

      <div class="form-group">
        <label for="Designation">Working Area</label>
        <input type="text" class="form-control" name="Designation" placeholder="Web & Data Science Enthusiast">
      </div>

      <div class="form-group">
        <label for="Facebook">Portfolio</label>
        <input type="text" class="form-control" name="Facebook" placeholder="#">
      </div>

      <div class="form-group">
        <label for="Twitter">Gmail</label>
        <input type="text" class="form-control" name="Twitter" placeholder="#">
      </div>
      <div class="form-group">
        <label for="Linkedin">Linkedin</label>
        <input type="text" class="form-control" name="Linkedin" placeholder="https://www.linkedin.com/in/ashikur-rahaman-bd/">
      </div>

      <div class="form-group">
          <label for="Image">Upload Image</label>
          <input type="file" class="form-control-file" name="Image">
      </div>

      
    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection