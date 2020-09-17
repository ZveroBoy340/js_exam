function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max) + 1);
}

$(document).ready(function() {
    var enemy_strength = getRandomInt(9);
    var enemy_dexterity = getRandomInt(9);
    var enemy_health = getRandomInt(9);
    
    $('#enemy_strength').val(enemy_strength);
    $('#enemy_dexterity').val(enemy_dexterity);
    $('#enemy_health').val(enemy_health);
    
    $('#strength').val(0);
    $('#dexterity').val(0);
    $('#health').val(0);
    
    $('#points').val(15);
});

$( ".plus" ).click(function() {
    var input = $(this).parent().find('input').val();
    var points = $('#points').val();
    
    if (input < 9 && points != 0) {
        input++;
        points--;
        $(this).parent().find('input').val(input);
        $('#points').val(points);
    }
});

$( ".minus" ).click(function() {
    var input = $(this).parent().find('input').val();
    var points = $('#points').val();
    
    if (input > 0) {
        input--;
        points++;
        $(this).parent().find('input').val(input);
        $('#points').val(points);
    }
});

$( "#fight" ).click(function() {
    
    var points = $('#points').val();
    if (points < 1) {
        
        $('#result').html('');
        var interval = setInterval(function () {

            var strength = $('#strength').val();
            var dexterity = $('#dexterity').val();
            var health = $('#health').val();

            enemy_health = $('#enemy_health').val();
            enemy_strength = $('#enemy_strength').val();
            enemy_dexterity = $('#enemy_dexterity').val();

            strength = getRandomInt(strength);
            dexterity = getRandomInt(dexterity);
            enemy_strength = getRandomInt(enemy_strength);
            enemy_dexterity = getRandomInt(enemy_dexterity);

            if (enemy_dexterity > dexterity) {
                $('#enemy').addClass('active');
                health = health - enemy_strength;
                $('#health').val(health);

                if (health < 1) {
                    $('#result').append("Монстр нанес "+enemy_strength+" урона<br>Вы проиграли");
                    clearInterval(interval);

                    setTimeout(function(){ 
                        alert('Вы проиграли');
                        location.reload();
                    }, 200);

                }
                else {
                    $('#result').append("Монстр нанес "+enemy_strength+" урона<br>Вы промахнулись<br><br>");
                }
                
                setTimeout(function(){
                    $('#enemy').removeClass('active');
                }, 500);
            }
            else {
                $('#you').addClass('active');
                enemy_health = enemy_health - strength;
                $('#enemy_health').val(enemy_health);

                if (enemy_health < 1) {
                    $('#result').append("Вы нанесли "+strength+" урона<br>Монстр проиграл!");
                    clearInterval(interval);

                    setTimeout(function(){
                        alert('Вы победили!');
                        location.reload();
                    }, 200);
                }
                else {
                    $('#result').append("Вы нанесли "+strength+" урона<br>Монстр промахнулся<br><br>");
                }
                setTimeout(function(){
                    $('#you').removeClass('active');
                }, 500);
            } 
            $('#result').scrollTop($('#result')[0].scrollHeight);

        },1000);
    } else {
        $('#result').html('Не все очки навыков использованы');
    }
});