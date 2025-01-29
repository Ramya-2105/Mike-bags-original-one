<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid ">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">MIKEBAGS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                data-bs-target="#registerModal">
                Register
            </button>
        </div>
    </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 d-flex align-items-centre">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-4">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb=2">
                            <button class="btn btn-dark shadow-none" type="submit">
                                LOGIN
                            </button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>
                    </form>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 d-flex align-items-centre">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-mb-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>

                            <div class="col-mb-6">
                                <label class="form-label">Email </label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">Number </label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">Address </label>
                                <input type="address" class="form-control shadow-none">
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">Pincode </label>
                                <input type="address" class="form-control shadow-none">
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-mb-6">
                                <label class="form-label">Conform password </label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none mt-2">REGISTER</button>
                    </div>
                </div>
            </form>
        </div>

        </form>
    </div>
</div>