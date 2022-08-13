@extends('Layout.master')

   @section('content')


<style>
.ftco-navbar-light {
    background: #343a40 !important;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 3;
    top: 0px  !important;
}

</style>

 @if($errors->any())
    <div class="alert alert-danger text-center" role="alert">
        {{ $errors->first() }}
    </div>
@endif
 <img style='width: 100%; height:400px; position:absolute; ' src="{{ asset("assets/images/backgrounds/slider-3.jpg")}}" alt="">
<div class="container" style="padding:8%;margin-top:350px">
    <h2 class="text-center">Edit Your Profile</h2>
    <form action="{{ route('pages.updateProfile', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group ">
      <label for="exampleFormControlInput1">Name :</label>
      <input type="text" name="name" value="{{ $user->name }}" class="form-control" required >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Email :</label>
      <input type="email" name="email" value="{{ $user->email }}" class="form-control" required >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Phone Number :</label>
      <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" required >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Address :</label>
      <input type="text" name="address" value="{{ $user->address }}" class="form-control" required >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Image :</label>
      <input type="file" name="image" value="{{ $user->image }}" class="form-control" required >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Password :</label>
      <input type="password" name="password" value="{{ $user->password }}" class="form-control" required >
    </div>

    {{-- <div class="form-group">
        <label for="exampleFormControlFile1">Profile Photo</label>
        <input type='file' name="image" class="form-control-file" >
      </div>
    <div class="form-group">
        <input type='hidden' name="hiddenlogo" value="{{$user->image}}" class="form-control-file" >
      </div> --}}

      <div class="form-group">
        <button type="submit" class="thm-btn" style="margin-top:10px; ">Update</button>
        {{-- <a  href="{{url('pages.profile')}}" class="btn btn-primary">Back</a> --}}
      </div>
  </form>

</div>
<br><br><br>


@endsection
