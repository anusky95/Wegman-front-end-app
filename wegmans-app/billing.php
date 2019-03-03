<!DOCTYPE html>
<html>
<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','wegmansapp');
define('DB_USER','root');
define('DB_PASSWORD','root123');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
?>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        WegFeast : Party Planner Application
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="img/wegman.jpg">



</head>

<body>
    
    <div id="top">
        
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                       

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/logoweg.jpg" alt="Obaju logo" height="100" weight="100" class="hidden-xs">
                    <img src="img/logoweg.jpg" alt="Obaju logo" height="100" weight="100" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
               
            </div>
            <!--/.navbar-header -->

           

                    <li class="dropdown yamm-fw">
                       
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

     

            
		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li></li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                   
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="wishlist">

                   

                    <div class="box">
                        <h3>Guest menu list</h3>
                        <div id="reciperes"></div>
<script type="text/javascript">
    $(function() {
        var params = {
            // Request parameters
        };
      
        $.ajax({
            url: "https://api.wegmans.io/product/products/search?criteria=EZ Meals" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Product-Subscription-Key","c8516dff215f4eb9973ec98f583d4d47");
            },
            type: "GET",
            // Request body
            data: "{body}",
        })
        .done(function(data) {
            for(var i=0;i<3;i++)
            {
            //console.log(data.results[i].sku+data.results[i].description);
                var node = document.createElement("p");
                //var imges = document.createElement("img");
                //imges.setAttribute("src",data.results[i].imageUrl);
                var textnode = document.createTextNode(data.results[i].description);
                var img = 
                node.appendChild(textnode);
                document.getElementById("reciperes").appendChild(node);
               // document.body.appendChild(imges);
                
            }
            
        })
        .fail(function() {
            alert("error");
        });
    });
</script>
                    </div>

                 </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
       
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***


    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>
