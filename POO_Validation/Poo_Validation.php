<?php

abstract class Shows
{
    protected $name;
    protected $releaseYear;
    protected $score;
    public function __construct($name, $releaseYear, $score)
    {
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->score = $score;
    }
    abstract public function show();
}

interface MovieInterface
{
    public function add($show);
    public function delete($show);
    public static function ArrayStock($show);
}



class Movie extends Shows
{
    public function show()
    {
        return $this->name;
    }
}
class TvShow extends Shows
{
    public function show()
    {
        return $this->name;
    }
}
//------------movie management--------------------------------
class MovieManagement implements MovieInterface
{
    public $counting = 0;
    public static $data;

    public function add($show)
    {
        $this->counting++;
        Self::ArrayStock($show);
        return ['counter' => $this->counting, "data" => Self::$data];
    }
    public function delete($show)
    {

        $key = array_search($show->show(), self::$data);
        unset(Self::$data[$key]);
        $this->counting--;
        // return $key;
        return ["key" => $key, "data" => self::$data];
    }

    public static function  ArrayStock($show)
    {
        Self::$data[] = $show;
    }
}
class TvShowManagement implements MovieInterface
{
    public $counting = 0;
    public static $data;

    public function add($show)
    {
        $this->counting++;
        Self::ArrayStock($show);
        return ['counter' => $this->counting, "data" => Self::$data];
    }
    public function delete($show)
    {

        $key = array_search($show->show(), self::$data);
        unset(Self::$data[$key]);
        $this->counting--;
        // return $key;
        return ["key" => $key, "data" => self::$data];
    }

    public static function  ArrayStock($show)
    {
        Self::$data[] = $show;
    }
}
//movie test deploy------------------------------
$movie = new Movie("GroundHogDay", 1993, "8.1/10");
$movie1 = new Movie("harry potter", 2007, "7.5/10");
echo $movie->show();
$movieManagement = new MovieManagement();
?>
<pre>
    <?php
    print_r($movieManagement->add($movie->show()));
    print_r($movieManagement->add($movie1->show()));
    print_r($movieManagement->delete($movie1));




    ?>
</pre>


<br>
<?php
echo "<pre>";
$tvShow = new TvShow("Evil", 2019, "9.1/10");
$tvShow1 = new TvShow("Supernatural", 2005, "8.3/10");
echo $tvShow->show();

$tvShowManagement = new TvShowManagement();
print_r($tvShowManagement->add($tvShow->show()));
print_r($tvShowManagement->add($tvShow1->show()));
print_r($tvShowManagement->delete($tvShow));





echo "</pre>";



?>
