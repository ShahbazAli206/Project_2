<!DOCTYPE html>
<html lang="en">

<head>
    <title>Capital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets2/css/margins.css">
    <link rel="stylesheet" href="assets2/slider/slider-style.css">
    <link rel="stylesheet" href="assets2/css/style.css">
    <link rel="stylesheet" href="assets2/draggeable-slider/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
    <script src="https://www.youtube.com/iframe_api"></script>

    <style>
    

    .icons {
    display: flex;
    justify-content: space-between;
    margin: 20px auto;
    width: 80%;
}

.icon {
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 20%;
    background-color: rgb(57, 45, 45);
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    border: 3px solid rgb(210, 198, 198);

}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    overflow-y: auto; /* Make the modal content scrollable */
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: left;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    max-width: 80%;
    max-height: 80%;
    display: flex;
    flex-direction: column;
    background-color: rgba(0, 0, 0, 0.7);
    /* overflow: hidden; */
    /* color: white; Set the font color to white */
    max-width: 80%;
    max-height: 80%;
    display: flex;
    overflow: auto; /* Change to "auto" to enable scrolling */
    color: white; /* Set the font color to white */
}

.modal-image {
    max-width: 100%;
    max-height: 300px;
    margin-bottom: 10px;
    border-radius:13px;
    border: 4px solid green;

}

.modal-heading {
    font-size: 24px;
    margin-bottom: 10px;
}

.modal-paragraph {
    font-size: 18px;
    flex-grow: 1;
    /* overflow-y: auto; */
    padding-right: 15px; /* Add a bit of padding to avoid scrollbar overlap */
}


.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
}
    
  </style>
     
</head>

