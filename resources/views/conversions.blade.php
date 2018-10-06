@extends('layouts.supina')

@section('css')
  <style>
      .loading {
          background: lightgrey;
          padding: 15px;
          position: fixed;
          border-radius: 4px;
          left: 50%;
          top: 50%;
          text-eign: center;
          margin: -40px 0 0 -50px;
          z-index: 2000;
          display: none;
      }

      .form-group.required label:after {
          content: " *";
          color: red;
          font-weight: bold;
      }
  </style>
@endsection
@section('content')

  

  <div class="container">




      <div class="page-box">

<script>
var interval = setInterval(timestamphome, 1000);




 function timestamphome(){
 var date;

date = new Date();

 
 var time = document.getElementById('timediv'); 
 time.innerHTML = date.toLocaleTimeString();


  }
  </script>
  
  
  <div class="col-sm-1" id="timediv"></div>
<script type="text/javascript">
  function pagination_result(){
    // alert(document.getElementById('pagination_result').value);
    window.location = 'http://'+window.location.host+'/posts?pagination_result='+document.getElementById('pagination_result').value;
  }
</script>
  <div class="col-sm-2" onchange="pagination_result()">
    <select id="pagination_result" onchange="ajax_page_call()"  class="form-control">
      <option value="10">10</option>
      <option value="20">20</option>
      <option value="30">30</option>
      <option value="50">50</option>
      <option value="100">100</option>
      <option value="200">200</option>
      <option value="500">500</option>

    </select>
  </div>
          
<?php
function selected1($val1){
  if(request()->session()->get('filter_column')==$val1){
    $selected = 'selected';
  }else{
    $selected = '';
  }
  echo $selected;
}
?>
          <div class="col-sm-2">
            <select id="filter_column" class="form-control">
              <option value="id">Select One</option>
              <option value="firstName" <? selected1('firstName')?>>First Name</option>
              <option value="lastName" <? selected1('lastName')?>>Last Name</option>
              <option value="last_update" <? selected1('last_update')?>>Last Update</option>
              <option value="id" <? selected1('id')?>>ID</option>
            </select>
          </div>

          <div class="col-sm-4">

              <div class="pull-right">
                  <div class="input-group">
                      <input class="form-control" id="search"
                         value="{{ request()->session()->get('search') }}"
                         onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('posts')}}?search='+this.value)"
                         placeholder="Search Title" name="search"
                         type="text" id="search"/>
                      <div class="input-group-btn">
                          <button type="submit" class="btn btn-primary"
                              onclick="ajaxLoad('{{url('posts')}}?search='+$('#search').val()+'&filter_column='+$('#filter_column').val())">
                              <i class="fa fa-search" aria-hidden="true">Search</i>
                      </button>
                      </div>
                  </div>

              </div>
              
          </div>



          
          

          <div class="col-sm-1">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-primary"
                  onclick="ajaxLoad('{{url('posts')}}?reset=1')">
                  <i class="fa fa-search" aria-hidden="true">Reset</i>
          </button>
            </div>
          </div>




  <div class="col-sm-2">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-primary"  data-toggle="collapse" data-target="#demo">
                  <i class="fa fa-search" aria-hidden="true">Advance Search</i>
          </button>
            </div>
          </div>

  <div id="demo" class="collapse">
    <div class="col-sm-3">
                <input type="text" class="form-control" id="country_id" list="country_id_list" placeholder="Country ID"
                          value="{{ request()->session()->get('country') }}"
                          onkeyup="ajaxSearch(this.value, 'country', 'country_id_list1', 0, 'country_id_list')"
                 />
<div id="country_id_list1"></div>

</div>

    <div class="col-sm-3">
                <input type="text" class="form-control" id="client_id" list="client_id_list" placeholder="Client ID"
                          value="{{ request()->session()->get('search') }}"
                          onkeydown="ajaxSearch(this.value, 'client_id', 'client_id_list1', 2, 'client_id_list')"
                 />
<div id="client_id_list1"></div>

