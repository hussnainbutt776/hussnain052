<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/software.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
@yield('content')
@if(Request::is('name','/','roll_num'))
    <div>
        <nav class="navbar navbar-expand-md navbar-light pt-3 bg-light ">
            <a class="navbar-brand text-danger font-italic" href="#"><h1><strong>Hussnain Shakeel&nbsp &nbsp FA17-BSE-052</strong></h1></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                </ul>

                <ul class="navbar-nav form-inline my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/"><strong>Home</strong></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/name"><strong>name</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/roll_num"><strong>roll no</strong></a>
                    </li>
                    <!--  dropdown start -->
                    <li class="nav-item dropdown  ">
                        <a class="nav-link text-danger dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <strong>Donor Name</strong><!-- Donor Name -->
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item text-danger" href="user/index.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

                            <a class="dropdown-item text-danger" href="/update_donar_recordp"><i class="fa fa-edit" aria-hidden="true"></i>Update Profile</a>


                            <a class="dropdown-item text-danger" href="/index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Logout</a>

                        </div>
                    </li>

                    <!--  dropdown end -->

                </ul>
            </div>
        </nav>
{{--        <h1>Hussnain Shakeel.</h1>--}}
    </div>
@endif

@if(Request::is('roll_num'))

    <h1>hussnain</h1>

        @endif
    </div>
</body>
</html>