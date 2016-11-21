<html>
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

<link href="{{asset('/mat/css/main.css') }}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

<!-- font-Awesome- -->
<link href="{{asset('/mat/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('/mat/css/font-awesome.min.css')}}" rel="stylesheet"> 

<body>
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">0%</span>
        </div>
    </div>
    <div class="row">
        <div class="row step">
            <div id="div1" class="col-md-2" onclick="javascript: resetActive(event, 0, 'step-1');">
                <span class="fa fa-user"></span>
                <p>Primary Information</p>
            </div>
            <div class="col-md-2 activestep" onclick="javascript: resetActive(event, 20, 'step-2');">
                <span class="fa fa-globe"></span>
                <p>Location & background</p>
            </div>
            <div class="col-md-2" onclick="javascript: resetActive(event, 40, 'step-3');">
                <span class="fa fa-heart-o"></span>
                <p>Life Style & Appearance</p>
            </div>
            <div class="col-md-2" onclick="javascript: resetActive(event, 60, 'step-4');">
                <span class="fa fa-graduation-cap"></span>
                <p>Education & Career</p>
            </div>
            <div class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-5');">
                <span class="fa fa-user"></span>
                <p>Describe Yourself</p>
            </div>
            <div id="last" class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-6');">
                <span class="fa fa-star"></span>
                <p>Complete</p>
            </div>
        </div>
    </div>
    <!-- Form Starts here -->




    <div class="row setup-content step hiddenStepInfo" id="step-1">
    
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>STEP 1</h1>
               <div class="form-group">
                  <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
                  <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
                  <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
                  <input type="text" id="edit-name" name="lname" value="" size="60" maxlength="60" class="form-text required">
		       </div>     
               <div class="clear-fix"></div>
            <div class="form-group">
                  <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
                  <input type="text" id="edit-name" name="lname" value="" size="60" maxlength="60" class="form-text required">
		       </div>             
               
            </div>
        </div>
    </div>
    <div class="row setup-content step activeStepInfo" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>STEP 2</h1>
                <h3 class="underline">Instructions</h3>
                Fill out the application. 
                Make sure to leave no empty fields. 
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>STEP 3</h1>
                <h3 class="underline">Instructions</h3>
                Check to ensure that all data entered is valid. 
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>STEP 4</h1>
                <h3 class="underline">Instructions</h3>
                Pay the application fee. 
                This can be done either by entering your card details, or by using Paypal.
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>STEP 5</h1>
                <h3 class="underline">Instructions</h3>
                Upload the application. 
                This may require a confirmation email.
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-6">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>STEP 6</h1>
                <h3 class="underline">Instructions</h3>
                Send us feedback on the overall process. 
                This step is not obligatory.
            </div>
        </div>
    </div>
</div>
!-- Form End -->
<style>

</style>

<script type="text/javascript">
    function resetActive(event, percent, step) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }

        hideSteps();
        showCurrentStepInfo(step);
    }

    function hideSteps() {
        $("div").each(function () {
            if ($(this).hasClass("activeStepInfo")) {
                $(this).removeClass("activeStepInfo");
                $(this).addClass("hiddenStepInfo");
            }
        });
    }

    function showCurrentStepInfo(step) {        
        var id = "#" + step;
        $(id).addClass("activeStepInfo");
    }
</script>


</body>

</html>