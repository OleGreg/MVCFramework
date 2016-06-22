<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Set the page to the width of the device and set the zoom level -->
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

    <div class ="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-tower"></span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/signup">Sign Up</a></li>
                        <li class="active"><a href="/">Sign In<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="/userHome" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Lists<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/theList">My List</a></li>
                                <li><a href="/wineDex">Wine List</a></li>
                                <li><a href="/pokeDex">Pokedex</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Top Lists</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Top Items</a></li>
                            </ul>
                        </li>
                    </ul>
<!--                    <form class="navbar-form navbar-left" role="search">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" class="form-control" placeholder="Search">-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-default">Submit</button>-->
<!--                    </form>-->
                    <ul class="nav navbar-nav navbar-right">
                        <?php if($this->isLoggedIn()) : ?>
                            <li><a href="/signout">Sign Out</a></li>
                        <?php endif; ?>
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="#">Action</a></li>-->
<!--                                <li><a href="#">Another action</a></li>-->
<!--                                <li><a href="#">Something else here</a></li>-->
<!--                                <li role="separator" class="divider"></li>-->
<!--                                <li><a href="#">Separated link</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
