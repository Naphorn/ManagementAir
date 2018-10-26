<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Level 5</title>

    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>

    <style>#navbar_fix_background {background-color: #000;}</style>

</head>
<body>

    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar_fix_background">
        <a class="navbar-brand" href="home">Management Air</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="level1">Level 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level2">Level 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level3">Level 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level4">Level 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level5"><font color="blue">Level 5</font></a>
                </li>
                
                
                <!-- Button trigger modal -->
                <div class="nav-link" data-toggle="modal" data-target="#exampleModal">Contact</div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Provider</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body1">
                                
                                <div class="container">
                                    <div class="row">
                                        <div class="col align-self-center">ณพร โชคโภคาสมบัติ</div>                                        
                                    </div> 
                                    <div class="row">                                        
                                        <div class="col align-self-center">ธนภัทร เรณุมาศ</div>                                        
                                    </div> 
                                    <div class="row">                                      
                                        <div class="col align-self-center">วรปรัชญ์ นิเกศรี</div>
                                    </div>                                                                              
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>        
            </ul>
            
                     
            <ul class="navbar-nav ml-right">
                <!-- Authentication Links -->
                
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                
            </ul>
            
               
        </div>
    </nav>
    
    <img src="https://github.com/Naphorn/ManagementAir/blob/master/resources/views/images/level5-1.png?raw=true" class="rounded mx-auto d-block">

</body>
</html>