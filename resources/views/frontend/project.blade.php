@extends('layouts.app')

@section('title','Home ji page')

@section('content')

<div class="page-wrapper" id="home-section">
    <div class="upper">
        <div class="views-label"><i class="fas fa-eye"></i> Views: <b>642</b></div>
        <!-- User Profile Pic -->
        <img src="{{ asset('assets/css/1590668843251.jpg') }}" class="profile-pic-img undefined" crossorigin="anonymous">

        <!-- User Company Name -->
        <div class="firmname">DIGICRAFTS</div>
        <div style="width: 40%;background-color: #2074b8; height:2px;"></div>

        <!-- User First Name and Last Name -->
        <div class="name1">Mrs. Puja Maheshwari Agrawal <span style="margin-top: 5px;display: block"><i style="font-size: 12px;">(Founder & Owner)</i></span></div>

        <div class="round-contact-buttons">
            <a target="_blank" href="tel:+919626393402">
                    <i class="fas fa-phone fa-flip-horizontal contact-buttons-icon"></i>
                    <!-- <img src="/public/vcard/vjimages/call.png" > -->
                    <span class="contact-buttons-text">Call Me</span>
                </a>
            <a target="_blank" href="https://wa.me/919626393402?text=Got reference from your Digital vCard. Want to know more details.">
                    <i class="fab fa-whatsapp contact-buttons-icon"></i>
                    <!-- <img src="/public/vcard/vjimages/call.png" > -->
                    <span class="contact-buttons-text">Whatsapp</span>
                </a>
            <a target="_blank" href="https://goo.gl/maps/iPKwMC9ks51bgRGh8">
                    <i class="fas fa-map-marker-alt fa-flip-horizontal contact-buttons-icon"></i>
                    <!-- <img src="/public/vcard/vjimages/call.png" > -->
                    <span class="contact-buttons-text">Direction</span>
                </a>
            <a target="_blank" href="mailto:digicraftsvns@gmail.com">
                    <i class="fas fa-envelope fa-flip-horizontal contact-buttons-icon"></i>
                    <!-- <img src="/public/vcard/vjimages/call.png" > -->
                    <span class="contact-buttons-text">Mail</span>
                </a>
        </div>
    </div>

    {{-- slider-dynamic-yo --}}
    <div class="lower">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

            <div class="carousel-inner">


                @foreach ($sliders as $key => $sliderItem)
              <div class="carousel-item {{ $key == 0 ? 'active':''}}">

                @if  ($sliderItem->image)
                <img src="{{asset("$sliderItem->image")}}" class="d-block w-100" alt="...">
                @endif

                <div class="carousel-caption d-none d-md-block">
                    <h5>{{$sliderItem-> title}}</h5>
                    <p>{{$sliderItem-> description}}</p>
                </div>
            </div>
            @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

</div>

