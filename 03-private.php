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
            <h1 class="text-2xl">03 - Private</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
            <h2 class="text-center text-2xl mb-6">Table Maker</h2>
            <form class="p-2 mb-4 gap-4 grid grid-cols-2 justify-center ring-1 bg-black/50 ring-white/50 rounded-md" action="" method="post">
                <div class="flex flex-col gap-4 items-center">
                    <label>Rows:</label>
                    <input type="range" name="nr" min="1" max="20" step="1" value="10" oninput="onr.value = this.value">
                    <output id="onr" class="text-2xl">10</output>
                </div>
                <div class="flex flex-col gap-4 items-center">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="20" step="1" value="10" oninput="onc.value = this.value">
                    <output id="onc" class="text-2xl">10</output>
                </div>
                <button class="p-2 bg-green-600 w-[330px] rounded-md hover:scale-95 transition-all">Make Table</button>
            </form>
            <?php 
                class Table{
                    private $nr;
                    private $nc;

                    public function __construct($nr, $nc){
                        $this->nr = $nr;
                        $this->nc = $nc;
                        $this->makeTable();
                    }
                    private function makeTable(){
                        echo "<table class='border-collapse mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++){
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc; $c++){
                                echo "<td class='p-3 border ring-white/50'></td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                if($_POST){
                    $table = new Table($_POST['nr'], $_POST['nr']);
                }
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>