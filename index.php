<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LaborLink</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo img {
            width: 200px;
            height: auto;
            text-align: center;
            
        }
        .btn-container {
            margin-left: auto;
        }
        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .signup-btn {
            background-color: #009688;
            margin-right: 10px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto; /* Centering the container */
            padding: 20px;
            text-align: center; /* Aligning container content to center */
        }
        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center; /* Aligning search bar content to center */
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .search-input {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .search-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .service-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Aligning service boxes to center */
            margin-top: 20px;
        }
        .service-box {
            width: calc(33.33% - 20px);
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin: 0 50px 40px;
            text-align: center;
            overflow: hidden; /* To make sure content does not overflow */
        }
        .service-box img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .service-box h3 {
            margin-top: 0;
        }
        .service-box p {
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="logo.png">
    </div>
    <div class="btn-container">
        <a class="btn signup-btn" href="signup.php">Sign Up</a>
        <a class="btn" href="login.php">Login</a>
    </div>
</div>

<div class="container">
    <h1>Welcome to LaborLink</h1>
    <p>The platform connecting employers and job seekers.</p>

    <div class="search-bar">
        <input type="text" id="searchInput" class="search-input" placeholder="Search for">
        <button class="search-btn" onclick="search()">⌕</button>
    </div>

    <div class="service-boxes">
        <div class="service-box">
            <img src="p.jpg">
            <p>Painting</p>
        </div>
        <div class="service-box">
            <img src="e.jpg">
            <p>Electrician</p>
        </div>
        <div class="service-box">
            <img src="home.jpg">
            <p>House Cleaning</p>
        </div>
        <div class="service-box">
            <img src="carpanter.jpg">
            <p>Carpenter</p>
        </div>
        <div class="service-box">
            <img src="construction.jpg" alt="Service 5">
            <p>Construction Worker</p>
        </div>
        <div class="service-box">
            <img src="water.jpg" alt="Service 6">
            <p>Waterproofing</p>
        </div>
        <div class="service-box">
            <img src="pest.jpg">
            <p>Pest Control</p>
        </div>
        <div class="service-box">
            <img src="appliance.jpg">
            <p>Appliance Repair</p>
        </div>
        <div class="service-box">
            <img src="p2.jpg">
            <p>Plumber</p>
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('searchInput');
    const searchTerms = ['Plumber', 'Carpenter', 'Electrician', 'Construction Worker'];
    let currentIndex = 0;

    function search() {
        searchInput.value = searchTerms[currentIndex];
        currentIndex = (currentIndex + 1) % searchTerms.length;
    }

    // Change search term every 4 seconds
    setInterval(search, 1500);
</script>

</body>
</html>
