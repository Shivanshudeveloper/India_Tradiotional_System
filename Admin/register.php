<?php include './includes/header.inc.php' ?>



   

    <!-- service_part start-->
    <section class="service_part section_padding gray_bg mt-4">
        <div class="container">
            <h1 class="text-center">
                Register As
            </h1>
            <center>
                <a href="#!" data-toggle="modal" data-target="#exampleModallogin" class="mt-2 mb-2">
                    Already have an Account
                </a>
                <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="float-left" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group ">
                                <label class="float-left" for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                    </div>
                </div>
                </div>
            </center>
            
            <div class="row mt-2">

                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part">
                        <span class="single_service_icon"><i class="flaticon-growth"></i></span>
                        <h4>Researcher</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn_3">Register <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mt-2">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="+91 " aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
    
                            <label for="category">Select Category</label>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="category" id="category">
										<option value="">- Select Your Field of Interest -</option>
										<option value="Science, Engineering, Technology">Science, Engineering, Technology</option>
										<option value="Health, Wellness">Health, Wellness</option>
										<option value="Psychology, Cognition, linguistics, Phoenetics,  Epistomology">Psychology, Cognition, linguistics, Phoenetics,  Epistomology</option>
										<option value="Management, Administration, Law, Governance">Management, Administration, Law, Governance</option>
										<option value="Art, literature, Culture, Aesthetics folklore, Education">Art, literature, Culture, Aesthetics folklore, Education</option>
										<option value="Indian Traditional Knowledge Base">Indian Traditional Knowledge Base</option>
									</select>
                                </div>

                                <div class="col">
                                    <select class="form-control" name="category_sub" id="category_sub">
												
                                    </select>
                                </div>
                            </div>


                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Project Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" id="description" placeholder="Description" rows="4"></textarea>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Reference URL</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Publish Date</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Associated Institute/Organization</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>

                            
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
                
                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part">
                        <span class="single_service_icon"><i class="flaticon-growth"></i></span>
                        <h4>Reviewer</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn_3">Register <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part single_service_part_2">
                        <span class="single_service_icon style_icon"><i class="flaticon-wallet"></i></span>
                        <h4>Individuals</h4>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn_3 service_btn">Register <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!--::review_part start::-->
    <section class="review_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Customer Are Saying</h2>
                        <p>Winged hath had face creepeth abundantly so shall </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <!-- THUMBNAILS -->
                    <div class="slider-nav-thumbnails">
                        <div class="slider-thumbnails">
                            <img src="img/client/client_1.png" alt="slideimg" class="image">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_2.png" alt="slideimg" class="image">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_1.png" alt="slideimg" class="image">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="img/client/client_1.png" alt="slideimg" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <!-- MAIN SLIDES -->
                    <div class="slider">
                        <div data-index="1">
                            <div class="client_review_text text-center">
                                <img src="img/icon/quate.svg" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div data-index="2">
                            <div class="client_review_text text-center">
                                <img src="img/icon/quate.svg" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div data-index="3">
                            <div class="client_review_text text-center">
                                <img src="img/icon/quate.svg" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div data-index="4">
                            <div class="client_review_text text-center">
                                <img src="img/icon/quate.svg" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-app-7 custom-animation4"><img src="img/animate_icon/icon_4.png" alt=""></div>
            <div class="hero-app-3 custom-animation2"><img src="img/animate_icon/icon_8.png" alt=""></div>
            <div class="hero-app-8 custom-animation"><img src="img/animate_icon/icon_3.png" alt=""></div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- portfolio_part start-->
    <section class="portfolio_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <div class="card">
                            <blockquote class="blockquote mb-0">
                                <h2>Explore Our Best
                                    Practice Area</h2>
                                <p>Male bring land. Dominion over can yielding his moveth under him is.
                                    Multiply which firmament</p>
                            </blockquote>
                        </div>
                        <div class="card">
                            <img src="img/gallery/gallery_item.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="project_details.html">
                                    <h5 class="card-title">Startup Project</h5>
                                </a>
                                <p class="card-text">All days lights grass midst from unto</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/gallery/gallery_item_1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="project_details.html">
                                    <h5 class="card-title">Startup Project</h5>
                                </a>
                                <p class="card-text">All days lights grass midst from unto</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/gallery/gallery_item_2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="project_details.html">
                                    <h5 class="card-title">Startup Project</h5>
                                </a>
                                <p class="card-text">All days lights grass midst from unto</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/gallery/gallery_item_3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="project_details.html">
                                    <h5 class="card-title">Startup Project</h5>
                                </a>
                                <p class="card-text">All days lights grass midst from unto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio_part part end-->

    <!-- our_service_part part start-->
    <section class="about_part our_service_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6 col-xl-5">
                    <div class="about_img">
                        <img src="img/about_img_2.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 offset-xl-1 col-xl-6">
                    <div class="about_text">
                        <h2>We Providing high quality
                            	adviser service</h2>
                        <h4>First Abundantly night you are sea great fifth year</h4>
                        <p>Lights fly above bearing brought abundantly whose. Without one may i seed void wels great
                            face god were deep be first. Unto for third be in moveth. Bring land bearing un abundantly
                            firmament appear whales them years. Lights fly above bearing brought bold abundantly whose
                            without one may i seed. </p>
                        <a href="#" class="btn_2">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-1 custom-animation"><img src="img/animate_icon/icon_1.png" alt=""></div>
        <div class="hero-app-4 custom-animation2"><img src="img/animate_icon/icon_8.png" alt=""></div>
        <div class="hero-app-8 custom-animation3"><img src="img/animate_icon/icon_9.png" alt=""></div>
    </section>
    <!--::blog_part start::-->


    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Update From Blog</h2>
                        <p>Winged hath had face creepeth abundantly so shall fire apperar </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4 d-none d-sm-block d-lg-none">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                <a href="blog.html">
                                    <h5 class="card-title">Be there bring void give good from stars</h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>0 Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_1.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                <a href="blog.html">
                                    <h5 class="card-title">He waters likeness their land set female for </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>0 Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                <a href="blog.html">
                                    <h5 class="card-title">Be there bring void give good from stars</h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>0 Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">Technology</a> | <span> March 30, 2019</span>
                                <a href="blog.html">
                                    <h5 class="card-title">Third lights they're over moved days above</h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>0 Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
    <section class="footer-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase btn_2">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
		CKEDITOR.replace('description');
	</script>
    <?php include './includes/footer.inc.php' ?>