</div>



@csrf
<script>
  function ajaxSearch(val1, filter_param, data_append_id, string_length, data_list) {
    

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                    

if(val1.length > string_length){
                      jQuery.ajax({
                    url: "{{ url('search') }}",
                    method: 'post',
                  data: {
                     val1:val1,
                     data_list:data_list,
                     filter_param:filter_param,
                     _token : $('[name="_token"]').val(),
                  },
//                   headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// },
                  success: function(result){
                     // var obj = JSON.parse(result);
                    document.getElementById(data_append_id).innerHTML = result;
                     console.log(result);
                  }});
}


             }
  </script>



<div class="col-sm-3">
                            <input type="text" class="form-control" id="firstName" list="firstName_list" placeholder="First Name"
                          value="{{ request()->session()->get('search') }}"
                          onkeyup="ajaxSearch(this.value, 'firstName', 'firstName_list_apend', 1, 'firstName_list')"
                 />
<div id="firstName_list_apend"></div>
</div>

<div class="col-sm-3">
                <input type="text" class="form-control" id="lastName" list="lastName_list" placeholder="Last Name"
                          value="{{ request()->session()->get('search') }}"
                          onkeyup="ajaxSearch(this.value, 'lastName', 'lastName_list_apend', 1, 'lastName_list')"
                 />
<div id="lastName_list_apend"></div>
</div>

<div class="col-sm-3">
                <input type="text" class="form-control" id="email" list="email_list" placeholder="Email"
                          value="{{ request()->session()->get('email') }}"
                          onkeyup="ajaxSearch(this.value, 'email', 'email_list_apend', 1, 'email_list')"
                 />
<div id="email_list_apend"></div>
</div>

<div class="col-sm-3">
                <input type="text" class="form-control" id="phone" list="phone_list" placeholder="Phone"
                          value="{{ request()->session()->get('phone') }}"
                          onkeyup="ajaxSearch(this.value, 'phone', 'phone_list_apend', 1, 'phone_list')"
                 />
<div id="phone_list_apend"></div>
</div>
<div class="col-sm-3">
                <input type="text" class="form-control" id="campaignId" list="campaignId_list" placeholder="Campaign Id"
                          value="{{ request()->session()->get('campaignId') }}"
                          onkeyup="ajaxSearch(this.value, 'campaignId', 'campaignId_list_apend', 1, 'campaignId_list')"
                 />
<div id="campaignId_list_apend"></div>
</div>

<div class="col-sm-3">
                <input type="text" class="form-control" id="visit_id" list="visit_id_list" placeholder="Visit Id"
                          value="{{ request()->session()->get('visit_id') }}"
                          onkeyup="ajaxSearch(this.value, 'visit_id', 'visit_id_list_apend', 1, 'visit_id_list')"
                 />
<div id="visit_id_list_apend"></div>
</div>

<div class="col-sm-3">
                <input type="text" class="form-control" id="balance" list="balance_id_list" placeholder="Balance"
                          value="{{ request()->session()->get('balance_id') }}"
                          onkeyup="ajaxSearch(this.value, 'balance', 'balance_list_apend', 1, 'balance_id_list')"
                 />
<div id="balance_list_apend"></div>
</div>

<div class="col-sm-3">
                  <input type="text" class="form-control" id="campaign_keyword" list="campaign_keyword_id_list" placeholder="Campaign Keyword"
                          value="{{ request()->session()->get('campaign_keyword') }}"
                          onkeyup="ajaxSearch(this.value, 'campaign_keyword', 'campaign_keyword_list_apend', 3, 'campaign_keyword_id_list')"
                 />
<div id="campaign_keyword_list_apend"></div>
</div>

<div class="col-sm-3">
                  <button class="form-control"> Filter </button>
