<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>BetaBook</title>
        <meta charset="utf-8">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles.css">

        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    </head>


    <body>
        <!-- LANDING PAGE FOR THE PROBLEM -->
        <div class="background">
            <div class="problemTitle">
                <h1>Boulder Problem - V0</h1>
                <a href="#beta"><i class="fa fa-angle-down"></i></a>
            </div>
        </div>

        <!-- STATS PAGE FOR THE PROBLEM-->

        <div id="beta" class="info container-fluid">

            <div class="row navBar">
                <h2 class="col-2">BetaBook</h2>
            </div>

            <div class="row">
                <div class="col-7 problemInfo">
                    <p>Info</p>
                </div>
                <div class="col">
                    <div class="detailImg">
                        <img src="images/test2.jpg" alt="Problem Image">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-7">
                    <h2>Sends of Boulder Problem</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Climber</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>James Machpee</td>
                                <td>December 12th - 1998</td>
                            </tr>
                            <?php //Data from Database. ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