<div class="section-container" id="about-us-section">


 <h2 class="section-header">About Us</h2>

 <!-- products ------------contents-------->
    <div class="container">

         <h3 class="title">sorganic products </h3>


                    {{-- products--}}


        <div class="products-container">

                    {{-- product---1 --}}


            <div class="product" data-name="p-1">
                <img src="{{ asset('assets/imagesproduct/1.png') }}" alt="">
                <h3>strawberries</h3>
                <div class="price">$2.00</div>
            </div>


                    {{-- product---2 --}}


            <div class="product" data-name="p-2">
                <img src="{{ asset('assets/imagesproduct/2.png') }}" alt="">
                <h3>onions</h3>
                <div class="price">$2.00</div>
            </div>


                    {{-- product---3 --}}


            <div class="product" data-name="p-3">
                <img src="{{ asset('assets/imagesproduct/3.png') }}" alt="">
                <h3>tomatoes</h3>
                <div class="price">$2.00</div>
            </div>



                    {{-- product---4 --}}



            <div class="product" data-name="p-4">
                <img src="{{ asset('assets/imagesproduct/4.png') }}" alt="">
                <h3>brinjal</h3>
                <div class="price">$2.00</div>
            </div>


                    {{-- product---5 --}}



            <div class="product" data-name="p-5">
                <img src="{{ asset('assets/imagesproduct/5.png') }}" alt="">
                <h3>broccoli</h3>
                <div class="price">$2.00</div>
            </div>


                    {{-- product---6 --}}



            <div class="product" data-name="p-6">
                <img src="{{ asset('assets/imagesproduct/6.png') }}" alt="">
                <h3>potatoes</h3>
                <div class="price">$2.00</div>
            </div>


                    {{---products-popup----}}

            <div class="products-preview">

                <div class="preview" data-target="p-1">
                    <i class="fas fa-times"></i>
                    <h3>organic strawberries</h3>


                    {{---FORMS AREA---}}

                    <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="picture" class="form-label">Choose Picture</label>
                            <input class="form-control" type="file" name="picture" id="picture">
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Product</button>

                     </form>

                    {{---FORMS AREA----}}
                </div>

                <div class="preview" data-target="p-2">
                    <i class="fas fa-times"></i>
                    <img src="images/2.png" alt="">
                    <h3>organic onions</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>( 250 )</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="buy">buy now</a>
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="p-3">
                    <i class="fas fa-times"></i>
                    <img src="images/3.png" alt="">
                    <h3>organic tomatoes</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>( 250 )</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="buy">buy now</a>
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="p-4">
                    <i class="fas fa-times"></i>
                    <img src="images/4.png" alt="">
                    <h3>organic brinjal</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>( 250 )</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="buy">buy now</a>
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="p-5">
                    <i class="fas fa-times"></i>
                    <img src="images/5.png" alt="">
                    <h3>organic broccoli</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>( 250 )</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="buy">buy now</a>
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

                <div class="preview" data-target="p-6">
                    <i class="fas fa-times"></i>
                    <img src="images/6.png" alt="">
                    <h3>organic potatoes</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>( 250 )</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="buy">buy now</a>
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>


                <!-- products ------------contents-------->

            </div>

                    {{---products-popup----}}

        </div>

    </div>


<div class="section-close"></div>



<div class="section-container" id="about-us-section">
    <h2 class="section-header">About Us</h2>
    <div class="section-header-seperator"></div>
    <table class="about-us-table">
        <tbody>
            <tr>
                <td class="table-row-label">
                    <h3 class="table-row-label-text">Company Name</h3><b class="table-row-label-separator">:</b>
                    <td>
                        <td class="table-row-value">
                            DIGICRAFTS
                            <td>
            </tr>

            <tr>
                <td class="table-row-label">
                    <h3 class="table-row-label-text">Year of Est.</h3><b class="table-row-label-separator">:</b>
                    <td>
                        <td class="table-row-value">
                            2018
                            <td>
            </tr>
            <tr>
                <td class="table-row-label">
                    <h3 class="table-row-label-text">Nature of Business</h3><b class="table-row-label-separator">:</b>
                    <td>
                        <td class="table-row-value">
                            Digital Marketing
                            <td>
            </tr>
        </tbody>
    </table>
    <h3 class="speciality-label">Our Specialities</h3>
    <ul class="unorderedList">

        <li>Complete client satisfaction</li>

        <li>Affordable pricing</li>

        <li>On-time deliver/ execution</li>

        <li>Reliable services</li>

        <li>Transparent dealings</li>

        <li>Easy payment mode</li>

        <li>Customized solutions</li>

        <li>We Provide Pan India services</li>

    </ul>
    <div class="about-us-text">
        <p><strong>Digicrafts was founded with the motive to support small and medium scale businesses by making them understand Digital Marketing and bringing them on Digital Platform at most affordable prices.</strong></p>
        <p><strong>We try to provide bestest of services at genuine prices and adopt ways and methods that could bring maximum results for our clients.</strong></p>
        <p><strong>Digicrafts Is More Than a Digital Marketing &amp; Designing Agency</strong></p>
        <p><i><strong>WE'RE YOUR BUSINESS PARTNER.</strong></i></p>
        <p><strong>We believe in building partnerships, not acquiring clients. Above all, everything we do comes from the perspective of a business owner, and we treat your business like our own. We’re transparent about our methods, our pricing, and our deliverables.</strong></p>
    </div>
    <h3 class="speciality-label">Documents</h3>

    <a class="document-wrapper" href="https://vcard-bucket.s3.us-east-2.amazonaws.com/A14/digicrafts/1590671329636.pdf" download>
        <div class="pdf-icon"><i class="fa fa-file-pdf"></i></div>
        <div class="pdf-number">brochure final.pdf</div>
        <div class="download-icon"><i class="fa fa-download"></i></div>
    </a>



    <div class="section-close"></div>
