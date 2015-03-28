<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/laravel-filemanager/tree/themes/default/style.min.css" />
    <link rel="stylesheet" href="/vendor/laravel-filemanager/tree-jquery/jqtree.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html, body, .lfm-override.container, .lfm-override .col-md-2, .lfm-override .col-md-10 {
            height: 100%;
        }

        .lfm-override *:before, .lfm-override *:after {
            display: none;
        }

        .lfm-override.container:before {
            content: '';
            display: block;
            float: left;
            height: 100%;
        }

        .lfm-override .fill {
            position: relative;
        }

        .lfm-override .fill:after {
            content: '';
            display: block;
            clear: left;
        }

        .lfm-override .wrapper {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .lfm-override .col-md-10 {

        }

        .lfm-override .col-md-2 {
            float: left;
            position: static;
        }

        .lfm-override .col-md-10 {
            position: static;
            overflow: auto;
        }
        
        #lfm-leftcol {
            border-right: 1px solid silver;
        }
    </style>
</head>
<body>
<div class="container lfm-override">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Laravel FileManager</h3>
            </div>
            <div class="panel-body">
                <div class="row fill">
                    <div class="wrapper">
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 left-nav" id="lfm-leftcol">
                            <div id="tree1">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 right-nav">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <a class="navbar-brand" href="#">LFM</a>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Edit <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Crop</a></li>
                                                    <li><a href="#">Scale</a></li>
                                                    <li><a href="#">Rotate</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/vendor/laravel-filemanager/tree-jquery/tree.jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        var data = [
            {
                label: 'node1',
                children: [
                    { label: 'child1' },
                    { label: 'child2' }
                ]
            },
            {
                label: 'node2',
                children: [
                    { label: 'child3' }
                ]
            }
        ];

        $('#tree1').tree({
            data: data
        });

    });
</script>
</body>
</html>