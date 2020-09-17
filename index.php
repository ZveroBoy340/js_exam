<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Битва с монстром</title>
</head>
<body class="text-center">

<div class="container">
    <h2 class="mb-5">Битва с монстром</h2>
    <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-4">Warrior</h3>
            <div class="number">
                <span class="minus">-</span>
                <input type="number" id="strength" value="0"/>
                <span class="plus">+</span>
                <label for="strength">Strength</label>
            </div>
            <div class="number">
                <span class="minus">-</span>
                <input type="number" id="dexterity" value="0"/>
                <span class="plus">+</span>
                <label for="dexterity">Dexterity</label>
            </div>
            <div class="number">
                <span class="minus">-</span>
                <input type="number" id="health" value="0"/>
                <span class="plus">+</span>
                <label for="health">Health</label>
            </div>
            <div class="points mt-4">
                <input type="number" class="mr-3" id="points" value="15"/>
                <label for="health">Свободные очки</label>
            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="mb-4">Monster</h3>
            <div class="number">
                <input type="number" id="enemy_strength" value="0"/>
                <label for="enemy_strength">Strength</label>
            </div>
            <div class="number">
                <input type="number" id="enemy_dexterity" value="0"/>
                <label for="enemy_dexterity">Dexterity</label>
            </div>
            <div class="number">
                <input type="number" id="enemy_health" value="0"/>
                <label for="enemy_health">Health</label>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="warrior" id="you">
                <img src="https://pngimg.com/uploads/viking/viking_PNG26.png" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="warrior" id="enemy">
                <img src="https://www.pngkey.com/png/detail/151-1514744_image-dark-knight-aw-render-png-aigis-wiki.png" alt="">
            </div>
        </div>
        <div class="battle col-lg-12 text-center">
            <h4 class="mb-4">Battle!</h4>
            <button class="btn btn-primary" id="fight">Fight!!!</button>
            <div class="result-war mt-5" id="result">
                История битвы
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>