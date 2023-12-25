@extends('layouts.app')

@section('title', 'Contract')

@section('style')

    <link rel="stylesheet" href="/assets/css/plans.css" />

@endsection

@section('content')

    <!-- start landing section -->
    <div class="landing">
        <div class="overlay"></div>
        <div class="text">
            <h2>Choose Your Plan</h2>
        </div>
    </div>
    <!-- end landing section -->
    <!-- start pricing section -->
    <div class="pricing">
        <div class="container">
            <div class="p-text">
                <h2>Pricing Options</h2>
                <p>
                    At RBS, we offer flexible pricing options to meet your specific
                    needs and budget. Contact us today to learn more
                </p>
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
            <path fill="rgb(14, 163, 233)" fill-opacity=".7"
                d="M0,64L48,85.3C96,107,192,149,288,176C384,203,480,213,576,197.3C672,181,768,139,864,106.7C960,75,1056,53,1152,64C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- end pricing section -->
    <div class="form">
        <div class="container">
            <h1>GET STARTED TODAY!</h1>
            @if(session()->has('success'))
            <div class="alert alert-info">
                {{ session('success') }}
            </div>
         @endif
            <form action={{ route('send_mail') }} method="post">
                @csrf
                <input type="text" name="firstName" placeholder="First Name*" id="f-name" required />
                <input type="text" name="lastName" placeholder="last Name*" id="l-name" required />
                <input type="tel" name="phone" placeholder="Phone*" id="phone" required />
                <input type="email" name="email" placeholder="Email*" id="email" required />
                <input type="number" name="callers" placeholder="How Many Callers Do You Need*" id="number" required />
                <input type="submit" value="Submit" id="submit" />
            </form>
        </div>
    </div>
@endsection

@section('js')

    <script src="/assets/js/plans.js"></script>

@endsection
