<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <h1>Sono la pagina Home</h1>
        <button type="button" class="btn btn-primary">
            <a class="nav-link" href="http://127.0.0.1:8000/">Torna alla pagina Welcome</a>
        </button>
        <div id="my-card" class="row">
        </div>
    </div>
</body>

</html>

<script>
    const myArr = [
        'Sono la Card numero 1',
        'Sono la Card numero 2',
        'Sono la Card numero 3',
        'Sono la Card numero 4',
        'Sono la Card numero 5',
        'Sono la Card numero 6'
    ];

    const myCard = document.getElementById('my-card');


    for (i = 0; i < myArr.length; i++) {
        myCard.innerHTML += `<div class="col-4"><div class="card">${myArr[i]}<div></div>`;
    }
</script>