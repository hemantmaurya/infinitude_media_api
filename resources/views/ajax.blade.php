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

  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
  <div class="col-sm-3" onchange="pagination_result()">
    <select id="pagination_result">
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
                  onclick="ajaxLoad('{{url('posts')}}?only_ftd=1')">
                  <i class="fa fa-search" aria-hidden="true">Only FTD</i>
          </button>
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


          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

          <script>
              $(document).ready(function() {
              $('#example').DataTable( {
                  "scrollX": true
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

          <table class="table table-striped" id="example" style="width:100%;">
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

          <ul class="pagination">
              {{ $posts->links() }}
          </ul>

      </div>
  </div>

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