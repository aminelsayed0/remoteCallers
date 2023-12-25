@extends('layouts.app')

@section('title', 'Remote Callers')

@section('style')

    <link rel="stylesheet" href="/assets/css/main.css" />

@endsection

{{-- <link rel="stylesheet" href="/assets/css/plans.css" /> --}}

@section('content')

   <!-- start landing section -->
   <div class="landing">
    <div class="overlay"></div>
    <div class="text">
      <h2>Virtual Work,Real Results.</h2>
      <p>Now Offering Personal VA's (Virtual Assistants).</p>
      <button class="go-to-plans">
        Start Now <i class="fa-solid fa-circle-arrow-right"></i>
      </button>
    </div>
  </div>
  <!-- end landing section -->
  <!-- start about section -->
  <div class="about" id="about">
    <div class="container">
      <h1>About Us</h1>
      <p>
        "<span>Remote Callers</span> specializes in helping businesses scale
        through outsourced services. We maintain positive customer
        relationships. Our services include inbound/outbound calling, virtual
        assistance, and customer support. We provide customized solutions for
        your business needs."
      </p>
    </div>
  </div>
  <!-- end about section -->
  <!-- start exp section -->
  <div class="exp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="rgb(14, 163, 233)"
        fill-opacity=".7"
        d="M0,192L60,202.7C120,213,240,235,360,245.3C480,256,600,256,720,240C840,224,960,192,1080,192C1200,192,1320,224,1380,240L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
      ></path>
    </svg>
    <div class="container">
      <div class="content">
        <div class="col1">
          <h2>The Remote Callers Experience</h2>
          <img src="/assets/images/exp.png" alt="agent" />
        </div>
        <div class="col2">
          At Remote Callers, we specialize in providing top-notch virtual
          assistants who excel in making outbound calls, meticulously vetting
          prospects from your data lists, and delivering qualified leads right
          to your CRM. Our team of skilled professionals is dedicated to
          streamlining your sales process, setting appointments with potential
          clients, and helping you close deals with ease.
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="rgb(14, 163, 233)"
        fill-opacity=".7"
        d="M0,256L60,229.3C120,203,240,149,360,144C480,139,600,181,720,176C840,171,960,117,1080,101.3C1200,85,1320,107,1380,117.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
      ></path>
    </svg>
  </div>
  <!-- end exp section -->
  <!-- start advantage sction -->
  <div class="advantage">
    <div class="container">
      <div class="adv-image">
        <img src="/assets/images/adv-img.jpg" alt="adv-image" />
      </div>
      <div class="adv-text">
        <h2>The Remote Callers Advantage</h2>
        <p>
          Partnering with Remote Callers Callers means gaining access to a
          powerhouse of sales expertise. Our virtual assistants are not just
          skilled professionals; they are dedicated, passionate, and invested
          in your success. With our support, you can save time, increase
          productivity, and witness a significant uptick in your sales
          performance. Don't miss the opportunity to supercharge your sales
          efforts - get started with Remote Callers today!
        </p>
        <div class="icons">
          <i class="fa-solid fa-clock"></i> Time Saving
          <i class="fa-solid fa-sack-dollar"></i> Cost-Effective
          <i class="fa-solid fa-list-check"></i> Results-Driven
        </div>
      </div>
    </div>
  </div>
  <!-- end advantage sction -->
  <!-- start pricing section -->
  <div class="pricing">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="rgb(14, 163, 233)"
        fill-opacity=".7"
        d="M0,160L48,138.7C96,117,192,75,288,74.7C384,75,480,117,576,160C672,203,768,245,864,245.3C960,245,1056,203,1152,192C1248,181,1344,203,1392,213.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <div class="container">
      <div class="p-text">
        <h2>Pricing Options</h2>
        <p>
          At Remote Callers, we offer flexible pricing options to meet your
          specific needs and budget. Contact us today to learn more
        </p>
        <button class="go-to-plans">I'm Ready To Get Started</button>
      </div>
      <div class="plans">
        <div class="plan-1">
          <h2>1 or 2 Callers</h2>
          <h2>5<span>per hour</span></h2>
          <p>
            Receive 1 caller for your business to call for the number of hours
            of your choosing.
          </p>
          <div class="features">
            <i class="fa-solid fa-circle-check"></i>Cost-Effective Solution
            <i class="fa-solid fa-circle-check"></i>Personalized Attention
            <i class="fa-solid fa-circle-check"></i>Flexibility
            <i class="fa-solid fa-circle-check"></i>Enhanced Efficiency
          </div>
        </div>
        <div class="plan-2">
          <h2>+2 Callers</h2>
          <h2>4<span>per hour</span></h2>
          <p>
            Receive 2 or more callers for your business to call for the number
            of hours of your choosing.
          </p>
          <div class="features">
            <i class="fa-solid fa-circle-check"></i>Reduced Cost
            <i class="fa-solid fa-circle-check"></i>Increased Outreach
            <i class="fa-solid fa-circle-check"></i>Faster Results
            <i class="fa-solid fa-circle-check"></i>Backup Support
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="rgb(14, 163, 233)"
        fill-opacity=".7"
        d="M0,64L48,85.3C96,107,192,149,288,176C384,203,480,213,576,197.3C672,181,768,139,864,106.7C960,75,1056,53,1152,64C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </div>
  <!-- end pricing section -->

@endsection

@section('js')

    <script src="/assets/js/main.js"></script>

@endsection
