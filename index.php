<?php require 'pages/header.php' ?>

<body class="home-page">
    <!-- Navbar -->
    <?php require 'pages/navbar.php' ?>
    <!-- End Navabar -->

    <!-- Home -->
    <div class="outer-banner sections bg-1 home-section" style="padding-top: 3rem;" id="home">
        <div class="container pt-5">
            <div class="row justify-content-around mx-5  banner">
                <div class="col-md-7 hip intro">
                    <span class="fw-bold color-gray-600">Hello Everyone!</span>
                    <h1 class="mt-20 mb-20 text-white typewrite-div">I’m
                        <span class="typewrite color-linear" id="typewrite">
                        </span>
                        <span class="animate__animated animate__flash animate__infinite infinite cursor">
                            |
                        </span>
                    </h1>
                    <div class="row">
                        <div class="col-md-10">
                            <p class="text-white hashtags" style="font-size: 20px;">
                                #AppDeveloper &nbsp; #WebDeveloper &nbsp; #Designer
                            </p>
                            <p class="color-gray-700 lh-base">
                                I am <strong>Mohomed Sahirullah</strong>. I am a skilled and experienced developer with a passion for creating intuitive and engaging digital experiences. With a diverse skill set in programming languages and frameworks like <strong>Flutter</strong> and <strong>Laravel</strong>, I have the technical expertise to bring your vision to life.
                                <span class="d-inline-block mt-3">
                                    Whether you are in need of a new website, a mobile app, or an upgrade to an existing platform, I am confident that I can deliver high-quality results that exceed your expectations.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="mb-5 resume">
                        <div class="fs-5 fw-bold color-gray-700 mb-3">Here Is My Resume!</div>
                        <a href="/public/resume.pdf" target="_blank" download="M.T. Sahirullah - Resume.pdf" type="button" class="btn btn-primary button cs-btn"><i class="fa-solid fa-download me-2"></i> Download</a>
                    </div>
                </div>
                <div class="col-md-5 mx-auto my-auto intro-img">
                    <div class="profile-img ">
                        <div class=""><img class="img-fluid rounded-4 shadow-4-strong" src="/public/img/msahirullah.jpg" alt="MSahirullah"></div>
                        <div class="img-bg-box">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="wave-svg" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 170" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(26, 25, 29, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(26, 25, 29, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,34L48,45.3C96,57,192,79,288,96.3C384,113,480,125,576,113.3C672,102,768,68,864,51C960,34,1056,34,1152,51C1248,68,1344,102,1440,104.8C1536,108,1632,79,1728,73.7C1824,68,1920,85,2016,79.3C2112,74,2208,45,2304,31.2C2400,17,2496,17,2592,36.8C2688,57,2784,96,2880,96.3C2976,96,3072,57,3168,42.5C3264,28,3360,40,3456,59.5C3552,79,3648,108,3744,104.8C3840,102,3936,68,4032,70.8C4128,74,4224,113,4320,121.8C4416,130,4512,108,4608,104.8C4704,102,4800,119,4896,130.3C4992,142,5088,147,5184,141.7C5280,136,5376,119,5472,104.8C5568,91,5664,79,5760,68C5856,57,5952,45,6048,39.7C6144,34,6240,34,6336,42.5C6432,51,6528,68,6624,85C6720,102,6816,119,6864,127.5L6912,136L6912,170L6864,170C6816,170,6720,170,6624,170C6528,170,6432,170,6336,170C6240,170,6144,170,6048,170C5952,170,5856,170,5760,170C5664,170,5568,170,5472,170C5376,170,5280,170,5184,170C5088,170,4992,170,4896,170C4800,170,4704,170,4608,170C4512,170,4416,170,4320,170C4224,170,4128,170,4032,170C3936,170,3840,170,3744,170C3648,170,3552,170,3456,170C3360,170,3264,170,3168,170C3072,170,2976,170,2880,170C2784,170,2688,170,2592,170C2496,170,2400,170,2304,170C2208,170,2112,170,2016,170C1920,170,1824,170,1728,170C1632,170,1536,170,1440,170C1344,170,1248,170,1152,170C1056,170,960,170,864,170C768,170,672,170,576,170C480,170,384,170,288,170C192,170,96,170,48,170L0,170Z"></path>
        </svg>
    </div>
    <!-- End Home -->

    <!-- About Me -->
    <div class="container sections about-me" id="about-me" style="padding-top: 5rem; padding-bottom: 5rem;">
        <div>
            <h1 class="heading color-linear">About me</h1>

            <div class="row mt-5 color-gray-700 lh-base justify-content-center intro">
                <div class="col-md-10 text-center">
                    <p class="text-justify">
                        I am a driven individual with the ability to adapt to any situation and an excellent team worker. I am currently studying for a degree in Bachelor of Information & Communication Technology at the University of Colombo. I am skilled and experienced in IT related fields.</p>
                    <div class="mt-3 d-flex flex-wrap justify-content-center skill-btn">
                        <div class="btn btn-outline-danger btn-rounded shadow-3-strong shine disable m-2">Web Development</div>

                        <div class="btn btn-outline-primary btn-rounded shadow-3-strong disable m-2 shine">App Development</div>
                        <div class="btn btn-outline-warning btn-rounded shadow-3-strong disable m-2 shine">UI/UX Design</div>
                        <div class="btn btn-outline-success btn-rounded shadow-3-strong disable m-2 shine">Multimedia Content Production</div>
                    </div>
                    <p class=" mt-3">
                        I enjoy tackling new challenges and solving complex problems through code. I am always looking to learn and improve my skills in order to deliver high-quality software solutions.
                    </p>

                    <a target="_blank" href="https://www.linkedin.com/in/mohomed-sahirullah-3184b8141/" type="button" class="btn btn-primary button cs-btn mt-2 mb-3"><i class="fa-solid fa-certificate me-2"></i>
                        Certifications</a>
                </div>
            </div>
            <div class="row mt-5 color-gray-700 lh-base px-5 justify-content-between skills-experiences">
                <div class="col-md-6 skills">
                    <div class="card" style="width: 100%; height:100%">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <div class="head-sidebar">
                                    <h5 class="line-bottom color-gray-700" style="--lwidth:150px">Own Experiences</h5>
                                </div>
                            </h5>
                            <div class="mt-4">
                                <ol class="list-group list-group-light list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start bg-1 color-gray-700">
                                        <div class="ms-2 me-auto color-gray-700">
                                            <div class="fw-bold pe-3 mb-2 text-white w-100 title-text">1 Year of experience in Flutter App Development</div>
                                            <div class="small-text">Good knowledge of UI development and Firebase functions in Flutter.</div>
                                            <div class="text-end exp-icon mt-2">
                                                <img src="/public/img/icons/flutter.png" class="me-2 img-fluid" alt="Flutter">
                                                <img src="/public/img/icons/firebase.png" class="me-2 img-fluid" alt="Firebase">
                                                <img src="/public/img/icons/maps.png" alt="Google Maps img-fluid">
                                            </div>
                                        </div>
                                        <span class="badge badge-primary rounded-pill" style="padding: 5px 15px;">1 Year</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start bg-1 color-gray-700">
                                        <div class="ms-2 me-auto color-gray-700">
                                            <div class="fw-bold pe-3 mb-2 text-white w-100">2 years of experience in Back-End Web Development using PHP and Laravel Framework</div>
                                            <div class="small-text">
                                                Back-End development with MySQL databases <br>
                                                Knowledge about API handling error handling
                                            </div>
                                            <div class="text-end exp-icon mt-2">
                                                <img src="/public/img/icons/Laravel.png" class="me-2 img-fluid" alt="Laravel">
                                                <img src="/public/img/icons/php.png" class="me-2 img-fluid" alt="PHP">
                                                <img src="/public/img/icons/mysql.png" class="img-fluid" alt="MySQL">
                                            </div>
                                        </div>
                                        <span class="badge badge-primary rounded-pill" style="padding: 5px 15px;">2 Years</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start bg-1 color-gray-700">
                                        <div class="ms-2 me-auto color-gray-700">
                                            <div class="fw-bold pe-3 mb-2 text-white w-100">2 years of experience in Front-End Web Development</div>
                                            <div class="small-text">
                                                Familiar with HTML 5, CSS, JavaScript and jQuery plugins <br>
                                                Good working knowledge of Bootstrap 4.0 - 5.2
                                            </div>
                                            <div class="text-end exp-icon mt-2">
                                                <img src="/public/img/icons/html.png" class="me-2 img-fluid" alt="HTML5">
                                                <img src="/public/img/icons/css.png" class="me-2 img-fluid" alt="CSS3">
                                                <img src="/public/img/icons/boostrap.png" class="img-fluid" alt="Bootstrap">
                                            </div>
                                        </div>
                                        <span class="badge badge-primary rounded-pill" style="padding: 5px 15px;">2 Years</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 experiences">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <div class="head-sidebar">
                                    <h5 class="line-bottom color-gray-700" style="--lwidth:45px">Skills</h5>
                                </div>
                            </h5>
                            <div style="margin-top:2.5rem; margin-bottom:2rem">
                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">App Development</div>
                                        <div class="my-auto">90%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white"> Front-End Development
                                        </div>
                                        <div class="my-auto">95%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white"> Back-End Development
                                        </div>
                                        <div class="my-auto">95%</div>
                                    </div>
                                </div>

                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white"> UI / UX Designing</div>
                                        <div class="my-auto">95%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">Project Management</div>
                                        <div class="my-auto">80%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">Graphic Designing</div>
                                        <div class="my-auto">85%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">Video Editing</div>
                                        <div class="my-auto">70%</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div style="margin-top:2rem;" class="text-center">
                                <div class="btn-tags me-3 mb-3">GitHub</div>
                                <div class="btn-tags me-3 mb-3">Python</div>
                                <div class="btn-tags me-3 mb-3">JavaScript</div>
                                <div class="btn-tags mb-3 mb-3">jQuery</div>
                                <div class="btn-tags me-3 mb-3">Terminal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Me -->

    <!-- Projects -->
    <div class="bg-1 projects pb-5 sections" id="projects" style="padding-top:2rem;">
        <div class="container px-5 pt-5 pb-5">
            <h1 class="heading color-linear">Projects</h1>
            <div class="mt-5 color-gray-700 lh-base justify-content-center">
                <div class="row text-center">
                    <div class="col-md-6 my-auto intro">
                        <p class="text-justify">
                            Here you will find some of the personal projects that I created with each project containing its own case study.
                        </p>
                        <div class="text-center mt-3">
                            <div class="btn-tags me-3 mb-3">#WebProjects</div>
                            <div class="btn-tags me-3 mb-3">#MobileAppProjects</div>
                            <div class="btn-tags">#UIUXDesigns</div>
                            <div class="btn-tags me-3 mb-3">#GraphicDesigns</div>
                        </div>
                    </div>

                    <div class="col-md-6 intro-img">
                        <img src="/public/img/projects.svg " class="svg img-fluid" alt="Projects">
                    </div>
                </div>
                <div class="mt-3 d-flex flex-row justify-content-between flex-wrap project-div">
                    <div class="card big-card" style="width: 46rem;">
                        <div class="bg-image" data-mdb-ripple-color="light">
                            <a href="/pages/projects/fitness-first-gym.php">
                                <img src="/public/img/projects/fitness-first-gym.jpg" class="img-fluid lg-img" style="width:100%" alt="FITNESS FIRST GYM" /></a>
                        </div>
                        <div class="card-body text-center position-relative">
                            <h5><a href="/pages/projects/fitness-first-gym.php" class="card-title"> FITNESS FIRST GYM</a></h5>
                            <p class="card-text">Fitness First Gym Web and App helps gym managers to organize and track their income, and manage members and payments</p>
                            <div class="position-relative overflow-hidden mb-1 mt-2">
                                <a class="card-text2 link1" href="/pages/projects/fitness-first-gym.php"> Web Development </a>
                                <a class="card-text2 link2" href="/pages/projects/fitness-first-gym.php"> Show Project </a>
                                <div class="hidden-div">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg-image" data-mdb-ripple-color="light">
                            <a href="/pages/projects/lak-market.php"><img src="/public/img/projects/lak-market.jpg" class="img-fluid" alt="LAK MARKET" /></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><a href="/pages/projects/lak-market.php" class="card-title">LAK MARKET</a> </h5>
                            <p class="card-text">Master market to connect sellers and customers (Web-platform)</p>
                            <div class="overflow-hidden mb-1 mt-2">
                                <a class="card-text2 link1" href="/pages/projects/lak-market.php"> Web Development </a>
                                <a class="card-text2 link2" href="/pages/projects/lak-market.php"> Show Project </a>
                                <div class="hidden-div">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg-image" data-mdb-ripple-color="light">
                            <a href="/pages/projects/smart-covid-assist.php"><img src="/public/img/projects/smart-covid-assist.jpg" class="img-fluid" alt="SMART COVID ASSIST" /></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><a href="/pages/projects/smart-covid-assist.php" class="card-title">SMART COVID ASSIST</a> </h5>
                            <p class="card-text">Covid-19 quarantine patients and contacts monitoring system using the mobile app in an IoT environment</p>
                            <div class="overflow-hidden mb-1 mt-2">
                                <a class="card-text2 link1" href="/pages/projects/smart-covid-assist.php"> Web Development </a>
                                <a class="card-text2 link2" href="/pages/projects/smart-covid-assist.php"> Show Project </a>
                                <div class="hidden-div" style="height: 3.5rem;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg-image" data-mdb-ripple-color="light">
                            <a href="/pages/projects/best-food-app.php"><img src="/public/img/projects/best-food-app.jpg" class="img-fluid" alt="BEST FOOD APP" /></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><a href="/pages/projects/best-food-app.php" class="card-title">BEST FOOD APP</a> </h5>
                            <p class="card-text">Best Food App connects users with local restaurants and provides a convenient way to order and receive meals from their favorite establishments</p>
                            <div class="overflow-hidden mb-1 mt-2">
                                <a class="card-text2 link1" href="/pages/projects/best-food-app.php"> App Development </a>
                                <a class="card-text2 link2" href="/pages/projects/best-food-app.php"> Show Project </a>
                                <div class="hidden-div">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg-image" data-mdb-ripple-color="light">
                            <a href="/pages/projects/get-fuel-app.php"><img src="/public/img/projects/get-fuel-app.jpg" class="img-fluid" alt="GET FUEL APP" /></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><a href="/pages/projects/get-fuel-app.php" class="card-title">GET FUEL APP</a> </h5>
                            <p class="card-text">Due to the economic and fuel crisis happened in Sri Lanka in 2022, a conceptual app was developed to manage fuel procurement through a QR code</p>
                            <div class="overflow-hidden mb-1 mt-2">
                                <a class="card-text2 link1" href="/pages/projects/get-fuel-app.php"> App Development </a>
                                <a class="card-text2 link2" href="/pages/projects/get-fuel-app.php"> Show Project </a>
                                <div class="hidden-div">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-auto mb-4">
                        <div class="bg-image" data-mdb-ripple-color="light">
                            <a href="/pages/projects/bmi-app.php"><img src="/public/img/projects/bmi-app.jpg" class="img-fluid" alt="BMI CALCULATOR APP" /></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><a href="/pages/projects/bmi-app.php" class="card-title">BMI CALCULATOR APP</a> </h5>
                            <p class="card-text">The BMI Calculator App is a simple tool that allows users to calculate their body mass index (BMI) and save it in Firebase</p>
                            <div class="overflow-hidden mb-1 mt-2">
                                <a class="card-text2 link1" href="/pages/projects/bmi-app.php"> App Development </a>
                                <a class="card-text2 link2" href="/pages/projects/bmi-app.php"> Show Project </a>
                                <div class="hidden-div">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 head-sidebar">
                    <h5 class="line-bottom color-gray-700" style="--lwidth:230px">Some of my UI/UX Designs</h5>
                </div>
                <div class="mt-5 d-flex flex-row justify-content-between flex-wrap ui-projects">
                    <div class="ui-div mb-4">
                        <img src="/public/img/projects/fitness-first-gym-ui.jpg" class="img-fluid ui-img preview-img" data-url="projects/hd/fitness-first-gym-ui.jpg" alt="FITNESS FIRST MOBILE APP UI" data-alt="FITNESS FIRST MOBILE APP UI" />
                        <a class="card-text2" style="left: 3rem; bottom: 3rem;" href="https://www.linkedin.com/posts/m-sahirullah_uidesign-uiuxdesign-uidesigner-activity-6936326868979580928-uw7J?utm_source=share&utm_medium=member_desktop"> FITNESS FIRST MOBILE APP UI </a>
                        <a class="card-text3 d-none" href="https://www.linkedin.com/posts/m-sahirullah_uidesign-uiuxdesign-uidesigner-activity-6936326868979580928-uw7J?utm_source=share&utm_medium=member_desktop"> FITNESS FIRST MOBILE APP UI </a>
                    </div>
                    <div class="ui-div mb-4">
                        <img src="/public/img/projects/cosmo-app-ui.jpg" class="img-fluid preview-img" alt="COSMO APP UI" data-alt="COSMO APP UI" data-url="projects/hd/cosmo-app-ui.jpg" />
                        <a class="card-text2" style="left: 7.5rem; bottom: 3rem;" href="https://www.linkedin.com/posts/m-sahirullah_uidesign-uiuxdesign-uidesigner-activity-6992663363088510976-BZ0f?utm_source=share&utm_medium=member_desktop"> COSMO APP UI </a>
                        <a class="card-text3 d-none" href="https://www.linkedin.com/posts/m-sahirullah_uidesign-uiuxdesign-uidesigner-activity-6992663363088510976-BZ0f?utm_source=share&utm_medium=member_desktop"> COSMO APP UI </a>
                    </div>
                    <div class="ui-div mb-4">
                        <img src="/public/img/projects/smart-way-ui.jpg" class="img-fluid preview-img" alt="SMART WAY APP UI" data-alt="SMART WAY APP UI" data-url="projects/hd/smart-way-ui.jpg" />
                        <a class="card-text2" style="left: 6.5rem; bottom: 3rem;" href="/#projects"> SMART WAY APP UI </a>
                        <a class="card-text3" href="/#projects"> SMART WAY APP UI </a>
                    </div>
                </div>

                <div class="mt-5 head-sidebar">
                    <h5 class="line-bottom color-gray-700" style="--lwidth:180px">Few Graphic Designs</h5>
                </div>
                <div class="mt-5 d-flex flex-row justify-content-between flex-wrap ui-projects">
                    <div class="owl-carousel owl-theme">
                        <div class="item position-relative">
                            <img src="/public/img/designs/flyr_1.jpg" class="img-fluid" alt="Flayer" />
                            <div class="zoom-icon preview-img" data-url="designs/hd/flyr_1.jpg" data-alt="Flayer">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/cvr_1.jpg" class="img-fluid" alt="Cover Page" />
                            <div class="zoom-icon preview-img" data-url="/designs/hd/cvr_1.jpg" data-alt="Cover Page">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/flyr_2.jpg" class="img-fluid" alt="Flayer" />
                            <div class="zoom-icon preview-img" data-alt="Flayer" data-url="/designs/hd/flyr_2.jpg">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/cvr_2.jpg" class="img-fluid" alt="Cover Page" />
                            <div class="zoom-icon preview-img" data-url="/designs/hd/cvr_2.jpg" data-alt="Cover Page">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/flyr_3.jpg" class="img-fluid" alt="Flayer" />
                            <div class="zoom-icon preview-img" data-alt="Flayer" data-url="/designs/hd/flyr_3.jpg">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/cvr_3.jpg" class="img-fluid" alt="Cover Page" />
                            <div class="zoom-icon preview-img" data-url="/designs/hd/cvr_3.jpg" data-alt="Cover Page">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/flyr_4.jpg" class="img-fluid" alt="Flayer" />
                            <div class="zoom-icon preview-img" data-alt="Flayer" data-url="designs/hd/flyr_4.jpg">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="/public/img/designs/cvr_4.jpg" class="img-fluid" alt="Cover Page" />
                            <div class="zoom-icon preview-img" data-url="/designs/hd/cvr_4.jpg" data-alt="Cover Page">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Projects -->

    <!-- Contact Me -->
    <div class="bg-0 contact contact-bg pb-5 sections" id="contact-me" style="padding-top: 1.9rem;">
        <div class="container py-5">
            <h1 class="heading2">Contact Me</h1>

            <div class="lh-base justify-content-center mt-5 px- intro">
                <div class="row blur p-3">
                    <div class="col-md-6 desc pb-3 px-4 my-auto">
                        <p class="m-0 p-3 ps-4 pe-5">
                            If you have any questions or would like to get in touch, please don't hesitate to reach out. You can contact me using the form, or by emailing me directly. I am always open to new opportunities and would be happy to discuss potential projects or collaborations.
                        </p>
                        <div class="px-3">
                            <div class="contact-details">
                                <div class="py-1">
                                    <i class="fa-regular fa-envelope me-3"></i>
                                    msahirullah@gmail.com
                                </div>
                                <div class="py-1">
                                    <i class="fas fa-phone me-3"></i>
                                    +94 77 2 155 122
                                </div>
                            </div>
                            <div class="mt-4 fw-6 social-text">Stay in touch through social media...</div>
                            <div class="mt-3 text-center">
                                <div class="social-btns">
                                    <a class="btn linkedin me-3" target="_blank" href="https://www.linkedin.com/in/mohomed-sahirullah-3184b8141/">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a class="btn facebook me-3" target="_blank" href="https://www.facebook.com/m.sahirullah">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="btn instagram me-3" target="_blank" href="https://www.instagram.com/m_sahirullah/" style="line-height: 42px !important;">
                                        <i class="fa-brands fa-instagram"></i> </a>
                                    <a class="btn twitter" target="_blank" href="https://twitter.com/M_Sahirullah">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 p-3 px-4 mx-auto contact-col">
                        <div class="contact-form-container my-4">
                            <form class="contact-form" id="contactForm" method="get">
                                <div class="contact-form-field">
                                    <label class="contact-form-label" for="name">Name</label>
                                    <input required placeholder="Enter Your Name" type="text" class="contact-form-input" name="name" id="name">
                                </div>
                                <div class="contact-form-field">
                                    <label class="contact-form-label" for="email">Email</label>
                                    <input required placeholder="Enter Your Email" type="email" class="contact-form-input" name="email" id="email">
                                </div>
                                <div class="contact-form-field">
                                    <label class="contact-form-label" for="message">Message</label>
                                    <textarea required cols="30" rows="5" class="contact-form-input" placeholder="Enter Your Message" name="message" id="message"></textarea>
                                </div>
                                <div class="text-end">
                                    <button type=" submit" class="btn btn-primary button cs-btn"><i class=" fa-solid fa-paper-plane me-2"></i> Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Me -->


    <!-- Footer -->
    <?php require 'pages/footer.php' ?>

    <!-- End Footer -->
    <script>
        $(document).ready(function() {

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 24,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false

                    },
                    1000: {
                        items: 3,
                        nav: true,
                    }
                }
            })


            var modal = $("#modal");
            var modalImg = $("#modalImg")
            var modalCaption = $("#modalCaption");

            modal.hide();

            $("#contactForm").submit(function(e) {
                e.preventDefault();

                var name = $("#name", this).val();
                var email = $("#email", this).val();
                var msg = $("#message", this).val();

                var subject = "Portfolio | Email from :" + email;
                window.location.href = "mailto:msahirullah@gmail.com?subject=" + subject + "&body=" + msg + "";
                // location.reload();
                vanillaAlert(0, "Thank you! \nYour form submission has been received.");
                $("#name", this).val("");
                $("#email", this).val("");
                $("#message", this).val("");

            });

            $("body").keyup(function(e) {
                if (e.key == "Escape") {
                    modal.fadeOut(300);
                    modalCaption.text("");
                    modalImg.attr("src", "");
                }
            });

            $(".preview-img").on('click', function() {
                var img = $(this).attr('data-url');
                var cpation = $(this).attr('data-alt');

                img = '/public/img/' + img;
                modalImg.attr("src", img);
                modalCaption.text(cpation);
                modal.fadeIn(300);
            });
            $("#modalImg").on('click', function() {
                modal.fadeOut(300);
                modalCaption.text("");
                modalImg.attr("src", "");
            });

            $("#closeModal").on('click', function() {
                modal.fadeOut(300);
                modalCaption.text("");
                modalImg.attr("src", "");
            });
        });


        var app = document.getElementById('typewrite');

        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('M. Sahirullah')
            .pauseFor(2000)
            .deleteAll()
            .typeString('an <strong>App Developer</strong>')
            .pauseFor(2000)
            .deleteAll()
            .typeString('a <strong>Web Developer</strong>')
            .pauseFor(2000)
            .start();

        function vanillaAlert(inp, msg, time = 3000) {

            var title = ['Success!', 'Error!', 'Warning!', 'Information!'];
            var type = ['success', 'error', 'warning', 'info'];
            var icon = ['success.png', 'error.png', 'warning.png', 'info.png']
            var path = '/public/img/alert-logo/';

            VanillaToasts.create({
                title: title[inp],
                text: msg,
                type: type[inp],
                icon: path + icon[inp],
                timeout: time
            });
        }
    </script>
    <div id="modal" class="modal">
        <span class="close" id="closeModal">&times;</span>
        <img class="modal-content img-fluid" id="modalImg">
        <div id="modalCaption"></div>
    </div>
</body>

</html>