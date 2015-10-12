<!doctype html>
        <!-- This App produced for unit SIT313 Mobile Computing Deakin University all 
                coding done by Heidi Biggin Student #96593353-->
        
        <!-- All code (except connection to database code) used within this App is taken 
        		from W3Schools Website http://www.w3schools.com/jquerymobile/default.asp-->
		
        <!-- All database connection code used within this App is taken 
        		from SIT203 Web Programming 2014 Practical Week 7 written by Dr Shang Gao-->
<html>
    <head>
    	<!-- Here this ensures the App resizes properly depending on device 
			- Comment Heidi Biggin -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Here the themes created by Imavi Alwis in Themeroller are linked - Comment Heidi Biggin -->
        <link rel="stylesheet" href="themes/ass2Theme.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />

        <!-- Here this line links to jQuery Mobile stylesheets - comment Heidi Biggin -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <!-- Here this line links to jQuery library - comment Heidi Biggin-->
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Here this line links to jQuery Mobile library - comment Heidi Biggin-->
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <!-- Here is the function that links to Google Maps to make the map appear on the Restaurant page - Comment Heidi Biggin -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <!-- Here is the CSS code to insert our custom background and then add a blur effect to it - Comment Heidi Biggin -->
		<style type="text/css">
        body {
            background: url(Images/blur_image_2.jpg) !important;
            background-attachment: fixed;
            background-size: cover;
        }
        .ui-page, .ui-content, .ui-btn {
            background: transparent;
        }
        </style>
        <title>Lists App</title>
    </head>

	<body>
        <!--PAGE ONE--> 
        <!--Logo Page-->
        <!--Page Identification and specification of Theme used - comment Heidi Biggin-->	
        <div data-role="page" id="pageone" data-theme="d">
          
            <div data-role="header">
               <h1>LISTS</h1>
            </div>
            <div data-role="main" class="ui-content">
                <!--This line will appear in the header - comment Heidi Biggin-->
                <h1>Homepage</h1>
                <!-- This creates a grid of 3 columns - Comment Heidi Biggin --> 
                <!-- I have created a grid to ensure the logo always sits in the middle column - Comment Heidi Biggin --> 
                <div class="ui-grid-b ui-responsive"> 
                    <!-- This is the content for the 1st column - Comment Heidi Biggin -->
                    <div class="ui-block-a ui-responsive"> </div>
                    <!-- This is the content for the 2nd column - Comment Heidi Biggin -->
                    <div class="ui-block-b ui-responsive"> 
                          <!-- Here our App Logo is inserted - Comment Heidi Biggin --> 
                          <img src="Images/logo.fw.png" style="width:250px;height:115; padding:30px"></div>
                    <!-- This is the content for the 3rd column - Comment Heidi Biggin -->
                    <div class="ui-block-c ui-responsive"> </div>
                </div>
                <div> 
                	<!--Three main button for homepage below - comment Heidi Biggin-->
                	<!--Corner all makes button corners rounded - comment Heidi Biggin-->
                	<!--Shadow applies a drop shadow to the button - comment Heidi Biggin-->
                    <!-- Image of Category Lists added to button - Comment Heidi Biggin-->
                    <!-- Width and Height specify the size of the image - Comment Heidi Biggin-->
                    <!-- Float specifies the alignment of the image on the button - Comment Heidi Biggin-->
                    <a href="#pagefour" class="ui-btn ui-corner-all ui-shadow"><img src="Images/category.png" style="width:70px;height:70px; float:left">
                    <h3>My Lists</h3></a>
                    
                    <!-- Image of small letter i added to button - Comment Heidi Biggin-->
                    <a href="#pagetwentythree" class="ui-btn ui-corner-all ui-shadow"><img src="Images/info.png" style="width:70px;height:70px; float:left">
                    <h3>Developer Info</h3></a>
                    <!-- Image of copyright letter c in a circle added to button - Comment Heidi Biggin-->
                    <a href="#pagetwentyfour" class="ui-btn ui-corner-all ui-shadow"><img src="Images/copyright.png" style="width:70px;height:70px; float:left">
                    <h3>Credits</h3></a>
                     
                    <!-- There was 2 additional buttons intended to be here - Comment Heidi Biggin-->
                    <!-- I was unable to get the login and register pages to work so I have commented out the buttons that link to these pages - Comment Heidi Biggin-->
                            <!--<a href="#pagetwo" class="ui-btn">Login</a>--> 
                            <!--<a href="#pagethree" class="ui-btn">Sign Up</a>--> 
               </div>
            </div>
            <div data-role="footer">
                <h1>SIT313 Mobile Computing</h1><!--This text will appear in the footer - Comment Heidi Biggin-->
            </div>
          
       	</div>

        <!--PAGE TWO--> 
        <!--Login Page--> 
        	<!--This Page is not in use-->
                <!--The layout of this screen is done but there are no functions attached - comment Heidi Biggin-->
                <!--It involved using sessions and reading the database and carrying the info through the whole app - comment Heidi Biggin-->
                <!--This was far beyond my knowledge so I was unable to complete this page- comment Heidi Biggin-->
        <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwo" data-theme="d">
          <div data-role="main" class="ui-content">
            <div data-role="header">
                      <h1>LISTS</h1>
            </div>
            <div data-role="main" class="ui-content">
                      <h1>Login</h1>
                <div> 
                	<!--PHP Script to read database and query-->
					<?php
                           // build a SELECT query from table in database
                           $query = "SELECT * FROM Users";
                          
                           /* Set oracle user login and password info- Heidi Biggin */
                          $dbuser = "hbiggin";  /* My deakin login - Heidi Biggin*/
                          $dbpass = "password123";  /* My deakin password - Heidi Biggin*/
                          $dbname = "SSID"; 
                          $db = OCILogon($dbuser, $dbpass, $dbname); 
                  
                          /* Message if database does not connect - Heidi Biggin */
						  if (!$db)  {
                              echo "An error occurred connecting to the database"; 
                              exit; 
                           }
                          /* check the sql statement for errors and if errors report them - Heidi Biggin */
                           $stmt = OCIParse($db, $query); 
                            
                            /* Message if query is not successfully created - Heidi Biggin */
                            if(!$stmt)  {
                              echo "An error occurred in parsing the sql string.\n"; 
                              exit; 
                            }
                            OCIExecute($stmt); 
                    ?>
                    <!-- end PHP script -->
                    <!-- Creation of form to enter already established Login and password - Heidi Biggin -->
                    <form name="form1" method="post" action="">
                        <div class="FormElement">
                            <label for="login1">Login</label>
                            <!-- Here the user would enter their login name - Heidi Biggin -->
                            <input type="login1" name="login1" id="login1">
                            <label for="password1">Password</label>
                            <!-- Here the user would enter their password - Heidi Biggin -->
                            <input type="password1" name="password1" id="password1">
                      	</div>
                            <!-- Here is a button that user would press to login - Heidi Biggin -->
                            <!-- If it worked it should check the database that the user is valid - Heidi Biggin -->
                            <a href="#pagetwo" class="ui-btn">Login</a>
                    </form>
              	</div>
            </div>
            <div data-role="footer">
              <h1>SIT313 Mobile Computing</h1>
            </div>
          </div>
        </div>

        <!--PAGE THREE--> 
        <!--Sign Up Page--> 
        	<!--This Page not in use-->
            	<!--The layout of this screen is done but there are no functions attached - comment Heidi Biggin-->
                <!--It involved using sessions and reading the database and carrying the info through the whole app - comment Heidi Biggin-->
                <!--This was far beyond my knowledge so I was unable to complete this page- comment Heidi Biggin-->
        <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagethree" data-theme="d">
          <div data-role="main" class="ui-content">
            <div data-role="header">
                      <h1>LISTS</h1>
            </div>
            <div data-role="main" class="ui-content">
               <h1>Sign Up</h1>
               <div>
                <!--If this were working the info entered below should post to the database - comment Heidi Biggin-->
                <form method="post" action="">
                  <div>
                    <label for="login2">Login</label>
                    <!-- Here the user would enter a new login ID - Heidi Biggin -->
                    <input type="login" name="login" id="login">
                    <label for="password">Password</label>
                    <!-- Here the user would enter a new password - Heidi Biggin -->
                    <input type="password" name="password" id="password">
                    <label for="username">Username</label>
                    <!-- Here the user would enter a new username - Heidi Biggin -->
                    <input type="username" name="username" id="username">
                    <!-- Here the user would enter their email - Heidi Biggin -->
                    <input type="email" name="email" id="email">
                    <label for="email">Email</label>
                    <!-- Here the user would enter their phone number - Heidi Biggin -->
                    <input type="phone" name="phone" id="phone">
                    <label for="phone">Phone</label>
                  </div>
                  	<!-- Here is a button that user would press to sign up - Heidi Biggin -->
                    <!-- If it worked it should add the user details to the database and then log them in - Heidi Biggin -->
                    <a href="#pagefour" class="ui-btn">Sign Up</a>
                </form>
              </div>
            </div>
            <div data-role="footer">
               <h1>SIT313 Mobile Computing</h1>
            </div>
          </div>
        </div>

        <!--PAGE FOUR--> 
        <!--Main Homepage-->
        <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagefour" data-theme="d">
           <div data-role="main" class="ui-content">
             <div data-role="header">
                      <h1>LISTS</h1>
                      <!--Here is a Home button linked to return to front page - Comment Heidi Biggin-->
                      <!--Corner all makes button corners rounded - comment Heidi Biggin-->
                      <!--Shadow applies a drop shadow to the button - comment Heidi Biggin-->
 
                      <a href="#pageone" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Home</a>
             </div>
             <div data-role="main" class="ui-content">
                <h1>Homepage</h1>
                <!--Corner all makes button corners rounded - comment Heidi Biggin-->
                <!--Shadow applies a drop shadow to the button - comment Heidi Biggin-->
                <!-- Image of Category Lists added to button - Comment Heidi Biggin-->
                <!-- Width and Height specify the size of the image - Comment Heidi Biggin-->
                <!-- Float specifies the alignment of the image on the button - Comment Heidi Biggin-->
                
                <!--These buttons below DO NOT read from the database but they are the names of all our tables in the database - comment Heidi Biggin-->
                <!--Ideally we would like to add a feature to add categories but I couldn't find how to do this - comment Heidi Biggin-->
                     
                <div> <a href="#pagefive" class="ui-btn ui-corner-all ui-shadow"><img src="Images/movies.png" style="width:70px;height:70px; float:left">
                  <h3>Movies</h3>
                  </a> <a href="#pageeight" class="ui-btn ui-corner-all ui-shadow"><img src="Images/songs.png" style="width:70px;height:70px; float:left">
                  <h3>Songs</h3>
                  </a> <a href="#pagenine" class="ui-btn ui-corner-all ui-shadow"><img src="Images/friends.png" style="width:70px;height:70px; float:left">
                  <h3>Friends</h3>
                  </a> <a href="#pageten" class="ui-btn ui-corner-all ui-shadow"><img src="Images/famous.png" style="width:70px;height:70px; float:left">
                  <h3>Famous People</h3>
                  </a> <a href="#pageeleven" class="ui-btn ui-corner-all ui-shadow"><img src="Images/apps.png" style="width:70px;height:70px; float:left">
                  <h3>Apps</h3>
                  </a> <a href="#pagetwelve" class="ui-btn ui-corner-all ui-shadow"><img src="Images/websites.png" style="width:70px;height:70px; float:left">
                  <h3>Websites</h3>
                  </a> <a href="#pagethirteen" class="ui-btn ui-corner-all ui-shadow"><img src="Images/shops.png" style="width:70px;height:70px; float:left">
                  <h3>Shops</h3>
                  </a> <a href="#pagefourteen" class="ui-btn ui-corner-all ui-shadow"><img src="Images/restaurants.png" style="width:70px;height:70px; float:left">
                  <h3>Restaurants</h3>
                  </a>
                </div>
            </div>
            <div data-role="footer">
                      <h1>SIT313 Mobile Computing</h1>
            </div>
        </div>
      </div>
      <!--PAGE FIVE--> 
      <!--Movie List-->
      		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      <!--Page Identification - comment Heidi Biggin-->
      <div data-role="page" id="pagefive" data-theme="d">
         <div data-role="main" class="ui-content">
           <div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
              <h1>LISTS</h1>
              <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
              <div data-role="navbar" data-iconpos="top">
               <ul>
                  <!--Return to the front page of the app - comment Heidi Biggin-->
                  <li><a href="#pageone" data-icon="home">Home</a></li>
                  <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                  <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                  <!--Return to the current list you are in - comment Heidi Biggin-->
                  <li><a href="#pagefive" data-icon="grid">Current List</a></li>
                </ul>
              </div>
           </div>
          <div data-role="main" class="ui-content">
             <h1>Movies</h1>
             <div> 
              <!--PHP Script to read database and query - Heidi Biggin-->
              <?php
			  
				 //build a SELECT query from table in database - Heidi Biggin
				 $query = "SELECT * FROM Movies";
				
				/* Set oracle user login and password info - Heidi Biggin */
				$dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
				$dbpass = "password123";  /* my deakin password - Heidi Biggin */
				$dbname = "SSID"; 
				$db = OCILogon($dbuser, $dbpass, $dbname); 
		
				/* Message if database does not connect - Heidi Biggin */
				if (!$db)  {
					echo "An error occurred connecting to the database"; 
					exit; 
				 }
				/* check the sql statement for errors and if errors report them - Heidi Biggin */
				$stmt = OCIParse($db, $query); 
				/* Message if query is not successfully created - Heidi Biggin */
				if(!$stmt)  {
				  echo "An error occurred in parsing the sql string.\n"; 
				  exit; 
				}
				/* Hold information gathered from database for use in code below - Heidi Biggin */
				OCIExecute($stmt); 
              
			  ?>
              <!-- end PHP script - Heidi Biggin -->
              <!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
              <ul data-role="listview" id="movie">
                
                
                    <!-- This php code fetches the database info above - Comment Heidi Biggin -->     
					<?php
                         // fetch each record - Comment Heidi Biggin
                         while(OCIFetch($stmt))  
                          {
                             // build list to display results - Comment Heidi Biggin
							 // This also includes a link to a details page - Comment Heidi Biggin
							 // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
							 // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
                             print( "<li><a href=#pagefifteen>" );
                             
                             // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             // This will do this for every record in the database in the table selected - Comment Heidi Biggin
							 $fg1 = OCIResult($stmt,"MOVIE_NAME");
                                print( $fg1);
                                                     
                             print( "</a></li>" );
                          } 
              
                          // Close the database connection - Comment Heidi Biggin
                          OCILogOff ($db); 
                    ?>
                    <!-- end PHP script - Comment Heidi Biggin-->
                        
             </ul>
            </div>
          </div>
          <div data-role="footer">
             <h1>SIT313 Mobile Computing</h1>
          </div>
         </div>
        </div>

        <!--PAGE SIX--> 
        <!--Individual Item Screen--> 
        		<!--This Page is NOT working - Heidi Biggin-->
                <!--This page was designed to display just the individual results of one entry in the database- comment Heidi Biggin-->
                <!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
                <!-- However it reads the details of all entries in the database table selected - Comment Heidi Biggin --> 
                <!-- I was unable to work out how to display ONLY ONE record that had been selected in the previous page - Comment Heidi Biggin --> 
        <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagesix" data-theme="d">
           <div data-role="main" class="ui-content">
               <div data-role="header"> <a href="#pagefour" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Home</a>
                        <h1>LISTS</h1>
                        <a href="#" data-rel="back" class="ui-btn  ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left">Back</a>
                </div>
                <div data-role="main" class="ui-content">
                  <h1>Movie Details</h1>
                  <div class="ui-grid-b">
                	<div class="ui-block-a"> </div>
                    <div class="ui-block-b"> 
                        <!--PHP Script to read database and query - Heidi Biggn-->
                        <?php
                             // build a SELECT query from table in database - Heidi Biggin
							 $query = "SELECT * FROM Movies";        
							
							
							/* Set oracle user login and password info - Heidi Biggin */
							$dbuser = "hbiggin"; /* my deakin login - Heidi Biggin */
							$dbpass = "password123";  /* my deakin password - Heidi Biggin */
							$dbname = "SSID"; 
							$db = OCILogon($dbuser, $dbpass, $dbname); 
					
							/* Message if database does not connect - Heidi Biggin */
							if (!$db)  {
								echo "An error occurred connecting to the database"; 
								exit; 
							 }
							/* check the sql statement for errors and if errors report them - Heidi Biggin */
							 $stmt = OCIParse($db, $query); 
							
							/* Message if query is not successfully created - Heidi Biggin */
							if(!$stmt)  {
							  echo "An error occurred in parsing the sql string.\n"; 
							  exit; 
							}
							/* Hold information gathered from database for use in code below - Heidi Biggin */
							OCIExecute($stmt); 
            
                        ?>
                        <!-- end PHP script - Heidi Biggin -->
                              
                        <!-- Table created to display results - Heidi Biggin -->
                        <table>
						  <!-- This php code fetches the database info above - Comment Heidi Biggin -->  
						  <?php
							 // fetch each record - Comment Heidi Biggin
							 while(OCIFetch($stmt))  
							  {
								// Creation of table rows to display results in - Comment Heidi Biggin
							 	// A certain Heading is requested from the table selected  - Comment Heidi Biggin                        
                              	// This individual record is put into a variable then prints the variable in the table  - Comment Heidi Biggin
                             	// This is repeated for as many headings as required - Comment Heidi Biggin

								 print( "<tr>" );
								 $ranking = OCIResult($stmt,"MOVIE_RANKING");
								 print( "<td>$ranking</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $name = OCIResult($stmt,"MOVIE_NAME");
								 print( "<td>$name</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $year = OCIResult($stmt,"YEAR");
								 print( "<td>$year</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $actor = OCIResult($stmt,"ACTOR");
								 print( "<td>$actor</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $actress = OCIResult($stmt,"ACTRESS");
								 print( "<td>$actress</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $length = OCIResult($stmt,"LENGTH");
								 print( "<td>$length</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $genre = OCIResult($stmt,"MGENRE_ID");
								 print( "<td>$genre</td>" );
								 print( "</tr>" );
								 
								 print( "<tr>" );
								 $rating = OCIResult($stmt,"RATING_ID");
								 print( "<td>$rating</td>" );
								 print( "</tr>" );
								 
							  } 
								// Close the database connection - Comment Heidi Biggin
                          		OCILogOff ($db); 
                          ?>
                          <!-- end PHP script -->
                       </table>
                   </div>
                  </div>
               </div>
          </div>
          <div data-role="footer">
            <h1>SIT313 Mobile Computing</h1>
          </div>
        </div>
        

        <!--PAGE SEVEN--> 
        <!--New Entry Screen--> 
        <!--This Page is NOT working - Heidi Biggin-->
                <!--This page was designed to add an entry in the database- comment Heidi Biggin-->
                <!-- I was unable to work out how to add records and allocate to the database - Comment Heidi Biggin --> 
        <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pageseven" data-theme="d">
          <div data-role="main" class="ui-content">
            <div data-role="header"> <a href="#pagefour" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Home</a>
                      <h1>LISTS</h1>
                      <a href="#" data-rel="back" class="ui-btn  ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left">Back</a>
            </div>
            <div data-role="main" class="ui-content">
               <h1>Make New Entry</h1>
			</div>
            <div data-role="footer">
               <h1>SIT313 Mobile Computing</h1>
            </div>
          </div>
        </div>

        <!--PAGE EIGHT--> 
        <!--Song List-->
        		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pageeight" data-theme="d">
           <div data-role="main" class="ui-content">
            <div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                <h1>LISTS</h1>
                <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                <div data-role="navbar" data-iconpos="top">
                  <ul>
                       <!--Return to the front page of the app - comment Heidi Biggin-->
                      <li><a href="#pageone" data-icon="home">Home</a></li>
                      <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                      <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                      <!--Return to the current list you are in - comment Heidi Biggin-->
                      <li><a href="#pageeight" data-icon="grid">Current List</a></li>
                  </ul>
                </div>
            </div>
            <div data-role="main" class="ui-content">
              <h1>Songs</h1>
              <div> 
        	         <!--PHP Script to read database and query - Heidi Biggin-->
   		             <?php
                                  
                           //build a SELECT query from table in database - Heidi Biggin
                           $query = "SELECT * FROM Songs";
                          
                           /* Set oracle user login and password info - Heidi Biggin */
                          $dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
                          $dbpass = "password123";  /* my deakin password - Heidi Biggin */
                          $dbname = "SSID"; 
                          $db = OCILogon($dbuser, $dbpass, $dbname); 
                  
				  			/* Message if database does not connect - Heidi Biggin */
                          if (!$db)  {
                              echo "An error occurred connecting to the database"; 
                              exit; 
                           }
                         /* check the sql statement for errors and if errors report them - Heidi Biggin */
						 $stmt = OCIParse($db, $query); 
						  /* Message if query is not successfully created - Heidi Biggin */
						  if(!$stmt)  {
							echo "An error occurred in parsing the sql string.\n"; 
							exit; 
						  }
                          /* Hold information gathered from database for use in code below - Heidi Biggin */
						  OCIExecute($stmt); 
 
                     ?>
                	 <!-- end PHP script - Heidi Biggin -->
                 	 <!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
                 	 <ul data-role="listview">
                          <!-- This php code fetches the database info above - Comment Heidi Biggin -->  
                          <?php
                               // fetch each record - Comment Heidi Biggin
                               while(OCIFetch($stmt))  
                                {
                                   // build list to display results - Comment Heidi Biggin
                                   // This also includes a link to a details page - Comment Heidi Biggin
								   // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
								   // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
								   print( "<li><a href=#pagesixteen>" );
                                    
                                   // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             	   // This will do this for every record in the database in the table selected - Comment Heidi Biggin
								   $fg1 = OCIResult($stmt,"SONG_NAME");
                                      print( $fg1);
                                                           
                                   print( "</a></li>" );
                                } 
                    
							   // Close the database connection - Comment Heidi Biggin
								OCILogOff ($db); 
                          ?>
                          <!-- end PHP script - Comment Heidi Biggin-->
                          
                   </ul>
               </div>
            </div>
            <div data-role="footer">
               <h1>SIT313 Mobile Computing</h1>
            </div>
           </div>
          </div>

            <!--PAGE NINE--> 
            <!--Friends List-->
            		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      		<!--Page Identification - comment Heidi Biggin-->
            <div data-role="page" id="pagenine" data-theme="d">
              <div data-role="main" class="ui-content">
                <div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                   <h1>LISTS</h1>
                    <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                   <div data-role="navbar" data-iconpos="top">
                      <ul>
                        <!--Return to the front page of the app - comment Heidi Biggin-->
                        <li><a href="#pageone" data-icon="home">Home</a></li>
                         <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                        <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                        <!--Return to the current list you are in - comment Heidi Biggin-->
                        <li><a href="#pagenine" data-icon="grid">Current List</a></li>
                      </ul>
                   </div>
                 </div>
                <div data-role="main" class="ui-content">
                   <h1>Friends</h1>
                   <div> 
                       <!--PHP Script to read database and query - Heidi Biggin-->
                      <?php
                                      
						   //build a SELECT query from table in database - Heidi Biggin
						   $query = "SELECT * FROM Friends";
						  
							/* Set oracle user login and password info - Heidi Biggin */
						  $dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
						  $dbpass = "password123";   /* my deakin password - Heidi Biggin */
						  $dbname = "SSID"; 
						  $db = OCILogon($dbuser, $dbpass, $dbname); 
				  
						 /* Message if database does not connect - Heidi Biggin */
						  if (!$db)  {
							  echo "An error occurred connecting to the database"; 
							  exit; 
						   }
						  /* check the sql statement for errors and if errors report them - Heidi Biggin */
						 $stmt = OCIParse($db, $query); 
						  /* Message if query is not successfully created - Heidi Biggin */
						  if(!$stmt)  {
							echo "An error occurred in parsing the sql string.\n"; 
							exit; 
						  }
						  /* Hold information gathered from database for use in code below - Heidi Biggin */
						  OCIExecute($stmt); 
  
                       ?>
                       <!-- end PHP script - Heidi Biggin -->
                    	<!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
                    	<ul data-role="listview">
                               <!-- This php code fetches the database info above - Comment Heidi Biggin -->                             
                              <?php
                                   // fetch each record - Comment Heidi Biggin
                                   while(OCIFetch($stmt))  
                                    {
                                       // build list to display results - Comment Heidi Biggin
                                       // This also includes a link to a details page - Comment Heidi Biggin
							 		   // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
							 		   // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
									   print( "<li><a href=#pageseventeen>" );
                                        
                                       // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             		   // This will do this for every record in the database in the table selected - Comment Heidi Biggin
									   $fg1 = OCIResult($stmt,"FRIEND_NAME");
                                          print( $fg1);
                                                               
                                       print( "</a></li>" );
                                    } 
                        
								   // Close the database connection - Comment Heidi Biggin
								   OCILogOff ($db); 
							  ?>
							  <!-- end PHP script - Comment Heidi Biggin-->
                              
                      </ul>
                  </div>
                </div>
                <div data-role="footer">
                   <h1>SIT313 Mobile Computing</h1>
                </div>
             </div>
         </div>

        <!--PAGE TEN--> 
        <!--Famous People List-->
        		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pageten" data-theme="d">
           <div data-role="main" class="ui-content">
           		<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                  <h1>LISTS</h1>
                <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                <div data-role="navbar" data-iconpos="top">
                	<ul>
                        <!--Return to the front page of the app - comment Heidi Biggin-->
                        <li><a href="#pageone" data-icon="home">Home</a></li>
                        <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                        <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                        <!--Return to the current list you are in - comment Heidi Biggin-->
                        <li><a href="#pageten" data-icon="grid">Current List</a></li>
                     </ul>
                </div>
                </div>
            	<div data-role="main" class="ui-content">
                   <h1>Famous People</h1>
                   <div> 
                        <!--PHP Script to read database and query - Heidi Biggin-->
                      <?php
                                        
							 //build a SELECT query from table in database - Heidi Biggin
							 $query = "SELECT * FROM FPeople";
							
							/* Set oracle user login and password info - Heidi Biggin */
							$dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
							$dbpass = "password123";  /* my deakin password - Heidi Biggin */
							$dbname = "SSID"; 
							$db = OCILogon($dbuser, $dbpass, $dbname); 
					
							/* Message if database does not connect - Heidi Biggin */
							if (!$db)  {
								echo "An error occurred connecting to the database"; 
								exit; 
							 }
							/* check the sql statement for errors and if errors report them - Heidi Biggin */
						   $stmt = OCIParse($db, $query); 
							/* Message if query is not successfully created - Heidi Biggin */
							if(!$stmt)  {
							  echo "An error occurred in parsing the sql string.\n"; 
							  exit; 
							}
							/* Hold information gathered from database for use in code below - Heidi Biggin */
							OCIExecute($stmt); 
               
                       ?>
                       <!-- end PHP script - Heidi Biggin -->
              			
                          <!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
                     	  <ul data-role="listview">
                         
                          <!-- This php code fetches the database info above - Comment Heidi Biggin -->     
                          <?php
                               // fetch each record - Comment Heidi Biggin
                               while(OCIFetch($stmt))  
                                {
                                     // build list to display results - Comment Heidi Biggin
									 // This also includes a link to a details page - Comment Heidi Biggin
									 // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
									 // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
                                   print( "<li><a href=#pageeighteen>" );
                                    
                                    // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             		// This will do this for every record in the database in the table selected - Comment Heidi Biggin
								   $fg1 = OCIResult($stmt,"PERSON_NAME");
                                   $fg2 = OCIResult($stmt, "PERSON_SURNAME");
                                      
                                      // This adds the two records first name and surname together so they display as one full name - Comment Heidi Biggin            
                                      echo $fg1. " " . $fg2; 
                                                           
                                   print( "</a></li>" );
                                } 
                    
							   // Close the database connection - Comment Heidi Biggin
							   OCILogOff ($db); 
                          ?>
                           <!-- end PHP script - Comment Heidi Biggin-->
                          
                        </ul>
              		</div>
                 </div>
                 <div data-role="footer">
                    <h1>SIT313 Mobile Computing</h1>
                 </div>
           </div>
        </div>

        <!--PAGE ELEVEN--> 
        <!--Apps List-->
        		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pageeleven" data-theme="d">
           	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                    <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                           <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                           <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                           <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pageeleven" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
                </div>
            	<div data-role="main" class="ui-content">
                   <h1>Apps</h1>
                   <div> 
                
                    <!--PHP Script to read database and query - Heidi Biggin-->
                    <?php
                                      
						   //build a SELECT query from table in database - Heidi Biggin
						   $query = "SELECT * FROM Apps";
						  
							/* Set oracle user login and password info - Heidi Biggin */
						  $dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
						  $dbpass = "password123";  /* my deakin password - Heidi Biggin */
						  $dbname = "SSID"; 
						  $db = OCILogon($dbuser, $dbpass, $dbname); 
				  
						  /* Message if database does not connect - Heidi Biggin */
						  if (!$db)  {
							  echo "An error occurred connecting to the database"; 
							  exit; 
						   }
						  /* check the sql statement for errors and if errors report them - Heidi Biggin */
						 $stmt = OCIParse($db, $query); 
						  /* Message if query is not successfully created - Heidi Biggin */
						  if(!$stmt)  {
							echo "An error occurred in parsing the sql string.\n"; 
							exit; 
						  }
						  /* Hold information gathered from database for use in code below - Heidi Biggin */
						  OCIExecute($stmt); 
              
                     ?>
                	<!-- end PHP script - Heidi Biggin -->
              
              		<!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
                    <ul data-role="listview">
                        
                        <!-- This php code fetches the database info above - Comment Heidi Biggin -->       
                        <?php
                               // fetch each record - Comment Heidi Biggin
                               while(OCIFetch($stmt))  
                                {
                                   	 // build list to display results - Comment Heidi Biggin
									 // This also includes a link to a details page - Comment Heidi Biggin
									 // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
									 // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
                                   print( "<li><a href=#pagenineteen>" );
                                   
								    // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             		// This will do this for every record in the database in the table selected - Comment Heidi Biggin 
                                   $fg1 = OCIResult($stmt,"APP_NAME");
                                   
                                      print( $fg1); 
                                      
                                                           
                                   print( "</a></li>" );
                                } 
                    
							   // Close the database connection - Comment Heidi Biggin
							   OCILogOff ($db); 
                         ?>
                         <!-- end PHP script - Comment Heidi Biggin-->
                          
                    </ul>
              	   </div>
                </div>
            	<div data-role="footer">
                   <h1>SIT313 Mobile Computing</h1>
                </div>
          	</div>
         </div>

        <!--PAGE TWELVE--> 
        <!--Websites List-->
        		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwelve" data-theme="d">
           	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                   <h1>LISTS</h1>
                   <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                   <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pagetwelve" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
                </div>
            	<div data-role="main" class="ui-content">
                   <h1>Websites</h1>
                   <div> 
                
                    <!--PHP Script to read database and query - Heidi Biggin-->
                    <?php
                                      
						   //build a SELECT query from table in database - Heidi Biggin
						   $query = "SELECT * FROM Websites";
						  
							/* Set oracle user login and password info - Heidi Biggin */
						  $dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
						  $dbpass = "password123";  /* my deakin password - Heidi Biggin */
						  $dbname = "SSID"; 
						  $db = OCILogon($dbuser, $dbpass, $dbname); 
				  
						  /* Message if database does not connect - Heidi Biggin */
						  if (!$db)  {
							  echo "An error occurred connecting to the database"; 
							  exit; 
						   }
						 /* check the sql statement for errors and if errors report them - Heidi Biggin */
						 $stmt = OCIParse($db, $query); 
						  /* Message if query is not successfully created - Heidi Biggin */
						  if(!$stmt)  {
							echo "An error occurred in parsing the sql string.\n"; 
							exit; 
						  }
						 /* Hold information gathered from database for use in code below - Heidi Biggin */
						  OCIExecute($stmt); 
 
                    ?>
                	<!-- end PHP script - Heidi Biggin -->
              
              		<!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
                	<ul data-role="listview">
                          
                          <!-- This php code fetches the database info above - Comment Heidi Biggin -->     
                          <?php
                                // fetch each record - Comment Heidi Biggin
                               while(OCIFetch($stmt))  
                                {
                                     // build list to display results - Comment Heidi Biggin
									 // This also includes a link to a details page - Comment Heidi Biggin
									 // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
									 // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
                                   print( "<li><a href=#pagetwenty>" );
                                    
                                    // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             		// This will do this for every record in the database in the table selected - Comment Heidi Biggin
								   $fg1 = OCIResult($stmt,"WEBSITE_NAME");
                                   
                                      print( $fg1); 
                                                                                       
                                   print( "</a></li>" );
                                } 
                    
							   // Close the database connection - Comment Heidi Biggin
							   OCILogOff ($db); 
                           ?>
                          <!-- end PHP script - Comment Heidi Biggin-->
                          
                    </ul>
              	  </div>
                </div>
            	<div data-role="footer">
                   <h1>SIT313 Mobile Computing</h1>
            	</div>
        	</div>
        </div>
        
        <!--PAGE THIRTEEN--> 
        <!--Shops List-->
        		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagethirteen" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                   <h1>LISTS</h1>
                   <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                   <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pagethirteen" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
                </div>
            	<div data-role="main" class="ui-content">
                    <h1>Shops</h1>
                    <div> 
                
                    <!--PHP Script to read database and query - Heidi Biggin-->
                    <?php
                                      
						  //build a SELECT query from table in database - Heidi Biggin
						   $query = "SELECT * FROM Shops";
						  
							/* Set oracle user login and password info - Heidi Biggin */
						  $dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
						  $dbpass = "password123"; /* my deakin password - Heidi Biggin */
						  $dbname = "SSID"; 
						  $db = OCILogon($dbuser, $dbpass, $dbname); 
				  
						  /* Message if database does not connect - Heidi Biggin */
						  if (!$db)  {
							  echo "An error occurred connecting to the database"; 
							  exit; 
						   }
						  /* check the sql statement for errors and if errors report them - Heidi Biggin */
						 $stmt = OCIParse($db, $query); 
						  /* Message if query is not successfully created - Heidi Biggin */
						  if(!$stmt)  {
							echo "An error occurred in parsing the sql string.\n"; 
							exit; 
						  }
						 /* Hold information gathered from database for use in code below - Heidi Biggin */
						  OCIExecute($stmt); 
             
                     ?>
                	 <!-- end PHP script - Heidi Biggin -->
                	 <!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
               		<ul data-role="listview">
                           <!-- This php code fetches the database info above - Comment Heidi Biggin -->     
                          <?php
                                // fetch each record - Comment Heidi Biggin
                               while(OCIFetch($stmt))  
                                {
                                     // build list to display results - Comment Heidi Biggin
									 // This also includes a link to a details page - Comment Heidi Biggin
									 // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
									 // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
                                   print( "<li><a href=#pagetwentyone>" );
                                   
								    // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             		// This will do this for every record in the database in the table selected - Comment Heidi Biggin
					              $fg1 = OCIResult($stmt,"SHOP_NAME");
                                   
                                      print( $fg1); 
                                                                                       
                                   print( "</a></li>" );
                                } 
                    
								  // Close the database connection - Comment Heidi Biggin
								 OCILogOff ($db); 
                          ?>
                           <!-- end PHP script - Comment Heidi Biggin-->
                          
                     </ul>
              	   </div>
                </div>
            	<div data-role="footer">
                   <h1>SIT313 Mobile Computing</h1>
            	</div>
        	</div>
        </div>
		
        <!--PAGE FOURTEEN--> 
        <!--Restaurant List-->
        		<!-- This page DOES READ INFO FROM DATABASE - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagefourteen" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                   	<h1>LISTS</h1>
                   	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pagefourteen" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
                </div>
            	<div data-role="main" class="ui-content">
                   <h1>Restaurants</h1>
                   <div> 
                
                    <!--PHP Script to read database and query - Heidi Biggin-->
                    <?php
                                      
						 //build a SELECT query from table in database - Heidi Biggin
						 $query = "SELECT * FROM Restaurants";
						
						/* Set oracle user login and password info - Heidi Biggin */
						$dbuser = "hbiggin";  /* my deakin login - Heidi Biggin */
						$dbpass = "password123";  /* my deakin password - Heidi Biggin */
						$dbname = "SSID"; 
						$db = OCILogon($dbuser, $dbpass, $dbname); 
				
						/* Message if database does not connect - Heidi Biggin */
						if (!$db)  {
							echo "An error occurred connecting to the database"; 
							exit; 
						 }
						 /* check the sql statement for errors and if errors report them - Heidi Biggin */
					   $stmt = OCIParse($db, $query); 
						/* Message if query is not successfully created - Heidi Biggin */
						if(!$stmt)  {
						  echo "An error occurred in parsing the sql string.\n"; 
						  exit; 
						}
					/* Hold information gathered from database for use in code below - Heidi Biggin */
						  OCIExecute($stmt); 
                    ?>
                    <!-- end PHP script - Heidi Biggin -->
             		
                    <!-- Creation of a list to display the above database results in - Comment Heidi Biggin --> 
                    <ul data-role="listview">
                          
                          <!-- This php code fetches the database info above - Comment Heidi Biggin -->   
                          <?php
                               // fetch each record - Comment Heidi Biggin
                               while(OCIFetch($stmt))  
                                {
                                     // build list to display results - Comment Heidi Biggin
									 // This also includes a link to a details page - Comment Heidi Biggin
									 // Unfortunately all records in the list go to the same page - Comment Heidi Biggin
									 // I was unable to work out how to select ONLY the record that had been selected - Comment Heidi Biggin
                                   print( "<li><a href=#pagetwentytwo>" );
                                    
                                    // This each individual record into a variable then prints the variable in the list  - Comment Heidi Biggin
                             		// This will do this for every record in the database in the table selected - Comment Heidi Biggin
								   $fg1 = OCIResult($stmt,"REST_NAME");
                                   
                                      print( $fg1); 
                                                                                       
                                   print( "</a></li>" );
                                } 
                    
							    // Close the database connection - Comment Heidi Biggin
							   OCILogOff ($db); 
                                    
                          ?>
                           <!-- end PHP script - Comment Heidi Biggin-->
                          
                     </ul>
              	   </div>
                </div>
            	<div data-role="footer">
                  <h1>SIT313 Mobile Computing</h1>
            	</div>
          	</div>
          </div>

            <!--PAGE FIFTEEN--> 
            <!--Individual Movie Page-->
            	<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      		<!--Page Identification - comment Heidi Biggin-->
            <div data-role="page" id="pagefifteen" data-theme="d">
            	<div data-role="main" class="ui-content">
                	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                        <h1>LISTS</h1>
                    	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                        <div data-role="navbar" data-iconpos="top">
                    		<ul>
                              <!--Return to the front page of the app - comment Heidi Biggin-->
                              <li><a href="#pageone" data-icon="home">Home</a></li>
                              <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                              <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                              <!--Return to the current list you are in - comment Heidi Biggin-->
                              <li><a href="#pagefive" data-icon="grid">Current List</a></li>
                            </ul>
                  		</div>
                    </div>
                	<div data-role="main" class="ui-content">
                        <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                        <h1>Movie Details</h1>
                        <!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                        <div class="ui-grid-a ui-responsive">
                    		<!--First section of the grid - comment Heidi Biggin-->
                            <!--Contains image of the product - comment Heidi Biggin-->
                            <div class="ui-block-a ui-responsive"> <img src="Images/Pride.jpg" style="width:200px;height:300px; align-content:center"> </div>
                    		<!--Second section of the grid - comment Heidi Biggin-->
                            <div class="ui-block-b ui-responsive">
                                  <!--Table created to display field results - comment Heidi Biggin-->
                                  <table >
                            
                            		<tr>
                                      <!--Header row to display the field name - comment Heidi Biggin-->
                                      <th style="padding:10px; text-align: left">Ranking</th>
                                      <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                                      <td style="padding:10px; text-align: right">1</td>
                                    </tr>
                            
                            		<tr>
                                      <th style="padding:10px; text-align: left">Movie Name</th>
                                      <td style="padding:10px; text-align: right">Pride and Prejudice</td>
                                    </tr>
                            
                            		<tr>
                                      <th style="padding:10px; text-align: left">Year</th>
                                      <td style="padding:10px; text-align: right">1995</td>
                                    </tr>
                            
                            		<tr>
                                      <th style="padding:10px; text-align: left">Actor</th>
                                      <td style="padding:10px; text-align: right">Colin Firth</td>
                                    </tr>
                           
                            		<tr>
                                      <th style="padding:10px; text-align: left">Actress</th>
                                      <td style="padding:10px; text-align: right">Jennifer Ehle</td>
                                    </tr>
                            
                            		<tr>
                                      <th style="padding:10px; text-align: left">Length (Mins)</th>
                                      <td style="padding:10px; text-align: right">327 mins</td>
                                    </tr>
                           
                           			<tr>
                                      <th style="padding:10px; text-align: left">Genre</th>
                                      <td style="padding:10px; text-align: right">Romance</td>
                                    </tr>
                            
                            		<tr>
                                      <th style="padding:10px; text-align: left">Rating</th>
                                      <td style="padding:10px; text-align: right">
                                      	<!--Rather than write the rating we thought it would be better with an image - comment Heidi Biggin-->
                                        <!--Inserted image of 5 stars to reflect rating- comment Heidi Biggin-->
                                        <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                        <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                        <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                        <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                        <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px"></td>
                                    </tr>
                          		  </table>
                             </div>
                  		</div>
                     </div>
              	</div>
                <div data-role="footer">
                	<h1>SIT313 Mobile Computing</h1>
              	</div>
              </div>
           	</div>
           
            <!--PAGE SIXTEEN--> 
            <!--Individual Song Page-->
            		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      		<!--Page Identification - comment Heidi Biggin-->
            <div data-role="page" id="pagesixteen" data-theme="d">
            	<div data-role="main" class="ui-content">
                	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                          <h1>LISTS</h1>
                          <!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                          <div data-role="navbar" data-iconpos="top">
                                <ul>
                                  <!--Return to the front page of the app - comment Heidi Biggin-->
                                  <li><a href="#pageone" data-icon="home">Home</a></li>
                                  <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                                  <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                                  <!--Return to the current list you are in - comment Heidi Biggin-->
                                  <li><a href="#pageeight" data-icon="grid">Current List</a></li>
                                </ul>
                 		 </div>
                        </div>
                		<div data-role="main" class="ui-content">
                          <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                          <h1>Song Details</h1>
                           <!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                          <div class="ui-grid-a ui-responsive">
                    		<!--First section of the grid - comment Heidi Biggin-->
                            <!--Contains image of the product - comment Heidi Biggin-->
                            <div class="ui-block-a ui-responsive"> <img src="Images/CarryOn.png" style="width:200px;height:200px; align-content:center"> </div>
                    		<!--Second section of the grid - comment Heidi Biggin-->
                            <div class="ui-block-b ui-responsive">
                              <!--Table created to display field results - comment Heidi Biggin-->
                              <table >
                        
                        		<tr>
                                  <!--Header row to display the field name - comment Heidi Biggin-->
                                  <th style="padding:10px; text-align: left">Ranking</th>
                                   <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                                  <td style="padding:10px; text-align: right">1</td>
                                </tr>
                        
                        		<tr>
                                  <th style="padding:10px; text-align: left">Song Name</th>
                                  <td style="padding:10px; text-align: right">Finally Forever</td>
                                </tr>
                        
                        		<tr>
                                  <th style="padding:10px; text-align: left">Artist</th>
                                  <td style="padding:10px; text-align: right">Chris Cornell</td>
                                </tr>
                        
                        		<tr>
                                  <th style="padding:10px; text-align: left">Album</th>
                                  <td style="padding:10px; text-align: right">Carry On</td>
                                </tr>
                        
                        		<tr>
                                  <th style="padding:10px; text-align: left">Length</th>
                                  <td style="padding:10px; text-align: right">3.37 mins</td>
                                </tr>
                        
                        		<tr>
                                  <th style="padding:10px; text-align: left">Year</th>
                                  <td style="padding:10px; text-align: right">2007</td>
                                </tr>
                        
                        		<tr>
                                  <th style="padding:10px; text-align: left">Genre</th>
                                  <td style="padding:10px; text-align: right">Grunge</td>
                                </tr>
                                
                      		  </table>
                            </div>
                  		</div>
                	</div>
              	</div>
                <div data-role="footer">
                	<h1>SIT313 Mobile Computing</h1>
            	</div>
          	</div>
          </div>

          <!--PAGE SEVENTEEN--> 
          <!--Individual Friends Page-->
          		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      	  <!--Page Identification - comment Heidi Biggin-->
          <div data-role="page" id="pageseventeen" data-theme="d">
          	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                  		<ul>
                            <!--Return to the front page of the app - comment Heidi Biggin-->
                            <li><a href="#pageone" data-icon="home">Home</a></li>
                            <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                            <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                             <!--Return to the current list you are in - comment Heidi Biggin-->
                            <li><a href="#pagenine" data-icon="grid">Current List</a></li>
                        </ul>
                	</div>
                </div>
              	<div data-role="main" class="ui-content">
                    <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                    <h1>Friend Details</h1>
                	<!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                    <div class="ui-grid-a ui-responsive">
                  		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains image of the product - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive"> <img src="Images/Bigsy.jpg" style="width:200px;height:300px; align-content:center"> </div>
                  		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                             <!--Table created to display field results - comment Heidi Biggin-->
                            <table >
                      
                      		<tr>
                              <!--Header row to display the field name - comment Heidi Biggin-->
                              <th style="padding:10px; text-align: left">Ranking</th>
                              <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                              <td style="padding:10px; text-align: right">1</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Friend Name</th>
                              <td style="padding:10px; text-align: right">Steve</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Nickname</th>
                              <td style="padding:10px; text-align: right">Bigsy</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Mobile</th>
                              <td style="padding:10px; text-align: right">0413777666</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Birthday</th>
                              <td style="padding:10px; text-align: right">10/05/1981</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Address</th>
                              <td style="padding:10px; text-align: right">15 Brown Street</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Favourite Colour</th>
                              <td style="padding:10px; text-align: right">Red</td>
                            </tr>
                    	   
                           </table>
                          </div>
                		</div>
                	</div>
            	</div>
                <div data-role="footer">
              		<h1>SIT313 Mobile Computing</h1>
            	</div>
          	</div>
          </div>
          
          <!--PAGE EIGHTEEN--> 
          <!--Individual Famous Person Page-->
          		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      	  <!--Page Identification - comment Heidi Biggin-->
          <div data-role="page" id="pageeighteen" data-theme="d">
          	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                  		<ul>
                             <!--Return to the front page of the app - comment Heidi Biggin-->
                            <li><a href="#pageone" data-icon="home">Home</a></li>
                            <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                            <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                            <!--Return to the current list you are in - comment Heidi Biggin-->
                            <li><a href="#pageten" data-icon="grid">Current List</a></li>
                        </ul>
                	</div>
                </div>
              	<div data-role="main" class="ui-content">
                    <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                    <h1>Famous Person Details</h1>
               		<!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                    <div class="ui-grid-a ui-responsive">
                  		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains image of the product - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive"> <img src="Images/jewel.jpg" style="width:200px;height:200px; align-content:center"> </div>
                  		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                           <!--Table created to display field results - comment Heidi Biggin-->
                           <table >
                      
                      		<tr>
                              <!--Header row to display the field name - comment Heidi Biggin-->
                              <th style="padding:10px; text-align: left">Ranking</th>
                               <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                              <td style="padding:10px; text-align: right">1</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Stage Name</th>
                              <td style="padding:10px; text-align: right">Jewel</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">First Name</th>
                              <td style="padding:10px; text-align: right">Jewel</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Surname</th>
                              <td style="padding:10px; text-align: right">Kilcher</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Twitter</th>
                              <td style="padding:10px; text-align: right">@jeweljk</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Reason for Fame</th>
                              <td style="padding:10px; text-align: right">Singer</td>
                            </tr>
                    		
                           </table>
                          </div>
                		</div>
                	</div>
            	</div>
                <div data-role="footer">
              		<h1>SIT313 Mobile Computing</h1>
            	</div>
          	</div>
          </div>

          <!--PAGE NINETEEN--> 
          <!--Individual Apps Page-->
          		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      	  <!--Page Identification - comment Heidi Biggin-->
          <div data-role="page" id="pagenineteen" data-theme="d">
          	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                  		<ul>
                            <!--Return to the front page of the app - comment Heidi Biggin-->
                            <li><a href="#pageone" data-icon="home">Home</a></li>
                            <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                            <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                            <!--Return to the current list you are in - comment Heidi Biggin-->
                            <li><a href="#pageeleven" data-icon="grid">Current List</a></li>
                        </ul>
                	</div>
                </div>
              	<div data-role="main" class="ui-content">
                    <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                    <h1>App Details</h1>
                	<!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                    <div class="ui-grid-a ui-responsive">
                  		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains image of the product - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive"> <img src="Images/Keep.png" style="width:200px;height:200px; align-content:center"> </div>
                  		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                         <!--Table created to display field results - comment Heidi Biggin-->
                         <table >
                      
                      		<tr>
                              <!--Header row to display the field name - comment Heidi Biggin-->
                              <th style="padding:10px; text-align: left">Ranking</th>
                              <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                              <td style="padding:10px; text-align: right">1</td>
                            </tr>
                      		
                            <tr>
                              <th style="padding:10px; text-align: left">App Name</th>
                              <td style="padding:10px; text-align: right">Google Keep</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Cost</th>
                              <td style="padding:10px; text-align: right">$0.00</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Category</th>
                              <td style="padding:10px; text-align: right">Productivity</td>
                            </tr>
                      
                      		<tr>
                              <th style="padding:10px; text-align: left">Used For</th>
                              <td style="padding:10px; text-align: right">Organising</td>
                            </tr>
                      
                      		<tr>
                                <th style="padding:10px; text-align: left">Rating</th>
                                <td style="padding:10px; text-align: right">
                                	<!--Rather than write the rating we thought it would be better with an image - comment Heidi Biggin-->
                                    <!--Inserted image of 5 stars to reflect rating- comment Heidi Biggin-->
                                    <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                    <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                    <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                    <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                    <img src="Images/fullstar.png" style="width:20px;height:20px; padding:1px">
                                </td>
                            </tr>
                    	   
                           </table>
                          </div>
                		</div>
                	</div>
            	</div>
                <div data-role="footer">
              		<h1>SIT313 Mobile Computing</h1>
            	</div>
         	</div>
        </div>

        <!--PAGE Twenty--> 
        <!--Individual Website Page-->
        		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwenty" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                           <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pagetwelve" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
                </div>
            	<div data-role="main" class="ui-content">
                    <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                    <h1>Website Details</h1>
                	<!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                    <div class="ui-grid-a ui-responsive">
                		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains image of the product - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive"> <img src="Images/bank.png" style="width:200px;height:200px; align-content:center"> </div>
                		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                          <!--Table created to display field results - comment Heidi Biggin-->
                          <table >
                    
                    		<tr>
                              <!--Header row to display the field name - comment Heidi Biggin-->
                              <th style="padding:10px; text-align: left">Ranking</th>
                              <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                              <td style="padding:10px; text-align: right">2</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Website Name</th>
                              <td style="padding:10px; text-align: right">Commonwealth Bank</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Website Address</th>
                              <td style="padding:10px; text-align: right">www.my.commbank.com.au</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Type</th>
                              <td style="padding:10px; text-align: right">Finance</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Used For</th>
                              <td style="padding:10px; text-align: right">Money</td>
                            </tr>
                  		   </table>
                          </div>
              			</div>
                	</div>
          		</div>
                <div data-role="footer">
            		<h1>SIT313 Mobile Computing</h1>
          		</div>
        	</div>
        </div>

        <!--PAGE TWENTYONE--> 
        <!--Individual Shop Page-->
        		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwentyone" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pagethirteen" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
                </div>
            	<div data-role="main" class="ui-content">
                     <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                    <h1>Shop Details</h1>
                	<!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                    <div class="ui-grid-a ui-responsive">
                		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains image of the product - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive"> <img src="Images/office.png" style="width:200px;height:200px; align-content:center"> </div>
                		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                          <!--Table created to display field results - comment Heidi Biggin-->
                          <table >
                    
                    		<tr>
                              <!--Header row to display the field name - comment Heidi Biggin-->
                              <th style="padding:10px; text-align: left">Ranking</th>
                              <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                              <td style="padding:10px; text-align: right">1</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Shop Name</th>
                              <td style="padding:10px; text-align: right">Officeworks</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Phone Number</th>
                              <td style="padding:10px; text-align: right">9565 3344</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Address</th>
                              <td style="padding:10px; text-align: right">653 Springvale Road</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Online Store</th>
                              <td style="padding:10px; text-align: right">No</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Sells</th>
                              <td style="padding:10px; text-align: right">Electronics</td>
                            </tr>
                  		  </table>
                        </div>
              		</div>
            	</div>
          	</div>
            <div data-role="footer">
            	<h1>SIT313 Mobile Computing</h1>
         	</div>
        </div>

        <!--PAGE TWENTYTWO--> 
        <!--Individual Restaurant Page-->
        		<!-- This page does NOT read from the database - Comment Heidi Biggin --> 
      	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwentytwo" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#pagefourteen" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
               	</div>
            	<div data-role="main" class="ui-content">
                     <!--This page has been maually made to show what one individual details page would look like - comment Heidi Biggin-->
                    <h1>Restaurant Details</h1>
                	<!--This grid is added to divide the page in three sections - comment Heidi Biggin-->
                    <div class="ui-grid-b ui-responsive">
                		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains image of the product - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive"> <img src="Images/noodlebox.png" style="width:200px;height:200px; align-content:center"> </div>
                		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                           <!--Table created to display field results - comment Heidi Biggin-->
                          <table>
                    
                    		<tr>
                              <!--Header row to display the field name - comment Heidi Biggin-->
                              <th style="padding:10px; text-align: left">Ranking</th>
                               <!--Table data row to display the infor held in the field - comment Heidi Biggin-->
                              <td style="padding:10px; text-align: right">1</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Restaurant Name</th>
                              <td style="padding:10px; text-align: right">Noodles 'R' Us</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Address</th>
                              <td style="padding:10px; text-align: right">15 Station Street</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Phone Number</th>
                              <td style="padding:10px; text-align: right">9546 2147</td>
                            </tr>
                    
                    		<tr>
                              <th style="padding:10px; text-align: left">Food Type</th>
                              <td style="padding:10px; text-align: right">Chinese</td>
                            </tr>
                  		  </table>
                        </div>
                		<div class="ui-block-c ui-responsive"> 
                          <!-- This indicates the content for the third column in the grid - Comment Heidi Biggin --> 
                          <!-- This content displays the map from the function specified at the beginning of the code - Comment Heidi Biggin --> 
                          <!-- Specifies the size of the map - Comment Heidi Biggin -->
                          <div id="googleMap" style="width:250px;height:190px;"> 
                    			<script>
                                      function initialize() {
                                      <!-- These are the set up files for the map - Comment Heidi Biggin -->	
                                      <!-- Creating a variable called mapProp - Comment Heidi Biggin -->	
                                        var mapProp = {
                                          <!-- The Longitude/Latitude are specified for the map starting point - Comment Heidi Biggin -->
                                          center:new google.maps.LatLng(-37.841332,145.267009),
                                          <!-- This specifies how far in to zoom on the map - Comment Heidi Biggin -->
                                          zoom:13, 
                                          <!-- This specifies the type of map, here it is Roadmap - Comment Heidi Biggin -->
                                          mapTypeId:google.maps.MapTypeId.ROADMAP 
                                        };
                                        <!-- Creating a variable called map based on the map made in mapProp  - Comment Heidi Biggin -->	
                                        var map=new google.maps.Map(document.getElementById("googleMap"), mapProp); 
                                        
                                        <!-- Creating a variable called marker - Comment Heidi Biggin -->
                                        <!-- This displays a red marker arrow on the map - Comment Heidi Biggin -->	
                                        var marker = new google.maps.Marker({
                                          <!-- This is the Longitude/Latitude of where the marker should go - Comment Heidi Biggin -->
                                          position: new google.maps.LatLng(-37.841332,145.267009), 
                                          <!-- This is the title that will appear if user hovers over marker - Comment Heidi Biggin -->
                                          title:'Click to zoom' 
                                          });
                
                                          <!-- This puts the marker on the map - Comment Heidi Biggin -->
                                          marker.setMap(map);
                                          
                                          <!-- This event listens and when the user clicks on the marker it zooms in to a closer position - Comment Heidi Biggin -->
                                          google.maps.event.addListener(marker,'click',function() {
                                            map.setZoom(18);
                                            map.setCenter(marker.getPosition());
                                            });
                                      
                                      }
                                      <!-- Once all above is initialised this line below produces the map in the App - Comment Heidi Biggin -->
                                      google.maps.event.addDomListener(window, 'load', initialize);
                                </script> 
                  		  </div>
                          <!-- Text under the map - Comment Heidi Biggin -->
                          <p align="center">
                            	<h3>Click on the marker on the map to see our location</h3>
                          		If the map doesn't load initially just refresh yor page
                          </p>
                    	</div>
              		</div>
            	</div>
          	</div>
            <div data-role="footer">
            	<h1>SIT313 Mobile Computing</h1>
         	</div>
         </div>

        <!--PAGE TWENTYTHREE--> 
        <!--Developers Page-->
       	<!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwentythree" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                          <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                          <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
               	</div>
            	<div data-role="main" class="ui-content">
                    <h1>Developers Details</h1>
                	<!--This grid is added to divide the page in two sections - comment Heidi Biggin-->
                    <div class="ui-grid-a ui-responsive">
                		<!--First section of the grid - comment Heidi Biggin-->
                        <!--Contains video about the developers - comment Heidi Biggin-->
                        <div class="ui-block-a ui-responsive">
                          	<!--Sets the size of the video to be displayed in the app - comment Heidi Biggin-->
                            <video id="myVideo" width="352" height="288">
                    			<!--Calls the video file to play - comment Heidi Biggin-->
                                <source src="final_video2.mp4" type="video/mp4">
                  			</video>
                          <br>
                          		<!--Creates a button to press to play the video - comment Heidi Biggin-->
                                <!--Calls playVid function below - comment Heidi Biggin-->
                              <button onclick="playVid()" type="button" class="ui-btn ui-btn-inline">Play Video</button>
                              	<!--Creates a button to press to pause the video - comment Heidi Biggin-->
                                <!--Calls pauseVid function below - comment Heidi Biggin-->
                              <button onclick="pauseVid()" type="button" class="ui-btn ui-btn-inline">Pause Video</button>
                          <br>
                          <script> 
                                var vid = document.getElementById("myVideo"); 
                                
								<!--Creates a function to tell the app how to play the video - comment Heidi Biggin-->
                                function playVid() { 
                                    myVideo.play(); 
                                } 
                                <!--Creates a function to tell the app how to pause the video - comment Heidi Biggin-->
                                function pauseVid() { 
                                    myVideo.pause(); 
                                } 
                                
                           </script> 
                        </div>
                		<!--Second section of the grid - comment Heidi Biggin-->
                        <div class="ui-block-b ui-responsive">
                          <!--Text about the developers - comment Heidi Biggin-->
                          <h1 style="text-align: center;">About Us</h1>
                          	<p style="text-align: center;">This app has been made by the following developers:<br></p>
                  
                          	<h3 style="text-align: center;">Imavi Alwis<br>
                    				Heidi Biggin<br>
                  			</h3>
                          	<p style="text-align: center;">If you like our app be sure to like our pages or send us an email<br></p>
                  
                          	<p style="text-align: center;">
                            	<!--Images of social media icons - comment Heidi Biggin-->
                                <!--Obviously they could be links to company pages - comment Heidi Biggin-->
                                <!--At the moment they are not linked anywhere - comment Heidi Biggin-->
                                <img src="Images/email.png" style="width:50px;height:50px">
                                <img src="Images/facebook.png" style="width:50px;height:50px">
                                <img src="Images/twitter.png" style="width:50px;height:50px">
                            </p>
                    	</div>
              		</div>
            	</div>
          	</div>
            <div data-role="footer">
            	<h1>SIT313 Mobile Computing</h1>
         	</div>
        </div>

        <!--PAGE TWENTYFOUR--> 
        <!--Credits Page-->
        <!--Page Identification - comment Heidi Biggin-->
        <div data-role="page" id="pagetwentyfour" data-theme="d">
        	<div data-role="main" class="ui-content">
            	<div data-role="header"> <a href="#" data-rel="back" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
                    <h1>LISTS</h1>
                	<!--This Navigation bar is added to easily return to other areas of the app - comment Heidi Biggin-->
                    <div data-role="navbar" data-iconpos="top">
                		<ul>
                          <!--Return to the front page of the app - comment Heidi Biggin-->
                          <li><a href="#pageone" data-icon="home">Home</a></li>
                           <!--Return to the page that displays the main categories of the app - comment Heidi Biggin-->
                          <li><a href="#pagefour" data-icon="grid">Main Lists</a></li>
                           <!--Return to the current list you are in - comment Heidi Biggin-->
                          <li><a href="#" data-icon="grid">Current List</a></li>
                        </ul>
              		</div>
               	</div>
            	<div data-role="main" class="ui-content">
                      <h1>Credits</h1>
                      <!--This text will appear in the main area of the App - comment Heidi Biggin--> 
                      <!-- This page was added to include all references used within the app - Comment Heidi Biggin -->
                      <h3>Please find reference here for all sources used within this App</h3>
                      <!-- This means the content below will have a heading which when clicked will reveal info - Comment Heidi Biggin --> 
                </div>
                <div data-role="collapsible"> 
                    <!-- This is the collapsible heading - Comment Heidi Biggin -->
                    <h1>Commercial and Company Images</h1>
                    
                    <h3>
                    All Images here are commercial images and we have referenced<br>
                    the sources so as not to breach copyright<br>
                    <h1>Image References</h1>
                    
                      <!-- All text below includes the reference and a link to each source used - Comment Heidi Biggin -->
                      <p>BBC, 2015, “IMAGE OF PRIDE AND PREJUDICE MOVIE POSTER”, IMDb , Accessed 2nd October 2015,<br>
                          <a href="http://www.imdb.com/title/tt0112130/?ref_=nv_sr_1">http://www.imdb.com/title/tt0112130/?ref_=nv_sr_1</a><br>
                      </p>
                    
                      <p>Chris Cornell, 2015, “IMAGE OF CARRY ON CD ALBUM COVER”, Chris Cornell : Music , Accessed 2nd October 2015,<br>
                          <a href="http://chriscornell.com/music/carry_on/">http://chriscornell.com/music/carry_on/</a><br>
                      </p>
                    
                      <p>Google, 2015, “IMAGE OF GOOGLE KEEP LOGO”, Google Play Store, Accessed 2nd October 2015,<br>
                          <a href="https://play.google.com/store/apps/details?id=com.google.android.keep">https://play.google.com/store/apps/details?id=com.google.android.keep</a><br>
                      </p>
                    
                      <p>Inala Plaza, 2015, “IMAGE OF COMMONWEALTH BANK LOGO”, Inala Plaza, Accessed 2nd October 2015,<br>
                          <a href="http://www.inalaplaza.com.au/portfolio/commonwealth-bank/">http://www.inalaplaza.com.au/portfolio/commonwealth-bank/</a><br>
                      </p>
                    
                      <p>Jewel Kilcher, 2015, “IMAGE OF JEWEL KILCHER (SPIRIT ALBUM COVER)”, Wikipedia, Accessed 2nd October 2015,<br>
                          <a href="https://en.wikipedia.org/wiki/Spirit_(Jewel_album)">https://en.wikipedia.org/wiki/Spirit_(Jewel_album)</a><br>
                      </p>
                    
                      <p>Officeworks, 2015, “IMAGE OF OFFICEWORKS LOGO”, Twitter, Accessed 2nd October 2015,<br>
                          <a href="https://twitter.com/officeworks">https://twitter.com/officeworks</a><br>
                      </p>
              </div>
              <div data-role="collapsible"> 
                    <!-- This is the collapsible heading - Comment Heidi Biggin -->
                    <h1>Creative Commons Images</h1>
                    <!-- Disclaimer about Creative Commons - Comment Heidi Biggin -->
                    <h3>All Images referenced below are under the Creative Commons Licences<br>
                        CC-BY<br>
                        CC-BY-SA<br>
                    </h3>
                    <!-- Link to Creative Commons - Comment Heidi Biggin --> 
                    <a href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons License Here</a>
                    <h1>Image References</h1>
                    
                    <!-- All text below includes the reference and a link to each source used - Comment Heidi Biggin -->
                    <p>Chabe01, 2014, “EMAIL ICON”, Wikimedia Commons, Accessed 2nd October 2015,<br>
                        <a href="https://commons.wikimedia.org/wiki/File:Mail_iOS.svg">https://commons.wikimedia.org/wiki/File:Mail_iOS.svg</a><br>
                    </p>
                    
                    <p>EnoW, 2011, “TWITTER ICON”, Wikimedia Commons, Accessed 2nd October 2015,<br>
                        <a href="https://commons.wikimedia.org/wiki/File:Twitter_Logo_Mini.svg">https://commons.wikimedia.org/wiki/File:Twitter_Logo_Mini.svg</a><br>
                    </p>
                    
                    <p>Jer101jer, 2012, “FACEBOOK ICON”, Wikimedia Commons, Accessed 2nd October 2015,<br>
                        <a href="https://commons.wikimedia.org/wiki/File:Facebook_Logo_Mini.svg">https://commons.wikimedia.org/wiki/File:Facebook_Logo_Mini.svg</a><br>
                    </p>
                    
                    <p>OpenClipArtVectors, 2014,” IMAGE of NOODLE BOX”, Pixabay, Accessed 2nd October 2015,<br>
                        <a href="https://pixabay.com/en/takeaway-chinese-fast-food-box-154591/">https://pixabay.com/en/takeaway-chinese-fast-food-box-154591/</a><br>
                    </p>
              </div>
              <div data-role="collapsible"> 
                      <!-- This is the collapsible heading - Comment Heidi Biggin -->
                      <h1>Original Images</h1>
                      
                      <p>All other Images within this app have been designed and <br>
                			produced by: <br>
                      </p>
                      <h3>Imavi Alwis</h3>
             </div>
            	<!-- New level on collapsible menu for references - Comment Heidi Biggin -->
             <div data-role="collapsible">
                      <h1>Coding References</h1>
                      <h3>Coding References</h3>
                      <p>Dr Shg Gao, 2014, SIT203 Web Programming - Practical Week 7, Deakin University, Accessed 18th September 2015, <br></p>
              
                      <p>W3schools.com, 2015, Google Maps Basic, W3schools.com, Accessed 28th September 2015, <br>
                		<a href="http://www.w3schools.com/googleapi/google_maps_basic.asp">http://www.w3schools.com/googleapi/google_maps_basic.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, Google Maps Events, W3schools.com, Accessed 27th September 2015, <br>
                		<a href="http://www.w3schools.com/googleapi/google_maps_events.asp">http://www.w3schools.com/googleapi/google_maps_events.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, HTML Audio/Video DOM play() method , W3schools.com, Accessed 28th September 2015, <br>
                		<a href="http://www.w3schools.com/tags/av_met_play.asp">http://www.w3schools.com/tags/av_met_play.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile Buttons Icons, W3schools.com, Accessed 25th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_icons.asp">http://www.w3schools.com/jquerymobile/jquerymobile_icons.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile Collapsibles, W3schools.com, Accessed 25th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_collapsibles.asp">http://www.w3schools.com/jquerymobile/jquerymobile_collapsibles.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile Grids, W3schools.com, Accessed 25th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_grids.asp">http://www.w3schools.com/jquerymobile/jquerymobile_grids.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile List Views, W3schools.com, Accessed 25th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_list_views.asp">http://www.w3schools.com/jquerymobile/jquerymobile_list_views.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile Navigation Bars, W3schools.com, Accessed 27th September 2015, <br>
               			<a href="http://www.w3schools.com/jquerymobile/jquerymobile_navbars.asp">http://www.w3schools.com/jquerymobile/jquerymobile_navbars.asp</a><br>
              		  </p>
                     
                      <p>W3schools.com, 2015, jQuery Mobile Pages, W3schools.com, Accessed 20th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_pages.asp">http://www.w3schools.com/jquerymobile/jquerymobile_pages.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile Panels, W3schools.com, Accessed 28th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_panels.asp">http://www.w3schools.com/jquerymobile/jquerymobile_panels.asp</a><br>
              		  </p>
                     
                     <p>W3schools.com, 2015, jQuery Mobile Toolbars, W3schools.com, Accessed 28th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_toolbars.asp">http://www.w3schools.com/jquerymobile/jquerymobile_toolbars.asp</a><br>
              		  </p>
                      
                      <p>W3schools.com, 2015, jQuery Mobile Transitions, W3schools.com, Accessed 28th September 2015, <br>
                		<a href="http://www.w3schools.com/jquerymobile/jquerymobile_transitions.asp">http://www.w3schools.com/jquerymobile/jquerymobile_transitions.asp</a><br>
              		  </p>
                </div>
            	<div data-role="footer">
                	<h1>SIT313 Mobile Computing</h1>
            	</div>
       		</div>
       </div>
	</body>
</html>
