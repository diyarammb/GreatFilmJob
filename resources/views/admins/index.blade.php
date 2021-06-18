<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{url('assets/css/theme.css')}}" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{url('assets/css/index.css')}}">
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
                <li class="nav-item"> <a href="{{url('index')}}" class=" active nav-link">Home</a> 
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
              <a href="{{url('job_level_setting')}}">Job level setting</a>
              <a href="{{url('Paypal_setting')}}">Paypal setting</a>
              <a href="{{url('Cashfree_setting')}}">cashfree settings</a>
              <a href="{{url('stripe_setting')}}">stripe settings</a>
              <a href="{{url('Payza_setting')}}">payza settings</a>
              <a href="{{url('Refrral_setting')}}">referal settings</a>
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
   <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span class=" display-5 text-warning  home ">Home</span>
          <hr class="hr"/>
        </div>
      </div>
    </div>
  </div> 
    <div class="container ">
      <div class="row bg-info">
        <span class="">website statictis</span>
        <hr class="hr" />
      </div>
      <div class="row bg-info">
        <div class="col-md-4 mt-2">
          <div class="card  mb-3">
            <div class="card-header card-color">Gig Statistics</div>
            <div class="card-body"> 
              <table border="1" width="100%">
                <tr>
                  <td>Summery</td>
                  <td>Result</td>
                </tr>                
                <tr>
                  <td>Gigs Awaiting Validation</td>
                  <td>45</td> 
                </tr>
                  <tr>
                  <td>Gigs</td>
                  <td>45</td> 
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4  mt-2">
          <div class="card  mb-3">
            <div class="card-header card-color">Category Statistics</div>
            <div class="card-body">
                            <table border="1" width="100%">
                <tr>
                  <td>Summery</td>
                  <td>Total Categories</td>
                </tr>                
                <tr>
                  <td>Categories</td>
                  <td>450</td> 
                </tr>
 
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4  mt-2">
          <div class="card  mb-3">
            <div class="card-header card-color">Last 10 Members</div>
            <div class="card-body">
              <table border="1" width="100%">
                <tr>
                  <td>Username</td>
                  <td>Email</td>
                </tr>                
                <tr>
                  <td>Daya</td>
                  <td>dayaramamania@gmail</td> 
                </tr>
              </table> 
           </div>
          </div>
        </div>
      </div>
    
     <div class="row bg-info">
        <div class="col-md-4 mt-2">
          <div class="card  mb-3">
            <div class="card-header card-color">Order Statistics</div>
            <div class="card-body"> 
              <table border="1" width="100%">
                <tr>
                  <td>Summery</td>
                  <td>Total Order</td>
                </tr>                
                <tr>
                  <td>Gigs Order</td>
                  <td>09</td> 
                </tr>
 
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card  mb-3">
            <div class="card-header card-color">Advertisement Statistics</div>
            <div class="card-body">
              <table border="1" width="100%">
                <tr>
                  <td>Summery</td>
                  <td>Total </td>
                </tr>                
                <tr>
                  <td>Categories</td>
                  <td>450</td> 
                </tr>
 
              </table>
            </div>
          </div>
       </div>
    </div>

<div class="row bg-info">
        <div class="col-md-4 mt-2">
          <div class="card  mb-3">
            <div class="card-header card-color">Want Statistics</div>
            <div class="card-body"> 
              <table border="1" width="100%">
                <tr>
                  <td>Summery</td>
                  <td>Total Order</td>
                </tr>                
                <tr>
                  <td>Member awaiting validations</td>
                  <td>0t</td> 
                </tr> 
                               <tr>
                  <td>Total result</td>
                  <td>0</td> 
                </tr>
 
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card  mb-3">
            <div class="card-header card-color">Member Statistics</div>
            <div class="card-body">
              <table border="1" width="100%">
                <tr>
                  <td>Summery</td>
                  <td>Total </td>
                </tr>                
                <tr>
                  <td>Categories</td>
                  <td>450</td> 
                </tr>
 
              </table>
            </div>
          </div>
       </div>
    </div>

</div> <!-- card cconatiner ends -->
<div class="container mt-4">
  <div class="row bg-info">
 
   <div class=" mt-4 col-md-6">
   <a href="" class="text-left text-danger"> Powered by Fiverr Script v8.3.4</a>
   </div>
   <div class="col-md-6 mt-4">
   <p class="text-right">Copyright © 2016 FiverrScript.com
    <br/>
   All Rights Reserved.</p>
 </div>
    
  </div>
</div>
</body>
</body>

</html>