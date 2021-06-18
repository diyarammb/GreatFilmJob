<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/theme.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">

<style type="text/css">
	pre{
		overflow-x: hidden;
	}
</style>

</head>

<body>

     <div class="container-fluid">
      <div class="row bg-info">
        <div class="col-md-12">
          <div class="row head">
            <div class="col-md-6">
              <h3 class=" text-white">FiverrScript <span class="text-white display-6">Admin</span></h3>
            </div> 
            <div class="col-md-6">
              <h6 class="text-right text-white "> Logged in as delllatitude |12-50-tuesday | <a href="#" class="text-danger"> logout</a></h6>

            </div>
          </div>
        </div>
      </div>
    </div>

<!--     header end -->

<!--   <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div> -->
<!-- nav start -->
  <div class="container-fluid">
      <div class="row ">
        <div class="col-md-12">
          <div class="row navc">
               <ul class="nav ">
                <li class="nav-item"> <a href="#" class=" active nav-link">Home</a> 
                </li>
               <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Setting
             <div class="dropdown-content">
             <a href="{{url('general_setting')}}">General setting</a>
              <a href="{{url('job_level_setting')}}">meta setting</a>
              <a href="{{url('meta_setting')}}">static pages</a>
              <a href="{{url('Payment_setting')}}">payment setting</a>
              <a href="{{url('Paypal_setting')}}">payment packs</a>
              <a href="{{url('setting')}}">Job level setting</a>
              <a href="{{url('setting')}}">Paypal setting</a>
              <a href="{{url('setting')}}">cashfree settings</a>
              <a href="{{url('setting')}}">stripe settings</a>
              <a href="{{url('setting')}}">payza settings</a>
              <a href="{{url('setting')}}">referal settings</a>
            </div>
          </div>
          </a>
           </li>
               
               <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Categories
             <div class="dropdown-content">
              <a href="#">Manage categories</a>
              <a href="#">add categories</a>
 
            </div>
            </div>
            <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
               Gigs
             <div class="dropdown-content">
              <a href="#">Manage gigs</a>
              <a href="#">Validate gigs</a>
              <a href="#">Delete gigs</a>
 
            </div>
            </div> 

              <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Orders
              <div class="dropdown-content">
              <a href="#">Manage Orders</a> 
             </div>
            </div>
<div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Payments
             <div class="dropdown-content">
              <a href="#">Manage payments</a>
              <a href="#">Featur gigs payments</a>
              <a href="#">clear payments</a>
 
            </div>
            </div>
<div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Categories
             <div class="dropdown-content">
              <a href="#">Validation Widthdray</a>
             
            </div>
            </div>   
             <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Request
             <div class="dropdown-content">
              <a href="#">Manage Request</a>
              <a href="#">Validate Request</a>
 
            </div>
            </div> 

             <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
               Members
             <div class="dropdown-content">
              <a href="#">Manage Members</a>
            
            </div>
            </div>
 <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Reports
             <div class="dropdown-content">
              <a href="#">Reports message</a>
 
            </div>
            </div> 
