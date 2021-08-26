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
    <style>
        #error-message{
            background-color: red;
            color: white;
            width: 200px;
            position: absolute;
        }#success-message{
            background-color: green;
            color: white;
            width: 200px;
            position: absolute;
        }
    </style>
</head>

<body>

    <!-- table -->
    <div class="container">
    
        <div id="success-message"></div>

        <table>
          

                <td id="table-form">
                    <form action="" id="add-form">
                        First-Name : <input type="text" id="fname">
                        Last-Name : <input type="text" id="lname">
                        <input type="submit" value="Save" id="save-button">
                        <br>
                        <div id="error-message"></div>
                        <br>
                    </form>
                </td>
                <br><br>
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
        function loadTable() {
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data)
                }
            });
        }
         loadTable();

        $('#save-button').on('click', function(e) {
            e.preventDefault();

            var fname = $('#fname').val();
            var lname = $('#lname').val();
            if (fname == "" || lname == "") {
                $('#error-message').html("All field Requeid").slideDown();
                $('#success-message').slideUp();
            } else {



                $.ajax({
                    url: "insert-form.php",
                    type: 'POST',
                    data: {
                        f_name: fname,
                        l_name: lname
                    },
                    success: function(data) {
                        if (data == 1) {
                            loadTable();
                            $("#add-form").trigger('reset');
                            $('#success-message').html("Data insert successfully").slideDown();
                            $('#error-message').slideDown();
                        } else {
                            $('#error-message').html("Can't insert data").slideDown();
                            $('#success-message').slideUp();
                        }
                    }
                })
            }

        })
    })
    </script>
</body>

</html>