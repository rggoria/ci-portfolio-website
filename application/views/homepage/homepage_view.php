<!-- HEADER START -->
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('resources/images/logo.png');?>" alt="Logo" height="30">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list text-white fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn bg-primary" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- HEADER END -->

<!-- HERO START -->
<section id="hero">
    <div class="container">
        <h1 class="text-center mt-5 fw-bold">I am <span class="typer"></span></h1>
        <div class="row">
            <div class="col-md-1 social d-none d-md-flex flex-column justify-content-center">
                <a href="https://github.com/rggoria" target="_blank"><i class="bi bi-github fs-5"></i></a>
                <a href="https://www.linkedin.com/in/ram-emerson-goria-474265265/" target="_blank"><i class="bi bi-linkedin fs-5"></i></a>
            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url('resources/images/intro.png');?>" alt="Profile" class="image-fluid mt-5 ms-lg-4 mx-auto d-block" height="500">
            </div>
            <div class="col-md-7 d-flex flex-column justify-content-center">
                <div class="hero-content px-lg-5">
                    <p>
                        I aim to utilize my passion for innovation and expertise in web and mobile app development.
                        I am eager to contribute my knowledge and skills towards the success of the company while
                        gaining valuable hands-on experience and expanding my understanding of the industry.
                    </p>
                    <a href="#" class="btn btn-primary me-2">Contact</a>
                    <a href="#" class="btn btn-outline-primary px-4"><i class="bi bi-arrow-down-circle-fill me-1"></i>CV</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HERO END -->

<!-- ABOUT ME START -->
<section id="about">
    <div class="container">
        <div class="section-title">
            <h3 class="text-center fw-bold main-title">About Me</h3>
            <p class="text-center fw-bold sub-title">About Me</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <img src="<?php echo base_url('resources/images/profile.jpg');?>" alt="about me" class="image-fluid rounded mx-auto d-block" height="250">
            </div>
            <div class="col-md-12 col-lg-7">
                <p>
                    As an inspiring web and mobile app developer, I love creating applications that
                    are easy for people to use. I'm a great team player and enjoy working with others
                    to create something awesome. I'm always looking for exciting projects to work on
                    that can make a positive impact. My portfolio is simple and general to showcase
                    my skills in different areas. I'm excited about the future of technology and how
                    I can contribute to making it better.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
                <div class="row mt-5 text-center exp">
                    <div class="col-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <h4 class="fw-bold exp-number" data-val="7">0</h4>
                            <h5 class="mt-4 ps-1">+</h5>
                        </div>
                        <p>experience</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <h4 class="fw-bold exp-number" data-val="7">0</h4>
                            <h5 class="mt-4 ps-1">+</h5>
                        </div>
                        <p>project</p>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <h4 class="fw-bold exp-number" data-val="2">0</h4>
                            <h5 class="mt-4 ps-1">+</h5>
                        </div>
                        <p>certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT ME END -->

<!-- SKILLS START -->
<section id="skills">
    <div class="container">
        <div class="section-title">
            <h3 class="text-center fw-bold main-title">My Skills</h3>
            <p class="text-center fw-bold sub-title">My skill</p>
        </div>
        <div class="row gap-3 justify-content-center">
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/photoshop.png') ?>" class="card-img-top" alt="Photoshop">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">Adobe Photoshop</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/word.png') ?>" class="card-img-top" alt="Word">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">Microsoft Word</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/powerpoint.png') ?>" class="card-img-top" alt="PowerPoint">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">Microsoft PowerPoint</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/html-5.png') ?>" class="card-img-top" alt="HTML">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">HTML 5</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/css-3.png') ?>" class="card-img-top" alt="CSS">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">CSS 3</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/javascript.png') ?>" class="card-img-top" alt="JavaScript">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">JavaScript</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/php.png') ?>" class="card-img-top" alt="PHP">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">PHP</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/bootstrap.png') ?>" class="card-img-top" alt="Bootstrap">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">Bootstrap 5</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/codeigniter.png') ?>" class="card-img-top" alt="CodeIgniter">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">CodeIgniter 3</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/php.png') ?>" class="card-img-top" alt="PHP">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">PHP</p>
                </div>
            </div>
            <div class="col-4 col-lg-2 card text-center p-3 skill">
                <img src="<?php echo base_url('resources/icons/android-studio.png') ?>" class="card-img-top" alt="Android">
                <div class="card-body">
                    <p class="card-text fw-bold skill-text">Android Studio (Kotlin)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SKILLS END -->

<!-- SERVICES START -->
<section id="services">
    <div class="container">
        <div class="section-title">
            <h3 class="text-center fw-bold main-title">My Services</h3>
            <p class="text-center fw-bold sub-title">services</p>
        </div>
        <div class="row gap-3 justify-content-center">
            <div class="col-4 col-lg-3 card text-center p-3 bg-transparent">
                <div class="card-img-top d-flex justify-content-center">
                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_ctaacxzb.json"  background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                </div>
                <div class="card-body skill-text">
                    <h3 class="card-title fw-bold">Web Application Developer</h3>
                    <p class="card-text">
                        I have a passion to create web applications that can help users interact easily to the website.
                    </p>
                </div>
            </div>
            <div class="col-4 col-lg-3 card text-center p-3 bg-transparent">
                <div class="card-img-top d-flex justify-content-center">
                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_Zo9feTljq8.json"  background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                </div>
                <div class="card-body skill-text">
                    <h3 class="card-title fw-bold">Mobile Application Developer</h3>
                    <p class="card-text">
                        I have a passion to create mobile applications that can help users interact easily to the application.
                    </p>
                </div>
            </div>
            <div class="col-4 col-lg-3 card text-center p-3 bg-transparent">
                <div class="card-img-top d-flex justify-content-center">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_rkyfvrzn.json"  background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                </div>
                <div class="card-body skill-text">
                    <h3 class="card-title fw-bold">Web and Mobile Designer</h3>
                    <p class="card-text">
                        To design website and mobile to make it more interactive and easy to use and understand to users.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICES END -->