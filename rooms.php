<?php
require('admin/db_config.php');
require('admin/essentials.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAGCARLAN FOREST RESORT - ROOMS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Slackside+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="common.css">
       
       

    </head>
   
    <body class="bg-light">
         <!-- NAVBAR & LOGO -->
         <?php include('header.php');?>

       <div class="my-5 px-4">
          <h2 class="fw-bold h-font text-center">ROOMS</h2>
          <div class="h-line bg-dark"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                          <h4 class="mt-2">FILTERS</h4>
                          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                    <label class="form-label">Check-in</label>
                                    <input type="date" class="form-control shadow-none mb-3">
                                    <label class="form-label">Check-out</label>
                                    <input type="date" class="form-control shadow-none">
                                        
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">AMENITIES</h5>
                                     <div class="mb-2">
                                        <input type="checkbox" id="a1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="a1">Amenity one</label>
                                     </div>
                                     <div class="mb-2">
                                        <input type="checkbox" id="a2" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="a2">Amenity two</label>
                                     </div>
                                     <div class="mb-2">
                                        <input type="checkbox" id="a3" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="a3">Amenity three</label>
                                     </div>
                                     <div class="mb-2">
                                        <input type="checkbox" id="a3" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="a3">Amenity four</label>
                                     </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                           <label class="form-label">Adults</label>
                                           <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div>
                                           <label class="form-label">Children</label>
                                           <input type="number" class="form-control shadow-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow" id="room4">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t2.jpeg" class="img-fluid rounded">
                                  </div>
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
                            
                          </div>

                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">El Seniorito (Building 2)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2nd Floor
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                    
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Free use of Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                     Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        LED Television
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱2500</h6>
                            <?php
                              if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                  echo '<a href="roomdetails.php?roomId=room4" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                              } else {
                                  echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                              }
                              ?>
                            
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room5">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample1" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r2.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="l1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t3.jpeg" class="img-fluid rounded">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">La Seniorita (Building 3) </h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2nd Floor
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                   
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Wifi
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Television
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱2700</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room5" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
    
                          </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room6">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample2" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r3.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="s1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t4.jpeg" class="img-fluid rounded">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">El Grande Mayor (Building 4)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2nd Floor
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Television
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">6 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Children</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱3500</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room6" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
    
                          </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room7">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample3" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r5.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t5.jpeg" class="img-fluid rounded">
                                  </div>
                                  
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Casa Junto (Building 4)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1st Floor
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Television
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Child</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱2800</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room7" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>

                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room8">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample4" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r6.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="m1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t6.jpeg" class="img-fluid rounded">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Familia Del Grande (Building 5)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Mezzanine
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Towels & Toiletries
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">6 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱3800</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room8" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
    
                          </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room9">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample5" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r7.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="s2.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="t7.jpeg" class="img-fluid rounded">
                                  </div>
                                  
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Espacio Des Amigos (Building 5)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        3rd Floor
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Dorm Type 
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Double deck beds
                                    </span>
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                       Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC & TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Towels & Toiletries
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">6 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Children</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱3100</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room9" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
     
                          </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room10">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample6" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r8.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="s3.jpeg" class="img-fluid rounded">
                                  </div>
                                  
                                  
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample6" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample6" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Familia Habitacion (Building 5)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        2nd Floor
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC & TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Toilet & Toiletries
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱2800</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room10" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
    
                          </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow" id="room11">
                        <div class="row g-0 p-3 align-items-center">
                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <div id="carouselExample7" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="r9.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="s4.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="s5.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="s6.jpeg" class="img-fluid rounded">
                                  </div>
                                  
                                  
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample7" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample7" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                          </div>
                           <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-2">Casitas (Uno - Tres)</h5>
                                <div class="features mb-2">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Loft Type
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        1 Bedroom
                                    </span>
                                </div>
                                <div class="Amenities mb-2">
                                    <h6 class="mb-1">Inclusions</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Swimming Pool
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Breakfast
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        AC & TV
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        Towels & Toiletries
                                    </span>
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Child</span>
                               </div>
                          </div>
                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center ">
                            <h6 class="mb-4">₱2500</h6>
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room11" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
                          </div>
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
                    <a href="index.html" class="d-inline-block mb-2 text-decoration-none">Home</a><br>
                    <a href="rooms.html" class="d-inline-block mb-2 text-decoration-none">Rooms</a><br>
                    <a href="amenities.html" class="d-inline-block mb-2 text-decoration-none">Amenities</a><br>
                    <a href="about.html" class="d-inline-block mb-2 text-decoration-none">About</a><br>
                    <a href="contactUs.html" class="d-inline-block mb-2 text-decoration-none">Contact Us</a><br>
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

        <h6 class="text-center bg-dark text-white p-3 m-0"></h6>

        <?php include('loginform.php');?>
     
     
        
      <script>
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper(".swiper-container", {
                    spaceBetween: 30,
                    effect: 'fade',
                    loop: true, 
                    autoplay: {
                        delay:3500,
                        disableOnInteraction: false,
                    }
                });
            });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
          // Filter the room cards based on the checked amenities
            $('.room-card').each(function() {
              var roomAmenities = $(this).data('amenities').split(',');
              var showRoom = false;
              for (var i = 0; i < roomAmenities.length; i++) {
                if (checkedAmenities.includes(roomAmenities[i])) {
                  showRoom = true;
                  break;
                }
              }
              if (showRoom) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });

            // Filter the room cards based on the selected number of guests
              $('.room-card').each(function() {
                var maxGuests = $(this).data('max-guests');
                if (selectedGuests == 'all' || maxGuests == selectedGuests) {
                  $(this).show();
                } else {
                  $(this).hide();
                }
              });
        </script>
    </body>
</html>
