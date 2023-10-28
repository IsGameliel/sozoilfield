@extends('layouts.main')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>Sozoilfield</span></h2>
            <p data-aos="fade-up">We proffer solutions to all your needs for Oil and gas, HSE, Engineering training, and certification, we also design tailored training that meets organization-specific demands.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>WE ARE INTERNATIONALLY ACCEPTED</h3>
              <p>Sozoilfield is an internationally recognized institute, a big player with rich industry experience, over the years we have provided dependable training, auditing and certification services to multinationals all over the world even in Nigeria. Sozoilfield is staying very relevant in the Oil and Gas industry because we have a strong affiliation with important oil and gas standard organizations and we keep to standards.</p>
              <p>We see every training as unique and important, our training is delivered with the right training methodology and equipment. </p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="{{ route('book_now') }}" method="post" class="php-email-form">
              @csrf
              <h3>Book now</h3>
              <p>Book a training session or an inspection session with Sozoilfield at your convinence.</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <select class="form-control" name="booking_type" id="">
                    <option value="">choose prefered booking</option>
                    <option value="inspection">Inspection</option>
                    <option value="training">Training</option>
                  </select>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="note" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Send Request</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Upcoming Courses</h2>
          <p>This is to notify the general public that we have resumed and we will be adding this to our outline in no time.
          </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/1.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">HELICOPTER UNDERWATER ESCAPE TRAINING</h4>
                    <p>Book for the upcoming HUET,  We conduct both the OPITO and non-OPITO HUET.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">HELICOPTER LANDING OFFICER TRAINING (HLO)</h4>
                    <p>Book for the upcoming HLO,  We conduct both the OPITO and non-OPITO HLO.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>We offer topnotch service in the oil and gas industry</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>HSE Consultancy</h3>
              <p>We offer Consultancy services in Health safety and Environmental training for companies and interested organisations</p>
              <a href="#" class="readmore stretched-link"> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Inspection Service</h3>
              <p>Our inspection services range from EQUIPMENT INSPECTION: with our equipment inspection services we help our clients comply with local content also international standards. 
                Your equipment need to be in the right shape and other before you staff off that project, contact Sozoilfield for overall equipment inspection.</p>
              <a href="#" class="readmore stretched-link"><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>General contract</h3>
              <p>General contract services of any kind within the value chain</p>
              <a href="#" class="readmore stretched-link"> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Trainings and certification</h3>
              <p>we offer hands on training and certification courses such as OIL & GAS Technical, Safety and short
                Engineering Courses etc.</p>
              <a href="#" class="readmore stretched-link"> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Supply of safety kits and equipment</h3>
              <p>Sozoilfield offers supply of safety kits and equipment of any sort and quantity.</p>
              <a href="#" class="readmore stretched-link"> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Oil And Gas Training And Certification Institute.</h3>
            <p>We proffer solutions to all your needs for Oil and gas, HSE, Engineering training, and certification, we also design tailored training that meets organization-specific demands.
              Since 2013 Sozoilfield have been helping many companies including multinational with required training and certifications, we are also guiding, training, and certifying individual 
              seeking internationally recognized training and certification to qualify them for certain Oil and Gas job position.</p>
            
              <h4>Stay connected in 2023 and participate in coming Oil and Gas programs.</h4>
              <p>In 2023 We have selected high impact Oil and gas programs, this course will impact every participant positively and take them to their dream destination in their selected Oil and Gas careers .
                Announced upcoming Oil and Gas conferences, exhibitions, seminal and certification programs. Please do follow the link below to see a list of upcoming events.</p>
          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    {{-- <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Modisit</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Praesenti</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Explica</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Nostrum</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Neque exercitationem debitis</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatibus commodi accusamu</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Omnis fugiat ea explicabo sunt</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section --> --}}

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Courses</h2>
          <p>Sozoilfield detailed course outline</p>
        </div>
        <div id="accordion">

          <div class="card">
            <div class="card-header">
              <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                OIL & GAS TECHNICAL, SAFETY AND SHORT ENGINEERING COURSES
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>Introduction to Drilling and Well Control</li>
                  <li>Helicopter Underwater Escape Technique (HUET)</li>
                  <li>Basic Rig Training for Roustabouts (BRTR)</li>
                  <li>Oil & Gas Risk Management (OGRM)</li>
                  <li>Offshore/Onshore Basic Rig Operation (OBRO)</li>
                  <li>Rigging & Slinging (RAS)</li>
                  <li>Emergency Response Plan (ERP)</li>
                  <li>Offshore/Onshore Drilling HSE Supervision</li>
                  <li>Cranes & Derricks Safety</li>
                  <li>Introduction to Subsea Operation (ITSO)</li>
                  <li>Offshore/Onshore Safety Induction Training (OSIT)</li>
                  <li>Work over & Completion Operation</li>
                  <li>Work over & Completion Operation</li>
                  <li>Basic H2S</li>
                  <li>Helicopter Landing Officer (HLO)</li>
                  <li>Offshore/Onshore Rig Safety</li>
                  <li>Offshore Safety Orientation (OSO)</li>
                  <li>Gas Testing</li>
                  <li>Oil and Gas Hazard Awareness</li>
                  <li>Deck Barge Safety</li>
                  <li>Rig Security Awareness</li>
                  <li>Offshore Fire Control</li>
                  <li>Survival at Sea (SAS)</li>
                  <li>Personal Survival Swimming (PSS)</li>
                  <li>Helideck Fire Fighting (HFF)</li>
                  <li>Offshore Fire Control</li>
                  <li>Basic Drilling and Well Completion</li>
                  <li>Oil & Gas Logistics Management</li>
                  <li>Oil & Gas Project Management</li>
                </ul>
              </div>
            </div>
          </div>
        
          <div class="card">
            <div class="card-header">
              <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                Health Safety and Environment (HSE) Courses for General Industry
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>General Health Safety & Environment (HSE level 1&2)</li>
                  <li>Advanced Health Safety & Environment (HSE level 3)</li>
                  <li>Occupational Safety and Health Management System (OSHMS)</li>
                  <li>Safety in Laboratory Activities</li>
                  <li>Basic Firefighting (BFF)</li>
                  <li>Advanced firefighting training (AFF)</li>
                  <li>Basic First Aid (BFA)</li>
                  <li>Electrical Safety (ES)</li>
                  <li>Confined Space Entry (CSE)</li>
                  <li>Workshop & Warehouse Safety</li>
                  <li>Risk Assessment and Risk management</li>
                  <li>Folk Lift Safety</li>
                  <li>Welding Safety</li>
                  <li>Manual Handling</li>
                  <li>Inspection of Lifting Equipment</li>
                  <li>Handling of Hazardous Materials</li>
                  <li>Personal Survival Swimming (PSS)</li>
                  <li>Advanced Safety Supervision & Leadership (ASSL)</li>
                  <li>Basic Life Support (BLS)</li>
                  <li>Hand and Power Tool Safety</li>
                  <li>Construction Safety Management</li>
                  <li>Behavioral Base Safety (BBS)</li>
                  <li>Hospital safety</li>
                  <li>Scaffold safety</li>
                  <li>Construction Safety</li>
                  <li>Crane Operation Safety</li>
                  <li>Marine Safety</li>
                  <li>Hazard & Effect Management Process (HEMP)</li>
                  <li>Process Safety</li>
                  <li>Stop System</li>
                  <li>Management of Change</li>
                  <li>Radiation safety</li>
                  <li>LockOut/TagOut (LOTO)</li>
                  <li>Fire Watch Man</li>
                  <li>Fire team Leader</li>
                  <li>HSE Train-The-Trainer</li>
                  <li>Job Safety/Hazard Analysis (JSA/JHA)</li>
                  <li>Journey Management and Defensive Driving (JMDD)</li>
                  <li>Accident Investigation and Reporting (AIR)</li>
                  <li>Safe Handling of Chemicals (SHOC)</li>
                  <li>Food Safety and Hygiene (Level 1-3)</li>
                  <li>Office Safety</li>
                  <li>Power System Protection and Safety</li>
                </ul>
              </div>
            </div>
          </div>
        
          <div class="card">
            <div class="card-header">
              <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                Environmental Management Courses
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <li>Environmental Waste Management</li>
                <li>Environmental Awareness</li>
                <li>Environmental Impact Assessment</li>
                <li>Environmental Management system (EMS) ISO I400I</li>
              </div>
            </div>
          </div>
        
          <div class="card">
            <div class="card-header">
              <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                Leadership and Management Courses
              </a>
            </div>
            <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>Project Management (Prince2 Methodology)</li>
                  <li>Human Resource Management</li>
                  <li>Storekeeping & Warehouse/Material Management</li>
                  <li>Safety and Security Management</li>
                  <li>Oil and Gas Business Development Management</li>
                  <li>Workplace conflict Management</li>
                  <li>Material Management System</li>
                  <li>Supply chain management</li>
                  <li>Inventory Management and Optimization</li>
                  <li>Depot Operation Management</li>
                  <li>Facility Management</li>
                  <li>HSE in contract Management</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFive">
                Other courses offered at our centers are
              </a>
            </div>
            <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>NEBOSH IGC</li>
                  <li>Environmental Management System (ISO 14001)</li>
                  <li>Quality Management System (ISO 9001)</li>
                  <li>Occupational Health Safety Assessment Series (OHSAS 18001)</li>
                  <li>Medic First Aid, AED and CPR</li>
                  <li>OSHA Specialist</li>
                  <li>OSHA Supervisor</li>
                  <li>IOSH Working Safely</li>
                  <li>IOSH Managing Safely</li>
                  <li>Rope Access</li>
                  <li>Further offshore emergency training (FOET)</li>
                  <li>Value Creation in Procurement</li>
                  <li>Certified safety Manager (CSM)</li>
                  <li>Process Hazard Review</li>
                  <li>Oil and Gas contract Packing and Bidding</li>
                  <li>Oil and Gas supply and Distribution</li>
                  <li>Aviation Fuel Handling and Safety</li>
                  <li>Quality Assurance/Quality Control</li>
                  <li>Risk Assessment</li>
                  <li>Basic offshore safety induction and emergency training (BOSIET)</li>
                  <li>Safety Induction</li>
                  <li>Quality Management system (QMS) ISO 900I</li>
                  <li>Painting safety</li>
                  <li>Sandblasting</li>
                  <li>Painting and sandblasting</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>successful feedback from happy customers</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The trainingso was a welcome and appreciable one, the company is doing a wonderful job as to have well designed safety program and qualified instructors.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Dear Sozoilfield, The HUET course was very insightful. It broadened my knowledge as regards healthcare quality and patient safety.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Hi everyone, I'm a fresh graduate looking to delve into the safety line. I just completed my HSE 1,2 &3 courses at Sozoilfield
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I have no hesitation in strongly recommending to use SHEilds e-learning to anybody willing to progress their career in health and safety to take Quality Management System Courses.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Get certified in HSE with our online courses. Stay safe, advance your career. Enroll now! Kickstart your career in the oil and Gas sector. Get certified in HSE from Sozoilfield.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

@endsection