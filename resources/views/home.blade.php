<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>K-State Polytechnic Admissions Portal</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
                
        footer.page-footer {
            background-color: #512888;
            margin-top: 2rem;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("https://blogs.polytechnic.k-state.edu/wp-content/uploads/2011/12/fleet-small.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*Contact section*/
        
        #contact .fa {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1C2331;
        }
    </style>

</head>

<body>

    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <img class="img-fluid wow fadeInDown" src="https://static1.squarespace.com/static/53e23a7ee4b0ecf4171232d4/t/578fa8cd6b8f5b737f56d53c/1469032685890/KSP.png?format=500w">
                </li>
                <li>
                    <p class="p-responsive wow fadeInDown" style="font-size: 3.25rem;">Experience Matters.</p>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container">

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">K-State Polytechnic Admissions</h2>
        </div>

        <!--Section: About-->
        <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s">

            <p>Thank you for requesting more information about K-State Polytechnic. Tell us a little about yourself and your interests; and we'll send you more details right away!</p>

        </section>
        <!--Section: About-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Information Sheet</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">
            
            <div class="card">
                <div class="card-block">

                    <!--Header-->
                    <div class="form-header purple-gradient">
                        <h3><i class="fa fa-user"></i> Request Form:</h3>
                    </div>

                    <!--Body-->
					<form method="POST" action="{{ route('home.store') }}">
					<div class="row">
					
						<div class="col-lg-6">
					
							<div class="md-form">
								<i class="fa fa-user prefix purple-text"></i>
								<input type="text" id="first_name" name="first_name" class="form-control">
								<label for="first_name">First Name</label>
							</div>
					
						</div>
						
						<div class="col-lg-6">
					
							<div class="md-form">
								<input type="text" id="last_name" name="last_name" class="form-control">
								<label for="last_name">Last Name</label>
							</div>

						</div>
						
					</div>
                    
                    <br>
                    <br>
							
                    <div class="md-form">
                        <i class="fa fa-address-book prefix purple-text"></i>
                        <input type="text" id="street_address" name="street_address" class="form-control">
                        <label for="street_address">Street Address</label>
                    </div>
                    
                    <br>
                    <br>

                    <div class="md-form">
                        <i class="fa  prefix purple-text"></i>
                        <input type="text" id="street_address2" name="street_address2" class="form-control">
                        <label for="street_address2">Street Address 2</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="row">
					
						<div class="col-lg-6">
					
							<div class="md-form">
								<i class="fa prefix purple-text"></i>
								<input type="text" id="city" name="city" class="form-control">
								<label for="city">City</label>
							</div>
					
						</div>
						
						<div class="col-lg-6">
					
							<div class="md-form">
								<input type="text" id="state" name="last_name" class="form-control">
								<label for="state">State</label>
							</div>

						</div>
                        
					</div>
                    
                    <br>
                    <br>
                    
                    <div class="row">
					
						<div class="col-lg-6">
					
							<div class="md-form">
								<i class="fa prefix purple-text"></i>
								<input type="text" id="zipcode" name="zipcode" class="form-control">
								<label for="zipcode">Zip Code/ Postal</label>
							</div>
					
						</div>
						
						<div class="col-lg-6">
					
							<div class="md-form">
								<input type="text" id="country" name="country" class="form-control">
								<label for="country">Country</label>
							</div>

						</div>
                        
					</div>
                    
                    <br>
                    <br>
                    
                    <div class="row">
					
						<div class="col-lg-4">
					
							<div class="md-form">
								<i class="fa prefix purple-text"></i>
								<label for="gender">Gender</label>
							</div>
					
						</div>
						
						<div class="col-lg-4">
					
							<div class="md-form">
                                <i class="fa fa-male prefix purple-text"></i>
								<input type="radio" id="gender" name="gender" class="form-control">
							</div>

						</div>
                        
                        <div class="col-lg-4">
					
							<div class="md-form">
                                <i class="fa fa-female prefix purple-text"></i>
								<input type="radio" id="gender" name="gender" class="form-control">
							</div>

						</div>
                        
					</div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-birthday-cake prefix purple-text"></i>
                        <input type="text" id="birthday" name="birthday" class="form-control">
                        <label for="birthday">Birthdate</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-mobile prefix purple-text"></i>
                        <input type="text" id="phone" name="phone" class="form-control">
                        <label for="phone">Phone</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-envelope prefix purple-text"></i>
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email">Email</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="row">
					
						<div class="col-lg-2">
					
							<div class="md-form">
								<i class="fa fa-graduation-cap prefix purple-text"></i>
								<label for="secondary_school">Secondary School</label>
							</div>
					
						</div>
						
						<div class="col-lg-3">
					
							<div class="md-form">
								<input type="radio" id="secondary_school" name="secondary_school" class="form-control">
                                <label for="secondary_school">High School</label>
							</div>

						</div>
                        
                        <div class="col-lg-3">
					
							<div class="md-form">
								<input type="radio" id="secondary_school" name="secondary_school" class="form-control">
                                <label for="secondary_school">Home School</label>
							</div>

						</div>
                        
                        <div class="col-lg-3">
					
							<div class="md-form">
								<input type="radio" id="secondary_school" name="secondary_school" class="form-control">
                                <label for="secondary_school">GED</label>
							</div>

						</div>
                        
					</div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-birthday-cake prefix purple-text"></i>
                        <input type="text" id="hs_grad_date" name="hs_grad_date" class="form-control">
                        <label for="hs_grad_date">If Still In High School, When Is Your Graduation Date?</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-calendar-o prefix purple-text"></i>
                        <input type="text" id="entry_date" name="entry_date" class="form-control">
                        <label for="entry_date">Expected Entry Date</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="row">
					
						<div class="col-lg-4">
					
							<div class="md-form">
								<i class="fa fa-bookmark prefix purple-text"></i>
								<label for="college_credit">College Credit</label>
							</div>
					
						</div>
						
						<div class="col-lg-4">
					
							<div class="md-form">
                                <fieldset class="form-group">
                                    <input type="radio" id="college_credit" name="college_credit" class="form-control">
                                    <label for="college_credit">Yes</label>
                                </fieldset>
							</div>

						</div>
                        
                        <div class="col-lg-4">
					
							<div class="md-form">
                                <fieldset class="form-group">
                                    <input type="radio" id="college_credit" name="college_credit" class="form-control">
                                    <label for="college_credit">No</label>
                                </fieldset>
							</div>

						</div>
                        
					</div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-check prefix purple-text"></i>
                        <input type="text" id="college_name" name="college_name" class="form-control">
                        <label for="college_name">If Yes, Name College(s) Attended</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    
                    <div class="md-form">  
                        <i class="fa fa-check prefix purple-text"></i>
                        <label>Primay Major of Interest</label>
                        <select class="browser-default">
                            <option value="">  </option>
                            <option value="Airport Management"> Airport Management </option>
                            <option value="Applied Business"> Applied Business </option>
                            <option value="Aviation Maintenance Management"> Aviation Maintenance Management </option>
                            <option value="Computer Systems Technology"> Computer Systems Technology </option>
                            <option value="Digital Media Technology"> Digital Media Technology </option>
                            <option value="Electronic &amp; Computer Engineering Technology"> Electronic &amp; Computer Engineering Technology </option>
                            <option value="Family Studies &amp; Human Services"> Family Studies &amp; Human Services </option>
                            <option value="Mechanical Engineering Technology"> Mechanical Engineering Technology </option>
                            <option value="Professional Pilot"> Professional Pilot </option>
                            <option value="Social Work"> Social Work </option>
                            <option value="Technology Management"> Technology Management </option>
                            <option value="Unmanned Aircraft Systems Design &amp; Integration"> Unmanned Aircraft Systems Design &amp;  Integration </option>
                            <option value="Unmanned Aircraft Systems Flight &amp; Operations"> Unmanned Aircraft Systems Flight &amp; Operations </option>
                            <option value="Web Development Technology"> Web Development Technology </option>
                            <option value="-- General Education Courses - Non-Degree Seeking"> -- General Education Courses - Non-Degree Seeking </option>
                            <option value="-- Undecided"> -- Undecided </option>
                        </select>
                        
                    </div>   
            
                    <br>
                    <br>                                      
                    
                    <div class="md-form">  
                        <i class="fa fa-check prefix purple-text"></i>
                        <label>Secondary Major of Interest</label>
                        <select class="browser-default">
                            <option value="">  </option>
                            <option value="Airport Management"> Airport Management </option>
                            <option value="Applied Business"> Applied Business </option>
                            <option value="Aviation Maintenance Management"> Aviation Maintenance Management </option>
                            <option value="Computer Systems Technology"> Computer Systems Technology </option>
                            <option value="Digital Media Technology"> Digital Media Technology </option>
                            <option value="Electronic &amp; Computer Engineering Technology"> Electronic &amp; Computer Engineering Technology </option>
                            <option value="Family Studies &amp; Human Services"> Family Studies &amp; Human Services </option>
                            <option value="Mechanical Engineering Technology"> Mechanical Engineering Technology </option>
                            <option value="Professional Pilot"> Professional Pilot </option>
                            <option value="Social Work"> Social Work </option>
                            <option value="Technology Management"> Technology Management </option>
                            <option value="Unmanned Aircraft Systems Design &amp; Integration"> Unmanned Aircraft Systems Design &amp;  Integration </option>
                            <option value="Unmanned Aircraft Systems Flight &amp; Operations"> Unmanned Aircraft Systems Flight &amp; Operations </option>
                            <option value="Web Development Technology"> Web Development Technology </option>
                            <option value="-- General Education Courses - Non-Degree Seeking"> -- General Education Courses - Non-Degree Seeking </option>
                            <option value="-- Undecided"> -- Undecided </option>
                        </select>
                        
                    </div>   
            
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-search prefix purple-text"></i>
                        <textarea type="text" id="other_interest" class="md-textarea"></textarea>
                        <label for="other_interest">Additonal Information About K-State Polytechnic</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">  
                        <i class="fa fa-comment prefix purple-text"></i>
                        <label>How Did You Hear About Us</label>
                        <select class="browser-default">
                            <option value="">  </option>
                            <option value="Google/Internet Search"> Google/Internet Search </option>
                            <option value="Postcard and/or Brochure"> Postcard and/or Brochure </option>
                            <option value="Admissions Representative"> Admissions Representative </option>
                            <option value="High School Counselor or Teacher"> High School Counselor or Teacher </option>
                            <option value="Friend or Family Member"> Friend or Family Member </option>
                            <option value="K-State Manhattan"> K-State Manhattan </option>
                            <option value="Advertisement (Website, TV, Facebook, etc.)"> Advertisement (Website, TV, Facebook, etc.) </option>
                            <option value="Other"> Other </option>   
                        </select>
                        
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">
                        <i class="fa fa-commenting-o prefix purple-text"></i>
                        <input type="text" id="other_hear" name="other_hear" class="form-control">
                        <label for="other_hear">If, Other, Please Specify</label>
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="md-form">  
                        <i class="fa fa-terminal prefix purple-text"></i>
                        <label>How Do You Preferred To Be Contacted?</label>
                        <select class="browser-default">
                             <option value="">  </option>
                             <option value="E-mail"> E-mail </option>
                             <option value="Phone"> Phone </option>
                             <option value="Standard Mail"> Standard Mail </option>
                        </select>
                        
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="text-center">
                        <button class="btn btn-purple">Submit</button>
                    </div>
</form>
                </div>
                
            </div>
            
        </section>
        <!--/Section: Best features-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeIn">Contact us</h2>
        </div>

        <!--Section: Contact-->
        <section id="contact">
            <div class="row">
                <!--First column-->
                <div class="col-md-8">
                    <div id="map-container" class="z-depth-1 wow fadeIn" style="height: 300px"></div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center">
                        <li class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-map-marker purple-text"></i>
                            <p>2310 Centennial Rd</p>
                            <p>Salina, KS 67401</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-phone purple-text"></i>
                            <p>785-826-2640</p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-envelope purple-text"></i>
                            <p><a href="mailto:polytechnic@k-state.edu">polytechnic@k-state.edu</a></p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
        <!--Section: Contact-->

    </div>
    <!--/ Main container-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright <a href="http://polytechnic.k-state.edu"> K-State Polytechnic </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--Google Maps-->
    <script src="http://maps.google.com/maps/api/js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7dZKNPXOtlj_noo87yfZ8n4Q5pb1RdhQ&callback=initMap"
  type="text/javascript">
    </script>

    <script>

    
        function init_map() {

            var var_location = new google.maps.LatLng(38.800065, -97.636682);

            var var_mapoptions = {
                center: var_location,

                zoom: 14
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "K-State Polytechnic"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);
    </script>

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>
    
    <!-- Select Initialization -->
  <!-- <script>
        $(document).ready(function() {
            $('.mdb-select').material_select();
          });
    </script>
 -->

</body>

</html>
