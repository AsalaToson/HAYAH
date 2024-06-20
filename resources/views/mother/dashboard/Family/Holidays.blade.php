@extends('mother.dashboard.BABY.parent')
@section('title',' HAYAH HOSPITAL "Fatherhood"')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relationships</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Custom Styles */
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            h2{
                text-align: center;
            }
        }
        strong{
            color: deeppink;
            text-decoration: none;
        }
        h2 {
            color: #333;
        }
        h1 {
            text-align: center;
            margin: 10px;
            color: deeppink;
        }
        #labor{
            text-align: center;
            margin: 10px;
            color: deeppink;
        }
        h4{
            color: deeppink;
        }

        /* Custom Styles */
        .card {

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 330px;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for transform and box-shadow */
            position: relative;
        }

        .card:hover {
            transform: scale(1.1); /* Increase size by 10% */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            z-index: 1; /* Bring the card to the front */
        }

        .card-body {
            position: relative; /* Needed for z-index to work */
        }
        i{
            color: red;

        }
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .card-text{
            font-weight: 170;
            font-size: medium;
        }

        .link {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20px;
        }
        .link a {
            margin: 0 10px;
            padding: 10px 15px;
            border: 1px solid #ff00d9;
            border-radius: 25px;
            color:black;
            text-decoration: none;
            text-decoration: none;
            transition: color 0.3s, transform 0.3s;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .link a::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: deeppink;
            transform: scaleX(.5);
            transition: transform 0.3s ease;
        }
        h6{
            color: darkblue;
            font-size: large;
            font-weight: 800;
        }
        .link a:hover {
            color: deeppink;
            transform: translateY(-5px);
        }
        .home{
            text-align: center;
        }
        .link a:hover::before {
            transform: scaleX(1);
        }

        .collapsible-links {
            list-style-type: none;
            padding: 0;
            margin-top: 15px;
            margin-left: 30px
        }

        .collapsible-links li {
            margin-bottom: 8px;
        }

        .card-link{
            color: rgb(44, 34, 110);
            font-weight: 200;
        }
        .card-link:hover{
            color: deeppink;
        }
        .card-body{
            height: auto;
            border-radius: 5px;
            border: .5px solid rgb(215, 210, 210);

        }

    </style>
</head>
<body>

<div class="container mt-5">
    <h1 style="margin-top: 150px;">Crying & Colic</h1><br>

    <div class="container mt-5">
        <div class="link">
            <a href="#sooth">Soothing Your Baby</a>
            <a href="#cry">Why Babies Cry</a>

        </div>
    </div>

</div>

<hr><hr>
<!-- container -->
<!-- Soothing Your Baby-->
<h1 id="sooth">Soothing Your Baby</h1><hr>
<div class="container mt-5">
    <div class="row">

        <!-- Card 1 -->
        <div class="col-md-4 mb-4" >
            <div class="card" >
                <img src="images/paci.jpg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h4 class="card-title"> When to introduce a pacifier: Pros and cons </h4>

                </div>
            </div>

            <ul class="collapsible-links">
                <li>
                    <a href="#first" class="card-link" data-toggle="collapse" data-target="#paci1Content" aria-expanded="false" aria-controls="firstContent"> -The Pacifier Dilemma: When, Why, and How to Use One for Your Baby <i class=" fa fa-angle-down"></i></a>
                    <div class="collapse"  id="paci1Content">
                        <div class=" card-body" >
                            <a href="https://www.babycenter.com/baby/crying-colic/pacifiers-pros-cons-and-smart-ways-to-use-them_128"> <strong> find out here</strong></a>
                        </div>
                    </div>
                </li>

            </ul>

        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4" >
            <div class="card" >
                <img src="images/thumb.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h4 class="card-title">Should I try to stop my baby from sucking their thumb? </h4>
                </div>
            </div>

            <ul class="collapsible-links">
                <li>
                    <a href="#first" class="card-link" data-toggle="collapse" data-target="#thumb1Content" aria-expanded="false" aria-controls="firstContent"> - Know the answer <i class=" fa fa-angle-down"></i></a>
                    <div class="collapse"  id="thumb1Content">
                        <div class=" card-body" >
                            <strong>NO,</strong> <br>
                            Thumb-sucking is a natural self-soothing behavior in babies and usually isn't harmful. <br>
                            Most children stop on their own as they develop other ways to comfort themselves.
                            However, if thumb-sucking continues past age 3 or 4, consult a dentist to avoid potential dental issues.
                        </div>
                    </div>
                </li>


            </ul>

        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4" >
            <div class="card" >
                <img src="images/stop.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h4 class="card-title">When should babies stop using pacifiers? </h4>

                </div>
            </div>

            <ul class="collapsible-links">
                <li>
                    <a href="#first" class="card-link" data-toggle="collapse" data-target="#stop1Content" aria-expanded="false" aria-controls="firstContent"> -Pacifier Weaning: When and How to Do It <i class=" fa fa-angle-down"></i></a>
                    <div class="collapse"  id="stop1Content">
                        <div class=" card-body" >
                            <strong>-When to Wean:</strong> No strict rules. The AAP recommends waiting until 12 months to reduce SIDS risk. Many children stop on their own by ages 2-4. <br>
                            <strong> -Reasons to Wean:</strong> <br>
                            - Ear Infections: Pacifiers can worsen ear infections. <br>
                            - Dental Issues: Prolonged use can affect teeth and jaw alignment. <br>
                            - Speech Development: Can hinder babbling and talking. <br>

                            <strong>Weaning Methods:</strong> <br>
                            - Cold Turkey:Immediate removal. <br>
                            - Gradual Reduction: Limit to naps and bedtime, then phase out. <br>
                            - Alternatives:Offer a stuffed animal or blanket for comfort (not for babies under 1 year old).
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>

<hr>
<!--Why Babies Cry-->
<h1 id="cry">Why Babies Cry</h1><hr>
<div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4" >
            <div class="card" >
                <img src="images/Cryy.jpg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h4 class="card-title">7 reasons babies cry and how to soothe them</h4>

                </div>
            </div>

            <ul class="collapsible-links">
                <li>
                    <a href="#first" class="card-link" data-toggle="collapse" data-target="#cry1Content" aria-expanded="false" aria-controls="firstContent"> - Find out....  <i class=" fa fa-angle-down"></i></a>
                    <div class="collapse"  id="cry1Content">
                        <div class=" card-body" >
                            <a href="https://youtu.be/IDG20VjVZmA?si=AATKEhpB_7FSC24j"> <strong>Watch here...</strong></a>
                        </div>
                    </div>
                </li>


            </ul>


        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4" >
            <div class="card" >
                <img src="images/cry2.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h4 class="card-title"> What to do when your baby's crying for no reason </h4>


                </div>
            </div>

            <ul class="collapsible-links">
                <li>
                    <a href="#first" class="card-link" data-toggle="collapse" data-target="#cry2Content" aria-expanded="false" aria-controls="l1Content"> - Tips and Solutions <i class=" fa fa-angle-down"></i></a>
                    <div class="collapse"  id="cry2Content">
                        <div class=" card-body" >
                            <a href="https://www.babycenter.com/baby/crying-colic/what-to-do-when-your-baby-cries-for-no-reason_10320516"> <strong>Find Out more...</strong></a>
                        </div>
                    </div>
                </li>


            </ul>

        </div>


    </div>
</div>





<!-- Include Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
