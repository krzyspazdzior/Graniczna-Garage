<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graniczna Garage</title>
    <link rel="icon" type="image/x-icon" href="private-garage.png">
    <script src="main.js" defer></script>
    <script src="form.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="private-garage.png" alt="">
            <h1>Graniczna Garage</h1>
        </div>
        <nav>
            <ul>
                <li><a href="form.html">Dodaj Samochod</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Dodaj Samochód</h2>
            <p>Chcesz dodać własny samochód do naszej galerii? Wypełnij formularz, a my zajmiemy się resztą. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ullam vel aliquid minus placeat. Amet, vel hic laborum perferendis ut nemo aspernatur consectetur ex? Voluptas amet dicta iste aliquid rem.</p>
        </section>
        <div class="form-container">
            <h2>Dodaj Samochód</h2>
            <form action="form.php" name="car-form" method="post">
                <aside id="col1">
                    <input type="text" name="user" id="user" placeholder="nazwa uzytkownika">
                    <input type="text" name="marka" 
                    id="car"
                    placeholder="marka auta">
                    <input type="text" name="model" id=""
                    placeholder="model">
                    <input type="text" name="seria" id="" placeholder="seria">
                    <input type="text" name="rok" id="" placeholder="rok produkcji">
                    <input type="text" name="przebieg" id="" placeholder="przebieg">
                    <input type="text" name="moc" id="" placeholder="moc">
                </aside>
                <aside id="col2">
                    <input type="text" name="paliwo" id="" placeholder="paliwo">
                    <input type="text" name="skrzynia" id="" placeholder="skrzynia biegow">
                    <input type="text" name="nadwozie" id="" placeholder="rodzaj nadwozia">
                    <input type="text" name="kolor" id="" placeholder="kolor">
                    <input type="text" name="miejsca" id="" placeholder="liczba miejsc">
                    <input type="text" name="drzwi" id="" placeholder="liczba drzwi">
                    <input type="text" name="opis" id="" placeholder="opis">
                </aside>
                <div class="submit-area">
                    <input type="submit" value="Wyślij" name="submit">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <h4>&copy;Pazdzior Corp.</h4>
    </footer>
</body>
</html>

<?php
    ob_start();


    if(isset($_POST["submit"])){
        if(empty($_POST["marka"]) || empty($_POST["model"]) || empty($_POST["seria"]) || empty($_POST["rok"]) || empty($_POST["przebieg"]) || empty($_POST["moc"]) || empty($_POST["paliwo"]) || empty($_POST["skrzynia"]) || empty($_POST["nadwozie"]) || empty($_POST["kolor"]) || empty($_POST["miejsca"]) || empty($_POST["drzwi"]) || empty($_POST["opis"])){
            echo 'Wypełnij wszystkie pola!';
        }else{
            echo 'wszystko siedzi';
        }
    };
?>