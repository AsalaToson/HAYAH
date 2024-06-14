<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Type Selection</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style_2.css') }}" rel="stylesheet">
    <!-- <style>body {
        background-image: url(../assets/images/help.jpg); /* Replace with your actual image URL */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
        font-family: 'Arial', sans-serif;
        color: #333;
        background-image: url(help.jpg);
        background-size: cover; /* Make sure the image covers the entire background */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Do not repeat the background image */
    }

    .container {
        border-radius: 15px;
        padding: 20px;
        max-width: 1200px;


    }

    h1 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 40px;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bolder;
    }

    .account-option {
        background: white;
        border-radius: 15px;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .account-option:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .account-option img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
    }

    .account-option h2 {
        font-size: 1.5rem;
        margin-top: 10px;
        margin-bottom: 20px;
        color: #555;
        font-family: 'Times New Roman', Times, serif;
    }




    /* General button styling */
.btn {
    width: 100px;
    font-size: 1rem; /* Set the font size */
    padding: 10px 20px; /* Add padding for space inside the button */
    border: none; /* Remove default border */
    border-radius: 50px; /* Rounded corners for a pill-like shape */
    color: #fff; /* White text color */
    cursor: pointer; /* Pointer cursor on hover */
    transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for hover effects */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    text-transform: uppercase; /* Uppercase text for better readability */
    letter-spacing: 1px; /* Slightly increased letter spacing */
}

/* Specific button styles with color gradients */
.btn-success {
    background: linear-gradient(45deg, #28a745, #218838); /* Green gradient */
}

.btn-primary {
    background: linear-gradient(45deg, #007bff, #0056b3); /* Blue gradient */
}

.btn-warning {
    background: linear-gradient(45deg, #ffc107, #e0a800); /* Yellow gradient */
}

.btn-info {
    background: linear-gradient(45deg, #17a2b8, #138496); /* Teal gradient */
}

/* Hover effects for buttons */
.btn:hover {
    transform: scale(1.05); /* Slightly increase size on hover */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); /* Enhanced shadow for hover */
    filter: brightness(1.3); /* Slightly brighten the button */
}

/* Focus and active states for accessibility */
.btn:focus, .btn:active {
    outline: none; /* Remove default outline */
    box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.5); /* Custom focus shadow */
}

    </style> -->
</head>
<body>
    <div class="container text-center vh-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-5">Choose Account Type</h1>
        <div class="row w-100">
            <div class="col-md-3 mb-4">
                <div class="account-option p-3">
                    <img src="{{ asset('images/doctor.png') }}" alt="Doctor" class="img-fluid mb-3">
                    <h2>Doctor</h2>
                    <a href="{{route('doctor.login')}}"> <button class="btn btn-success mt-3">Login</button></a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="account-option p-3">
                    <img src="{{ asset('images/pregnant.png') }}" alt="Patient" class="img-fluid mb-3">
                    <h2>Patient</h2>
                    <a href="{{route('user.login')}}"> <button class="btn btn-primary mt-3" >Login</button></a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="account-option p-3">
                    <img src="{{ asset('images/software-engineer.png') }}" alt="Admin" class="img-fluid mb-3">
                    <h2>Admin</h2>
                    <a href="{{route('admin.login')}}"> <button class="btn btn-warning mt-3" >Login</button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="account-option p-3">
                    <img src="{{ asset('images/analysis.png') }}" alt="Analysis Doctor" class="img-fluid mb-3">
                    <h2>Analysis Doctor</h2>
                    <a href="{{route('lab_doctor.login')}}"><button class="btn btn-info mt-3">Login</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>

    </script>
</body>
</html>
