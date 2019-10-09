<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Google Map</title>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <a href="index.html" class="site-logo">
                            <img src="images/kidfirst.png" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
                </div>
            </div>

            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mx-auto">
                            <nav class="site-navigation position-relative text-left" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                                    <li class="active"><a href="index.html" class="nav-link text-left">Home</a></li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Education</span><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Swimming pool</span><span class="caret"></span></a>
                                            </li>
                                            <ul class="dropdown-submenu">
                                                <li><a href="swimming_pool.html" class="nav-link text-left">Guideline</a></li>
                                                <li><a href="pool_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                                            </ul>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Beach</span><span class="caret"></span></a>
                                                <ul class="dropdown-submenu">
                                                    <li><a href="beach.html" class="nav-link text-left">Guideline</a></li>
                                                    <li><a href="beach_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">River and Lake</span><span class="caret"></span></a>
                                                <ul class="dropdown-submenu">
                                                    <li><a href="river.html" class="nav-link text-left">Guideline</a></li>
                                                    <li><a href="river_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Boat</span><span class="caret"></span></a>
                                                <ul class="dropdown-submenu">
                                                    <li><a href="boat.html" class="nav-link text-left">Guideline</a></li>
                                                    <li><a href="boat_quiz_start.html" class="nav-link text-left">Quiz</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"> <span class="nav-label">Locations</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="swimschool.php" class="nav-link text-left">Swimming schools</a></li>
                      <li><a href="top5.html" class="nav-link text-left">Kid-friendly beaches</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"> <span class="nav-label">First Aid</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="cpr.html" class="nav-link text-left">CPR</a></li>
                      <li><a href="sea_creature.html" class="nav-link text-left">Marine Animal bites</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false"> <span class="nav-label">Safety Tips</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="beach_flag.html" class="nav-link text-left">Beach Flag</a></li>
                      <li><a href="beach_sign.html" class="nav-link text-left">Beach Warning Sign</a></li>
                    </ul>
                  </li>
                  <li><a href="factor.html" class="nav-link text-left">Facts & Info</a></li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>
            </div>

        </div>


        <?php
//connect to database
  $DB_SERVER = "database-1.cdladq1wak27.us-west-2.rds.amazonaws.com";
  $DB_USERNAME = "master";
  $DB_PASSWORD = "master123";
  $DB_DATABASE = "innodb";
  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD);
// check connect success or not
/*  if(!$connection){
        echo "fail";
  }else{
        echo "success";
 }
*/
  //if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
  $database = mysqli_select_db($connection, $DB_DATABASE);
    ?>

            <div class="hero-2" style="background-image: url('images/swimschool.jpg');">
                <div class="container">
                    <div class="row justify-content-center text-center align-items-center">
                        <div class="col-md-12">



                            <!-- Get form -->
                            <form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
                                <h2>Swimming Lesson</h2>
                                <span class="sub-title">Fine The Place To Learn Swim</span>

                                <table border="0" align="center">
                                    <td>
                                        <input type="text" class="form-control search-slt" name="POSTCODE" placeholder="Postcode" />
                                    </td>
                                    <td>
                                        <select name="DIST" class="form-control search-slt">
                                            <option value="1km">1km</option>
                                            <option value="5km">5km</option>
                                            <option value="10km">10km</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="CATE" class="form-control search-slt">
                                            <option value="ALL">All</option>
                                            <option value="Swim School">Swim School</option>
                                            <option value="Swim and Survive">Swim and Survive</option>
                                            <option value="Nippers">Nippers</option>
                                            <option value="Express Swim Lessons">Express Swim Lessons</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit" class="btn btn-danger wrn-btn" value="SEARCH" name="SEARCH" />
                                    </td>
                                </table>
                            </form>



                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section py-5 custom-border-bottom">
                <div class="container">
                    <div>
                        <img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png" align="" />
                        <span><b>Searching Result</b></span><br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png" align="" />
                        <span><b>Swim School: </b> Swimming classes which are designed to teach kids all the swimming skills they need to know to be safe during water activities </span><br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png" align="" />
                        <span><b>Swim and Survive: </b> Swim and Survive is a special swimming classes from Royal Life Saving to increase swimming skills and prevent from drownings
                                    </span><br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/pink-dot.png" align="" />
                        <span ><b>Nippers: </b> Nippers is a program where children get together and practice their surf lifesaving techniques
                                    </span><br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png" align="" />
                        <span ><b>Express Swim Lessons: </b> Express Lessons are the swimming classes that is conducted during school holidays
                                    </span>

                        <p align="right"><b>Tip:</b> Click on marker for more information</p>


                    </div>
                    <div class="row">
                        <div class="col-md-6">


                            <!-- Display table data. -->
                            <table border="1" cellpadding="2" cellspacing="2">
                                <!--tr>
    <td>NAME</td>
    <td>ADDRESS</td>
    <td>SUBURB</td>
    <td>POSTCODE</td>
    <td>BUSINESS CATEGORY</td>
    <td>CONTACT</td>
    <td>WEBSITE</td>
  </tr-->


                                <?php

