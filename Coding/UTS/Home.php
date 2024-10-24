<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hotel - Home</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4e2dc;
            font-family: 'Poppins', sans-serif;
        }

        /* Banner container */
        .banner-container {
            background-color: #f08b41;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .banner-container h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 600;
        }

        /* Slider */
        .slider {
            display: flex;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            flex-shrink: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Footer */
        .footer {
            background-color: #ffafcc;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
            border-top: 5px solid #ff6f61;
        }

        /* Profile Section */
        .profile {
            text-align: left;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile h3 {
            font-weight: 600;
            margin-top: 20px;
        }

        .profile p {
            margin-top: 10px;
            font-weight: 300;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>

    <div class="container mt-4">
        <div class="slider">
            <img src="slide1.jpg" alt="Banner 1">
            <img src="slide2.jpg" style="display:none;" alt="Banner 2">
            <img src="slide3.jpg" style="display:none;" alt="Banner 3">
        </div>

        <div class="profile mt-4">
            <h3>Hotel Profile</h3>
            <p>BAIHAQI Hotel is a premier accommodation destination nestled in the heart of Malang, East Java, Indonesia. Our establishment is renowned for its warm hospitality, impeccable service, and luxurious amenities, making it the ideal choice for both leisure and business travelers.

                Our Commitment to Excellence:
                At BAIHAQI Hotel, we are dedicated to providing our guests with an unforgettable experience. Our commitment to excellence is reflected in every aspect of our operations, from the moment you step into our lobby to the time you check out.

                Key Features and Amenities:
                Luxurious Accommodations: Our spacious and elegantly appointed rooms offer a serene retreat, complete with modern amenities to ensure your comfort and convenience.
                World-Class Dining: Indulge in a culinary journey with our exquisite dining options, featuring a variety of international and local delicacies.
                State-of-the-Art Facilities: Our hotel boasts a range of state-of-the-art facilities, including a swimming pool, fitness center, and spa, catering to your relaxation and well-being.
                Prime Location: Conveniently located in the vibrant city of Malang, our hotel offers easy access to popular attractions, shopping districts, and business centers.

                Our Vision:
                BAIHAQI Hotel envisions becoming the leading hospitality provider in Malang, known for its exceptional service, luxurious accommodations, and commitment to guest satisfaction.

                Our Mission:
                Our mission is to create a welcoming and memorable experience for our guests by providing personalized service, exceptional amenities, and a warm, inviting atmosphere.

                Choose BAIHAQI Hotel for an unforgettable stay in Malang.</p>
        </div>
    </div>

    <footer class="footer">
        <p>Muhammad Rizal Al Baihaqi - 20 - 2341720225 - TI 2I</p>
    </footer>

    <script>
        $(document).ready(function() {
            let current = 0;
            const banners = $('.slider img');
            banners.eq(current).show();
            
            setInterval(() => {
                banners.eq(current).fadeOut(1000);
                current = (current + 1) % banners.length;
                banners.eq(current).fadeIn(1000);
            }, 3000);
        });
    </script>
</body>
</html>
