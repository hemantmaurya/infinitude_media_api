<table>
<thead>
<tr>
    <th>
        <div class="checkbox checkbox-replace">
            <input type="checkbox" id="chk-3">

        </div>
    </th>

    <th>@sortablelink('details','Details')</th>
    <th>@sortablelink('postingdate','Date')</th>
    <th>@sortablelink('description','Description')</th>
    <th>@sortablelink('amount','Amount')</th>
    <th>@sortablelink('type','Type')</th>
    <th>@sortablelink('slip','Slip#')</th>
    <th>@sortablelink('vendor_id','Vendor')</th>
    <th>@sortablelink('category_id','Category')</th>
</tr>
</thead>
<tbody>
	
</tbody>
<tr>
	<td>details</td>
	<td>details</td>
	<td>details</td>
	<td>details</td>
	<td>details</td>
	<td>details</td>
	<td>details</td>
	<td>details</td>
	<td>details</td>
</tr>
</table>

<div class="container">
    @foreach ($test as $user)
        {{ $user->firstName }}hi
    @endforeach
</div>

{{ $test->links() }}