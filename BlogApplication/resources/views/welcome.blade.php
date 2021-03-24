<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blog Application</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Blog Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">

         <div class="mr-auto"></div>
        <!-- <a href="/login" class="mr-3">Login</a>
        <a href="/register ">Register</a>  -->
        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </div>
</nav>

<body>

<div class="container my-5">
    <!-- <form>

        <div class="form-group">
            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Filter By Category</label>

                </div>
                <div class="col-3">
                    <select class="form-control" id="exampleFormControlSelect1" onchange="category_selected(this)" name="category">
                        <option selected disabled></option>
                        <option value="All">All</option>
                        
                        <option value=""></option>
                        
                    </select>
                </div>
            </div>

        </div>


    </form> -->
    
    <!-- <div class="card mb-3" style="border-radius: 0">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img class="img-fluid w-100" height="auto" src="" alt="blog-image">

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">fdsfsfsd</h4>
                    <span class="text-muted">dd</span>
                    <p class="card-text mt-2">fdsfdfs</p>
                    <a href="">Read more</a>
                    <span class="text-muted float-right"> 2/3/1999</span>
                </div>
            </div>
        </div>
    </div> -->

        <h1>Blogging Application</h1>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <script>
    function category_selected(category){
        var href = '/?category=' +category.value;
        location.href = href;
    }
</script> -->
</body>
</html>