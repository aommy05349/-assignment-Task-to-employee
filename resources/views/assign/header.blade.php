<!DOCTYPE html>
<html lang="en">
<head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet"  href="http://mikeyaworski.com/myicon.ico" >
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
     
</head>
<body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">
        <div class="page-header bg-dark"  >
            <nav class="navbar page-header">
                <label style="color:aliceblue;font-size:25px;"><b>TRANING WORKSHOP</b></label>
            </nav>

        </div>
        <div class="main-container">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        {{--  <li class="nav-title">NAVIGATION</li>                --}}
                        <li class="nav-item active">
                            <a href="{{ url("/emp/index/") }} " class="btn btn-secondary btn-sml">
                                Regis Employee
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ url("/task/index/") }}" class="btn btn-secondary btn-sml ">
                                <i class=""></i>Regis Task
                            </a>  
                        </li>
                        <li class="nav-item active">
                            <a href="{{ url("/assign/index/") }}" class="btn btn-secondary btn-sml">
                                <i class=""></i>Assign Task to Emp
                            </a>  
                        </li>
                        <li class="nav-item active">
                            <a href="{{ url("/sourch/emp/") }}" class="btn btn-secondary btn-sml ">
                                <i class=""></i>Search By Employee 
                            </a>  
                        </li>
                        <li class="nav-item active">
                            <a href="{{ url("/search/task/") }}" class="btn btn-secondary btn-sml ">
                                <i class=""></i>Search By Task 
                            </a>  
                        </li>
                </ul>
                </nav>
            </div >
            <div class="content" >
                    <div class="container-fluid">
                        <div class="row mt-4 justify-content-center">
                            <div class="col-8">
                                @yield("content")
        
                            </div>
                        </div>
                    </div>
        
                </div>
        </div>
    </div>    
</body>
</html>