</div>

<div class="section-container" id="payment-options-section">
    <h2 class="section-header">Payment</h2>
    <div class="section-header-seperator"></div>
    <div class="p-10"></div>

    <div>
        <table class="about-us-table">
            <tbody>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Paytm Number</h3><b class="table-row-label-separator">:</b>
                        <td>
                            <td class="table-row-value">
                                +91-9626393402
                                <td>
                </tr>

                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Google Pay Number</h3><b class="table-row-label-separator">:</b>
                        <td>
                            <td class="table-row-value">
                                +91-9626393402
                                <td>
                </tr>
            </tbody>
        </table>
        <h3>Account Details:</h3>
        <table class="about-us-table">
            <tbody>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Bank Name</h3><b class="table-row-label-separator">:</b>
                        <td>
                            <td class="table-row-value">
                                KOTAK MAHINDRA BANK
                                <td>
                </tr>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">IFSC code</h3><b class="table-row-label-separator">:</b>
                        <td>
                            <td class="table-row-value">
                                KKBK0005306
                                <td>
                </tr>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Account Name</h3><b class="table-row-label-separator">:</b>
                        <td>
                            <td class="table-row-value">
                                PUJA MAHESHWARI
                                <td>
                </tr>
                <tr>
                    <td class="table-row-label">
                        <h3 class="table-row-label-text">Account Number</h3><b class="table-row-label-separator">:</b>
                        <td>
                            <td class="table-row-value">
                                1914268524
                                <td>
                </tr>

            </tbody>
        </table>

    </div>

    <div class="section-close"></div>
</div>
<div class="section-container" id="gallery-section">
    <h2 class="section-header">Gallery</h2>
    <div class="section-header-seperator"></div>
    <div class="p-10"></div>
    <div class="images-container">
        <div class="image-wrapper">
            <img onclick="openImageModal(this)" alt="Image 1" img src="{{ asset('assets/css/1590672503825.jpg') }}" style="width:100%">
        </div>
        <div class="image-wrapper">
            <img onclick="openImageModal(this)" alt="Image 2" img src="{{ asset('assets/css/1590672518563.png') }}" style="width:100%">
        </div>
        <div class="image-wrapper">
            <img onclick="openImageModal(this)" alt="Image 3" img src="{{ asset('assets/css/1590672533808.jpg') }}" style="width:100%">
        </div>
        <div class="image-wrapper">
            <img onclick="openImageModal(this)" alt="Image 4" img src="{{ asset('assets/css/1590672601637.png') }}" style="width:100%">
        </div>

    </div>
    <div class="section-close"></div>
</div>

<div class="section-container" id="enquiry-section">
    <h2 class="section-header">sample of forms</h2>
    <div class="section-header-seperator" style="width: 120px;"></div>

    <h1 class="text-center mt-2">All Products</h1>
    <hr>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="display:flex">
                @foreach ($products as $product)
                <div class="card m-2 p-2" style="width: 18rem;">
                    <img src="images/{{ $product->picture }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->title }}</h5>
                      <h5 class="card-title">Price: ${{ $product->price }}</h5>
                      <hr>
                      <p class="card-text">{{ $product->description}} </p>
                      <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Detail</a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>





    <div class="section-close"></div>
</div>


<div class="section-container" id="enquiry-section">
    <h2 class="section-header">comments ON products</h2>

    <div class="container mt-5 mb-5">

        <h2>Create Product</h2>
        <hr>

        <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="mb-3">
                <label for="picture" class="form-label">Choose Picture</label>
                <input class="form-control" type="file" name="picture" id="picture">
              </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Create Product</button>

        </form>

    </div>
</div>


<div class="section-container" id="enquiry-section">
    <h2 class="section-header">sample of forms</h2>
    <div class="container">
        <div class="box">



            <div class="container">
                <h2>Popup Contact Form with Email</h2>

                <!-- Trigger/Open The Modal -->
                <button id="mbtn" class="btn btn-primary turned-button">Contact Us</button>

                <!-- The Modal -->
                <div id="modalDialog" class="modal">
                    <div class="modal-content animate-top">
                        <div class="modal-header">
                            <h5 class="modal-title">Contact Us</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>


                         <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="picture" class="form-label">Choose Picture</label>
                                <input class="form-control" type="file" name="picture" id="picture">
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Product</button>

                         </form>



                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="section-close"></div>