if(isset($_POST['SEARCH'])){
//get input data
$postcode = $_POST['POSTCODE'];
$distance = $_POST['DIST'];
$cate = $_POST['CATE'];


//SwimSchoolList
$resultSSL = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE businesscategory='Swim School'");
$nameSSL = [];
$addressSSL = [];
$suburbSSL = [];
$postcodeSSL = [];
$cateSSL = [];
$contSSL = [];
//$webSSL = [];
$latSSL = [];
$longSSL = [];
while($query_data = mysqli_fetch_row($resultSSL)) {
//add data into array
array_push($nameSSL,$query_data[0]);
array_push($addressSSL,$query_data[1]);
array_push($suburbSSL,$query_data[2]);
array_push($postcodeSSL,$query_data[3]);
array_push($cateSSL,$query_data[4]);
array_push($contSSL,$query_data[5]);
//array_push($webSSL,$query_data[6]);
array_push($latSSL,$query_data[7]);
array_push($longSSL,$query_data[8]);
}

//SwimSurviveList
$resultSSV = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE businesscategory='Swim and Survive'");
$nameSSV = [];
$addressSSV = [];
$suburbSSV = [];
$postcodeSSV = [];
$cateSSV = [];
$contSSV = [];
$webSSV = [];
$latSSV = [];
$longSSV = [];

      while($query_data = mysqli_fetch_row($resultSSV)) {
//add data into array
array_push($nameSSV,$query_data[0]);
array_push($addressSSV,$query_data[1]);
array_push($suburbSSV,$query_data[2]);
array_push($postcodeSSV,$query_data[3]);
array_push($cateSSV,$query_data[4]);
array_push($contSSV,$query_data[5]);
array_push($webSSV,$query_data[6]);
array_push($latSSV,$query_data[7]);
array_push($longSSV,$query_data[8]);
}

//NipperList
$resultNIP = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE businesscategory='Nippers'");
$nameNIP = [];
$addressNIP = [];
$suburbNIP = [];
$postcodeNIP = [];
$cateNIP = [];
$contNIP = [];
$webNIP = [];
$latNIP = [];
$longNIP = [];
while($query_data = mysqli_fetch_row($resultNIP)) {
//add data into array
array_push($nameNIP,$query_data[0]);
array_push($addressNIP,$query_data[1]);
array_push($suburbNIP,$query_data[2]);
array_push($postcodeNIP,$query_data[3]);
array_push($cateNIP,$query_data[4]);
array_push($contNIP,$query_data[5]);
array_push($webNIP,$query_data[6]);
array_push($latNIP,$query_data[7]);
array_push($longNIP,$query_data[8]);
}

//ExpressSwimLessonList
$resultESL = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE businesscategory='Express Swim Lessons'");
$nameESL = [];
$addressESL = [];
$suburbESL = [];
$postcodeESL = [];
$cateESL = [];
$contESL = [];
$webESL = [];
$latESL = [];
$longESL = [];
while($query_data = mysqli_fetch_row($resultESL)) {
//add data into array
array_push($nameESL,$query_data[0]);
array_push($addressESL,$query_data[1]);
array_push($suburbESL,$query_data[2]);
array_push($postcodeESL,$query_data[3]);
array_push($cateESL,$query_data[4]);
array_push($contESL,$query_data[5]);
array_push($webESL,$query_data[6]);
array_push($latESL,$query_data[7]);
array_push($longESL,$query_data[8]);
}







/*
$resultall = mysqli_query($connection, "SELECT * FROM schoolSheet");
$nameallArray = [];
$addressallArray = [];
$suburballArray = [];
$postcodeallArray = [];
$categoryallArray = [];
$contactallArray = [];
$websiteallArray = [];
$latallArray = [];
$longallArray = [];

while($query_data = mysqli_fetch_row($resultall)) {
//add data into array
array_push($nameallArray,$query_data[0]);
array_push($addressallArray,$query_data[1]);
array_push($suburballArray,$query_data[2]);
array_push($postcodeallArray,$query_data[3]);
array_push($categoryallArray,$query_data[4]);
array_push($contactallArray,$query_data[5]);
array_push($websiteallArray,$query_data[6]);
array_push($latallArray,$query_data[7]);
array_push($longallArray,$query_data[8]);
}*/

if($cate == "ALL"){
//show all data in the postcode
$result = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE postcode='$postcode'");
}
else{
//show category data in the postcode
$result = mysqli_query($connection, "SELECT * FROM schoolSheet WHERE postcode='$postcode' AND businesscategory='$cate'");
}

$nameArray = [];
$addressArray = [];
$suburbArray = [];
$postcodeArray = [];
$categoryArray = [];
$contactArray = [];
$websiteArray = [];
$latArray = [];
$longArray = [];




if(mysqli_num_rows($result) != 0){
echo "<table border='1'>
<tr>
<th>Place Name</th>
<th>Address</th>
        <th>Business Category</th>
        <th>Contact</th>
       </tr>";

while($query_data = mysqli_fetch_row($result)) {
  //add data into array
  array_push($nameArray,$query_data[0]);
  array_push($addressArray,$query_data[1]);
  array_push($suburbArray,$query_data[2]);
  array_push($postcodeArray,$query_data[3]);
  array_push($categoryArray,$query_data[4]);
  array_push($contactArray,$query_data[5]);
  array_push($websiteArray,$query_data[6]);
  array_push($latArray,$query_data[7]);
  array_push($longArray,$query_data[8]);

echo "<tr>";
  echo "<td><a href='",$query_data[6],"'>",$query_data[0], "</a></td>",
       "<td>",$query_data[1], " </td>",
       "<td>",$query_data[4], " </td>",
       "<td>",$query_data[5], " </td>";
echo "</tr>";
}
}
      else{
          if($postcode == ""){
            echo '<script language="javascript">';
            echo 'alert("Please enter the postcode")';
            echo '</script>';
          }else{
            echo '<script language="javascript">';
            echo 'alert("No result for this postcode area")';
            echo '</script>';
          }
      }

}
?>

                            </table>
                        </div>
                        <div class="col-md-6">


                            <div id="map"></div>

                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Clean up. -->
    <?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>

        <script>
            var dist = "<?php echo $distance; ?>";
            var cate = "<?php echo $cate; ?>";
            var input = "<?php echo $postcode; ?>";
            //  var input = document.getElementById("POSTCODE").value;
            console.log(dist);
            console.log(input);
            console.log(cate);

            function initMap(position) {
                // Map options
                var options = {
                    zoom: 12,
                    center: {
                        lat: -37.8409,
                        lng: 144.9464
                    }
                }


                // get database data from php
                //swimschool
                var resultSSL = <?php echo json_encode($resultSSL); ?>;
                var nameSSL = <?php echo json_encode($nameSSL); ?>;
                console.log(nameSSL);
                var addressSSL = <?php echo json_encode($addressSSL); ?>;
                var suburbSSL = <?php echo json_encode($suburbSSL); ?>;
                var postcodeSSL = <?php echo json_encode($postcodeSSL); ?>;
                var cateSSL = <?php echo json_encode($cateSSL); ?>;
                var contSSL = <?php echo json_encode($contSSL); ?>;
                //var webSSL = "<?php echo json_encode($webSSL); ?>";
                var webSSL = ["http://www.hilac.com.au", "N/A", "http://www.aquazone.com.au", "http://www.ngshire.vic.gov.au/Council-Services/Sports-Lei", "N/A", "http://gss.vic.edu.au", "N/A", "http://bluewater.org.au", "http://www.mslc.com.au", "http://www.harleystreetswimschool.com", "http://www.federation.edu.au/unisports", "http://www.colprim.vic.edu.au", "http://www.sppyramidhill.catholic.edu.au", "http://www.campaspeaquatics.com.au", "N/A", "http://www.benalla.ymca.org.au/", "https://bsc.boroondaraleisure.com.au/swim/swimming-lessons", "http://myswimworld.com.au/glenwaverley/", "http://www.bluewater.org.au/Home", "https://aquastyleswimschool.com/", "https://aquastyleswimschool.com/", "https://www.bendigo.vic.gov.au/Things-To-Do/aquatic-facility/faith-leech-aquatic-centre", "https://www.faithleechaquatic.com.au/swim/aquatic-facilities", "https://www.hume.vic.gov.au/Leisure_Sport_amp_Recreation/Leisure_Centres/Broadmeadows_Aquatic_and_Leisure_Centre", "https://www.swimcentre.com", "https://cggsaquatic.com.au/swim-school/about/", "https://chewtonpool.com/", "https://www.cobdenhealth.org.au/services/health-and-fitness", "https://diamondcreek.ymca.org.au/", "http://www.campaspeaquatics.com.au/aqua/ewmac", "https://www.bendigo.vic.gov.au/Things-To-Do/aquatic-facility/elmore-swimming-pool", "http://www.southgippslandpools.ymca.org.au/discover/foster-outdoor-pool.html", "https://www.mrsc.vic.gov.au/See-Do/Swimming-Sport-Fitness/Pools-Leisure-Centres/Gisborne-Aquatic-Centre", "https://watermarcbanyule.com.au", "https://www.stonnington.vic.gov.au/Discover/Harold-Holt-Swim-Centre", "N/A", "N/A", "https://www.gurriwanyarrawc.com.au/", "https://www.geelongaustralia.com.au/kardiniapool/default.aspx", "N/A", "http://www.campaspeaquatics.com.au/aqua/outdoor%20pools/kyabram", "https://www.mrsc.vic.gov.au/See-Do/Swimming-Sport-Fitness/Pools-Leisure-Centres/Kyneton-Toyota-Sports-Aquatic-Centre", "http://leisurecity.ymca.org.au", "https://jumpswimschools.com.au/mornington/", "https://www.kiddieswim.com.au/home.html", "https://www.alpineshire.vic.gov.au/residents/things-do/recreation/swimming-pools", "https://www.nobleparkaquaticcentre.com.au", "http://www.northlodgeswimmingacademy.com.au", "N/A", "http://www.numurkah.ymca.org.au", "http://peninsulaswimmingcentre.com.au/", "https://leisure.yarracity.vic.gov.au/locations/richmond-recreation-centre", "https://www.southpacifichc.com.au › clubs › st-kilda-club", "https://www.stateswim.com.au/", "http://www.wangaratta.ymca.org.au/", "https://www.caseyarc.ymca.org.au", "https://www.activemoreland.com.au/about-us/centre-locations/coburg-leisure-centre/", "https://elthamleisurecentre.com.au", "https://hawthorn.boroondaraleisure.com.au/", "N/A", "https://aquapulse.wynactive.com.au/learn-to-swim", "https://kew.boroondaraleisure.com.au", "https://www.kilsythcp.com.au", "https://www.sports.org.au › swimming", "https://milduraaquaticfacilities.com.au", "http://www.aqualink.com.au › Aqualink-Nunawading-Page", "https://www.pelicanparkrec.com.au", "https://www.ballarataquaticcentre.com", "https://www.aquarena.com.au", "http://aquamoves.com.au", "https://www.healthways.com.au", "https://ascotvalelc.com.au", "https://www.hume.vic.gov.au/Leisure_Sport_amp_Recreation/Leisure_Centres/Broadmeadows_Aquatic_and_Leisure_Centre", "https://www.activemoreland.com.au/aquatic-and-leisure-centres/brunswick-baths/", "https://carltonbaths.ymca.org.au/", "https://kingstonactive.com.au/learn-to-swim", "https://www.activemoreland.com.au", "https://horsham.ymca.org.au/", "https://www.banyule.vic.gov.au/Banyule-leisure/Ivanhoe-Aquatic-Banyule", "https://www.knoxleisureworks.com.au/", "https://www.maribyrnong.vic.gov.au › mac › Home", "https://meltonwaves.com.au", "http://www.northcote.ymca.org.au", "https://grampians.ymca.org.au/where-we-are/portland/Pages/default.aspx", "https://www.hume.vic.gov.au/Leisure_Sport_amp_Recreation/Leisure_Centres/Sunbury_Aquatic_and_Leisure_Centre", "https://www.brimbank.vic.gov.au/leisure-parks-and-facilities/sunshine-leisure-centre-slc", "https://www.windyhill.com.au/", "http://www.wodongasportsandleisure.com.au/", "http://www.aqualink.com.au › aqualink-box-hill-page", "https://grampians.ymca.org.au/what-we-do/aquatics/ararat/Pages/default.aspx", "http://www.bluewater.org.au › Home", "http://www.swimcentre.com", "https://www.claytonaquaticshealthclub.com.au › Home", "http://www.dandenongoasis.com.au", "https://kensington.ymca.org.au", "http://www.mslc.com.au/", "https://www.monashaquaticrecreationcentre.com.au", "https://www.oakleighrecreationcentre.com.au", "https://www.goodlifehealthclubs.com.au › clubs › sandringham", "https://www.mitchellshire.vic.gov.au/venues/seymour-sports-and-aquatic-centre", "https://www.brimbank.vic.gov.au/leisure-parks-and-facilities/st-albans-leisure-centre-salc", "http:/ngshire.vic.gov.au", "https://www.vickifieldswimschool.com.au", "http://www.wangaratta.ymca.org.au", "http://www.warragul.ymca.org.au", "https://whittlesea.ymca.org.au", "http://www.wonthaggi.ymca.org.au", "https://www.yarracentre.com.au/", "https://www.geelongaustralia.com.au/splashdown/default.aspx", "https://www.geelongaustralia.com.au/waterworld/default.aspx", "https://www.bkgymswim.com.au", "https://www.kingswim.com.au/bayside/", "https://www.kingswim.com.au/caroline-springs/", "https://www.kingswim.com.au/chirnside-park/", "https://www.kingswim.com.au/clyde-north/", "https://www.kingswim.com.au/derrimut/", "https://www.kingswim.com.au/dingley/", "https://www.kingswim.com.au/frankston/", "https://www.kingswim.com.au/langwarrin/", "https://www.kingswim.com.au/mernda/", "https://www.kingswim.com.au/mornington/", "https://www.kingswim.com.au/narre-warren/", "https://www.kingswim.com.au/wantirna/", "https://www.kingswim.com.au/st-kilda-east/", "https://leisure.yarracity.vic.gov.au/locations/collingwood-leisure-centre", "http://ilovetrac.com.au/Pages/Home.aspx", "https://www.genesisfitness.com.au/gym/vic/dandenong/swim-school", "https://www.genesisfitness.com.au/gym/vic/wantirna/swim-school", "https://www.starfitness.com.au/", "https://www.goodlifehealthclubs.com.au/clubs/armadale/", "https://melbournesportscentres.com.au › msac", "https://inputfitness.com.au", "https://www.kiddieswim.com.au/home.html", "https://www.kiddieswim.com.au/home.html", "https://jumpswimschools.com.au/berwick/", "https://jumpswimschools.com.au/bundoora/", "https://jumpswimschools.com.au/caroline-springs/", "https://jumpswimschools.com.au/carrum-downs/", "https://jumpswimschools.com.au/craigieburn/", "https://jumpswimschools.com.au/cranbourne-west/", "https://jumpswimschools.com.au/dandenong/", "https://jumpswimschools.com.au/deer-park/", "https://jumpswimschools.com.au/fairfield/", "https://jumpswimschools.com.au/ferntree-gully/", "https://jumpswimschools.com.au/jump-flemington/", "https://jumpswimschools.com.au/geelong-west/", "https://jumpswimschools.com.au/hoppers-crossing/", "https://jumpswimschools.com.au/keilor-park/", "https://jumpswimschools.com.au/keysborough/", "https://jumpswimschools.com.au/lara/", "https://jumpswimschools.com.au/lynbrook/", "https://jumpswimschools.com.au/maidstone/", "https://jumpswimschools.com.au/narre-warren/", "https://jumpswimschools.com.au/pakenham/", "https://jumpswimschools.com.au/jump-pakenham-lakeside/", "https://jumpswimschools.com.au/point-cook/", "https://jumpswimschools.com.au/reservoir/", "https://jumpswimschools.com.au/rowville/", "https://jumpswimschools.com.au/somerville/", "https://jumpswimschools.com.au/south-morang/", "https://jumpswimschools.com.au/sunbury/"]
                var latSSL = <?php echo json_encode($latSSL); ?>;
                var longSSL = <?php echo json_encode($longSSL); ?>;

                //swim and survive
                var nameSSV = <?php echo json_encode($nameSSV); ?>;
                console.log(nameSSV);
                var addressSSV = <?php echo json_encode($addressSSV); ?>;
                var suburbSSV = <?php echo json_encode($suburbSSV); ?>;
                var postcodeSSV = <?php echo json_encode($postcodeSSV); ?>;
                var cateSSV = <?php echo json_encode($cateSSV); ?>;
                var contSSV = <?php echo json_encode($contSSV); ?>;
                var webSSV = <?php echo json_encode($webSSV); ?>;
                var latSSV = <?php echo json_encode($latSSV); ?>;
                var longSSV = <?php echo json_encode($longSSV); ?>;

                //nippers
                var nameNIP = <?php echo json_encode($nameNIP); ?>;
                console.log(nameNIP);
                var addressNIP = <?php echo json_encode($addressNIP); ?>;
                var suburbNIP = <?php echo json_encode($suburbNIP); ?>;
                var postcodeNIP = <?php echo json_encode($postcodeNIP); ?>;
                var cateNIP = <?php echo json_encode($cateNIP); ?>;
                var contNIP = <?php echo json_encode($contNIP); ?>;
                var webNIP = <?php echo json_encode($webNIP); ?>;
                var latNIP = <?php echo json_encode($latNIP); ?>;
                var longNIP = <?php echo json_encode($longNIP); ?>;

                //express swim lessons
                var nameESL = <?php echo json_encode($nameESL); ?>;
                console.log(nameESL);
                var addressESL = <?php echo json_encode($addressESL); ?>;
                var suburbESL = <?php echo json_encode($suburbESL); ?>;
                var postcodeESL = <?php echo json_encode($postcodeESL); ?>;
                var cateESL = <?php echo json_encode($cateESL); ?>;
                var contESL = <?php echo json_encode($contESL); ?>;
                var webESL = <?php echo json_encode($webESL); ?>;
                var latESL = <?php echo json_encode($latESL); ?>;
                var longESL = <?php echo json_encode($longESL); ?>;



                //result
                var nameArray = <?php echo json_encode($nameArray); ?>;
                var addressArray = <?php echo json_encode($addressArray); ?>;
                var suburbArray = <?php echo json_encode($suburbArray); ?>;
                var postcodeArray = <?php echo json_encode($postcodeArray); ?>;
                var categoryArray = <?php echo json_encode($categoryArray); ?>;
                var contactArray = <?php echo json_encode($contactArray); ?>;
                var websiteArray = <?php echo json_encode($websiteArray); ?>;
                var latArray = <?php echo json_encode($latArray); ?>;
                var longArray = <?php echo json_encode($longArray); ?>;
                console.log(nameArray);
                console.log(latArray);
                console.log(longArray);
                // New map
                var map = new google.maps.Map(document.getElementById('map'), options);
                //setting boundary
                //var bounds  = new google.maps.LatLngBounds();
                //content







                var infowindow = new google.maps.InfoWindow;

                var marker, i;
                if (cate == "ALL") {

                    //swim school
                    for (i = 0; i < nameSSL.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>' + addressSSL[i] +
                                    '<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }


                    //swim and survive
                    for (i = 0; i < nameSSV.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>' + addressSSV[i] +
                                    '<br>' + contSSL[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }

                    //nippers
                    for (i = 0; i < nameNIP.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>' + addressNIP[i] +
                                    '<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }

                    //Express Swim Lessons

                    for (i = 0; i < nameESL.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latESL[i], longESL[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>' + addressESL[i] +
                                    '<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));

                    }

                } else if (cate == "Swim School") {

                    for (i = 0; i < nameSSL.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>' + addressSSL[i] +
                                    '<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }



                } else if (cate == "Swim and Survive") {

                    for (i = 0; i < nameSSV.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>' + addressSSV[i] +
                                    '<br>' + contSSL[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }

                } else if (cate == "Nippers") {
                    for (i = 0; i < nameNIP.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>' + addressNIP[i] +
                                    '<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }
                } else {


                    for (i = 0; i < nameESL.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latESL[i], longESL[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>' + addressESL[i] +
                                    '<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                infowindow.open(map, marker);
                            }
                        })(marker, i));

                    }
                }

                if (nameArray.length != 0) {
                    //marker
                    //var marker, j;
                    for (i = 0; i < nameArray.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latArray[i], longArray[i]),
                            icon: {
                                url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                            },
                            map: map
                        });
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                //               infowindow.setContent(nameArray[i]);

                                infowindow.setContent('<div><h3>' + nameArray[i] + '</h3><p>' + addressArray[i] +
                                    '<br>' + contactArray[i] + '<br>' + categoryArray[i] + '<br><a href=' + websiteArray[i] + '>' + websiteArray[i] + '</a></p></div>');


                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                        if (dist == "1km") {
                            map.setZoom(13);
                        } else if (dist == "5km") {
                            map.setZoom(12);
                        } else {
                            map.setZoom(10);
                        }
                        map.setCenter(marker.getPosition());
                    }

                }
            }

        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkAJUTwYmqWrBWDjRAp0bRy8MSG2BHuXU&callback=initMap">


        </script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.min.js"></script>

</body>

</html>
