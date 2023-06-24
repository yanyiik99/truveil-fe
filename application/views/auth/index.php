
<!-- START MAIN CONTENT -->
<main>
    <!-- Start Banner -->
    <section id="banner-landing" class="wrapper mt-5">
        <div class="container">
            <div class="row d-flex flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-6 ">
                    <h1 class="fw-bold">
                        Welcome in 
                            <u class="u-truveil-banner">
                                Truveil
                            </u><br>
                        Bali Property
                    </h1>
                    <h5 class="fw-semibold">
                        A place where you will find your home for longterm stay in Bali..
                    </h5>
                    <p class="pt-4">
                        It’s not easy to find a home for longterm staying in Bali right now because foreigners population growth rapidly. 
                        We have vision to help you guys to find a suitable home base here in Bali. So, please don’t be hesitate and feel free to contact us as your trusted personel assistant to solve your problem in finding home in Bali. 
                    </p>
                    <a href="" class="btn btn-contact-us">
                        Contact Us
                    </a>
                </div>
                <div class="col-1 d-none d-lg-block"></div>
                <div class="col-12 col-lg-5 ">
                    <img class="img-fluid" src="<?= base_url()?>assets/img/banner-img.png" alt="banner">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Start Filter Landing -->
    <section id="filter-landing" class="filter-landing my-5 pt-5">
        <div class="container p-5">
            <h4 class="fw-semibold text-primary-darken-truveil">Search your property</h4>
            <div class="row pt-5">
                <div class="col-12 col-lg-5 pt-4 pt-lg-0">
                    <div class="truveil-input">
                        <input type="email" placeholder="Property Name / ID " id="email" autocomplete="off">
                        <label for="email">Property Name / ID </label>
                    </div>
                </div>
                <div class="col-12 col-lg-4 pt-4 pt-lg-0">
                    <select class="form-select select-truveil " aria-label="Default select example">
                        <option selected disabled>Rent Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-12 col-lg-3 pt-4 pt-lg-0">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected disabled>Location</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-lg-5 pt-4 pt-lg-0">
                    <div class="truveil-input">
                        <input type="text" placeholder="Price" id="price" class="money-input" autocomplete="off">
                        <label for="price">Price</label>
                    </div>
                </div>
                <div class="col-12 col-lg-4 pt-4 pt-lg-0">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected disabled>Select Bedroom</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-12 col-lg-3 pt-4 pt-lg-0">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected disabled>Other Filter</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-contact-us mt-5">
                Search
                <i class="fa-solid fa-magnifying-glass ms-2"></i>
            </button>
        </div>
    </section>
    <!-- End Filter Landing -->

    <!-- Start Preview Card -->
    <section id="preview-card">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="gradient-preview-card fw-bold d-flex">Yearly & Monthly</h3>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme card-preview">
                    <div class="item m-3">
                        <div class="head-card-preview">
                            <div class="d-flex justify-content-between p-2">
                                <span class="fw-bold">
                                    #ID 001
                                </span>
                                <span class="time-card-preview">
                                    <i class="fa-regular fa-clock"></i>
                                    Update 25 March 2023
                                </span>
                            </div>
                        </div>
                        <div class="img-card-preview">
                            <img src="<?= base_url()?>assets/img/villa/v-1.png" alt="img">
                        </div>
                        <div class="p-4 body-card-preview">
                            <h4 class="fw-bold">Villa Anonymous</h4>
                            <span class="location-card-preview pb-3 d-block">
                                <i class="fa-solid fa-location-dot"></i> 
                                Canggu, Bali
                            </span>
                            <a href="" class="btn btn-order-card-preview px-3">
                                <img class="img-fluid w-auto pe-3" src="<?= base_url()?>assets/img/wa-logo-order.png" alt="logo-order">
                                <span>
                                    Order Now
                                </span>
                            </a>
                            <span class="d-block pt-3">
                                <?= $desc?>
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <span>
                                    <i class="fa-regular fa-heart fs-4"></i>
                                </span>
                                <a href="" class="btn btn-detail-card-preview">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right ps-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item m-3">
                        <div class="head-card-preview">
                            <div class="d-flex justify-content-between p-2">
                                <span class="fw-bold">
                                    #ID 001
                                </span>
                                <span class="time-card-preview">
                                    <i class="fa-regular fa-clock"></i>
                                    Update 25 March 2023
                                </span>
                            </div>
                        </div>
                        <div class="img-card-preview">
                            <img src="<?= base_url()?>assets/img/villa/v-demo.png" alt="img">
                        </div>
                        <div class="p-4 body-card-preview">
                            <h4 class="fw-bold">Villa Anonymous</h4>
                            <span class="location-card-preview pb-3 d-block">
                                <i class="fa-solid fa-location-dot"></i> 
                                Canggu, Bali
                            </span>
                            <a href="" class="btn btn-order-card-preview px-3">
                                <img class="img-fluid w-auto pe-3" src="<?= base_url()?>assets/img/wa-logo-order.png" alt="logo-order">
                                <span>
                                    Order Now
                                </span>
                            </a>
                            <span class="d-block pt-3">
                                <?= $desc?>
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <span>
                                    <i class="fa-regular fa-heart fs-4"></i>
                                </span>
                                <a href="" class="btn btn-detail-card-preview">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right ps-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item m-3">
                        <div class="head-card-preview">
                            <div class="d-flex justify-content-between p-2">
                                <span class="fw-bold">
                                    #ID 001
                                </span>
                                <span class="time-card-preview">
                                    <i class="fa-regular fa-clock"></i>
                                    Update 25 March 2023
                                </span>
                            </div>
                        </div>
                        <div class="img-card-preview">
                            <img src="<?= base_url()?>assets/img/villa/v-3.png" alt="img">
                        </div>
                        <div class="p-4 body-card-preview">
                            <h4 class="fw-bold">Villa Anonymous</h4>
                            <span class="location-card-preview pb-3 d-block">
                                <i class="fa-solid fa-location-dot"></i> 
                                Canggu, Bali
                            </span>
                            <a href="" class="btn btn-order-card-preview px-3">
                                <img class="img-fluid w-auto pe-3" src="<?= base_url()?>assets/img/wa-logo-order.png" alt="logo-order">
                                <span>
                                    Order Now
                                </span>
                            </a>
                            <span class="d-block pt-3">
                                <?= $desc?>
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <span>
                                    <i class="fa-regular fa-heart fs-4"></i>
                                </span>
                                <a href="" class="btn btn-detail-card-preview">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right ps-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 pt-5"></div>
            <div class="row mt-5">
                <div class="col-6">
                    <h3 class="gradient-preview-card fw-bold d-flex">Leasehold & Freehold</h3>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme card-preview">
                    <div class="item m-3">
                        <div class="head-card-preview">
                            <div class="d-flex justify-content-between p-2">
                                <span class="fw-bold">
                                    #ID 001
                                </span>
                                <span class="time-card-preview">
                                    <i class="fa-regular fa-clock"></i>
                                    Update 25 March 2023
                                </span>
                            </div>
                        </div>
                        <div class="img-card-preview">
                            <img src="<?= base_url()?>assets/img/villa/v-1.png" alt="img">
                        </div>
                        <div class="p-4 body-card-preview">
                            <h4 class="fw-bold">Villa Anonymous</h4>
                            <span class="location-card-preview pb-3 d-block">
                                <i class="fa-solid fa-location-dot"></i> 
                                Canggu, Bali
                            </span>
                            <a href="" class="btn btn-order-card-preview px-3">
                                <img class="img-fluid w-auto pe-3" src="<?= base_url()?>assets/img/wa-logo-order.png" alt="logo-order">
                                <span>
                                    Order Now
                                </span>
                            </a>
                            <span class="d-block pt-3">
                                <?= $desc?>
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <span>
                                    <i class="fa-regular fa-heart fs-4"></i>
                                </span>
                                <a href="" class="btn btn-detail-card-preview">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right ps-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item m-3">
                        <div class="head-card-preview">
                            <div class="d-flex justify-content-between p-2">
                                <span class="fw-bold">
                                    #ID 001
                                </span>
                                <span class="time-card-preview">
                                    <i class="fa-regular fa-clock"></i>
                                    Update 25 March 2023
                                </span>
                            </div>
                        </div>
                        <div class="img-card-preview">
                            <img src="<?= base_url()?>assets/img/villa/v-demo.png" alt="img">
                        </div>
                        <div class="p-4 body-card-preview">
                            <h4 class="fw-bold">Villa Anonymous</h4>
                            <span class="location-card-preview pb-3 d-block">
                                <i class="fa-solid fa-location-dot"></i> 
                                Canggu, Bali
                            </span>
                            <a href="" class="btn btn-order-card-preview px-3">
                                <img class="img-fluid w-auto pe-3" src="<?= base_url()?>assets/img/wa-logo-order.png" alt="logo-order">
                                <span>
                                    Order Now
                                </span>
                            </a>
                            <span class="d-block pt-3">
                                <?= $desc?>
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <span>
                                    <i class="fa-regular fa-heart fs-4"></i>
                                </span>
                                <a href="" class="btn btn-detail-card-preview">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right ps-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item m-3">
                        <div class="head-card-preview">
                            <div class="d-flex justify-content-between p-2">
                                <span class="fw-bold">
                                    #ID 001
                                </span>
                                <span class="time-card-preview">
                                    <i class="fa-regular fa-clock"></i>
                                    Update 25 March 2023
                                </span>
                            </div>
                        </div>
                        <div class="img-card-preview">
                            <img src="<?= base_url()?>assets/img/villa/v-3.png" alt="img">
                        </div>
                        <div class="p-4 body-card-preview">
                            <h4 class="fw-bold">Villa Anonymous</h4>
                            <span class="location-card-preview pb-3 d-block">
                                <i class="fa-solid fa-location-dot"></i> 
                                Canggu, Bali
                            </span>
                            <a href="" class="btn btn-order-card-preview px-3">
                                <img class="img-fluid w-auto pe-3" src="<?= base_url()?>assets/img/wa-logo-order.png" alt="logo-order">
                                <span>
                                    Order Now
                                </span>
                            </a>
                            <span class="d-block pt-3">
                                <?= $desc?>
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <span>
                                    <i class="fa-regular fa-heart fs-4"></i>
                                </span>
                                <a href="" class="btn btn-detail-card-preview">
                                    See Detail
                                    <i class="fa-solid fa-arrow-right ps-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Preview Card -->

