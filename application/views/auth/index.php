
<nav class="navbar navbar-light bg-light">
    <div class="container my-3">
        <div>
            <div class="dropdown">
                <button class="btn btn-secondary" style="border-radius: 1000px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Language
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div class="dropdown">
                <button class="btn btn-secondary" style="border-radius: 1000px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Currency
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>



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

    <section id="filter-landing" class="filter-landing my-5 pt-5">
        <div class="container p-5">
            <h4 class="fw-semibold text-primary-darken-truveil">Search your property</h4>
            <div class="row pt-5">
                <div class="col-5">
                    <div class="truveil-input">
                        <input type="email" placeholder="Property Name / ID " id="email" autocomplete="off">
                        <label for="email">Property Name / ID </label>
                    </div>
                </div>
                <div class="col-4">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-5">
                    <div class="truveil-input">
                        <input type="email" placeholder="Property Name / ID " id="email" autocomplete="off">
                        <label for="email">Property Name / ID </label>
                    </div>
                </div>
                <div class="col-4">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="form-select select-truveil" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <button>
                Search
            </button>
        </div>
    </section>

</main>
<!-- END MAIN CONTENT -->


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