

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