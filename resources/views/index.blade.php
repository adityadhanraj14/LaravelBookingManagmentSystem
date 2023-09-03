@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
 .navbar-brand img {
  width: 60px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
</style>
@endsection
@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        
                        <a href="{{url('/')}}" class="nav-item nav-link text-black active">Home</a>
                        <a href="{{url('page/team')}}" class="nav-item nav-link text-black">Team</a>
                        <a href="{{url('/')}}" class="navbar-brand d-none d-md-block">
                            <img src="{{asset('assets/image/logo.png')}}"  alt="Brand Logo">
                        </a>
                        <a href="{{url('page/about-us')}}" class="nav-link text-black">About Us</a>                                            
                        <a href="{{url('page/contact-us')}}" class="nav-link text-black">Contact Us</a>
                        
                    </div>
                    <form action="{{route('login')}}" method="get">
                        <button class="btn btn-outline-primary mb-3" type="submit" > Login</button>
                    </form>
                    <form action="{{route('signup')}}" method="get">
                        <button class="btn btn-outline-success mb-3 " type="submit" >SignUp</button>
                    </form>
                    <!-- <a href="{{route('login')}}" class="nav-link text-black">Login</a>                                             -->
                        <!-- <a href="{{route('signup')}}" class="nav-item nav-link text-black">SignUp</a> -->
                </div>
            </div>
        </nav>
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" ></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80" class="d-block w-100" alt="Carousel 1" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="https://plus.unsplash.com/premium_photo-1661659662623-73f3e90d5fc4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="Carousel 2" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="Carousel 3" style="max-height: 100vh;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </header>
    <main class="m-5">
        <section class="container m-4" id="about-us">
            <h6 class="display-5 text-center">About Us</h6>
            <div class="row">
                <div class="col-md-5">
                    <div class="container">
                        <img src="https://img.freepik.com/free-vector/flat-man-hotel-booking-background_23-2148136539.jpg?w=740&t=st=1692335309~exp=1692335909~hmac=82410c965cd2b6bf377105d451a98f59b3c6023b316a44c72a47e3dd09bbbe47" class="d-block w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque modi ratione iure magnam reprehenderit quidem eum non vel voluptatibus dolorum quasi aut nobis quo placeat incidunt consequatur doloremque, aliquid at?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus veritatis voluptatibus sint excepturi qui veniam possimus minus, vitae, porro aliquam voluptas voluptates, harum reiciendis molestias dolore quasi beatae unde quae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas fuga animi, aperiam iure sed cum dicta reprehenderit maiores porro adipisci reiciendis dolores fugit nostrum quidem dolorem vel. Similique, veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempore eaque voluptatem eveniet repudiandae doloremque debitis asperiores id maxime rerum cupiditate quibusdam, commodi, maiores facere quo amet ut ea mollitia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores suscipit eligendi, aspernatur numquam tenetur enim inventore reprehenderit voluptas placeat hic magnam accusantium. Atque iure a in eveniet quas cupiditate excepturi?
                    </p>
                </div>
            </div>
            <div class="row">
                <h6 class="display-6 text-center">What Makes us Unique</h6>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-person color-teal icon-lg"></span>
                        <p>Custom Tailored user Options</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-shield-shaded color-teal icon-lg"></span>
                        <p>Privary First Approach</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-list color-teal icon-lg"></span>
                        <p>Multiple Variations</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="container m-4">
            <h6 class="display-5 text-center">Our Innovative Team</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://img.freepik.com/free-vector/modern-planning-schedule-concept_23-2147942243.jpg?w=740&t=st=1692335418~exp=1692336018~hmac=5a92817a8bada0cdbb2f763607d1e41ce855175d51354d1d689f18bbe079070a">
                            <div class="card-body text-center">
                                <h4 class="card-title">Team Member 1</h4>
                                <p class="card-text">Aditya Dhanraj </p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://img.freepik.com/free-photo/business-team-informal-meeting-office_1262-1408.jpg?w=1060&t=st=1692344116~exp=1692344716~hmac=1e8db5b6a2f03ae4cf0cf92c7e069f0d9d5ed3849907e1e4bf685824dce6f381">
                            <div class="card-body text-center">
                                <h4 class="card-title">Team Member 2</h4>
                                <p class="card-text">Mithila S Shegaji </p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://img.freepik.com/premium-photo/nice-meet-you-business-people-handshake-first-meeting-cheerful-partners-greeting-each-other-copy-space_116547-5458.jpg">
                            <div class="card-body text-center">
                                <h4 class="card-title">Team Member 2</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container m-4">
            <h6 class="display-5 text-center ">Contact Us</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="container p-3">
                        <p class="text-muted text-center fs-3">Here's our Contact Info</p>
                        <div class="text-black-s text-center fs-4">Our Email</div>
                        <div class="text-black-50 text-center fs-5">support@example.com</div>
                        <div class="text-black-s text-center fs-4">Our Phone No.</div>
                        <div class="text-black-50 text-center fs-5">+91 85658 98563</div>
                        <div class="text-black-s text-center fs-4">Our Address</div>
                        <div class="text-black-50 text-center fs-5">HSR Layout, Bangalore <br> Karnatake 560 XXX</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <p class="text-muted text-center fs-3">You can also Write to Us</p>
                        <div class="container p-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="name" class="form-label">Enter Your Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailid" class="form-label">Enter Your Email</label>
                                            <input type="email" class="form-control" name="email" id="emailid">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="form-label">Enter the subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="form-label">Enter Your Message</label>
                                            <textarea class="form-control" name="message" id="message"></textarea>
                                        </div>
                                        <div class="form-group text-center">                                               
                                            <input type="submit" class="btn btn-outline-dark" value="Send Message">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="{{asset('assets/image/logo.png')}}" height="30px" class="bg-white">
                        <div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nulla maxime, at culpa ipsa aliquam exercitationem deserunt odit incidunt a neque voluptas suscipit maiores quae dolor dolore tenetur corrupti dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            <li><a  href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2022, <a href="1stop.ai">1Stop.ai</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('customjs')
<script>
</script>
@endsection