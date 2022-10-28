<?php
error_reporting(0);
$source = '';
$source = $_GET['utm_source'];
$medium = '';
$medium = $_GET['utm_medium'];
$utm_id = '';
$utm_id = $_GET['utm_id'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="og:title" content="Chemex">
    <meta name="og:type" content="">
    <meta name="og:url" content="">
    <meta name="og:image" content="">
    <meta name="og:site_name" content="">
    <meta name="og:description" content="">
    <meta name="fb:page_id" content="">
    <meta name="og:email" content="">
    <meta name="og:phone_number" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <!-- Title  -->
    <title>Black or White Concepts</title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Additional Style css -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- cookiealert css -->
    <link rel="stylesheet" href="assets/css/cookiealert.css">




   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MM3M44P');</script>
<!-- End Google Tag Manager -->

</head>

<body class="homepage-1">


    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MM3M44P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative nav-container">
                <div class="row">
                    <div class="col-12">
                        <a class="navbar-brand" href="#">
                            <img class="navbar-brand-regular" src="assets/img/logo/bwc-logo.svg" alt="brand-logo">
                            <img class="navbar-brand-sticky" src="assets/img/logo/bwc-logo.svg" alt="sticky brand-logo">
                        </a>
                    </div>
                </div>
                <div class="navbar-inner d-flex align-items-center">
                    <div class="top-call mr-2"><a href="tel:+971528155771"><i class="fa fa-phone-alt"></i> +971 52 815 5771</a> <span class="d-none-575">|</span></div>
                    <div class="top-mail d-none-575"><a href="mailto:info@bwc.ae"><i class="fa fa-envelope"></i> info@bwc.ae</a></div>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section class="section welcome-area d-flex align-items-center">
            <div class="container">
                <div class="row  ">
                    <!-- Welcome Intro Start -->
                    <div class="col-lg-7 col-md-12 p-0">
                        <div class="banner-head">
                            <h1>Grow your Brand, Enhance Engagement, Lift your Business .</h1>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 p-0 welcome-form-wrap">

                        <div class="welcome-form">
                            <form name="form1" method="post" action="sucess/index.php">
                                <div class="form-title mx-5">
                                    <h2>Enquire Now</h2>
                                </div>

                                <div class="form-group mx-5">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>

                                <div class="form-group mx-5">
                                    <input type="text" placeholder="Company Name" class="form-control" name="companyname" required>
                                </div>

                                <div class="form-group mx-5">
                                    <select name="enquiry" id="" class="form-control" required>
                                        <option value="" default>Select Product/Service</option>
                                        <option value="branding">Branding</option>
                                        <option value="website">Website</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="onsite-remoteResources">Onsite/Remote Resources</option>
                                        <option value="custom-solutions">Custom Solutions</option>
                                        <option value="bpa">Business Process Automation</option>
                                        <option value="smart-health">BWC Smart Health</option>
                                        <option value="singu-guest-book">Singu Guest Book</option>
                                        <option value="hr-solution">Office Kit HR Solution</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group mx-5">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>

                                <div class="form-group mx-5">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group form-group-btn mx-5">
                                    <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                    <input type="hidden" name="utmid" value="<?php echo $utm_id; ?>">
                                    <input type="submit" value="Submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
        </section>

        <!-- ***** Branding Area ***** -->
        <section class="branding-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-head">
                            <h1>Black or White Concepts is <span>Dubai based design company</span> specialising in <span>branding</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="brand-box">
                            <div class="icon mb-2">
                                <!-- <img src="assets/img/icons/1.png" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="servIcon" viewBox="0 0 70.796 70.796">
                                    <path data-name="Path 932" d="M14.283,665.283v-3.236H11.047V658.81H7.81v-6.473h3.236v3.236h3.236v3.236H17.52v9.608H7.911v-3.236H4.675v-3.236H1.439v-3.236H7.911v3.236h3.236v3.236h3.236Zm48.141,48.141v-3.236H59.188v-3.236H55.952v-3.236H52.715v3.236h3.236v3.236h3.236v3.236ZM-1.8,686.117H7.81v-3.236H-1.8Zm60.986,0H68.8v-3.236H59.188ZM35.117,719.8v-9.608H31.881V719.8Zm-7.99-12.844H39.972v-3.236h6.372v-3.236H49.58v-3.236h3.236v-6.372h3.236V678.026H52.816v-6.372H49.58v-3.236H46.344v-3.236H39.972v-3.236H27.128v3.236H23.891v3.236h3.236v-3.236H39.972v3.236h6.372v3.236H49.58v6.372h3.236v12.844H49.58v6.372H46.344v3.236H39.972v3.236H27.128v-3.236H20.756v-3.236H17.52v-6.372H14.283V678.026H17.52V674.79H14.283v3.236H11.047v12.844h3.236v6.372H17.52v3.236h3.236v3.236h6.372Zm3.236-12.844h6.372v-3.236h3.236v-3.236h3.236v-6.372H39.972v-3.236H36.736V674.79H30.364v3.236H27.128V674.79H23.891v-3.236H20.655v-3.236h0v-9.608H17.418v-3.236H14.182v-3.236H10.946V649H7.709v3.236H4.473v3.236H1.236v3.236H-2v3.236H1.236v3.236H4.473v3.236H7.709v3.236H20.554v3.236H23.79v3.236h3.236v3.236h3.236V684.6H33.5v-3.236H30.263v-3.236h6.372v3.236h3.236v6.372H36.634v3.236H30.263v-3.236H27.026V684.5H23.79v3.236h3.236v3.236h3.236v3.236Zm4.855-35.3V649.2H31.982v9.608ZM4.675,713.425v-3.236H7.911v-3.236h3.236v-3.236h3.236v3.236H11.148v3.236H7.911v3.236Zm57.749-57.75v3.236H59.188v3.236H55.952v3.236H52.715v-3.236h3.236v-3.236h3.236v-3.236Z" transform="translate(2 -649)"></path>
                                </svg>
                            </div>
                            <div class="text"><h3>Corporate Branding Strategy</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="brand-box">
                            <div class="icon mb-2">
                                <!-- <img src="assets/img/icons/2.png" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="servIcon" viewBox="0 0 64.121 70.594">
                                    <path d="M2268.925,715.222v-3.236h22.453v-2.933h-8.7V706.12h11.833v5.866h9.608v9.608h-35.3v-3.236h22.453v-3.236h-22.453Zm-25.689,0h3.236v3.236h3.237v-3.236h-3.237v-3.236h-3.236Zm6.473,0h3.236v-3.236h-3.236Zm17.7-64.222v6.473h3.237V651Zm-14.463,67.358v-3.236h6.473v3.236Zm22.453-54.513h-12.844v3.236h-3.236v3.236h3.236v3.236h-3.236v-3.236h-3.236v3.236h-3.237V686.4h3.237v3.236h3.236v3.236h3.236v9.608h3.236v-3.236h6.473v3.236h-6.372v3.236h6.372v-3.236h3.237v-9.608h-3.237v3.236h-6.473v-3.236h-3.236v-3.236h-3.236V686.4h-3.236V673.554h3.236v6.473h3.236v-6.473h3.236v-3.236h-3.236v-3.236H2275.4v3.236h3.236v3.236h3.237V686.4h-3.237v3.236H2275.4v3.236h3.236v-3.236h3.237V686.4h3.236V673.554h-3.236v-3.236h-3.237v-3.236H2275.4Zm12.844,0h-3.237v3.236h3.237v-3.236h3.236v-3.236h-3.236Zm-3.237,28.925v3.236h3.237v3.236h3.236v-3.236h-3.236V692.77Zm-35.3,3.236h3.236V692.77h-3.236Zm-3.237,3.236h3.237v-3.236h-3.237Zm3.237-38.533h-3.237v3.236h3.237v3.236h3.236v-3.236h-3.236Zm-3.237,16.081H2240v3.236h6.473Zm45.006,3.236h6.473V676.79h-6.473Zm3.236,38.533h6.372v-3.236h-6.372Zm-25.689,0h-3.236v-3.236h3.236Z" transform="translate(-2240 -651)"></path>
                                </svg>
                            </div>
                            <div class="text"><h3>Brand Identity</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="brand-box">
                            <div class="icon mb-2">
                                <!-- <img src="assets/img/icons/3.png" alt=""> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="servIcon" viewBox="0 0 70.796 70.796">
                                    <path d="M1147.925,717.56V720.8h38.533V717.56h-38.533V698.243h3.236v3.236h6.473v3.236h12.844v-3.236h6.473v-3.236h9.608V717.56h3.236V695.107h-3.236v-3.236h-38.533v3.236h-3.236V717.56h3.135Zm3.236-19.317v-3.236h32.061v6.372h-6.473v3.236h-6.473v3.236H1163.8v-6.372h-6.473v-3.236h-6.169Zm16.081-10.518h-3.236V666.081h-12.844V653.236h-28.925v57.75h19.216v3.236H1119V650h35.3v3.236h3.236v3.236h3.236v3.236h3.236v3.236h3.236Zm-32.465-15.171h6.776v3.236h-12.844v-3.236Zm16.384,38.533v3.236h9.608v-3.236Zm23.059-39.444h2.933v-8.7h2.933v21.643h3.236v3.236h3.236v-3.236h-3.236V662.946h3.236v21.643h3.236V650.1h-9.608v9.608h-5.866v11.833Zm-39.443-5.461h6.776v3.236h-12.844v-3.236Zm48.445-6.372v-6.372h3.236v6.372Zm-22.453,3.236V659.81h-3.236v-3.236H1154.3v6.372h6.473Zm-25.992-3.236h6.776v3.236h-12.844V659.81Z" transform="translate(-1119 -650)"></path>
                                </svg>
                            </div>
                            <div class="text"><h3>Corporate Stationery </h3></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-none-991"></div>
                <!-- </div>
                <div class="row"> -->
                    <div class="col-lg-3 col-md-6">
                        <div class="brand-box">
                            <div class="icon mb-2">
                                <!-- <img src="assets/img/icons/4.png" alt=""> -->
                                <svg class="servIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70.594 70.695">
                                    <path d="M33.679,70.695V67.459h3.236v3.236Zm3.135-3.237V64.222H33.679V51.479H6.371V48.242H3.135V6.473H67.357V9.709h0V48.242H64.121V9.709H6.372V48.242H64.121v3.237H36.915v12.44H40.05v3.54Zm-6.372,0v-3.54h3.237v3.54ZM57.749,42.984V23.868H54.513V42.984H51.277V20.632h9.608v.1h.1v22.25Zm-12.844,0V30.341H41.669V42.983H38.432V27.1h9.709V42.983Zm-12.845,0v-6.27H28.824v6.27H25.588V33.477H35.2v.1h.1v9.406ZM19.62,25.789H12.844V22.553H25.689v3.236Zm0-6.473H12.844V16.08H25.689v3.236ZM67.357,6.473V3.236h3.237V6.473ZM0,6.473V3.236H3.135V0H67.357V3.236H3.237V6.473Z"></path>
                                </svg>
                            </div>
                            <div class="text"><h3>Corporate Presentations</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="brand-box">
                            <div class="icon mb-2">
                                <!-- <img src="assets/img/icons/5.png" alt=""> -->
                                <svg class="servIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70.493 70.796">
                                    <path d="M4298.339,666.182h6.776v12.844h0v3.236h-12.845v-3.236h0V666.182Zm19.115,6.473h10.114v3.236h-19.216v-3.236Zm-4.551,6.473h5.058v3.236h-9.608v-3.236Zm3.034-12.844h8.5v3.236h-16.081v-3.236Zm-4.349-6.473v-3.236h3.236v3.236Zm6.473,0v-3.236h3.236v3.236Zm-22.452,19.317h6.371V669.52h-6.371v9.608Zm8.8,33.274h3.237v3.236h27.206v3.236h-30.342v-3.236h0V712.4Zm3.237-3.236V712.4h27.206v3.236h-3.237v-6.473Zm20.025-3.236v3.236h-3.236v-3.236h-9.608v3.236h-3.236v-3.236h-15.373v-3.236h41.163v-5.664H4321.3v3.236h-3.236v-3.236h-21.846v5.664h-3.236v-5.664h0v-3.236h0v-5.158h-3.742V685.4h0V662.946h19.217v-3.236h-19.217v-6.473h41.669V650h-41.669v3.236H4286V685.4h44.905v3.236h-34.792v5.158h44.3V717.56h16.081V693.793h-3.237v27h-12.844V717.56h-3.237V705.929h-9.507Zm12.946-12.035h12.845v-3.236h-7.181V669.418h-3.236v-3.236h-8.9V653.338h-3.236V685.5h3.236V669.418h8.9v21.239h-2.529v3.236Zm4.854,20.43h3.236v-3.236h-3.236Zm-20.834-54.513v-3.236h3.236v3.236Z" transform="translate(-4286 -650)"></path>
                                </svg>
                            </div>
                            <div class="text"><h3>User Experience and Interface Designs</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="brand-box brand-box-btn">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Contact Us <img src="assets/img/right-arrow.png" alt="" class="ml-2"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"></div>
                </div>
            </div>
        </section>

        <!-- ***** Latest Works ***** -->
        <section class="latest-works section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="latest-head">
                            <h2>Latest works</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0"> 
                    <div class="work-slider owl-carousel d-flex flex-column justify-content-between">

                        <div class="item-box d-flex flex-column mr-50">
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/1.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Aniah Gallery</h3>
                                    <!-- <p>Dubai</p> -->
                                </div>
                            </div>
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/3.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Spentera</h3>
                                    <!-- <p>Jakarta</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item-box d-flex flex-column ml-50">
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/2.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Quazar Investment</h3>
                                    <!-- <p>Dubai</p> -->
                                </div>
                            </div>
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/4.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Dubai Stars</h3>
                                    <!-- <p>Dubai</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item-box d-flex flex-column mr-50">
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/1.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Aniah Gallery</h3>
                                    <!-- <p>Dubai</p> -->
                                </div>
                            </div>
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/3.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Spentera</h3>
                                    <!-- <p>Jakarta</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item-box d-flex flex-column ml-50">
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/2.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Quazar Investment</h3>
                                    <!-- <p>Dubai</p> -->
                                </div>
                            </div>
                            <div class="work-box mb-3">
                                <div class="work-img">
                                    <img src="assets/img/works/4.jpg" alt="">
                                </div>
                                <div class="name">
                                    <h3>Dubai Stars</h3>
                                    <!-- <p>Dubai</p> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 text-right">
                    <div class="work-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">View More <img src="assets/img/right-arrow.png" alt="" class="ml-2"></a></div>
                </div>
            </div>
        </section>

        <!-- *****  About us ***** -->
        <section class="about-area section ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-inner">
                            <h2>Who we are</h2>
                            <p class="big-para">At Black or White Concepts, the best B2B branding company, we conceptualize fresh and innovative ideas and convert them into viable and operational business ventures. The rationale behind the name reflects the philosophy of our company. Our life is full of choices and these days it has become quite complicated with too many choices and options at almost every step we take. Despite these wide choices we have, most of them don’t meet the very basic and simple needs of most consumers, and identifying the right option, in itself, is a challenge.</p>
                            <div class="bottom-about d-flex justify-content-between align-items-center">
                                <div class="logo"><img src="assets/img/logo/center-logo.png" alt=""></div>
                                <div class="content">
                                    <p>At Black or White concepts,</p>
                                    <h1>We make life simple.</h1>
                                    <p>We create solutions that are simple, direct yet innovative.</p>
                                </div>
                                <div class="about-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">View More <img src="assets/img/right-arrow.png" alt="" class="ml-2"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- *****  Clients  ***** -->
        <section class="clients-area section ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="client-head">
                            <h2>Awesome clients and brands we've worked with</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-md-575">
                    <div class="client-box client-box-1">
                        <img src="assets/img/clients/1.jpg" alt="">
                    </div>
                    <div class="client-box client-box-2">
                        <img src="assets/img/clients/2.jpg" alt="">
                    </div>
                    <div class="client-box client-box-2">
                        <img src="assets/img/clients/3.jpg" alt="">
                    </div>
                    <div class="client-box client-box-2">
                        <img src="assets/img/clients/4.jpg" alt="">
                    </div>
                    <div class="client-box client-box-3">
                        <img src="assets/img/clients/5.jpg" alt="">
                    </div>
                    <div class="client-box client-box-4">
                        <img src="assets/img/clients/6.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/7.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/8.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/9.jpg" alt="">
                    </div>
                    <div class="client-box client-box-5">
                        <img src="assets/img/clients/10.jpg" alt="">
                    </div>
                    <div class="client-box client-box-4">
                        <img src="assets/img/clients/11.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/12.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/13.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/14.jpg" alt="">
                    </div>
                    <div class="client-box client-box-5">
                        <img src="assets/img/clients/15.jpg" alt="">
                    </div>
                    <div class="client-box client-box-4">
                        <img src="assets/img/clients/16.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/17.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/18.jpg" alt="">
                    </div>
                    <div class="client-box">
                        <img src="assets/img/clients/19.jpg" alt="">
                    </div>
                    <div class="client-box client-box-5">
                        <img src="assets/img/clients/20.jpg" alt="">
                    </div>
                    <div class="client-box client-box-6">
                        <img src="assets/img/clients/21.jpg" alt="">
                    </div>
                    <div class="client-box client-box-7">
                        <img src="assets/img/clients/22.jpg" alt="">
                    </div>
                    <div class="client-box client-box-7">
                        <img src="assets/img/clients/23.jpg" alt="">
                    </div>
                    <div class="client-box client-box-7">
                        <img src="assets/img/clients/24.jpg" alt="">
                    </div>
                    <div class="client-box client-box-btn">
                        <a href="#" data-toggle="modal" data-target="#exampleModal0">View More</a>
                    </div>
                </div>
                <!-- Mobile view Clients -->
                <div class="row d-md-block-575">
                    <div class="col-12">
                        <div class="clients-slider owl-carousel">

                            <div class="client-box client-box-slider client-box-slider-first">
                                <img src="assets/img/clients/1.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/2.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/3.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/4.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/5.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/6.jpg" alt="">
                            </div>

                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/7.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/8.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/9.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/10.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/11.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/12.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/13.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/14.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/15.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/16.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/17.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/18.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/19.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/20.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/21.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/22.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/23.jpg" alt="">
                            </div>
                            <div class="client-box client-box-slider">
                                <img src="assets/img/clients/24.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- *****  Testimonials  ***** -->
        <section class="testi-area section ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="test-head">
                            <h2>What our clients say</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="testi-slider owl-carousel">
                            <div class="item-testi text-center">
                                <div class="img">
                                    <img src="assets/img/testi-3.png" alt="">
                                </div>
                                <div class="text"><p>The team is highly professional. Kudos to them for finding a niche that addressed our brand. Apart from that, they also made us stand out. Experts in their space.</p></div>
                                <div class="details">
                                    <h4>Nadeem Hood</h4>
                                    <p>CEO</p>
                                    <span>CPI Media Group, Dubai</span>
                                </div>
                            </div>
                            <div class="item-testi text-center">
                                <div class="img">
                                    <img src="assets/img/testi-2.png" alt="">
                                </div>
                                <div class="text"><p>A great collaboration with BWC. The team is unbelievably on top of things. They made our brand move forward in the market. Highly creative and well-informed. </p></div>
                                <div class="details">
                                    <h4>Majid Al Marri</h4>
                                    <p>CEO</p>
                                    <span>Dubai Land Department</span>
                                </div>
                            </div>

                            <div class="item-testi text-center">
                                <div class="img">
                                    <img src="assets/img/testi-1.png" alt="">
                                </div>
                                <div class="text"><p>A dedicated team, they are quite involved and so deliver quality results. We're too happy with their services and support. Love working with an energetic team. </p></div>
                                <div class="details">
                                    <h4>Sheik Al Mutawa</h4>
                                    <p>Director</p>
                                    <span>Business Development Dubai Tourism</span>
                                </div>
                            </div>

                            <div class="item-testi text-center">
                                <div class="img">
                                    <img src="assets/img/testi-3.png" alt="">
                                </div>
                                <div class="text"><p>The team is highly professional. Kudos to them for finding a niche that addressed our brand. Apart from that, they also made us stand out. Experts in their space.</p></div>
                                <div class="details">
                                    <h4>Nadeem Hood</h4>
                                    <p>CEO</p>
                                    <span>CPI Media Group, Dubai</span>
                                </div>
                            </div>
                            <div class="item-testi text-center">
                                <div class="img">
                                    <img src="assets/img/testi-2.png" alt="">
                                </div>
                                <div class="text"><p>A great collaboration with BWC. The team is unbelievably on top of things. They made our brand move forward in the market. Highly creative and well-informed. </p></div>
                                <div class="details">
                                    <h4>Majid Al Marri</h4>
                                    <p>CEO</p>
                                    <span>Dubai Land Department</span>
                                </div>
                            </div>

                            <div class="item-testi text-center">
                                <div class="img">
                                    <img src="assets/img/testi-1.png" alt="">
                                </div>
                                <div class="text"><p>A dedicated team, they are quite involved and so deliver quality results. We're too happy with their services and support. Love working with an energetic team. </p></div>
                                <div class="details">
                                    <h4>Sheik Al Mutawa</h4>
                                    <p>Director</p>
                                    <span>Business Development Dubai Tourism</span>
                                </div>
                            </div>


                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- *****  FAQ  ***** -->
        <section class="faq-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="faq-head">
                            <h1>Frequently asked questions</h1>
                            <!-- <p>Different layouts and styles for team sections.</p> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-accordion wow fadeInRight mt-30" data-wow-duration="1500ms">
                            <div class="accrodion-grp wow fadeIn faq-accrodion" data-wow-duration="1500ms" data-grp-name="faq-accrodion">
                                <div class="accrodion active mb-4">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>Why is branding important?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Branding, the process of creating a brand, helps you position your company or product in the market, devise a brand strategy, create your name, define your company's tone of voice, and design corporate and/ or product identity.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                                <div class="accrodion  mb-4">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>What makes a successful brand?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>A successful brand is innovative and comes up with novel ways to engage its market.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-accordion wow fadeInRight mt-30" data-wow-duration="1500ms">
                            <div class="accrodion-grp wow fadeIn" data-wow-duration="1500ms" data-grp-name="faq-accrodion">
                                <div class="accrodion mb-4">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>What is corporate stationery?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Corporate stationery comprises all official items or material objects where the company’s logo and name are printed. In other words, corporate stationery represents the company. Its scope reaches far beyond paper items.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                                <div class="accrodion  mb-4">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>What is your branding approach?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Through interaction, workshops, brainstorming sessions and finally research, we develop a branding strategy to create unique tools, designs etc. that reflect your strategic and business goals.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="faq-text text-center pt-40">
                        <a href="#" data-toggle="modal" data-target="#exampleModal0">View More</a>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <!-- *****  Contact section  ***** -->
        <section class="contact-section section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="img-contact"><img src="assets/img/contact.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6 p-0 bg-black">
                        <div class="form-area-contact">
                            <form name="form2" method="post" action="sucess/index.php">
                                <div class="form-title mx-5">
                                    <h2>Enquire Now</h2>
                                </div>

                                <div class="form-group mx-5">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>

                                <div class="form-group mx-5">
                                    <input type="text" placeholder="Company Name" class="form-control" name="companyname" required>
                                </div>

                                <div class="form-group mx-5">
                                    <select name="enquiry" id="" class="form-control" required>
                                        <option value="" default>Select Product/Service</option>
                                        <option value="branding">Branding</option>
                                        <option value="website">Website</option>
                                        <option value="ecommerce">E-commerce</option>
                                        <option value="onsite-remoteResources">Onsite/Remote Resources</option>
                                        <option value="custom-solutions">Custom Solutions</option>
                                        <option value="bpa">Business Process Automation</option>
                                        <option value="smart-health">BWC Smart Health</option>
                                        <option value="singu-guest-book">Singu Guest Book</option>
                                        <option value="hr-solution">Office Kit HR Solution</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group mx-5">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>

                                <div class="form-group mx-5">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group form-group-btn mx-5">
                                    <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                    <input type="hidden" name="utmid" value="<?php echo $utm_id; ?>">
                                    <input type="submit" value="Submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer-area section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copy-right d-flex justify-content-between">
                            <div class="logo"><img src="assets/img/logo/bwc-logo.svg" alt=""></div>
                            <div class="text">
                                <p>Copyright © 2022 BWC. All Rights Reserved. Designed by
                                    <a href="https://www.theaptdigital.com/?utm_source=bwc" target="_blank">
                                        <img src="assets/img/logo/viralmafia-logo-black.png" alt="Viralmafia Deigital Agency">
                                    </a> 
                                    
                                </p>
                            </div>
                            <div class="policy"><a href="#" data-toggle="modal" data-target="#myModal3" class="ml-2">Privacy Policy</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog log-sign row" role="document">
                                <div class="col-sm-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <!-- <h3>Get Our<br><span>PRODUCTS</span></h3> -->
                                        <p>Wish to enliven your unique ideas and vision? And stay in your customers' hearts forever.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal" aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Enquire Now</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log" id="profile2">
                                                                <form name="form3" method="post" action="sucess/index.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" placeholder="Company Name" class="form-control" name="companyname" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <select name="enquiry" id="" class="form-control" required>
                                                                                    <option value="" default>Select Product/Service</option>
                                                                                    <option value="branding">Branding</option>
                                                                                    <option value="website">Website</option>
                                                                                    <option value="ecommerce">E-commerce</option>
                                                                                    <option value="onsite-remoteResources">Onsite/Remote Resources</option>
                                                                                    <option value="custom-solutions">Custom Solutions</option>
                                                                                    <option value="bpa">Business Process Automation</option>
                                                                                    <option value="smart-health">BWC Smart Health</option>
                                                                                    <option value="singu-guest-book">Singu Guest Book</option>
                                                                                    <option value="hr-solution">Office Kit HR Solution</option>
                                                                                    <option value="other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                                                                <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                                                                <input type="hidden" name="utmid" value="<?php echo $utm_id; ?>">
                                                                                <input type="submit" class="form-control" value="Submit" name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ***** MAIN END***** -->


    <a href="#" class="vertical_btn" data-toggle="modal" data-target="#exampleModal0">Enquire</a>
    <div class="cont_link_box">
        <a title="WhatsApp" target="_blank" href="https://api.whatsapp.com/send?phone=971528155771" class="whatsapp_icon"><i class="fab fa-whatsapp"></i></a>
        <a title="Call Now" href="tel:+971528155771" class="call_iconbtn"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
    </div>

    <!-- Privacy Policy-->
    <div class="modal fade popsec onload_pop" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="privacy_onload">

                        <div class="pop-privacy-box">

                            <h4>Privacy Policy</h4>

                            <p>This privacy policy applies to the website( https://www.bwc.ae/ ). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                            <h4>Cookies Policy</h4>

                            <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
    <b>We use cookies to give you the best possible experience on our website. </b>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <!-- cookiealert js -->
    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#exampleModal0").modal('show');
            }, 7000);
        });
    </script>

</body>

</html>