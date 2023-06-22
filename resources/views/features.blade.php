<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Features</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>
<style>
    #my-table {
        display: flex;
        flex-wrap: wrap;
    }

    .square {
        width: calc(100% / 10);
        height: 130px;
        border: 1px solid black;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <div class="container">
        <h1>Sono la pagina Features</h1>
        <button type="button" class="btn btn-primary">
            <a class="nav-link" href="http://127.0.0.1:8000/home">Torna alla Home</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a class="nav-link" href="http://127.0.0.1:8000/">Torna alla pagina Welcome</a>
        </button>
        <div>
            <div id="my-table"></div>
            <button type="button" onclick="stampTable()" class="btn btn-primary">Stampa la Tabella!!</button>
        </div>
    </div>
</body>

</html>

<script>
    const myTable = document.getElementById('my-table');

    function stampTable() {
        for (i = 1; i < 101; i++) {
            if (i % 15 == 0) {
                myTable.innerHTML += `<div class="square bg-primary">FizzBuzz</div>`
            } else if (i % 3 == 0) {
                myTable.innerHTML += `<div class="square bg-success">Buzz</div>`
            } else if (i % 5 == 0) {
                myTable.innerHTML += `<div class="square bg-warning">Fizz</div>`
            } else {
                myTable.innerHTML += `<div class="square bg-info">${i}</div>`
            }
        }
    }
</script>