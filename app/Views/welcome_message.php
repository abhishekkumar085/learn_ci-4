 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        ul li {
            font-family: 'Roboto Slab', serif;
            cursor: pointer;
        }

        ul li a:hover {
            color: wheat !important;
        }

        .img img {
            width: 50%;
            border-radius: 10px;
            box-shadow: 2px 2px 5px 3px gray;
        }

        .text h1 {
            font-size: 5rem;
            font-family: 'Roboto Slab', serif;
            font-weight: bolder;

        }
    </style>
</head>


<body>

    <div class="container-fluid">
        <ul class="d-flex gap-5 list-unstyled text-center align-items-center justify-content-end me-5"
            style="height:60px;">
            <li> <a href="/" class="text-decoration-none text-black">Home</a> </li>
            <li> <a href="/login" class="text-decoration-none text-black">Login</a> </li>
            <li> <a href="/register" class="text-decoration-none text-black">Signup</a> </li>
        </ul>

        <div class="row">
            <div class="col-6">
                <div class="img text-center mt-4">
                    <img
                        src="https://images.unsplash.com/photo-1551739440-5dd934d3a94a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGNvbXB1dGVyfGVufDB8fDB8fHww"
                        alt="">
                </div>
            </div>
            <div class="col-6 text d-flex align-items-center ">
                <h1 class="text-center">Welcome to Learning CodeIgniter-4</h1>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>
