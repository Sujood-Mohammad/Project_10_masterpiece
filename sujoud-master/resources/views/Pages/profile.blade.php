
@extends('Layout.master')

   @section('content')



    <style>

.ftco-navbar-light {
    top: 0px !important;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: rgb(255, 255, 255);
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 80%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
    font-size: 30px;
}
.profile-head h6{
    color: #eccb46;
    font-size: 25px;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c5801;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #f6e496;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;

}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #f0b206;
}
.size{
    font-size: 20px;
}
    </style>
</head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

 <img style='width: 100%; height:400px; position:absolute; ' src="{{ asset("assets/images/backgrounds/slider-3.jpg")}}" alt="">
    <div class="container-fluid emp-profile" style="margin-top: 400px">

                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img style="width: 250px; height: 250px ;  border-radius:50%;" src="{{url('img/'.$user->image) }}" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                  <h2 class="text-center">Your Profile</h2>

                                        <br>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active size" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MY INFO</a>
                                        <a href="/order/{{auth()->user()->id}}"  class="thm-btn">Orders</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Name</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Email</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Phone</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->phone}}</p>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Image</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->image}}</p>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Address</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->address}}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p></p>
                                                </div>
                                            </div>
                                </div>

                </form>
    </div>


            <a href="/editprofile/{{$user->id}}" type="submit" class="thm-btn">Edit Profile</a>
        </div>
        </div>
        </div>


@endsection
