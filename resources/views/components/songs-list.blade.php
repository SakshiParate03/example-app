<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <section>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            
            <section>
            
            @foreach($songs as $song)
            <div>
                <div>{{$song-> id}}</div>
                <div>{{$song-> title}}</div>
                <div>{{$song-> artist}}</div>
                <div>Album 1</div>
                <div>03:50</div>
            </div>
            @endforeach
        </section>
            <!-- Add more rows as needed -->
        </section>
</div>