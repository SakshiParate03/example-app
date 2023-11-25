
<html>
<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->Title}}</td>
<td>{{ $song->Artist}}</td>
</tr>
@endforeach
</table>
</html>