<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <title>Document</title>
</head>

<body>

    <!-- table -->
    <div class="container">
        <table>
            <tr>
                <td>
                    <h1>PHP with ajax</h1>
                </td>
            </tr>
            <tr>
                <td id="table-load">
                    <input type="button" value="Fetch-data" id="data-load">

                </td>
            </tr>
            <tr>
                <td id="table-data">
                  
                </td>
            </tr>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $("#data-load").on("click", function(e) {
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        });
    });
    </script>
</body>

</html>