<?php

require('admin/db_config.php');
require('admin/essentials.php');

function convertToUSD($amount) {
    $conversion_rate = 0.019; 

    $usd_amount = $amount * $conversion_rate;

    return number_format($usd_amount, 2);
}


$room = null;

// Check if roomId is set
if(isset($_GET['roomId'])) {
    $roomId = $_GET['roomId'];
    // Retrieve the room details based on the $roomId
    // Here, $room contains the details of the selected room
    // You can use this to display the name and price of the room
    $roomDetails = [
        'room1' => [
            'title' => 'El Presidente (Building 1)',
            'price' => '₱3500',
            'images' => [
                "c1.jpeg",
                "x1.jpeg",
                "x2.jpeg",
                "x3.jpeg"
            ],
            'description' => 'El Presidente (Building 1) offers comfortable accommodation at Nagcarlan Forest Resort for ₱3500 per night. This room, located on the second floor, features two bedrooms and is suitable for up to six persons. Included amenities comprise free use of the swimming pool, waived entrance fee, complimentary breakfast, and air conditioning. With a capacity of accommodating six adults and two children, El Presidente ensures a relaxing and enjoyable stay for guests.'
        ],
        'room2' => [
            'title' => 'Pasilyo 1-4 (Building 3)',
            'price' => '₱2500',
            'images' => [
                "c2.jpeg",
                "x4.jpg",
                "x5.jpg"
            ],
            'description' => 'Pasilyo 1-4 (Building 3) offers cozy accommodation at Nagcarlan Forest Resort for ₱2500 per night. This room, located on the ground floor, features a spacious area and is suitable for up to four persons. Included amenities comprise free use of the swimming pool, waived entrance fee, and complimentary breakfast. With a capacity of accommodating four adults, Pasilyo 1-4 ensures a comfortable stay for guests.'
        ],
        'room3' => [
            'title' => 'Pasilyo 5-7 (Building 1)',
            'price' => '₱2800',
            'images' => [
                "c3.jpeg",
                "x6.jpg"
                
            ],
            'description' => 'Pasilyo 5-7 (Building 1), priced at ₱2800 per night. Situated on the first floor, this one-bedroom accommodation provides a comfortable stay for up to four adults and one child. Guests can enjoy amenities such as free access to the swimming pool, complimentary breakfast, air conditioning, and an LED television. Whether relaxing indoors or exploring the surrounding natural beauty.'
        ],
        'room4' => [
            'title' => 'El Seniorito (Building 2)',
            'price' => '₱2500',
            'images' => [
                "r1.jpeg",
                "t1.jpeg",
                "t2.jpeg"
                
            ],
            'description' => 'El Seniorito (Building 2) priced affordably at ₱2500 per night. Nestled on the second floor, this one-bedroom accommodation caters perfectly to the comfort of four adults and two children. Guests can unwind and indulge in the resorts offerings, including complimentary access to the swimming pool, breakfast delights, air conditioning, and an LED television.'
        ],
        'room5' => [
            'title' => 'La Seniorita (Building 3)',
            'price' => '₱2700',
            'images' => [
                "r2.jpeg",
                "l1.jpeg",
                "t3.jpeg"
                
            ],
            'description' => 'La Señorita (Building 3) offers a serene escape at Nagcarlan Forest Resort for just ₱2700 per night. Situated on the second floor, this one-bedroom retreat comfortably accommodates four adults and two children, providing ample space for relaxation and enjoyment. Guests can indulge in the resorts amenities, including access to the refreshing swimming pool, complimentary Wi-Fi, air conditioning for added comfort, and in-room entertainment with a television. '
        ],
        'room6' => [
            'title' => 'El Grande Mayor (Building 4)',
            'price' => '₱3500',
            'images' => [
                "r3.jpeg",
                "s1.jpeg",
                "t4.jpeg"
                
            ],
            'description' => 'El Grande Mayor (Building 4) presents accommodations for just ₱3500 per night. Nestled on the second floor, this expansive one-bedroom suite is designed to accommodate six adults and three children, ensuring ample space for both relaxation and recreation. Guests can indulge in the resorts array of offerings, including complimentary breakfast to start the day right, access to the inviting swimming pool for refreshing dips, and the comfort of air conditioning throughout their stay. With in-room entertainment provided by a television, guests can unwind in style after a day of exploration or lounging by the pool. '
        ],
        'room7' => [
            'title' => 'Casa Junto (Building 4)',
            'price' => '₱2800',
            'images' => [
                "r5.jpeg",
                "t5.jpeg"
                
            ],
            'description' => 'Casa Junto (Building 4) offers an affordable rate of ₱2800 per night. Situated on the first floor, this one-bedroom suite is perfect for a family getaway, with ample space for four adults and one child. Guests can enjoy the convenience of in-room amenities, including access to the refreshing swimming pool, a hearty breakfast to kickstart their day, and the comfort of air conditioning throughout their stay. With a television provided, guests can unwind and enjoy leisurely moments in the comfort of their room.  '
        ],
        'room8' => [
            'title' => 'Familia Del Grande (Building 5)',
            'price' => '₱3800',
            'images' => [
                "r6.jpeg",
                "m1.jpeg",
                "t6.jpeg"
                
            ],
            'description' => 'Familia Del Grande (Building 5) priced at ₱3800 per night, this spacious accommodation features a mezzanine level with one bedroom, offering ample space for six adults and two children. Guests are treated to a range of inclusive amenities, including access to the resorts refreshing swimming pool, a hearty breakfast to energize their mornings, and the convenience of air conditioning for added comfort throughout their stay. Additionally, complimentary towels and toiletries are provided, ensuring a hassle-free experience for guests.'
        ],
        'room9' => [
            'title' => 'Espacio Des Amigos (Building 5)',
            'price' => '₱3100',
            'images' => [
                "r7.jpeg",
                "s2.jpeg",
                "t7.jpeg"
                
            ],
            'description' => 'Espacio Des Amigos (Building 5) offers budget-friendly lodging perfect for larger groups or families at Nagcarlan Forest Resort. Priced at ₱3100 per night, this third-floor dorm-style room features double-deck beds, accommodating up to six adults and three children. Inclusive amenities include access to the resorts pool, breakfast, AC, TV, and complimentary towels/toiletries. With affordability, comfort, and convenience, Espacio Des Amigos ensures a memorable retreat amidst Nagcarlans tranquil ambiance.'
        ],
        'room10' => [
            'title' => 'Familia Habitacion (Building 5)',
            'price' => '₱2800',
            'images' => [
                "r8.jpeg",
                "s3.jpeg"
                
                
            ],
            'description' => 'Familia Habitacion (Building 5) presents a cozy retreat option at Nagcarlan Forest Resort, priced at ₱2800 per night. Situated on the second floor, this one-bedroom accommodation comfortably hosts four adults and two children. Inclusive features comprise access to the resorts swimming pool, breakfast, AC, TV, and essential toiletries. With its inviting ambiance and convenient amenities, Familia Habitacion offers an ideal setting for families seeking a relaxing getaway amidst the natural beauty of Nagcarlan.'
        ],
        'room11' => [
            'title' => 'Casitas (Uno - Tres)',
            'price' => '₱2500',
            'images' => [
                "r9.jpeg",
                "s4.jpeg",
                "s5.jpeg",
                "s6.jpeg"
                
                
            ],
            'description' => 'Casitas (Uno - Tres) offer charming loft-style accommodations at Nagcarlan Forest Resort for ₱2500 per night. With a cozy layout designed for two adults and one child, each unit provides a comfortable retreat. Inclusive amenities feature access to the resorts swimming pool, breakfast, AC, TV, and essential toiletries. Ideal for couples or small families, Casitas promise a delightful stay amidst the serene surroundings of Nagcarlan.'
        ]

    ];
    
    
    $room = $roomDetails[$roomId] ?? null;

    if($room) {
        $price = $room['price'] ?? '';
        
        // Convert price to a numeric type
        $price = str_replace('₱', '', $price); // Remove currency symbol
        $price = floatval($price); // Convert to float
        
        // Store the price in session variable
        
        $_SESSION['room_price'] = $price;

        $count_days = $data['days'] ?? 0; // Assuming you receive days from data
        $payment = $price * $count_days;
        $_SESSION['room'] = [
            'payment' => $payment
        ];
    }

        
        

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAGCARLAN FOREST RESORT - Confirm Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Slackside+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="common.css">

    <style>
        .custom-alert{
            position: fixed;
            top: 80px;
            right: 25px;
            z-index: 1111;
        }
    </style>
</head>
   
<body class="bg-light">
    <?php include('header.php');?>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 mb-2 px-4 mt-5">
                <?php
                // Display the room name and price
                if($room) {
                    echo '<h4 class="fw-bold">' . $room['title'] . '</h4>';
                    echo '<div style="font-size: 13px">';
                    echo '<a href="index.php" class="text-secondary text-decoration-none">HOME</a>';
                    echo '<span class="text-secondary"> > </span>';
                    echo '<a href="rooms.php" class="text-secondary text-decoration-none">ROOMS</a>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="col-lg-7 col-md-12 px-4">
                <div class="card mb-3 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                            <?php
                                // Loop through each image source and add it to the carousel
                                foreach ($room['images'] as $index => $imageSource) {
                                    // Set the active class for the first item
                                    $activeClass = ($index === 0) ? 'active' : '';
                                    echo '<div class="carousel-item ' . $activeClass . '">';
                                    echo '<img src="' . $imageSource . '" class="d-block w-100" rounded>';
                                    echo '</div>';
                                }
                            ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <?php
                        if($room) {
                                $price = $room['price'] ?? '';
                                echo '<h5 class="fw-bold mt-3 px-2">' . $price . ' per night</h5>';
                            }
                    
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-3 border-0 shadow-sm rounded-3">
                        <div class="card-body">
                           <form action="#" id="booking_form">
                            <h6 class="mb-3">BOOKING DETAILS </h6>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" id="Name" name="Name" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none" id="PhoneNumber" name="PhoneNumber" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" name="address" rows="1" required></textarea>
                                </div>
                                <div class="col-md-6 mb-2">
                                <label class="form-label">Check-in</label>
                                    <input type="date" onclick="check_availability()" class="form-control shadow-none" id="check-in"  name="check-in" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                <label class="form-label">Check-out</label>
                                    <input type="date" onclick="check_availability()"  class="form-control shadow-none" id="check-out" name="check-out" required>
                                </div>
                                <div class="col-12">
                                    <div class="spinner-border text-info mt-3 d-none" id="loader" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <h6 class="mt-3" id="pay_info">Provide check-in and check-out date!</h6>
                                    <div id="paypal-button-container"></div>                                </div>
                            </div>
                           </form>
                        </div>
                </div>
            </div>

            <div class="col-12 mt-4 px-1">
                <div class="mb-4">
                    <h5>Description</h5>
                    <p style="text-align: justify;"class="text-secondary text-decoration-none">
                    <?php echo $room['description']; ?>
                    </p>
                </div>
            </div>


        </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="container-fluid bg-white mt-5">
            <div class="row">
                <div class="col-lg-4 p-4">
                  <h3 class="h-font fw-bold fs-3 mb-2">Nagcarlan Forest Resort</h3>
                  <p>Nagcarlan Forest Resort is a “natural spring resort” located at 
                    Brgy Silangan Napapatid, Nagcarlan, Laguna. Our facilities include
                     room accommodations, Maria’s Restaurante, swimming pools and “batis” 
                     running water straight from Mt. Banahaw. </p>
                </div>
                <div class="col-lg-4 p-4">
                    <h5>Links</h5>
                    <a href="index.php" class="d-inline-block mb-2 text-decoration-none">Home</a><br>
                    <a href="rooms.php" class="d-inline-block mb-2 text-decoration-none">Rooms</a><br>
                    <a href="amenities.php" class="d-inline-block mb-2 text-decoration-none">Amenities</a><br>
                    <a href="about.php" class="d-inline-block mb-2 text-decoration-none">About</a><br>
                    <a href="contactUs.php" class="d-inline-block mb-2 text-decoration-none">Contact Us</a><br>
                </div>
                <div class="col-lg-4 p-4">
                    <h5 class="mb-3">Follow us</h5>
                    <a href="https://www.facebook.com/NagcarlanForestResort" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-facebook me-1"></i>Facebook</span>
                    </a>
                    <br>
                    <a href="https://www.instagram.com/nagcarlanforest?fbclid=IwAR2YVifytwtrBH454j0YknT_pvD0O96Q4ry1fWvT_3oOuJZHlqUeNSAbAwg" 
                    class="d-inline-block text-dark text-decoration-none">
                        <i class="bi bi-instagram me-1"></i>Instagram</span>
                    </a>
            </div>
        </div>
    </div>

   
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    let booking_form = document.getElementById('booking_form');
    let loader = document.getElementById('loader');
    let pay_info = document.getElementById('pay_info');

    function check_availability() {
        let checkin_val = booking_form.elements['check-in'].value;
        let checkout_val = booking_form.elements['check-out'].value;

        booking_form.elements['paypal-button-container'];

        if (checkin_val != '' && checkout_val != '') 
        {
            pay_info.classList.add('d-none');
            pay_info.classList.replace('text-dark', 'text-danger');
            loader.classList.remove('d-none');

            let data = new FormData();

            data.append('check_availability', '');
            data.append('check_in', checkin_val);
            data.append('check_out', checkout_val);

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/confirm_booking.php", true);

            xhr.onload = function () 
            {
                let data = JSON.parse(this.responseText);
                console.log("Response:", data); 
                if (data.status == 'check_in_out_equal')
                {
                    pay_info.innerText = "You cannot check-out on the same day!";
                } 
                else if (data.status == 'check_out_earlier') 
                {
                    pay_info.innerText = "Check-out date is earlier than check-in date!";
                } 
                else if (data.status == 'check_in_earlier') 
                {
                    pay_info.innerText = "Check-in date is earlier than today's date!";
                } 
                else if (data.status == 'unavailable') 
                {
                    pay_info.innerText = "Room not available for this check-in date!";
                } else 
                {
                    console.log("Data days:", data.days);
                    console.log("Data payment:", data.payment);

                    pay_info.innerHTML = "No. of Days:"+data.days+"<br>Total Amount To Pay:"+data.payment;
                    pay_info.classList.replace('text-danger', 'text-dark');
                    
                }
                pay_info.classList.remove('d-none');
                loader.classList.add('d-none');
            }
           
            xhr.send(data);
        }
    }
    
</script>
<script src="https://www.paypal.com/sdk/js?client-id=ARlRaIrD8H5JDXRBfDteyoESRQxHL0eZ7upm0fz8f_qbk1EJSrAs-5KSnKZ20wQ4sLZAYHuSfxYPF8H4"></script>

<script>
        // Render the PayPal button
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?php echo json_encode(convertToUSD($_SESSION['room']['payment'])); ?>
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {;
                    alert('Transaction completed by ' + details.payer.name.given_name);
                });
            }
        }).render('#paypal-button-container'); // Render the button in the specified container
    </script>

</body>
</html>
