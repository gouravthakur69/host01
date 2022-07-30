<html>

<head>

    <!-- fonts-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- css-->
    
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/templates/common/css/star-rating.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">

    <!--meta-->

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
    <meta property="og:image" itemprop="image" content="https://vcard-bucket.s3.us-east-2.amazonaws.com/A14/digicrafts/1590668843251.jpeg" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Mrs. Puja Maheshwari Agrawal (Founder & Owner)" />
    <title>
        @yield('titlee') | yoyo bantai
    </title>
    <meta name="title" content="DIGICRAFTS" />
    <link rel="manifest" id="manifest-placeholder">
    @livewireStyles

    <!-- script-->

    <script>
        var dynamicManifest = {
            "name": "DIGICRAFTS",
            "short_name": "DIGICRAFTS",
            "description": "DIGICRAFTS",
            "start_url": "http://digicraftsvisitingcard.in/digicrafts",
            "background_color": "#000000",
            "theme_color": "#0f4a73",
            "icons": [{
                "src": "https://vcard-bucket.s3.us-east-2.amazonaws.com/A14/digicrafts/1590668843251.jpeg",
                "sizes": "256x256",
                "type": "image/png"
            }],
            "display": "standalone"
        }
        const stringManifest = JSON.stringify(dynamicManifest);
        const blob = new Blob([stringManifest], {
            type: 'application/json'
        });
        const manifestURL = URL.createObjectURL(blob);
        document.querySelector('#manifest-placeholder').setAttribute('href', manifestURL);
    </script>
    <script>
        document.documentElement.style.setProperty('--theme-color', '#2074b8');
        document.documentElement.style.setProperty('--theme-color-light', '#2074b826');
        window.cardId = 'digicrafts';
    </script>
</head>

<body>


    
<div class="page-wrapper" id="home-section">
    <div class="upper">
        <div class="views-label"><i class="fas fa-eye"></i> Views: <b>642</b></div>
        <!-- User Profile Pic -->
        <img src="{{ asset('assets/css/1590668843251.jpg') }}" class="profile-pic-img undefined" crossorigin="anonymous">

        <!-- User Company Name -->
        <div class="firmname">DIGICRAFTS</div>
        <div style="width: 40%;background-color: #2074b8; height:2px;"></div>

        <!-- User First Name and Last Name -->
        <div class="name">Mrs. Puja Maheshwari Agrawal <span style="margin-top: 5px;display: block"><i style="font-size: 12px;">(Founder & Owner)</i></span></div>

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
 <div class="lower">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/css/robo2.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5> i am dynamic label</h5>
            <p>Hi my self dynamic description</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/css/robo2.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>The best</h5>
            <p>we are bestest</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/css/robo2.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>The great</h5>
            <p>we are gretest</p>
          </div>
        </div>
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

<div class="section-container" id="products-services-section">
    <h2 class="section-header">Products/Services</h2>
    <div class="section-header-seperator" style="width: 130px;"></div>
    <div class="p-10"></div>

    <div>


        <div class="card">
            <ul class="unorderedList">

                <li>Facebook Marketing</li>

                <li>Instagram Marketing</li>

                <li>Graphic Designing</li>

                <li>Business Presentation</li>

                <li>Video Editing</li>

                <li>Bulk SMS/ Bulk Whatsapp</li>

                <li>Website Designing</li>

            </ul>
        </div>
    </div>

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

<div class="section-container" id="feedback-section">
    <h2 class="section-header">Feedbacks</h2>
    <div class="section-header-seperator"></div>
    <div class="feedback-list" id="feedback-list"></div>
    <div class="feedback-button-wrapper">
        <input type="button" value="Load more feedbacks" id="load-more-feedback-btn" />
    </div>
    <form class="feedback-form card" novalidate>
        <div class="feedback-form-heading">Give Feedback</div>
        <select class="star-rating" id="rating" name="rating">
                    <option value="">Select a rating</option>
                    <option value="5">Excellent</option>
                    <option value="4">Very Good</option>
                    <option value="3">Average</option>
                    <option value="2">Poor</option>
                    <option value="1">Terrible</option>
                </select>
        <input type="text" name="feedbackName" id="feedbackName" placeholder="Enter Full Name" />
        <textarea name="feedback" id="feedback" placeholder="Enter your feedback"></textarea>
        <!-- Message:<br/> -->
        <input type="button" value="Give Feedback" onclick="sendFeedback(this, 'digicrafts')" />
    </form>
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


    <!-- The image Modal -->
    <div id="imageModal" class="modal">
        <span class="close" id="imageModalClose">&times;</span>
        <img class="modal-content fadeIn" id="img01">
        <div id="caption"></div>
    </div>

    <div class="footer1">
        <ul class="footer-menu">
            <li>
                <a class="footer-menu-link" href="">
                    <i class="footer-menu-icon fas fa-home"></i>
                    <div class="footer-menu-text">HOME</div>
                </a>
            </li>
            <li>
                    <a class="footer-menu-link" href="">
                        <i class="footer-menu-icon fas fa-briefcase"></i>
                    <div class="footer-menu-text">ABOUT US</div>
                    </a>
                </li>
            <li>
                    <a class="footer-menu-link" href="">
                        <i class="footer-menu-icon fas fa-box-open"></i>
                    <div class="footer-menu-text">PRODUCTS</div>
                    </a>
                </li>
            <li>
                    <a class="footer-menu-link" href="">
                        <i class="footer-menu-icon fas fa-money-bill-alt"></i>
                    <div class="footer-menu-text">PAYMENT</div>
                    </a>
                </li>
            <li>
                    <a class="footer-menu-link" href="">
                        <i class="footer-menu-icon fas fa-file-image"></i>
                        <div class="footer-menu-text">GALLERY</div>
                    </a>
                </li>
                
            
            <li>
                    <a class="footer-menu-link" href="">
                        <i class="footer-menu-icon fas fa-star"></i>
                        <div class="footer-menu-text">FEEDBACK</div>
                    </a>
                </li>
            <li>
                    <a class="footer-menu-link" href="">
                        <i class="footer-menu-icon fas fa-comment-alt"></i>
                        <div class="footer-menu-text">ENQUIRY</div>
                    </a>
                </li>
        </ul>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
    <script src="{{ asset('assets/templates/common/js/star-rating.js') }}"></script>
    <script src="{{ asset('assets/templates/common/js/script.5.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    @livewireScripts
</body>

</html>