<!-- <div id="campaign_keyword_list_apend"></div> -->
</div>


  </div>


          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

          <script>
              $(document).ready(function() {
              $('#example1').DataTable( {

                  "scrollX": true,
                  "paging":   false,
                  "bInfo" : false,
              } );
              } );
      </script>

          <style>
              .dataTables_filter{
        display:none;
      }
      .dataTables_length{
        display:none;
      }
      #example_paginate{
        display:none;
      }

      </style>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
         "scrolly": true,
        "scrollX": true
    } );
} );
</script>

<div id="table_ajax">
          <table class="table table-striped table-bordered" id="example1" style="width:100%;">
              <thead>
                  <tr>

                      <th width="60px">No</th>
                      <th><a href="javascript:ajaxLoad('{{url('posts?field=firstName&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">First Name</a>
                          {{request()->session()->get('field')=='firstName'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>

                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=lastName&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                      Last Name
                  </a>
                          {{request()->session()->get('field')=='lastName'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>

                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                      Phone
                  </a>
                          {{request()->session()->get('field')=='phone'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>

                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=updated_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  Reg Time
                </a>
                          {{request()->session()->get('field')=='reg_time'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>


                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=visit_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  visit_id
                </a>
                          {{request()->session()->get('field')=='visit_id'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=client_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  client_id
                </a>
                          {{request()->session()->get('field')=='client_id'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=status&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  status
                </a>
                          {{request()->session()->get('field')=='status'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=last_update&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  last_update
                </a>
                          {{request()->session()->get('field')=='last_update'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=country&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  Reg Time
                </a>
                          {{request()->session()->get('field')=='country'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=balance&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  Reg Time
                </a>
                          {{request()->session()->get('field')=='balance'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=currency&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  Currency
                </a>
                          {{request()->session()->get('field')=='currency'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>

                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=has_ftd&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  has_ftd
                </a>
                          {{request()->session()->get('field')=='has_ftd'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=campaign_keyword&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  campaign_keyword
                </a>
                          {{request()->session()->get('field')=='campaign_keyword'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=ftd_date&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  ftd_date
                </a>
                          {{request()->session()->get('field')=='ftd_date'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=lead_status&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  lead_status
                </a>
                          {{request()->session()->get('field')=='lead_status'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=email&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  email
                </a>
                          {{request()->session()->get('field')=='email'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      {{-- <th style="vertical-align: middle">
                      <a href="javascript:ajaxLoad('{{url('posts?field=password&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                      password
                      </a>
                      {{request()->session()->get('field')=='password'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th> --}}
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=reg_time&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  reg_time
                </a>
                          {{request()->session()->get('field')=='reg_time'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>
                      <th style="vertical-align: middle">
                          <a href="javascript:ajaxLoad('{{url('posts?field=campaignId&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                  campaignId
                </a>
                          {{request()->session()->get('field')=='campaignId'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                      </th>




                      {{-- <th width="160px" style="vertical-align: middle">
                      <a href="javascript:ajaxLoad('{{url('posts/create')}}')"
                      class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> New Post</a>
                      </th> --}}
                  </tr>
              </thead>
              <tbody>
                  @php
                  $i=1;
                  @endphp
                  @foreach  ($posts as $post)
                  <tr>
                      <th>{{$post->id}}</th>
                      <td>{{ $post->firstName }}</td>
                      <td>{{ $post->lastName }}</td>
                      <td>{{ $post->phone }}</td>
                      <td>{{ $post->reg_time }}</td>
                      <td>{{ $post->visit_id }}</td>
                      <td>{{ $post->client_id }}</td>
                      <td>{{ $post->status }}</td>
                      <td>{{ $post->last_update }}</td>
                      <td>{{ $post->country }}</td>
                      <td>{{ $post->balance }}</td>
                      <td>{{ $post->currency }}</td>
                      <td>{{ $post->has_ftd }}</td>
                      <td>{{ $post->campaign_keyword }}</td>
                      <td>{{ $post->ftd_date }}</td>
                      <td>{{ $post->lead_status }}</td>
                      <td>{{ $post->email }}</td>
                      {{-- <td>{{ $post->password }}</td> --}}
                      <td>{{ $post->reg_time }}</td>
                      <td>{{ $post->campaignId }}</td>
                      {{-- <td>
                      <a class="btn btn-info btn-xs" title="Show"
                   href="javascript:ajaxLoad('{{url('posts/show/'.$post->id)}}')">
                      Show</a>
                      <a class="btn btn-warning btn-xs" title="Edit"
                     href="javascript:ajaxLoad('{{url('posts/update/'.$post->id)}}')">
                      Edit</a>
                      <input type="hidden" name="_method" value="delete"/>
                      <a class="btn btn-danger btn-xs" title="Delete"
                     href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('posts/delete/'.$post->id)}}','{{csrf_token()}}')">
                      Delete
                  </a>
                      </td> --}}
                  </tr>
                  @endforeach

              </tbody>
          </table>
        {{$posts->total()}}
          <ul class="pagination">
              {{ $posts->links() }}
          </ul>
</div>
      </div>
  </div>

  <script type="text/javascript">
    
    function ajax_page_call(){
        var page_no = $(this).attr('href').split('page=')[1];
    var urlx = 'conversions/ajax?page='+page_no+'';
    var country = $('#country').val();
    var client_id = $('#client_id').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var campaignId = $('#campaignId').val();
    var visit_id = $('#visit_id').val();
    var balance = $('#balance').val();
    var campaign_keyword = $('#campaign_keyword').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


    $('.loading').show();
        $.ajax({
                    url: urlx,
                    method: 'post',
                  data: {
                     page_no:page_no,
                     country:country,
                     client_id:client_id,
                     firstName: firstName,
                     lastName: lastName,
                     email: email,
                     phone: phone,
                     campaignId: campaignId,
                     visit_id: visit_id,
                     balance: balance,
                     campaign_keyword: campaign_keyword,
                     _token : $('[name="_token"]').val(),
                  },
                  success: function(result){
                    //  // var obj = JSON.parse(result);
                     document.getElementById('table_ajax').innerHTML = result;
                     console.log(result);
                  }});
    }

  </script>

<script type="text/javascript">
  $(document).on('click', '.pagination a', function(e){
    e.preventDefault();
    // console.log($(this).attr('href').split('page=')[1]);

    var page_no = $(this).attr('href').split('page=')[1];
    var urlx = 'conversions/ajax?page='+page_no+'';
    var country = $('#country').val();
    var client_id = $('#client_id').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var campaignId = $('#campaignId').val();
    var visit_id = $('#visit_id').val();
    var balance = $('#balance').val();
    var campaign_keyword = $('#campaign_keyword').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


    $('.loading').show();
        $.ajax({
                    url: urlx,
                    method: 'post',
                  data: {
                     page_no:page_no,
                     country:country,
                     client_id:client_id,
                     firstName: firstName,
                     lastName: lastName,
                     email: email,
                     phone: phone,
                     campaignId: campaignId,
                     visit_id: visit_id,
                     balance: balance,
                     campaign_keyword: campaign_keyword,
                     _token : $('[name="_token"]').val(),
                  },
                  success: function(result){
                    //  // var obj = JSON.parse(result);
                     document.getElementById('table_ajax').innerHTML = result;
                     console.log(result);
                  }});
  })
</script>


  <script>
  function ajaxLoad(filename, content) {
      content = typeof content !== 'undefined' ? content : 'content';
     // alert(filename);
     // alert(content);
      $('.loading').show();
      $.ajax({
          type: "GET",
          url: filename,
          contentType: false,
          success: function (data) {
            window.location.href = filename;
            // alert(data);
              // $("#" + content).html(data);
              $('.loading').hide();
          },
          error: function (xhr, status, error) {
              alert(xhr.responseText);
          }
      });
  }
  </script>

  
  {{-- <script src="{{ asset('js/ajaxcrud.js') }}"></script> --}}



@endsection

@section('js')
  {{-- <script src="{{ asset('js/ajaxcrud.js') }}"></script> --}}
@endsection