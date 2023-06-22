<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing-Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <h1>Sono la pagina Pricing</h1>
        <button type="button" class="btn btn-primary">
            <a class="nav-link" href="http://127.0.0.1:8000/home">Torna alla Home</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a class="nav-link" href="http://127.0.0.1:8000/">Torna alla pagina Welcome</a>
        </button>
        <div>
            <p id="my-text">Ciao a tutti!</p>
            <button type="button" onclick="changeColor('red')" class="btn btn-primary">Cambia il colore in Rosso!</button>
            <button type="button" onclick="changeColor('green')" class="btn btn-primary">Cambia il colore in Verde!</button>
            <button type="button" onclick="changeColor('black')" class="btn btn-primary">Cambia il colore in Nero!</button>
        </div>
    </div>
</body>


</html>

<script>
    const myText = document.querySelector("#my-text");

    function changeColor(color) {
        myText.style.color = color;
    }
</script>