<body class="">
    <div class="menu-div">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
            <a class="navbar-brand" href="#"><img src="assets2/images/logo.svg" alt="" class="header-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets2/images/bars.png" alt="" width="20px">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="items-center nav navbar-nav title-4 menu-width">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Capital">Capital</a></li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="clearfix"></div>
    <div class="home-header" style="background: url('{{ asset('storage/' . $section1Data->backgroundImage) }}');  background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="title-1 text-center text-color-white mb-10">{{$section1Data->heading}}</div>
        <div class="title-2 text-center text-color-white">{{$section1Data->bodyText}}</div>
    </div>
    <div class="bg-black-shade p-2">
        <div class="title-1 text-center text-color-white mb-10">QUICK TIPS</div>
        
        <div class="icons">
            @foreach ($quick_tips as $index => $quick_tip)
                <span class="icon" id="icon{{ $index + 1 }}"><i class="{{$quick_tip->icon}}" style="color: white;"></i></span>
            @endforeach
        </div>

        
        @foreach ($quick_tips as $index => $quick_tip)
        <div class="modal" id="modal{{ $index + 1 }}">
            <div class="modal-content">
                <span class="close" id="close">&times;</span>
                <img src="{{ asset('storage/' . $quick_tip->image) }}" class="modal-image" alt="Image">
                <h2>{{ $quick_tip->title }}</h2>
                <div class="modal-paragraph">
                    <p>{{ $quick_tip->text }}</p>
                </div>
            </div>
        </div>
        @endforeach
        </div>

    <script>
    const icons = document.querySelectorAll('.icon');
    const modals = document.querySelectorAll('.modal');

    icons.forEach((icon, index) => {
        icon.addEventListener('click', () => {
            modals.forEach(modal => modal.style.display = 'none');
            modals[index].style.display = 'block';
        });
    });

    modals.forEach(modal => {
        const closeBtn = modal.querySelector('.close');
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    });
</script>
    <div class="cp-1">
        <div class="position-relative">
            <img src="assets2/images/download.png" alt="" class="icon-top-right">
            <div class="title-1 text-center text-color-black-shade mb-10">{{$section2Data->heading}}</div>
            <div class="title-2 text-center text-color-black-shade">{{$section2Data->bodyText}}.</div>
        </div>
    </div>
    <div class="bg-black-shade ">
        <div class="cp-1">
            <!-- <img src="assets2/images/about-img.png" alt="" class="img-responsive mb-16"> -->
            <img src="{{ asset('storage/' . $section2Data->image) }}" alt="" class="img-responsive mb-16">
            <div class="">
                <div class="wrapper">
                    <i class=" mr-8">
                        <img src="assets2/images/arrow-left-white.png" alt="" id="left">
                    </i>
                    <div class="carousel">
                        <img src="{{ asset('storage/' . $section2Data->sliderimage1) }}" draggable="false">
                        <img src="{{ asset('storage/' . $section2Data->sliderimage2) }}" draggable="false">
                        <img src="{{ asset('storage/' . $section2Data->sliderimage3) }}" draggable="false">
                        <img src="{{ asset('storage/' . $section2Data->sliderimage4) }}" draggable="false">
                    </div>
                    <i class=" ml-8">
                        <img src="assets2/images/arrow-right-white.png" alt="" id="right">
                    </i>
                </div>
            </div>
            <div class="cp-4">
                <div class="pt-40">
                    <div class="my-hr-1 mb-40"></div>
                </div>
            </div>
            <div class="title-3 text-center text-color-white mb-40">
            {{$section2Data->text_2}}
            </div>
            <!-- <div style=" ">
                <iframe width="90%" height="40%" src="{{$section2Data->video_url}}" frameborder="0" allowfullscreen></iframe>
            </div> -->
            <div id="youtube-player" style="display: flex; justify-content: center; align-items: center; padding: 20px;"></div>


            <!-- <img src="assets2/images/about-video.png" alt="" class="img-responsive"> -->
        </div>
    </div>



    
    
    
    
    <div class="cp-1">
        <div class="position-relative">
            <div class="title-1 text-center text-color-black-shade mb-10">{{$section3Data->heading}}</div>
            <div class="title-2 text-center text-color-black-shade mb-20">{{$section3Data->bodyText}}
            </div>
            <div align="center" class="mb-36">
                <button class="mybtn title-2 text-color-white  bg-black br-6 cp-3">{{$section3Data->buttonText}}</button>
            </div>
            <div class="overflow-hidden">
                <section class="section slider">
                    <input type="radio" name="slider" id="slide-1" class="slider__radio" checked/>
                    <input type="radio" name="slider" id="slide-2" class="slider__radio" />
                    <input type="radio" name="slider" id="slide-3" class="slider__radio" />
                    <div class="slider__holder">
                        <label for="slide-1" class="slider__item slider__item--1 card">
                        <div class="slider__item-content">
                            <div class="slider-img text-center" style="background-image: url('{{ asset('storage/' . $sectioncards[0]->backgroundimage) }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                            <i class="{{ $sectioncards[0]->cardIcon }} fa-4x mb-9" style="color: white;"></i>
                                <div class="title-4 text-white mb-19">{{$sectioncards[0]->cardTitle}}</div>
                                <div class="title-5 text-white mb-16">{{$sectioncards[0]->cardText}} </div>
                                <div align="center" class="">
                                    <button class="mybtn title-7 text-color-black-shade bg-white br-6 cp-11">{{$sectioncards[0]->buttonText}}</button>
                                </div>
                            </div>
                        </div>
                  </label>
                        <label for="slide-2" class="slider__item slider__item--2 card">
                      <div class="slider__item-content">
                          <div class="slider-img text-center" style="background-image: url('{{ asset('storage/' . $sectioncards[1]->backgroundimage) }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                              <!-- <img src="assets2/images/restaurant.png" alt="" class="mb-9"> -->
                              <i class="{{ $sectioncards[1]->cardIcon }} fa-4x mb-9" style="color: white;"></i>
                              <div class="title-4 text-white mb-19">{{$sectioncards[1]->cardTitle}}</div>
                              <div class="title-5 text-white">{{$sectioncards[1]->cardText}}</div>
                              <div align="center" class="">
                                  <button class="mybtn title-7 text-color-black-shade bg-white br-6 cp-11">{{$sectioncards[1]->buttonText}}</button>
                              </div>
                          </div>
                      </div>
                </label>
                        <label for="slide-3" class="slider__item slider__item--3 card">
                    <div class="slider__item-content">
                        <div class="slider-img text-center" style="background-image: url('{{ asset('storage/' . $sectioncards[2]->backgroundimage) }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
                        <i class="{{ $sectioncards[2]->cardIcon }} fa-4x mb-9" style="color: white;"></i>
                            <div class="title-4 text-white mb-19">{{$sectioncards[2]->cardTitle}}</div>
                            <div class="title-5 text-white">{{$sectioncards[2]->cardText}} </div>
                            <div align="center" class="">
                                <button class="mybtn title-7 text-color-black-shade bg-white br-6 cp-11">{{$sectioncards[2]->buttonText}}</button>
                            </div>
                        </div>
                    </div>
              </label>
                    </div>
                </section>
            </div>
            <div class="slider-arrows" align="center">
                <label for="slide-1" class="slider-previous"><img src="assets2/images/arrow-left-black.png" alt=""></label>
                <label for="slide-2" class="slider-next ml-53"><img src="assets2/images/arrow-right-black.png" alt=""></label>
            </div>
        </div>
    </div>
    <div class="bg-black-shade ">
        <footer>
            <div class="cp-4">
                <div class="pt-40">
                    <div class="my-hr-1 mb-40"></div>
                </div>
            </div>
            <div class="cp-6 text-center">
                <div class="title-1 text-center text-white mb-24">
                    {{ $section4Data->Title !== null ? $section4Data->Title : 'Title is not set till now' }}
                </div>
                <div class="title-2 text-center text-white mb-24"> 
                    {{ $section4Data->Text !== null ? $section4Data->Text : 'Text is not set till now' }}
                </div>
                <img src="assets2/images/dail.png" alt="" class="mb-10">
                <div class="title-2 text-center text-white mb-28">{{ $section4Data->FrontDeskText !== null ? $section4Data->FrontDeskText : 'FrontDeskText is not set till now' }}</div>
                <img src="assets2/images/email.png" alt="" class="mb-10">
                <div class="title-2 text-center text-white mb-28">Email: {{ $section4Data->email !== null ? $section4Data->email : 'email is not set till now' }}</div>
                <img src="assets2/images/call.png" alt="" class="mb-10">
                <div class="title-2 text-center text-white mb-51">Tel: {{ $section4Data->phone !== null ? $section4Data->phone : 'phone is not set till now' }}</div>
                <div class="title-1 text-center text-white mb-24">Follow us on Socia Media</div>
                <div class="d-flex justify-content-evenly mb-40">
                    <a href="{{ str_replace('\\/', '/', $section4Data->facebook_link) }}" target="_blank">
                        <img src="assets2/images/facebook.png" alt="" class="">
                    </a>
                    <a href="{{ str_replace('\\/', '/', $section4Data->insta_link) }}" target="_blank">
                        <img src="assets2/images/instagram.png" alt="" class="">
                    </a>
                    <a href="{{ str_replace('\\/', '/', $section4Data->twitter_link) }}" target="_blank">
                        <img src="assets2/images/twitter.png" alt="" class="">
                    </a>
                    <!-- <a href="{{ str_replace('\\/', '/', $section4Data->linkedin_link) }}" target="_blank">
                        <img src="assets2/images/linkedin.png" alt="" class="">
                    </a> -->

                    @php
        $linkedinLink = str_replace('\\/', '/', $section4Data->linkedin_link);
        // Check if the link starts with 'http://' or 'https://', if not, add 'https://'
        if (!preg_match('/^(https?:\/\/)/i', $linkedinLink)) {
            $linkedinLink = 'https://' . $linkedinLink;
        }
    @endphp
    <a href="{{ $linkedinLink }}" target="_blank">
        <img src="assets2/images/linkedin.png" alt="LinkedIn" class="">
    </a>
                </div>
                <div class="title-2 text-center text-white mb-16">Terms of Use</div>
                <div class="title-2 text-center text-white ">THE CAPITAL APARTMENTS & HOTELS (PTY) LTD 2023</div>
            </div>
        </footer>
    </div>
</body>

<script src="assets2/js/function.js"></script>
<script src="assets2/draggeable-slider/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const icons = document.querySelectorAll(".icon");
    const modal = document.getElementById("modal");
    const close = document.getElementById("close");
    
    icons.forEach(icon => {
        icon.addEventListener("click", () => {
            modal.style.display = "block";
        });
    });
    
    close.addEventListener("click", () => {
        modal.style.display = "none";
    });
});
</script>
<script>
// This function creates an <iframe> (and YouTube player)
// after the API code downloads.
function onYouTubeIframeAPIReady() {
        var videoUrl = '{{$section2Data->video_url}}';
        var videoId = getYouTubeVideoId(videoUrl);

        if (videoId) {
            var player = new YT.Player('youtube-player', {
                height: '100%',
                width: '100%',
                videoId: videoId,
                playerVars: {
                    'rel': 0, // Disable related videos at the end
                    'controls': 1 // Show video controls
                }
            });
        }
    }

    // Extract YouTube video ID from URL
    function getYouTubeVideoId(url) {
        var videoIdRegex = /[?&]v=([^&#]*)/;
        var shortLinkRegex = /youtu\.be\/([^\/]*)/;
        var match = url.match(videoIdRegex) || url.match(shortLinkRegex);
        return match && match[1];
    }
</script>
</html>