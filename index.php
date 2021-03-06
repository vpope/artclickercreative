<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <?php include "includes/navigation.php"; ?>

            <div class="container">
                <div class="row">

                    <div class="col-xs-12">
                        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-captions" data-slide-to="0"></li>
                                <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                                <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img data-src="holder.js/900x500/auto/#777:#777" alt="900x500" src="http://placehold.it/1180x320" data-holder-rendered="true">
                                    <div class="carousel-caption">
                                        <h3>First slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img data-src="holder.js/900x500/auto/#666:#666" alt="900x500" src="http://placehold.it/1180x320" data-holder-rendered="true">
                                    <div class="carousel-caption">
                                        <h3>Second slide label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5555" alt="900x500" src="http://placehold.it/1180x320" data-holder-rendered="true">
                                    <div class="carousel-caption">
                                        <h3>Third slide label</h3>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-4 image-item">
                        <img src="images/Illustration.jpg" alt="" />
                        <div class="image-hover">
                            <div class="image-hover-inner">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 inner-img image-item">
                                <img src="images/EditorialCartoon.jpg" alt="" />
                                <div class="image-hover">
                                    <div class="image-hover-inner">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 image-item">
                        <img src="images/GraphicDesign.jpg" alt="" />
                        <div class="image-hover">
                            <div class="image-hover-inner">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 image-item">
                        <img src="images/Storyboard.jpg" alt="" />
                        <div class="image-hover">
                            <div class="image-hover-inner">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 inner-img image-item">
                                <img src="images/MotionGraphic_B.jpg" alt="" />
                                <div class="image-hover">
                                    <div class="image-hover-inner">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/carousel.js"></script>
        <?php include "includes/js.php"; ?>
    </body>
</html>