<div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Categories
             <div class="dropdown-content">
              <a href="#">Manage Conservations</a>
              
            </div>
            </div>
                <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
               Feedback
             <div class="dropdown-content">
              <a href="#">Manage Feedback</a>
              <a href="#">add fake feedback</a>
 
            </div>
            </div>
            <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Adds            
               <div class="dropdown-content">
              <a href="#">Standard adds</a>
              <a href="#">Create Adds</a>
 
            </div>
            </div>
            <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Bans
             <div class="dropdown-content">
              <a href="#">Ip baning</a>
              <a href="#">add IP</a>
              <a href="#">Banned Ip</a>
              <a href="#">Banned Word</a>
 
            </div>
            </div>
            <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Files
             <div class="dropdown-content">
              <a href="#">Conservations Files</a>
              <a href="#">add files</a>
              <a href="#">orders files</a>
 
            </div>
            </div>
            <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Referrals           
               <div class="dropdown-content">
              <a href="#">Manage referrals</a>
              <a href="#">validate referrals</a>
            </div>
            </div>
             <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Launch           
               <div class="dropdown-content">
              <a href="#"> referrals invities</a>
               </div>
              </div>
               <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Admins          
               <div class="dropdown-content">
              <a href="#">Manage administration</a>
              <a href="#">creat adminstration</a>
 
            </div>
            </div>
             <div class="dropdown">
              <li class="nav-item dropbtn"> <a class="nav-link text-white" href="#">
                Local bank           
               <div class="dropdown-content">
              <a href="#">local bank setting</a>
              <a href="#">validate local payments</a>
 
            </div>
            </div>
              </ul>
           </div>
        </div>
      </div>
    </div>
              
     <div class="container bg-white">
     	<h1 class="bg-warning">Settings</h1>
       <div class="row">
       	<!-- sidebar start -->
        <div class="col-md-2 bg-info sidebar">
          <ul class="list-group  " >
            <li class="list-group-item">
            <a href="{{url('grneral_setting')}}">General setting
              </a>
          </li>
            <li class="list-group-item">
             <a href="{{url('meta_setting')}}">Meta setting</a>
          </li>
            <li class="list-group-item">
              <a href="{{url('Payment_setting')}}">payment setting</a></li>
            <li class="list-group-item"><a href="{{url('Paypal_setting')}}">payment packs</a></li>
            <li class="list-group-item">
              <a href="{{url('job_level_setting')}}">Job level setting</a>
            </li>
            <li class="list-group-item">  <a href="{{url('Paypal_setting')}}">Paypal setting</a>
            </li>
            <li class="list-group-item">
              <a href="{{url('Cashfree_setting')}}">cashfree settings</a></li>
            <li class="list-group-item">
              <a href="{{url('stripe_setting')}}">stripe settings</a>
            </li>
            <li class="list-group-item">  <a href="{{url('Payza_setting')}}">payza settings</a>
            </li>
            <li class="list-group-item">
               <a href="{{url('Refrral_setting')}}">referal settings</a>
          </li>
             
          </ul>
        </div>
        <!-- end Sidebar -->

        <div class="col-md-10 bg-info bd">
        	<h6 class=" ">
        		Settings Genral settings
        	</h6>
        	<hr class="hr">

 <div class="row">
 	<div class="col-md-2">
 		<p>Website Name</p>
	<p>Website Slogan</p> 
	<p>Website Email </p>
	<p>Website From E-Mail Name </p>
	<p>Gigs Per Page</p>
	<p>Gig Per Page New  </p>
	<p>Approve Gigs </p>
	<p>Approve Request </p>
	<p>Enable Facebook Connect</p>
	<p> Facebook Application ID </p>
	<p>Facebook Secret </p>
	<p>Twitter Username </p>
	<p>Enable Url Shortener </p>
	<p>Verified Only </p>
	<p>Top Rated Seller Percentage </p>
	<p>Top Rated Seller Ratings </p>
	<p>Verified Messages Only </p>
	<p>Default Member Country </p>
	<p>Proxy Blocking (BETA) </p>
	<p>Show Homepage Featured Categories? </p>
	<p>E-Mail Notification On Gig Validation </p>
	<p>Notification E-mail </p>
	<p>Enable Image Captcha? </p>
	<p>ReCAPTCHA Public Key </p>
	<p>ReCAPTCHA Private Key </p>
 	</div>
 	 	<div class="col-md-4">
	 <input type="text" name="" value="GreatFilmJobs.com" class="mt-1 w-100"> 
 	 <input type="text" name="" value="GreatFilmJobs.com: Buy. Sell. Have fun!" class="mt-1 w-100"> 
 	 <input type="text" name="" value="design@madhurebba.com" class="mt-1 w-100"> 
 	 <input type="text" name="" value="Great Film Jobs" class="mt-2 w-100"> 
 	 <input type="text" name="" value="16" class="mt-4 w-100"> 
 	 <input type="text" name="" value="28" class="mt-1 w-100"> <br/>
 	 <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	 <select class="select mt-2 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	 <select class="select mt-3 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>

 	 <input type="text" name="" value="1750802685183844" class="mt-4 w-100"> <br/>
 	 <input type="text" name="" value="6cd284acfa345e9f4ee91d56a3a1b73d" class="mt-4 w-100"> <br/>
 	 <input type="text" name="" value="Scriptolution" class="mt-2 w-100"> <br/>
 	 	 <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	  	 <select class="select mt-3 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	 <input type="text" name="" value="60" class="mt-4 w-100"> <br/>
 	 <input type="text" name="" value="10" class="mt-3 w-100"> <br/>
 	 	 <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	 <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	  	  	 <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	  	  	 <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	  <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	  
 	 <input type="text" name="" class="mt-3 w-100">
 	  <select class="select mt-4 w-100">
 	 	<option>yes</option>
 	 	<option>no</option>
 	 </select>
 	 <input type="text" name="" class="mt-3 w-100">
 	 <input type="text" name="" class="mt-3 w-100">
 	</div>
 	 	<div class="col-md-6">
 		<p>[your Website name]</p>
 		<p>[Your Website slogan]</p>
 		<p>[WHERE E-MAILS ARE SENT FROM]</p>
 		<p>[NAME WHERE E-MAILS ARE SENT FROM]</p>
 		<p>[MAXIMUM GIGS TO LIST PER PAGE]</p>	
