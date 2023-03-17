@extends('layouts.app')
@section('extra_css')
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">British Tamil Awards Night</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">British Tamil Awards Night</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>

    <!-- ***** Breadcrumb Area End ***** -->
    <header id="sp2" class="center parallax-container dark" data-overlay="9">
        <div class="parallax"><img src="/images/2.jpg" alt="" style="display: block; transform: translate3d(-50%, 358px, 0px);"></div>
        <div class="header-in">
            <div class="caption" style="transform: translateY(0px); opacity: 1;margin-bottom: 20px;">
                <h1>British Tamil Awards Night - 2019</h1>
                <h6>The event is on - 18 January 2020</h6>
                <!--<h1>Get Ready for LTM - 2020</h1>-->
                <h1 id="countdown" style="color:#F18562;font-size: 32px; padding-top: 10px;"></h1>
            </div>
            <img class="arrow" src="/images/arrow.svg" alt="" style="transform: translateY(0px); opacity: 1;">
        </div>
    </header>

    <section class="iconblock grey">
        <div class="container">
            <div class="row">
                @if(session('flash_success'))
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="alert alert-success icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><i class="fa fa-check-circle"></i> <strong>Success!!</strong> {!!   session('flash_success') !!}</p>
                        </div>
                    </div>
                @endif

                <div class="col-md-4">
                    <div class="project-image project-image-2">
                        <img style="border-radius: 10% !important;" class="img-responsive" src="{{ asset('images/awrds-btcc.PNG') }}" alt="BTCC Awards Night">
                        <p class="clearfix"></p>
                        <a href="{{ url('london-tamil-market-2019') }}" class="btnnn uza-btn-2" style="width: 100% !important;" data-toggle="modal" data-target="#application_request">
                            <span style="font-size: 16px !important;">Request application <i class="fa fa-file" style="font-size: 18px !important;"></i></span>
                        </a>
                    </div>
                </div>

                <div class="col col-md-8">
                    <h2 class="text-uppercase">British Tamil Awards Night</h2>
                    <div class="title-border"></div>
                    <h4>“Recognising and Celebrating Tamil Businesses”</h4>
                    <p>British Tamil Awards night is the best way of identifying successful Tamil Businesses and recognising young entrepreneurs and upcoming businesses.</p>
                    <p>British Tamil Chamber of Commerce has organised the successful Tamil trade show, London Tamil Market, which attracts over 8k visitors and hundreds of businesses in the UK and abroad for the past 5 years.</p>
                    <p>The Awards ceremony take place on 18th January 2020, and will celebrate and recognise the very best Tamil businesses from a diverse range of entries. The Finals offer excellent brand positioning and networking opportunities with many cross-sector companies, and bring together all the leading Tamil businesses.</p>

                    <br/>
                    <h2>Who can enter?</h2>
                    <p>We welcome entries from all Tamil business, organisations and individuals from any sector of the economy. Whether for your customers, partners, suppliers or employees, the Awards provide a platform for you to showcase your skills, expertise and depth of experience to your clients and investors, while sharing best practice with fellow industry leaders.</p>

                    <br/>
                    <h2>What are the Judges Looking For?</h2>
                    <h5>The judges will assess your entry based on:</h5>
                    <p>- Clear, concise results that focus on the connection between improved customer experience and overall business performance</p>
                    <p>- Hard evidence, data and the use of appropriate metrics to support your claims</p>
                    <p>- Evidence of innovation, impact and scalability</p>
                    <p>- Relevance to category criteria.</p>

                    <br/>
                    <h2>The Categories</h2>
                    <h5>There are two categories to choose from this year.</h5>
                    <p>a) Young Male Entrepreneur</p>
                    <p>b) Young Female Entrepreneur</p>

                    <br/>
                    <h2>Step-by-step Guide to Awards Success</h2>
                    <br/>

                    <div class="accordion">
                        <li class="open default">
                            Step 1 - Choose your category and receive the official entry form
                            <ul>
                                <p style="text-align: justify;">
                                    Visit our website <a href="http://tamilchamberofcommerce.org.uk">tamilchamberofcommerce.org.uk</a> and request an entry from by selecting your category and filling out an online form. When we get your online request we will perform a basic verification of your business and email the entry form for your business.
                                </p>
                            </ul>
                        </li>
                        <li>
                            Step 02 - Construct your entry
                            <ul>
                                <p style="text-align: justify;">
                                    Once you received your entry form, the next step is to review the criteria and gather evidence to write a clear and concise submission. The entry form will have a 1000 word limit for each question. If you’re struggling to squeeze details into your entry, don’t forget - you can also include one ‘Supporting Material’ document to substantiate your story. This can include information such as graphs, videos, staff profiles, testimonials etc.
                                </p>
                            </ul>
                        </li>
                        <li>
                            Step 03 - Submit your entry
                            <ul>
                                <p style="text-align: justify;">
                                    Once you have reviewed your entry and checked it against the criteria, submit your documents via email (info@tamilchamberofcommerce.org.uk). You can send a total of three documents (the entry, supporting material and your company logo) and all entries must be received by midnight on 7th December 2019.
                                </p>
                            </ul>
                        </li>
                        <li>
                            Step 04 - Wait to hear if you have been shortlisted submit
                            <ul>
                                <p style="text-align: justify;">
                                    Once all the entries have been submitted, there is a shortlisting period when finalists are selected. The panel of judges score each competitor and, once a final decision has been made, successful finalists will be notified via email on 14th December 2019.
                                </p>
                                <p style="text-align: justify;">All successful finalists will receive a Finalist’s logo, press release template and will be contacted to inform of the next steps.</p>
                            </ul>
                        </li>
                        <li>
                            Step 05 - Prepare for the Awards Finals
                            <ul>
                                <p style="text-align: justify;">
                                    If you are successful in making to the finals of the BTCC Awards, the next step is to book your place to attend and start planning your presentation. The Awards Finals will be taking place at the Hotel Ramada in London on 18th January 2020. As a Finalist, you will be asked to prepare a detailed plan for a panel of judges, you can also send a video to the judges explaining your vision. This will equate to 70% of your overall entry score (the other 30% is on the day voting by the guests after reviewing your written entry)
                                </p>
                            </ul>
                        </li>
                        <li>
                            Step 06 - Attending the finals
                            <ul>
                                <p style="text-align: justify;">
                                    Finalists will get two free entry tickets and also receive a discounted rate on booking a table. There will be a drinks reception and three-course meal. The winners of each category being announced before the meal.
                                </p>
                            </ul>
                        </li>
                        <li>
                            Step 07 - Capitalise on your success
                            <ul>
                                <p style="text-align: justify;">
                                    Making it to the finals of this prestigious event is a great achievement, so be sure to spread the word about your success. You may wish to issue a press release, use your finalists logo on your website or social media, and communicate with key stakeholders.
                                </p>
                            </ul>
                        </li>
                    </div>

                    <br/>
                    <h2>Key Dates</h2>
                    <ul>
                        <li>01 November 2019 - Call for nominations</li>
                        <li>31 November 2019 - Nominations Close</li>
                        <li>21 December 2019 - Shortlist Announced</li>
                        <li>01 January 2020 - Online Voting Open</li>
                        <li>14 January 2020 - Online Voting Close</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="iconblock center dark1">
        <div class="container border">
            <div class="row">
                <div class="col col-md-12 title">
                    <h2>5 Reasons To Enter Our Awards</h2>
                    <div class="title-border"></div>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-sm-6 col-md-6">
                    <img src="{{ asset('images/teamwork.png') }}" alt="" style="margin-bottom: 20px !important;"/>
                    <p class="user-pos" style="text-align: justify !important;">Entering awards provides an immediate boost to workplace morale. This is a cost-effective way of honouring your team’s hard work, educating them about the latest ideas in customer experience, and having fun whilst doing so!</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="{{ asset('images/podium.png') }}" alt="" style="margin-bottom: 20px !important;"/>
                    <p class="user-pos" style="text-align: justify !important;">Your firm can receive publicity when becoming a winner, or even a finalist. Entering will strengthen your corporate reputation and build trust with key stakeholders, potentially influencing buying decisions in your favour!</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="{{ asset('images/visionary.png') }}" alt="" style="margin-bottom: 20px !important;"/>
                    <p class="user-pos" style="text-align: justify !important;">The Awards themselves are an extraordinarily educational experience - you can be exposed to amazing ideas from within your own sector, as well as seeing different approaches from different sectors. The cross-sector nature of the awards really adds to their educational value.</p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="{{ asset('images/enterprise.png') }}" alt="" style="margin-bottom: 20px !important;"/>
                    <p class="user-pos" style="text-align: justify !important;">Entering awards provides an immediate boost to workplace morale. This is a cost-effective way of honouring your team’s hard work, educating them about the latest ideas in customer experience, and having fun whilst doing so!</p>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="text-center">
                        <img src="{{ asset('images/customer-review.png') }}" alt="" style="margin-bottom: 20px !important;"/>
                        <p class="user-pos">Every finalist receives valuable feedback from our expert panel of independent judges.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Modal-->
    <div class="modal fade" id="application_request" tabindex="-1" role="dialog" aria-labelledby="application_request" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="application_request">British Tamil Awards Night - Application Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('request-awards-application')}}" method="post">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="full_name" class="col-form-label">Full Name</label>
                            <input type="text" class="form-control md-30" id="full_name" name="full_name" required/>
                        </div>
                        <div class="form-group">
                            <label for="business_name" class="col-form-label">Business Name</label>
                            <input type="text" class="form-control md-30" id="business_name" name="business_name" required/>
                        </div>
                        <div class="form-group">
                            <label for="business_address" class="col-form-label">Business Address</label>
                            <input type="text" class="form-control md-30" id="business_address" name="business_address" required/>
                        </div>
                        <div class="form-group">
                            <label for="award_type" class="col-form-label">Type of Award</label>
                            <select type="text" class="form-control" id="award_type" name="award_type" required>
                                <option value="Young Male Entrepreneur">Young Male Entrepreneur</option>
                                <option value="Young Female Entrepreneur">Young Female Entrepreneur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control md-30" id="email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="additional_info md-30" class="col-form-label">Additional Information</label>
                            <textarea class="form-control" id="additional_info" name="additional_info"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="chk-container" style="color:black;">By submitting this form you agree to the terms of our <a href="{{ url('terms-and-conditions') }}">Terms and conditions</a>
                                <input type="checkbox" id="checkme" name="privacy" value="terms" required>
                                <span class="checkmark"></span>
                            </label>
                            <label class="chk-container" style="color:black;"> I would like to receive new events, invites and newsletters by email, from British Tamil Chamber of Commerce.</a>
                                <input type="checkbox" id="checkme" name="marketing" value="marketing">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Request Application</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extra_script')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 18, 2020 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("countdown").innerHTML = days + " Days : " + hours + " Hours : "
                + minutes + " Minutes : " + seconds + " Seconds";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection
