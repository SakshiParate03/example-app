<?php
// Song class definition
namespace Practicals;
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
    public function construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter and setter functions for title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and setter functions for artist
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and setter functions for genre
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter and setter functions for tempo
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

// Usage example
/*
$song = new Song("Example Title", "Example Artist", "Rock", "Medium");
echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";

$song->setTitle("New Title");
$song->setArtist("New Artist");
$song->setGenre("Pop");
$song->setTempo("Fast");

echo "Updated Title: " . $song->getTitle() . "\n";
echo "Updated Artist: " . $song->getArtist() . "\n";
echo "Updated Genre: " . $song->getGenre() . "\n";
echo "Updated Tempo: " . $song->getTempo() . "\n";
*/
?>
