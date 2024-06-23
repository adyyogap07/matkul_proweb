<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Matematika {
    // Define the value of pi as a constant
    const PI = 3.14;

    // Method to add two numbers
    public function tambah($a, $b) {
        return $a + $b;
    }

    // Method to calculate the square of a number
    public function kuadrat($x) {
        return $x * $x;
    }

    // Method to calculate the circumference of a circle
    public function kelilingLingkaran($jari) {
        return 2 * self::PI * $jari;
    }

    // Method to calculate the area of a circle
    public function luasLingkaran($jari) {
        return self::PI * $this->kuadrat($jari);
    }
}

// Create an instance of the Matematika class
$math = new Matematika();

// Set the radius of the circle
$jari = 10;

// Calculate the circumference and area of the circle
$kelilingLingkaran = $math->kelilingLingkaran($jari);
$luasLingkaran = $math->luasLingkaran($jari);

// Display the results
echo "Menghitung Keliling dan Luas Lingkaran<br>";
echo "Jari-Jari: $jari<br>";
echo "Keliling: $kelilingLingkaran<br>";
echo "Luas: $luasLingkaran";
?>
</body>
</html>