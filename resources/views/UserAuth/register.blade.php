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
<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
    <div class="row">
        <div class="progress " id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">0%</span>
        </div>
    </div>
    <div class="row">
        <div class="row step">
            <div id="bstep-1" class="col-md-2 activestep" >
                <span class="fa fa-user"></span>
                <p>Primary Information</p>
            </div>
            <div  id="bstep-2" class="col-md-2 " >
                <span class="fa fa-globe"></span>
                <p>Location & background</p>
            </div>
            <div id="bstep-3" class="col-md-2" >
                <span class="fa fa-heart-o"></span>
                <p>Life Style & Appearance</p>
            </div>
            <div id="bstep-4" class="col-md-2" >
                <span class="fa fa-graduation-cap"></span>
                <p>Education & Career</p>
            </div>
            <div  id="bstep-5" class="col-md-2" >
                <span class="fa fa-user"></span>
                <p>Describe Yourself</p>
            </div>
            <div id="bstep-6" class="col-md-2" >
                <span class="fa fa-star"></span>
                <p>Complete</p>

            </div>
           
        </div>
    </div>
    <!-- Form Starts here -->

 
    <div class="row setup-content step activeStepInfo" id="step-1">

      <h2>Primary Details</h2>
            <div class="col-md-12">
                
                <div class="col-md-5 col-centered well">

                    <div class="row">
                     
                                 <label class="lb-left">Name</label>
                     
                        <div class="form-group col-md-6 col-sm-6 ">                                              
                            <input type="text" class="form-control reg " placeholder="Firstname" id="fname">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">                       
                            <input type="text" class="form-control reg" placeholder="Lastname" id="lname">
                        </div>
                          
                                 <label class="lb-left">Date of Brith</label>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Day</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Month</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">year</option>
                        </select>      
                        </div>

                                                         <label class="lb-left">Religion</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Mother Tongue</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Gender: &nbsp&nbsp&nbsp     <label class="radio-inline ">
                                                  <input type="radio" name="optradio">Male
                                                </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <label class="radio-inline">
                                                  <input type="radio" name="optradio">Female
                                                </label></label>

                                               
                          <button id="step1" type="button" onclick="javascript: resetActive(event, 20, 'step-2');" class="btn btn-info btn-lg">Next</button>
        
                  </div>
              </div>
        </div>
    </div>

    <!-- Step1 end -->
    <div class="row setup-content step hiddenStepInfo" id="step-2">
       <h2>Location & Background</h2>
            <div class="col-md-12">
                
                <div class="col-md-5 col-centered well">

                    <div class="row">

                    <label class="lb-left">Marital Status</label>

                        <div class="form-group col-md-12 ">
                            <select id="selectbasic" name="religion" class="form-control reg">
                                <option value="0">Select</option>
                                <option value="0">Un Married</option>
                                <option value="0">widow/widower</option>
                                <option value="0">Divorced</option>
                                 <option value="0">Spreated</option>
                            </select>   

                        </div>
                          
                         <label class="lb-left">Children</label>
                         <div class="form-group col-md-12 ">
                            <select id="selectbasic" name="religion" class="form-control reg">
                                <option value="0">Select</option>
                                <option value="0">Yes, Not live together</option>
                                <option value="0">No</option>
                                 <option value="0">Yes, live together</option>
                            </select>  
                        </div>

                    <label class="lb-left">No of Children</label>
                         <div class="form-group col-md-12 ">
                            <select id="selectbasic" name="religion" class="form-control reg">
                                <option value="0">Select</option>
                                <option value="0">1</option>
                                <option value="0">2</option>
                                <option value="0">3</option>
                                <option value="0">More then 3</option>
                                
                            </select>  
                        </div>
                        
                     <label class="lb-left">State Living In*</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                        <label class="lb-left">City Living In*</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                   <label class="lb-left">Community*</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>  
                        </div>


                         <label class="lb-left">Sub Community*</label>

                        <div class="form-group col-md-12 ">
                         <input type="text" class="form-control reg" placeholder="Optional" id="subcommunity">
                        </div>
                        <button id="step22" type="button" onclick="javascript: resetActive(event, 0, 'step-1');" class="btn btn-info btn-lg">Previous</button>
        
                          <button id="step2" type="button" onclick="javascript: resetActive(event, 40, 'step-3');" class="btn btn-info btn-lg">Next</button>
        
                  </div>
              </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-3">
              <h2>Life Style & Appearence</h2>
            <div class="col-md-12">
                
                <div class="col-md-5 col-centered well">

                    <div class="row">
                     
                                 <label class="lb-left">Name</label>
                     
                        <div class="form-group col-md-6 col-sm-6">                                              
                            <input type="text" class="form-control reg" placeholder="Firstname" id="fname">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">                       
                            <input type="text" class="form-control reg" placeholder="Lastname" id="lname">
                        </div>
                          
                                 <label class="lb-left">Date of Brith</label>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Day</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Month</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">year</option>
                        </select>      
                        </div>

                                                         <label class="lb-left">Religion</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Mother Tongue</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Living In</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>  
                        </div>
                        <button id="step3" type="button" onclick="javascript: resetActive(event, 20, 'step-2');" class="btn btn-info btn-lg">Previous</button>
        
                          <button id="step3" type="button" onclick="javascript: resetActive(event, 60, 'step-4');" class="btn btn-info btn-lg">Next</button>
        
                  </div>
              </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-4">
         <h2>Education & Career</h2>
            <div class="col-md-12">
                
                <div class="col-md-5 col-centered well">

                    <div class="row">
                     
                                 <label class="lb-left">Name</label>
                     
                        <div class="form-group col-md-6 col-sm-6">                                              
                            <input type="text" class="form-control reg" placeholder="Firstname" id="fname">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">                       
                            <input type="text" class="form-control reg" placeholder="Lastname" id="lname">
                        </div>
                          
                                 <label class="lb-left">Date of Brith</label>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Day</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Month</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">year</option>
                        </select>      
                        </div>

                                                         <label class="lb-left">Religion</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Mother Tongue</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Living In</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>  
                        </div>
                        <button id="step4" type="button" onclick="javascript: resetActive(event, 40, 'step-3');" class="btn btn-info btn-lg">Previous</button>
        
                          <button id="step4" type="button" onclick="javascript: resetActive(event, 80, 'step-5');" class="btn btn-info btn-lg">Next</button>
        
                  </div>
              </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-5">
          <h2>Describe Yourself</h2>
            <div class="col-md-12">
                
                <div class="col-md-5 col-centered well">

                    <div class="row">
                     
                                 <label class="lb-left">Name</label>
                     
                        <div class="form-group col-md-6 col-sm-6">                                              
                            <input type="text" class="form-control reg" placeholder="Firstname" id="fname">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">                       
                            <input type="text" class="form-control reg" placeholder="Lastname" id="lname">
                        </div>
                          
                                 <label class="lb-left">Date of Brith</label>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Day</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Month</option>
                        </select>      
                        </div>

                        <div class="form-group col-md-4 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">year</option>
                        </select>      
                        </div>

                                                         <label class="lb-left">Religion</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Mother Tongue</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>                 


                        </div>
                                                         <label class="lb-left">Living In</label>

                        <div class="form-group col-md-12 ">
                        <select id="selectbasic" name="religion" class="form-control reg">
                            <<option value="0">Select</option>
                        </select>  
                        </div>
                        <button id="step5" type="button" onclick="javascript: resetActive(event, 60, 'step-4');" class="btn btn-info btn-lg">Previous</button>
        
                          <button id="step5" type="button" onclick="javascript: resetActive(event, 100, 'step-6');" class="btn btn-info btn-lg">Next</button>
        
                  </div>
              </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-6">
         <h2>Life Style & Appearence</h2>
            <div class="col-md-12">
              
                        <button id="step3" type="button" onclick="javascript: resetActive(event, 80, 'step-5');" class="btn btn-info btn-lg">Previous</button>
                               
                           <button id="step3" type="button" onclick="window.location.href='view_profile.html'" class="btn btn-Success btn-lg">Done !</button>  
                       
                          
                  </div>
              </div>
        </div>
    </div>
</div>

<!-- Form End -->
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
        var bid = "#b" + step
        $(bid).addClass("activestep");

    }
</script>


</body>

</html>