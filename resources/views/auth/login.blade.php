<!DOCTYPE html>
<!-- saved from url=(0063)https://checkout.sandbox.netsuite.com/c.3778702/tempo/index.ssp -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Tempo | Tempo Portal Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo URL::asset('/assets/css/bootstrap.min.css');  ?>">
    <link rel="stylesheet" href="<?php echo URL::asset('/assets/css/responsive.bootstrap.min.css');  ?>">
    <link rel="stylesheet" href="<?php echo URL::asset('/assets/css/jquery-ui.css');  ?>">
    <link rel="stylesheet" href="<?php echo URL::asset('/assets/css/jquery.dataTables.min.css');  ?>">
    <link rel="stylesheet" href="<?php echo URL::asset('/assets/css/bootstrap-multiselect.css');  ?>">
    <style>
    /*main css*/
    html,
    body{
        font-size: 16px;
        /*font-family: Arial, sans-serif !important;*/
        font-family: Roboto Condensed;
        color: #3C3C3C;
    }
    hr{
        border-top-color: #ADADAD;
    }
    button {
	    margin-left: 10px;
	}
	thead{
	   background-color: #E6E6E6;
	}
	label {
	    display: block;
	    color: #9A9A9A;
	    font-size: 0.8em;
	}
    .dashboard-tile{
        text-align: center;
        cursor: pointer;
        height: 110px;
        margin-bottom: 15px;
        color: white;
    }
    .dashboard-header{
        background-color: #333333;
        padding: 5px;
        font-size: 1.1em;
    }
    #tile1{
        background-color: #B74B1F;
    }
    #tile2{
        background-color: #DA9642;
    }
    #tile3{
        background-color: #009A70;
    }
    #tile4{
        background-color: #25A6AF;
    }
    #splash{
        background: url("<?php echo URL::asset('assets/images/header1.jpg');  ?>") no-repeat;
        background-size: cover;
        background-position: 50% 30%;
        height: 220px;
        margin-bottom: 20px;
    }

    /*navbar*/
    .navbar-nav{
	    padding-top: 10px;
	}
	nav>li>a{
	    padding-top: 20px;
	    padding-bottom: 5px;
	}
    #lst-welcome{
        margin-top: 14px;
        margin-left: 15px;
        font-size: 1.1em;
    }

    /*datatable*/
    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        color: #333 !important;
        border: 1px solid #979797;
        background: none;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
        color: #333 !important;
        border: 1px solid #979797;
        background: none;
        background-color: #E4E4E4;
    }
    table.dataTable thead th,
    table.dataTable thead td,
    .dataTables_wrapper.no-footer .dataTables_scrollBody,
    table.dataTable.no-footer{
        border-bottom: 1px solid #E4E4E4;
    }
    .dataTables_filter input{
        display: inline;
        height: 34px;
        padding: 6px 12px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        margin-bottom: 10px;
    }
    .paginate_button{
	    font-size: 0.8em;
	}

    /*parsley css*/
    .parsley-errors-list{
        color: #B70000;
    }
    </style>

</head>
<body class="">

<nav class="navbar">
    <div class="container" style="max-width: 1000px;">
        <div class="navbar-header">
            <div class="brand"><a class="navbar-brand" href="https://http//www.tempo.org/"><img src="<?php echo URL::asset('assets/images/logo1.png')?>" style="height: 70px; margin-top: -10px;"></a></div>
        </div>
    </div>
</nav>

<div id="splash">
</div>

<div class="container">

    <div class="container" style="max-width: 500px;">
	    <form method="post" action="<?php echo URL::to('/auth/login'); ?>"  >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
	            <div class="col-md-12">
	                <div class="alert alert-danger" id="error-message" style="">Invalid email/password.</div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-md-12">
	                <div class="form-group">
	                    <label for="fld-email">Email</label>
	                    <input id="fld-email" name="email" type="email" class="form-control" required="" data-parsley-trigger="change" data-parsley-id="4">
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-12">
	                <div class="form-group">
	                    <label for="fld-password">Password</label>
	                    <input id="fld-password" name="password" type="password" class="form-control" required="" data-parsley-trigger="change" data-parsley-id="6">
	                </div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-md-12">
	                <input type="submit" class="btn btn-default pull-right" value="Login" >
	            </div>
	        </div>

	    </form>
    </div>

</div>

<div id="loading" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content modal-backdrop" style="text-align: center;">
            <img src="./login_files/loader-larger.gif" width="100px" height="100px">
        </div>
    </div>
</div>

<div class="container footer">
    <hr>
    <div class="row">
        <div class="col-xs-6">
            <span>© Tempo (Aust) Pty Ltd. All Rights Reserved</span>
        </div>
        <div class="col-xs-6">
            <span class="pull-right"><a href="http://www.tempo.org/supply-terms-and-conditions.html">Supply Terms and Conditions</a></span>
            <span class="pull-right"><a href="http://www.tempo.org/privacy-policy.html">Privacy Policy</a>&nbsp;|&nbsp;</span>
        </div>
    </div>
</div>

<script>

</script>

<script language="javascript" type="text/javascript">
var i=new Image();
i.src='/app/site/hit/tracker.nl?c=3778702&n=1&type=page&siteroot=Live+Hosting+Files&url=%2Fc.3778702%2Ftempo%2Findex.ssp&referer='+escape(document.referrer);
i.onload=function(){nsVoid();};
function nsVoid(){return;};
</script>

<script src="<?php echo URL::asset('/assets/script/jquery.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/bootstrap.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/bootstrap.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/jquery.cookie.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/bootstrap.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/parsley.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/jquery.validate.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/numeral.min.js');  ?>"></script>
<script src="<?php echo URL::asset('/assets/script/bootstrap-multiselect.js');  ?>" type="text/javascript"></script>
<script src="<?php echo URL::asset('/assets/script/script.js');  ?>" type="text/javascript"></script>
</body></html>