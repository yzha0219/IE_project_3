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
                      aria-expanded="false"> <span class="nav-label">Location</span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="swimschool.php" class="nav-link text-left">Swim School</a></li>
                      <li><a href="top5.html" class="nav-link text-left">Kid-friendly Beaches</a></li>
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
                                            <option value="5km">5km</option>
                                            <option value="10km">10km</option>
                                            <option value="50km">50km</option>
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
                        <img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png" align="" />
                        <span><b>Swim School: </b> Swimming classes which are designed to teach kids all the swimming skills they need to know to be safe during water activities </span>
                        <br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png" align="" />
                        <span><b>Swim and Survive: </b> Swim and Survive is a special swimming classes from Royal Life Saving to increase swimming skills and prevent from drownings
                                    </span>
                        <br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/pink-dot.png" align="" />
                        <span><b>Nippers: </b> Nippers is a program where children get together and practice their surf lifesaving techniques
                                    </span>
                        <br>
                        <img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png" align="" />
                        <span><b>Express Swim Lessons: </b> Express Lessons are the swimming classes that is conducted during school holidays
                                    </span>

                        <p align="right"><b>Tip:</b> Click on marker for more information</p>


                    </div>
                    <div class="row">
                        <div class="col-md-0">


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


    if($postcode == ""){
            echo '<script language="javascript">';
            echo 'alert("Please enter the postcode")';
            echo '</script>';}

}
?>

                            </table>
                        </div>
                        <div class="col-md-12">


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

            var dict = {
                '3000': '-37.813/144.961',
                '3002': '-37.813/144.984',
                '3003': '-37.809/144.947',
                '3004': '-37.842/144.976',
                '3008': '-37.818/144.944',
                '3011': '-37.798/144.895',
                '3012': '-37.799/144.871',
                '3013': '-37.817/144.884',
                '3015': '-37.843/144.878',
                '3016': '-37.86/144.892',
                '3018': '-37.865/144.819',
                '3019': '-37.786/144.855',
                '3020': '-37.795/144.809',
                '3021': '-37.744/144.804',
                '3022': '-37.778/144.802',
                '3023': '-37.767/144.766',
                '3024': '-37.878/144.615',
                '3025': '-37.835/144.85',
                '3027': '-37.86/144.743',
                '3028': '-37.877/144.778',
                '3029': '-37.844/144.673',
                '3030': '-37.897/144.744',
                '3031': '-37.794/144.926',
                '3032': '-37.776/144.889',
                '3033': '-37.742/144.866',
                '3034': '-37.761/144.862',
                '3037': '-37.7/144.766',
                '3038': '-37.699/144.787',
                '3039': '-37.766/144.92',
                '3040': '-37.75/144.911',
                '3044': '-37.724/144.938',
                '3046': '-37.704/144.924',
                '3047': '-37.684/144.927',
                '3051': '-37.799/144.949',
                '3053': '-37.801/144.966',
                '3055': '-37.763/144.943',
                '3056': '-37.767/144.962',
                '3057': '-37.77/144.976',
                '3058': '-37.745/144.964',
                '3059': '-37.637/144.892',
                '3060': '-37.706/144.969',
                '3061': '-37.666/144.96',
                '3064': '-37.589/144.919',
                '3066': '-37.802/144.987',
                '3067': '-37.806/145.002',
                '3071': '-37.758/145.004',
                '3072': '-37.741/145.006',
                '3073': '-37.714/145.01',
                '3074': '-37.682/145.013',
                '3075': '-37.667/145.014',
                '3076': '-37.641/145.028',
                '3079': '-37.766/145.042',
                '3082': '-37.663/145.062',
                '3095': '-37.713/145.155',
                '3101': '-37.805/145.037',
                '3103': '-37.81/145.083',
                '3104': '-37.793/145.084',
                '3106': '-37.76/145.146',
                '3107': '-37.765/145.113',
                '3108': '-37.785/145.125',
                '3109': '-37.782/145.162',
                '3121': '-37.819/145.001',
                '3122': '-37.823/145.033',
                '3123': '-37.829/145.05',
                '3125': '-37.849/145.116',
                '3128': '-37.82/145.124',
                '3129': '-37.807/145.129',
                '3130': '-37.821/145.151',
                '3131': '-37.818/145.176',
                '3132': '-37.818/145.198',
                '3136': '-37.794/145.284',
                '3138': '-37.78/145.322',
                '3140': '-37.758/145.355',
                '3142': '-37.842/145.014',
                '3143': '-37.858/145.02',
                '3144': '-37.857/145.035',
                '3145': '-37.878/145.063',
                '3149': '-37.877/145.129',
                '3150': '-37.91/145.185',
                '3152': '-37.853/145.229',
                '3153': '-37.846/145.265',
                '3155': '-37.858/145.283',
                '3156': '-37.883/145.28',
                '3161': '-37.871/145.022',
                '3162': '-37.894/145.025',
                '3163': '-37.892/145.056',
                '3165': '-37.921/145.066',
                '3168': '-37.919/145.126',
                '3170': '-37.928/145.177',
                '3171': '-37.948/145.152',
                '3173': '-37.996/145.169',
                '3174': '-37.968/145.176',
                '3175': '-37.985/145.211',
                '3178': '-37.921/145.249',
                '3181': '-37.851/144.998',
                '3182': '-37.863/144.982',
                '3183': '-37.863/145.002',
                '3184': '-37.88/144.987',
                '3185': '-37.886/145.007',
                '3186': '-37.909/144.997',
                '3187': '-37.916/145.016',
                '3188': '-37.938/145.01',
                '3191': '-37.953/145.015',
                '3192': '-37.963/145.066',
                '3193': '-37.983/145.04',
                '3194': '-37.981/145.068',
                '3195': '-37.992/145.08',
                '3198': '-38.11/145.137',
                '3199': '-38.148/145.141',
                '3204': '-37.923/145.039',
                '3205': '-37.834/144.962',
                '3207': '-37.839/144.938',
                '3212': '-38.024/144.399',
                '3214': '-38.072/144.359',
                '3216': '-38.179/144.338',
                '3220': '-38.153/144.338',
                '3226': '-38.26/144.533',
                '3228': '-38.32/144.326',
                '3300': '-37.738/142.025',
                '3305': '-38.351/141.602',
                '3337': '-37.671/144.556',
                '3338': '-37.71/144.575',
                '3355': '-37.531/143.831',
                '3356': '-37.596/143.836',
                '3400': '-36.716/142.198',
                '3429': '-37.576/144.719',
                '3500': '-34.196/142.146',
                '3555': '-36.801/144.238',
                '3564': '-36.137/144.747',
                '3585': '-35.342/143.55',
                '3630': '-36.379/145.404',
                '3672': '-36.554/145.98',
                '3677': '-36.358/146.311',
                '3690': '-36.125/146.852',
                '3750': '-37.614/145.021',
                '3752': '-37.636/145.085',
                '3754': '-37.599/145.086',
                '3802': '-37.977/145.261',
                '3805': '-38.017/145.307',
                '3806': '-38.041/145.342',
                '3809': '-38.065/145.413',
                '3810': '-38.071/145.476',
                '3818': '-38.131/145.853',
                '3820': '-38.157/145.933',
                '3825': '-38.181/146.257',
                '3840': '-38.231/146.414',
                '3844': '-38.195/146.532',
                '3850': '-38.103/147.075',
                '3875': '-37.828/147.61',
                '3910': '-38.153/145.196',
                '3915': '-38.305/145.183',
                '3922': '-38.456/145.232',
                '3930': '-38.191/145.093',
                '3931': '-38.23/145.048',
                '3934': '-38.267/145.026',
                '3936': '-38.338/144.972',
                '3939': '-38.367/144.909',
                '3941': '-38.38/144.811',
                '3976': '-38.036/145.266',
                '3977': '-38.078/145.3',
                '3978': '-38.099/145.341'
            };


            console.log(dict[input]);
            postlocation = dict[input].split("/");
            console.log(postlocation[0]);
            console.log(postlocation[1]);


            function initMap(position) {
                // Map options

                   var options = {
                    zoom: 12,
                    center: {
                        lat: -37.8409,
                        lng: 144.9464
                    }
                }

                   var options2 = {
                    zoom: 12,
                    center: {
                        lat: Number(postlocation[0]),
                        lng: Number(postlocation[1])
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

                if(input == ""){
                    var map = new google.maps.Map(document.getElementById('map'), options);}
                else{
                    var map = new google.maps.Map(document.getElementById('map'), options2);
                }

                //setting boundary
                var bounds  = new google.maps.LatLngBounds();
                //content

                var boo = 0;


                var infowindow = new google.maps.InfoWindow;

                var marker, i;
                if (cate == "ALL") {

                    //swim school
                    for (i = 0; i < nameSSL.length; i++) {

                        var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latSSL[i], longSSL[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>Address:<br>' + addressSSL[i] +
                                                '<br>Contact:<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>Address:<br>' + addressSSL[i] +
                                                '<br>Contact:<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>Address:<br>' + addressSSL[i] +
                                                '<br>Contact:<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }

                    }



                    //swim and survive
                    for (i = 0; i < nameSSV.length; i++) {
                       var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latSSV[i], longSSV[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>Address:<br>' + addressSSV[i] +
                                                '<br>Contact:<br>' + contSSV[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>Address:<br>' + addressSSV[i] +
                                                '<br>Contact:<br>' + contSSV[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>Address:<br>' + addressSSV[i] +
                                                '<br>Contact:<br>' + contSSV[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }

                    }


                    //nippers
                    for (i = 0; i < nameNIP.length; i++) {
                        var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latNIP[i], longNIP[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>Address:<br>' + addressNIP[i] +
                                                '<br>Contact:<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>Address:<br>' + addressNIP[i] +
                                                '<br>Contact:<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>Address:<br>' + addressNIP[i] +
                                                '<br>Contact:<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }

                    }


                    //Express Swim Lessons

                    for (i = 0; i < nameESL.length; i++) {
               var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latESL[i], longESL[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latESL[i], longESL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>Address:<br>' + addressESL[i] +
                                                '<br>Contact:<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latESL[i], longESL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>Address:<br>' + addressESL[i] +
                                                '<br>Contact:<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latESL[i], longESL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>Address:<br>' + addressESL[i] +
                                                '<br>Contact:<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }

                    }



                } else if (cate == "Swim School") {
                    /*

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
                    }*/

                    for (i = 0; i < nameSSL.length; i++) {

                        var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latSSL[i], longSSL[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>Address:<br>' + addressSSL[i] +
                                                '<br>Contact:<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>Address:<br>' + addressSSL[i] +
                                                '<br>Contact:<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSL[i], longSSL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSL[i] + '</h3><p>Address:<br>' + addressSSL[i] +
                                                '<br>Contact:<br>' + contSSL[i] + '<br>' + cateSSL[i] + '<br><a href=' + webSSL[i] + '>' + webSSL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }





                    }



                } else if (cate == "Swim and Survive") {

                   for (i = 0; i < nameSSV.length; i++) {
                       var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latSSV[i], longSSV[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>Address:<br>' + addressSSV[i] +
                                                '<br>Contact:<br>' + contSSV[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>Address:<br>' + addressSSV[i] +
                                                '<br>Contact:<br>' + contSSV[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latSSV[i], longSSV[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameSSV[i] + '</h3><p>Address:<br>' + addressSSV[i] +
                                                '<br>Contact:<br>' + contSSV[i] + '<br>' + cateSSV[i] + '<br><a href=' + webSSV[i] + '>' + webSSV[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }

                    }

                } else if (cate == "Nippers") {
                            for (i = 0; i < nameNIP.length; i++) {
                        var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latNIP[i], longNIP[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>Address:<br>' + addressNIP[i] +
                                                '<br>Contact:<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>Address:<br>' + addressNIP[i] +
                                                '<br>Contact:<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latNIP[i], longNIP[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameNIP[i] + '</h3><p>Address:<br><br>' + addressNIP[i] +
                                                '<br>Contact:<br>' + contNIP[i] + '<br>' + cateNIP[i] + '<br><a href=' + webNIP[i] + '>' + webNIP[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }

                        }

                    }
                } else {



                    for (i = 0; i < nameESL.length; i++) {
               var ddd = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(postlocation[0], postlocation[1]), new google.maps.LatLng(latESL[i], longESL[i]));
                        var dd = ddd / 1000;
                        console.log(dd);
                        console.log(dist);
                        switch (dist) {
                            case "5km":
                                if (dd <= 5) {
                                    console.log("<5");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latESL[i], longESL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>Address:<br>' + addressESL[i] +
                                                '<br>Contact:<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "10km":

                                if (dd <= 10) {
                                    console.log("<10");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latESL[i], longESL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>Address:<br>' + addressESL[i] +
                                                '<br>Contact:<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }
                                break;
                            case "50km":
                                if (dd <= 50) {
                                    console.log("<50");
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(latESL[i], longESL[i]),
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                                        },
                                        map: map
                                    });
                                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent('<div><h3>' + nameESL[i] + '</h3><p>Address:<br>' + addressESL[i] +
                                                '<br>Contact:<br>' + contESL[i] + '<br>' + cateESL[i] + '<br><a href=' + webESL[i] + '>' + webESL[i] + '</a></p></div>');
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    boo =1;

                                }


                        }

                    }


                }
/*
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

                }*/


                if(boo == 0){

                    alert("Sorry, no result for this search");
                }
boo = 0;
            }

        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkAJUTwYmqWrBWDjRAp0bRy8MSG2BHuXU&callback=initMap"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&libraries=geometry"></script>
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

