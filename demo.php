<?php
interface VideoInterface {

    public function getName();

    public function getSource();

    public function getEmbedCode();
}

class YouTubeVideo implements VideoInterface {
    private $name;
    private $source;

    public function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName() {
        return $this->name;
    }

    public function getSource() {
        return $this->source;
    }

    public function getEmbedCode() {
        // Generate the HTML code for embedding a YouTube video
        return '<iframe width="560" height="315" src="' . $this->source . '" frameborder="0" allowfullscreen></iframe>';
    }
}

$youtubeVideo = new YouTubeVideo("Breakfast Idea Nr. 1", "https://www.youtube.com/embed/6mH6ROMCEX0?si=tUKnNXEe-AAfw44c");
echo "Video Name: " . $youtubeVideo->getName() . "<br>";
echo "Video Source: " . $youtubeVideo->getSource() . "<br>";
echo $youtubeVideo->getEmbedCode();

?>


