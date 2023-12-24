<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register|Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link
        href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Inter:wght@100;200;300;400;500;600;700;800&family=Lato:wght@300;400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:wght@700&family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@200;300;400;500;600;700&family=Piazzolla:opsz,wght@8..30,200;8..30,300;8..30,400&family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400&family=Poppins:wght@200;300;400;500;600&family=Roboto+Slab:wght@100;200;300;400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
        <style>
             body,html {
            background: -webkit-linear-gradient(to top, #ff9472, #f2709c);
            background: linear-gradient(to top, #ff9472, #f2709c);
            margin: 0px;
            padding: 0px;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        h2{
            font-family: 'Roboto Slab', serif;
        }
        .btx{
            background: #7474BF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        </style>
</head>

<body>
    <!-- app/Views/register_form.php -->
    <h2 class="text-center  text-white">User Registration</h2>
    <?php echo form_open('/register'); ?>

    <div class=" mx-auto" style="width: 400px;">


        <div class="form-group mt-2">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>



        <div class="form-group mt-2">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>

        </div>
        <div class="form-group mt-2">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3 btx">Register</button>

    </div>


    <?php echo form_close(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>