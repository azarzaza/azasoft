<head>
<title>{{ LAConfigs::getByKey('sitename') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{{ LAConfigs::getByKey('site_description') }}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('/mat/css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('/mat/js/jquery.min.js')}}"></script>
<script src="{{ asset('/mat/js/bootstrap.min.js') }}"></script>
<!-- Custom Theme files -->
<link href="{{asset('/mat/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{asset('/mat/css/main.css') }}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

<!-- --font-Awesome--- -->
<link href="{{asset('/mat/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('/mat/css/font-awesome.min.css')}}" rel="stylesheet"> 
<!-- --font-Awesome--- -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

<style>
            .banner1{
	background:url("{{asset('/mat/images/wedd.jpg') }}")no-repeat center top;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	min-height:650px;
						}
    .row {
  margin-left: -15px;
  margin-right: -15px;
  background:#ffff;
		}
        .centered {
    text-align: center;
        }

			

</style>

</head> 