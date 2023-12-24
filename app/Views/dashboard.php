<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        h1{
            font-family: 'Roboto Slab', serif;
        }
    /* Custom CSS for hover effect */
    .custom-hover-bg:hover {
     
      
            background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color: wheat;

        
    }
  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center text-white">Welcome to Our Dashboard</h1>
    <!-- Check if the user is logged in -->
<?php if(session()->get('user_id')) : ?>
    <!-- If logged in, display the username and logout button -->
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto text-center mt-4">

                <p class="text-white mx-3">Welcome, <?php echo session()->get('username'); ?>!</p>
                <a class="border border-secondary-subtle mx-3 px-2 py-2 text-decoration-none rounded-1 custom-hover-bg " href="/logout">Logout</a>
            </div>

        </div>
    </div>
    <!-- Your dashboard content goes here -->
<?php else : ?>
    <!-- If not logged in, redirect to the login page -->
    <?php return redirect()->to('/login'); ?>
<?php endif; ?>
<!-- bootstrapp Added -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>