</main>
<!-- END MAIN CONTENT -->

<footer id="footer" class="footer bg-footer py-5 mt-5">
    <div class="container">
        <div class="row d-flex justify-content-evenly">
            <div class="col-4">
                <div>
                    <img src="<?= base_url()?>assets/img/logo.png" alt="logo" width="80" height="80">
                </div>
                <div class="pt-3">
                    <a href="" class="fs-4">
                        <i class="fas fa-phone"></i>
                        +62 81213123123
                    </a>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <div class="">
                    <h5 class="fw-bold">Contact Us</h5>
                    <ul>
                        <li class="pt-3">
                            <a href="">
                                <i class="fab fa-whatsapp"></i>
                                +62 81213123123
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="">
                                <i class="fab fa-instagram"></i>
                                @truveil.co
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="">
                                <i class="far fa-envelope"></i>
                                truevil@gmail.com
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="">
                                <i class="far fa-clock"></i>
                                24 hours
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <div >
                    <h5 class="fw-bold">Features</h5>
                    <ul>
                        <li class="pt-3">Monthly</li>
                        <li class="pt-3">Yearly</li>
                        <li class="pt-3">Freehold</li>
                        <li class="pt-3">Leasehold</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12">
                <a href="">
                    @Copyright 2023 Truveil
                </a>
            </div>
        </div>
    </div>
</footer>


<?php if (@isset($_SESSION["success"])) { ?>
    <div class="alert alert-success alert-dismissible" id="success-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
        <?= $_SESSION["success"]; ?>
    </div>
<?php } ?>

<?php if (@isset($_SESSION["failed"])) { ?>
    <div class="alert alert-danger alert-dismissible" id="danger-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
        <?= $_SESSION["failed"]; ?>
    </div>
<?php } ?>