<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Files</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="min-h-[100vh] flex justify-center items-center text-white">
    <main class="w-[380px] h-[600px] bg-white/20 rounded">
        <header class="flex gap-4 justify-center items-center border-b border-yellow-100 border-dashed pb-2">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-red-200 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl">02 - Costructor</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
            <?php
                class Playlist{

                    //Attributes

                    private $name;
                    private $artist = Array();
                    private $album  = Array();
                    private $cover  = Array();
                    private $year   = Array();

                    //Methods

                    public function __construct($name){
                        $this->name = $name;
                    }
                    public function setPlaylist($artist, $album, $cover, $year){
                        $this->artist[] = $artist;
                        $this->album[]  = $album;
                        $this->cover[]  = $cover;
                        $this->year[]   = $year;
                    }
                    public function getPlaylist(){
                        echo "<div class='p-2 flex flex-col items-center ring-1 ring-white/50 rounded-md'> 
                                    <h2 class='my-2 text-xl text-center'>
                                        Play List: $this->name
                                    </h2>";

                        for($i = 0; $i < count($this->artist); $i++){
                            
                            echo "<img class='rounded-full w-[200px]' src='".$this->cover[$i]."' alt='Album Cover'>
                                <p><strong>Artist: </strong>". $this->artist[$i]." </p>
                                <p><strong>Album: </strong>". $this->album[$i]." </p>
                                <p><strong>Year: </strong>". $this->year[$i] ."</p>";
                        }
                        echo "</div>";
                    }
                }
                $playList = new Playlist('Techno');
                $playList->setPlaylist('9999999999', 'X0001000X', 'https://tinyurl.com/2p875pvc', 2020);
                $playList->setPlaylist('Boris Brejcha', 'Space Diver', 'https://tinyurl.com/4n9b7ep5', 2020);
                $playList->setPlaylist('Carl Cox', 'Electronic Generations', 'https://tinyurl.com/3dnfy3pu', 2022);
                $playList->setPlaylist('Nico Moreno', 'Techno Crari', 'https://tinyurl.com/yck6v84y', 2021);
                $playList->setPlaylist('Acraze', 'Do It To It', 'https://tinyurl.com/bdetpw75', 2021);
                $playList->getPlaylist();

                

                
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>