<p>[MAXIMUM GIGS TO LIST PER PAGE ON NEW DESIGN SECTIONS]</p>	
<p>[REQUIRE NEWLY POSTED GIGS TO BE APPROVED BEFORE BEING MADE PUBLIC]</p>	
<p>[REQUIRE NEWLY POSTED REQUESTS TO BE APPROVED BEFORE BEING MADE PUBLIC]</p>	
<p>[ALLOW USERS TO SIGN UP AND LOGIN USING THEIR FACEBOOK ACCOUNT]</p>	
<p>[FACEBOOK APPLICATION ID YOU GOT WHEN YOU CREATED YOUR FACEBOOK APPLICATION]</p>	
<p>[FACEBOOK APPLICATION SECRET YOU GOT WHEN YOU CREATED YOUR FACEBOOK APPLICATION]</p>	
<p>[YOUR TWITTER ACCOUNT USERNAME]</p>	
<p>[SHORTENS TWITTER SHARE URL'S]</p>	
<p>[ONLY ALLOW MEMBERS WITH VERIFIED EMAILS TO CREATE GIGS?]</p>	
<p>[THE OVERALL RATING PERCENTAGE A SELLER NEEDS TO HAVE IN ORDER TO BECOME TOP RATED]</p>	
<p>[THE NUMBER OF USER RATINGS A SELLER NEEDS TO HAVE IN ORDER TO BECOME TOP RATED]</p>	
<p>[ONLY ALLOW USERS WITH VERIFIED E-MAILS TO SEND CONVERSATION MESSAGES]</p>	
<p>[THE DEFAULT COUNTRY MEMBERS HAVE SET IN THEIR PROFILE FOR NEW SIGNUPS]</p>	
<p>[BLOCK USERS CONNECTING FROM A PROXY SERVER?]</p>	
<p>[IF ENABLED THE "OUR FEATURED GIG CATEGORIES" SECTION ON THE HOMEPAGE WILL SHOW UP]</p>	
<p>[NOTIFY YOU VIA E-MAIL WHEN A NEW GIG IS CREATED THAT NEEDS APPROVAL]</p>	
<p>[IF YOU SET THE ABOVE TO YES THIS IS WHERE THE E-MAIL WILL BE SENT TO]</p>	
<p>[FORCE USERS TO VERIFY AN IMAGE WHEN REGISTERING?]</p>	
<p>[YOU HAVE TO SIGN UP ON http://www.google.com/recaptcha TO GET A KEY]</p>	
<p>[YOU HAVE TO SIGN UP ON http://www.google.com/recaptcha TO GET A KEY]</p>

	    
 	</div>
 </div> 

<div class="row">
	<pre>If you set "Enable Image Captcha" to "Yes - PlayThru (areyouahuman.com)" then you need to follow these steps to get it working:
- Sign up here: http://portal.areyouahuman.com/signup/basic
- For "Site Platform" Choose "PHP"
- You will be given your "Publisher Key" and "Scoring Key", make a note of them.
- Go to your dashboard: http://portal.areyouahuman.com/dashboard
- Click on "Edit Site Options"
- Set "Game Style" to "Embedded"
- Click on "Update"

- Open ayah_config.php from your server
- Replace "your_publisher_key_goes_here" with your "Publisher Key" you noted above.
- Replace "your_scoring_key_goes_here" with your "Scoring Key" you noted above.
- Save the file and then upload it to your server overwriting the existing file.</pre>
</div>
 
 <div class="row">
 	<div class="col-md-2">
 		<p class="mt-2">Solve Media C-key</p>
 		<p class="mt-2">Solve Media V-key</p>
 		<p class="mt-2">Solve Media H-key</p>
 		<p class="mt-2">Current placement</p>
 		
 	</div>
 	<div class="col-md-4">
 		<input type="text" name="" value="jzRpiw11DA6MsTHWEMwfAZUdKRa61Pa9" class="w-100 mt-2">
 		<input type="text" name="" value="McHmHSLWzKDzGtbC-y8fcUHwHzWNDeYh" class="w-100 mt-2">
 		<input type="text" name="" class="w-100 mt-2">
 		<select class="w-100 mt-2">
 			<option>
 				before the price 
 			</option>
 			<option>
 				after the price
 			</option>
 		</select>
 	</div>
 	<div class="col-md-6">
  <p>[YOU HAVE TO SIGN UP ON https://portal.solvemedia.com/portal/public/signup ]	</p>
<p>[YOU HAVE TO SIGN UP ON https://portal.solvemedia.com/portal/public/signup ]	</p>
<p>[YOU HAVE TO SIGN UP ON https://portal.solvemedia.com/portal/public/signup ]	 </p>
<p>[CHOOSE WHETHER THE CURRENCY APPEARS BEFORE OR AFTER THE PRICE ON THE MAIN WEBSITE]</p>
 	</div>
 </div>

<div class="row">
	<ol>
		HOW THE DIFFERENT LAUNCH MODES WORKS
<li> Launched: Anyone can access the full main website.</li>
<li> Pre-Launch: Main website display a launching soon page for all users (except for a logged in administrator) where they can subscribe to be notified/invited.</li>
<li> Private Beta: Main website displays a login page where invited users can signup then login to access the full main website, subscribe box displays for other users who want to be invited.</li>
</ol>
</div>

 <div class="row">
 	<div class="col-md-2">

<p>SEE ABOVE FOR DESCRIPTION]	</p>
<p>Enable Location System</p>
<p>Google Maps API Key</p>
<p>Enable Processing Fee</p>
<p>Processing Fee</p>
<p>Enable Minimum Withdrawal Limit</p>
<p>Minimum Withdrawal Limit</p>
  		
 	</div>
 	<div class="col-md-4">
 		<select class="w-100 mt-2">
 			<option>
			Launched 
 			</option>
 			<option>
        Pre Launch
 			</option>
 			<option>
 				Private Beta
 			</option>
 		</select>
 		<select class="w-100 mt-2">
 			<option>
 				Yes-On 
 			</option>
 			<option>
       No-off
 			</option>
 		</select>
 		<input type="text" name="" value="AIzaSyDFCanjNysDz9MiZTLxm4rguA-KiOV3TBY" class="w-100 mt-4">
 		<select class="w-100 mt-2">
 			<option>
 				Yes 
 			</option>
 			<option>
 				No
 			</option>
 		</select>
 		<input type="text" name="" value="1.2" class="w-100 mt-4">
<select class="w-100 mt-4">
 			<option>
 				Yes 
 			</option>
 			<option>
 				No
 			</option>
 		</select>

 		<input type="text" name="" value="10" class="w-100 mt-4">
 	</div>
 	<div class="col-md-6">
 
<p>[TURN THE ENTIRE LOCATION SYSTEM ON/OFF]	</p>
<p>[YOU MUST HAVE A GOOGLE MAPS API KEY FOR THE AUTOCOMPLETE LOCATION TO WORK]	</p>
<p>[CHARGE A SET FEE ON ALL GIG ORDERED, SO BUYER PAY THE GIG PRICE + THE PROCESSING FEE FOR EACH GIG ITEM PURCHASED]	</p>
<p>[THE PROCESSING FEE YOU WISH TO CHARGE, MUST BE IN THIS FORMAT: 1.00 - SO ENTERING 1.00 WOULD CHARGE A $1.00 PROCESSING FEE]	</p>
<p>[ONLY ALLOW USERS TO REQUEST A WITHDRAWAL IF THEIR AVAILABLE BALANCE IS OVER A SET LIMIT]</p>	
<p>[THE MINIMUM AVAILABLE BALANCE A USER MUST HAVE TO BE ABLE TO REQUEST A WITHDRAWAL, ENTERING 5 WOULD BE A $5.00 LIMIT]	</p>


  	</div>
 </div>

<!-- connnte endn -->
  </div>
   </div>
    </div>
 
</body>

</html>
















