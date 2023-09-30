<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Food {
        public $name;
        public $price;

        public function show_price(){
            echo $this->price.'<br>';
        }

        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
        }
    
    }
    class Animal {
        public $name;
        public $weight;
        public $height;

        public function show_height(){
            echo $this->height.'<br>';
        }

        public function __construct(string $name, int $weight, int $height){
            $this->name = $name;
            $this->weight = $weight;
            $this->height = $height;
        }

    }

    $onion = new Food('玉ねぎ',300);
    $dog = new Animal('犬',2,80);
    print_r($onion);
    echo '<br>';
    print_r($dog);
    echo '<br>';

    $onion->show_price();
    $dog->show_height();



    


    ?>
</body>
</html>