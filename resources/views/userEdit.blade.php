
@extends('layouts.supina')

@if(null !== Auth::user() && Auth::user()->admin === 1)



@section('title', 'Home')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            <small>Edit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">Edit</li>
          </ol>
        </section>
        <!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> -->
        <!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> -->
    <!-- <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script> -->
        <!-- Main content -->
        <section class="content">

<!-- Contents Here -->

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>



<form action="/user/update" method="post" enctype="multipart/form-data">
                            @csrf


<!-- <img  id="image" src="https://keyword-hero.com/wp-content/uploads/2017/02/20170227_Keyword-Hero-Logo-hoch.png" style="display: none;"> -->
  <div class="form-group" id="name-div">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" value="{{$user->name}}" required>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}" required>
  </div>
  <div class="form-group">
    <label for="details">Details</label>

    <textarea class="form-control" name="detail" id="detail">{{$user->details}}</textarea>

  </div>
  <div class="form-group">
    <label for="image">Change Profile Picture</label>

    <input type="checkbox" class="info" id="change-image" value="1">




<script type="text/javascript">

$(document).ready(function() {

    $('#change-image').change(function() {
        if(this.checked) {
          document.getElementById('myDIV').className = 'show';
        }else{
          document.getElementById('myDIV').className = 'hide';
        }

    });
});
</script>



<div id="myDIV" class="hide">
<div id="app">

    <div class="item">
      <a class="btn"  id="imagey" @click="toggleShow2">Set Avatar</a>
      <img class="avatar" id="image" name="image"  v-if="avatarUrl2" :src="avatarUrl2" v-show="true" style="display: none;">
      <my-upload url="https://httpbin.org/post"
        :width="200"
        :height="200 "
        field="avatar2"
        key="0"
        lang-type="en"
        :value.sync="show2"
        :params="otherParams"></my-upload>
    </div>
  </div>

</div>


  <script src="{{ asset('imagecrop/demo-src.js') }}"></script>





    <!-- <p class="help-block">Example block-level help text here.</p> -->
  </div>


  <button type="submit" class="btn btn-primary btn-block upload-image" id="ajaxSubmit" style="margin-top:2%">Submit</button>


</form>



<script type="text/javascript">



  jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                    var name = jQuery('#name').val();
                    var name = name.trim();

                    var email = jQuery('#email').val();
                    var email = name.trim();

                    var detail = jQuery('#detail').val();
                    var detail = detail.trim();

              if(document.getElementById("change-image").checked == true){
                var image = document.getElementById("image").src
              }


                      jQuery.ajax({
                    url: "{{ url('user/update') }}",
                    method: 'post',
                  data: {
                     name:name,
                     email:email,
                     detail:detail,
                     image: image,
                     _token : $('[name="_token"]').val(),
                  },
//                   headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// },
                  success: function(result){
                     alert(result);
                     // var obj = JSON.parse(result);
                    document.getElementById('des_error').innerHTML = result;
                     console.log(result);
                  }});



             })});
</script>




<!-- <script type="text/javascript">
  jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){



               e.preventDefault();


               // Setup Ajax CSRF-TOKEN
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // document.getElementById("ajaxSubmit").disabled = true;
                // setTimeout(function(){document.getElementById("ajaxSubmit").disabled = false;},15000);

                    var name = jQuery('#name').val();
                    var name = name.trim();

                    var email = jQuery('#email').val();
                    var email = name.trim();

                    var detail = jQuery('#detail').val();
                    var detail = detail.trim();


                    var subOk = 0;
                    var desOk = 0;

                    if(name.length==0){
                      alert('Name Can\'t be empty');
                      $("#name-div").addClass("has-error");
                      document.getElementById('name-warning').innerHTML = "Subject can't be empty";
                    }else{
                      var subOk = 1;
                    }


                    // var sEmail = $('#email').val();
                    // if ($.trim(sEmail).length == 0) {
                    // alert('All fields are mandatory');
                    // e.preventDefault();
                    // }

                    // if (validateEmail(sEmail)) {
                    //   alert('Nice!! your Email is valid, now you can continue..');
                    // }else{

                    // }





                     var image = document.getElementById("image").src

                     var subOk = 1;
                     var subOk = 1;

                    if(desOk== 1 && desOk==1){

                      jQuery.ajax({
                    url: "{{ url('/user/update') }}",
                    method: 'post',
                  data: {
                     name:name,
                     email:email,
                     detail:detail,
                     image: image,
                  },
                  success: function(result){
                    alert('yo');
                     alert(result);
                     // var obj = JSON.parse(result);
                    document.getElementById('des_error').innerHTML = result;
                     console.log(result);
                  }});
                    }


             })});
</script> -->





@if(count($errors) > 0)
<div class="errors-container">
  <ul>
   @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
@endif






        </section>
        <!-- /.content -->
      </div>
@endsection

@elseif (null !== Auth::user() && Auth::user()->admin === 0)
    talk to admin
@else

@endif
