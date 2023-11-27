@@ -1,2 +1,8 @@
<x-layouts.main pageName='All Songs'>
<x-layouts.main pageName="All Songs">

@section('content')
<x-songs-list :songs="$songs">
</x-songs-list>
@endsection

</x-layouts.main>