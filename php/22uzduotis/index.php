<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>22uzduotis</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6603c9fd94.js"></script>
</head>
<body>
    <input placeholder="iveskite slaptazodi" id="slaptazodis">
    <input placeholder="pakartokite slaptazodi" id="pakartotas">
    <button onclick="keicia()">keisti</button>
    <div id="isvada">isvada</div>
    <div id="isphp">isphp</div>


 
    <script>
        function keicia(){
            var slaptazodis = $('#slaptazodis').val();
            var pakartotas =  $('#pakartotas').val();
            if(slaptazodis == pakartotas){
                console.log("okei");
                $('#isvada').html('slaptazodis keiciamas');
                $.post('change.php',  {
                    slaptazodis: $('#slaptazodis').val()
                    }).done(function(resp){
                        if(resp.result){
                            $('#isphp').html('Slaptažodis pakeistas');
                        } else {
                            $('#isphp').html(resp.error);

                        }

                    });
               
            } else {
                $('#isvada').html('Slaptažodžiai nesutampa - bandykite dar kartą');   
               
                console.log("not okei");
            }
            

        }
    </script>
</body>
</html>