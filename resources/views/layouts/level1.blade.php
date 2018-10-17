<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Level 1</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>

</head>
<body>
    
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Management Air</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="level1.blade.php">Level 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level2.blade.php">Level 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level3.blade.php">Level 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level4.blade.php">Level 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="level5.blade.php">Level 5</a>
                </li>
                {{-- ------------------------------------------------------------------ --}}
                {{-- ------------------------------------------------------------------ --}}
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

                {{-- ------------------------------------------------------------------ --}}
                {{-- ------------------------------------------------------------------ --}}            
            </ul>
            {{-- ------------------------------------------------------------------ --}}
            {{-- ------------------------------------------------------------------ --}}
            <form class="form-inline my-2 my-lg-0">
                <button type="logout" class="btn btn-primary">Logout</button>
            </form>
            {{-- ------------------------------------------------------------------ --}}
            {{-- ------------------------------------------------------------------ --}}
        </div>
    </nav>
    
    <img src="https://www.maerakluke.com/wp-content/uploads/2013/12/45688989.jpg">

</body>
</html>