</div>


<div class="section-container" id="enquiry-section">
    <h2 class="section-header">Enquiry Form</h2>
    <div class="section-header-seperator" style="width: 120px;"></div>
    <form class="enquiry-form" novalidate>
        <!-- Full Name:<br/> -->
        <input type="text" name="enquiryName" id="enquiryName" placeholder="Enter Full Name" /><br/>
        <div class="flex">
            <div class="enquiry-phoneNumber">
                <!-- Phone Number:<br/> -->
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" /><br/>
            </div>
            <div class="enquiry-email">
                <!-- Email:<br/> -->
                <input type="text" name="email" id="email" placeholder="Enter Email" /><br/>
            </div>
        </div>
        <!-- Message:<br/> -->
        <textarea name="message" id="message" placeholder="Enter Message"></textarea><br/>
        <input type="button" value="Send" onclick="sendEnquiry(this, 'digicraftsvns@gmail.com')" />
    </form>
    <div class="section-close"></div>
</div>

<!-- Footer Menu -->

<div class="footer1">

    <ul class="footer-menu">
            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#home-section">
                <i class="footer-menu-icon fas fa-home"></i>
                <div class="footer-menu-text">HOME</div>
            </a>
            </li>
            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#about-us-section">
                    <i class="footer-menu-icon fas fa-briefcase"></i>
                <div class="footer-menu-text">ABOUT US</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#products-services-section">
                    <i class="footer-menu-icon fas fa-box-open"></i>
                <div class="footer-menu-text">PRODUCTS</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#payment-options-section">
                    <i class="footer-menu-icon fas fa-money-bill-alt"></i>
                <div class="footer-menu-text">PAYMENT</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#gallery-section">
                    <i class="footer-menu-icon fas fa-file-image"></i>
                    <div class="footer-menu-text">GALLERY</div>
                </a>
            </li>


            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#feedback-section">
                    <i class="footer-menu-icon fas fa-star"></i>
                    <div class="footer-menu-text">FEEDBACK</div>
                </a>
            </li>
            <li>
                <a class="footer-menu-link" href="http://digicraftsvisitingcard.in/digicrafts#enquiry-section">
                    <i class="footer-menu-icon fas fa-comment-alt"></i>
                    <div class="footer-menu-text">ENQUIRY</div>
                </a>
            </li>
        </ul>
    </div>

    <!-- The image Modal -->
    <div id="imageModal" class="modal">
        <span class="close" id="imageModalClose">&times;</span>
        <img class="modal-content fadeIn" id="img01">
        <div id="caption"></div>
    </div>
    <!-- The share Modal -->

    <!-- The share Modal -->
    <div id="shareModal" class="modal share-modal">
        <div class="share-form fadeInUpBig">
            <div class="share-form-header">
                <h3 class="share-form-header-text">Share Profile</h3>
                <span class="close" id="shareModalClose">&times;</span>
            </div>
            <div class="share-form-buttons-container">
                <p>Share my Digital vCard in your network.</p>
                <div class="share-buttons-heading">
                    <img src="../templates/template1/tild-arrow.svg" class="share-buttons-arrow">
                    <div class="share-buttons-heading-text">Share my Digital vCard</div>
                </div>
                <ul class="share-buttons">
                    <li class="share-button">
                        <a href="javascript:;" target="_blank" onclick="handleDirectWhatsappShare(this, 919626393402, 'http://digicraftsvisitingcard.in/digicrafts')">
                            <i class="share-button-whatsapp fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="sms:?body=http://digicraftsvisitingcard.in/digicrafts">
                            <i class="share-button-sms fas fa-comment-dots"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://digicraftsvisitingcard.in/digicrafts&src=sdkpreparse" class="fb-xfbml-parse-ignore">
                            <i class="share-button-facebook fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="https://twitter.com/intent/tweet?text=http://digicraftsvisitingcard.in/digicrafts" data-size="large">
                            <i class="share-button-twitter fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="http://pinterest.com/pin/create/link/?url=http://digicraftsvisitingcard.in/digicrafts">
                            <i class="share-button-pinterest fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="mailto:?subject=Digital Card&amp;body=Check out this digital card http://digicraftsvisitingcard.in/digicrafts.">
                            <i class="share-button-mail fas fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>




  @endsection
