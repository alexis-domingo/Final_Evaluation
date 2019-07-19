
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>

    <!--STYLE-->
    <style>
        input{
            padding: 10px;
            margin: 10px auto;
        }
    </style>

</head>
<body>
    <div id="myDiv">...</div>
    <form method="POST">

        <div>
            <label for="brand">Brand: </label>
            <input type="text" name="brand" id="brand">
        </div>
    
        <div>
            <label for="model">Model: </label>
            <input type="text" name="model" id="model">
        </div>

        <div>
            <label for="year">Year: </label>
            <input type="text" name="year" id="year">
        </div>

        <div>
            <label for="color">Color: </label>
            <input type="text" name="color" id="color">
        </div>

            <input type="submit" name="submit" value="Add">
    </form>

    <!--SCRIPTS -->
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script>

    $(function(){

        $('input[type="submit"]').click(function(e){

        e.preventDefault();
        $.ajax({

            url: 'ajax_test.php',
            type: 'post',
            data: $('form').serialize(),
            dataType: 'html',

                success: function(result) {
                    $('#myDiv').html(result);
                },

                error: function(err) {
                }

            });
        });
    });
</script>
</body>
</html>

