@extends('frontend.layouts.home')
@section('title')
    {{ __('Home') }}
@endsection
@section('content')
<main class="nk-pages">
    <section class="overflow-hidden text-center section no-pd over-up">
        <div style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">ChainCore Capital</a></div></div>
    </section>
   <section class="bg-white section section-features" id="why">
      <div class="container">
         <div class="nk-block nk-block-features-s2">
            <div class="flex-row-reverse row align-items-center">
               <div class="col-lg-5">
                  <div class="py-4 gfx animated" data-animate="fadeInUp" data-delay=".1"><img src="images/gfx/gfx-a.png" alt="gfx"></div>
               </div>
               <div class="col-lg-7">
                  <div class="section-head">
                     <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">For a Secured and planned future</h2>
                     <p class="animated" data-animate="fadeInUp" data-delay=".3">We are active global investors. In a complex world we think and act across traditional boundaries. We organize our teams globally by asset class, to bring the breadth and depth of our investment and research capabilities together for clients across the world.</p>
                  </div>
                  <div class="features-list me-4 mgb-m30">
                     <div class="feature feature-s2 animated" data-animate="fadeInUp" data-delay=".4">
                        <div class="feature-icon dot"><em class="icon ikon ikon-shiled-alt"></em></div>
                        <div class="feature-text">
                           <h5 class="title title-sm">Experienced Trading & Analysis Team</h5>
                           <p>Chaincore team consists of most experienced experts in Forex/crypto Trading and analysis. 70%+ is our trading signal's success rate , so you can earn and grow with us.</p>
                        </div>
                     </div>
                     <div class="feature feature-s2 animated" data-animate="fadeInUp" data-delay=".5">
                        <div class="feature-icon dot"><em class="icon ikon ikon-user"></em></div>
                        <div class="feature-text">
                           <h5 class="title title-sm">Affordable price & High quality services</h5>
                           <p>We love our clients and Proud to our high level service, that anyone can afford and be successful in Trading. Check our pricing page for ore details on our investment plans.</p>
                        </div>
                     </div>
                     <div class="feature feature-s2 animated" data-animate="fadeInUp" data-delay=".6">
                        <div class="feature-icon dot"><em class="icon ikon ikon-data-server"></em></div>
                        <div class="feature-text">
                           <h5 class="title title-sm">Data security</h5>
                           <p>Chaincore is committed to providing clients a secure environment to invest. Data protection and safekeeping of clients assets are our priority.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section section-problem bg-light" id="problem">
      <div class="container">
         <div class="text-center section-head wide-auto-sm">
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".1">Why Choose us</h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".2">We provide fastest trading using modern technologies influencer research & development for user experience.</p>
         </div>
         <div class="nk-block nk-block-problems tc-light">
            <div class="row g-0 align-items-center">
               <div class="col-lg-6">
                  <div class="feature boxed boxed-lg bg-theme no-mg split-lg-left split-left animated" data-animate="fadeInUp" data-delay=".3">
                     <h4 class="title title-md">Wealth Planning</h4>
                     <p>A well-developed wealth plan provides access to the services and solutions that will help you achieve your long-term goals, such as preserving your wealth and assets, making an impact, and leaving a legacy.</p>
                     <ul class="list list-dot">
                        <li>Investment and Asset Management</li>
                        <li>Fiduciary and Trust Services</li>
                        <li>Business Advisory Services</li>
                        <li>Asset protection</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="feature-group bg-theme-alt split-right split-lg animated" data-animate="fadeInUp" data-delay=".4">
                     <div class="feature boxed bg-white-10">
                        <div class="feature-text">
                           <h4 class="title title-md">Innovative platform</h4>
                           <p>At Chaincorecapital, innovation is the standard. Our investment platform is at the forefront of the industry but we are not content to stop improving. We are continuously expanding our services.</p>
                        </div>
                     </div>
                     <div class="feature boxed bg-white-2">
                        <div class="feature-text">
                           <h4 class="title title-md">24/7 customer support</h4>
                           <p>Providing Premium fast client's support services.Aalso monitoring all support processing to make sure it remains perfect.</p>
                        </div>
                     </div>
                     <div class="feature boxed bg-black-10">
                        <div class="feature-text">
                           <h4 class="title title-md">Investment fees</h4>
                           <p>we believe in transparency. Our investment plans can be found within the pricing page, allowing the possibility to calculate the ROI upfront before investing.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="pt-0 section section-solution bg-light" id="solution">
      <div class="container">
         <div class="text-center section-head wide-auto-sm">
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".1">Solutions</h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".2">We are creating modular software, apps blockchain based accusamus et eiusto odio dignimus qui blan ditiis praes entium volup tatun.</p>
         </div>
         <div class="nk-block nk-block-features-s3">
            <div class="row gutter-vr-40px justify-content-center">
               <div class="col-lg-6 col-md-10">
                  <div class="feature feature-s3 feature-center animated" data-animate="fadeInUp" data-delay=".3">
                     <div class="feature-icon feature-icon-lg"><em class="icon icon-lg ikon ikon-cloud"></em></div>
                     <div class="feature-text">
                        <h4 class="title title-md title-dark">Estate and trust</h4>
                        <p>Access solutions for some of life’s most significant decisions and shape your lasting legacy.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-10">
                  <div class="feature feature-s3 feature-center animated" data-animate="fadeInUp" data-delay=".4">
                     <div class="feature-icon feature-icon-lg"><em class="icon icon-lg ikon ikon-safety"></em></div>
                     <div class="feature-text">
                        <h4 class="title title-md title-dark">Business Advisory Services</h4>
                        <p>A well-developed wealth plan provides access to the services and solutions that will help you achieve your long-term goals, such as preserving your wealth and assets, making an impact, and leaving a legacy.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-10">
                  <div class="feature feature-s3 feature-center animated" data-animate="fadeInUp" data-delay=".5">
                     <div class="feature-icon feature-icon-lg"><em class="icon icon-lg ikon ikon-cash"></em></div>
                     <div class="feature-text">
                        <h4 class="title title-md title-dark">Decentralize Payment Systems</h4>
                        <p>Prepare for tomorrow while supporting your needs today. Our full-service solutions, such as legacy trusts, special need trusts, and estate settlement and administration services, can help you extend all that you’ve worked so hard to build.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-10">
                  <div class="feature feature-s3 feature-center animated" data-animate="fadeInUp" data-delay=".6">
                     <div class="feature-icon feature-icon-lg"><em class="icon icon-lg ikon ikon-globe"></em></div>
                     <div class="feature-text">
                        <h4 class="title title-md title-dark">Investment and Asset Management</h4>
                        <p>Benefit from rigour and discipline through market cycles with a suite of investment solutions aligned to your goals.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section tc-light bg-theme-grad" id="admin-intro">
      <div class="container">
         <div class="nk-block nk-block-text-wrap">
            <div class="row align-items-center">
               <div class="col-lg-7 order-lg-last">
                  <div class="pb-4 nk-block-img edge-r1 pb-lg-0 animated" data-animate="fadeInUp" data-delay=".1">
                    <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Chaincore Capital</a></div></div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="nk-block-text">
                     <h6 class="title title-xs tc-primary animated" data-animate="fadeInUp" data-delay=".1">Ico Admin Dashboard</h6>
                     <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Introducing Complete Admin Dashboard</h2>
                     <p class="animated" data-animate="fadeInUp" data-delay=".3">We designed the ICO Admin panel to mange back-end of ICO Token Sales. It’s allows to mange every thing such as KYC, Users, Transaction etc.</p>
                     <ul class="list list-check animated" data-animate="fadeInUp" data-delay=".4">
                        <li>Fully manage KYC application process.</li>
                        <li>Online Payment Gateway with Offline Payment option.</li>
                        <li>Manage ICO Stage &amp; each stage pricing and bonus option.</li>
                        <li>Analytics reports, Token Sales Data and others.</li>
                        <li>Newsletter with Emailing options.</li>
                        <li>Mobile Friendly and Support all modern browser.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="bg-light ftco-section testimony-section section">
    <div class="container">
        <!-- Section Head @s -->
        <div class="text-center section-head wide-auto">
            <h2 class="title title-lg animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Testimonials</h2>
            <h5 class="mb-4 title-dark">Our satisfied customer says</h5>
        </div>
        <!-- .section-head @e -->
        <!-- Block @s -->
        <div class="nk-block nk-block-team-list">
            <div class="row justify-content-center">
                <div class="col-md-3 col-6">
                    <div class="team animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                        <div class="team-photo">
                            <img src="images/team/a.jpg" alt="team">
                            <a href="#team-popup-1" class="team-show content-popup"></a>
                        </div>
                        <h5 class="team-name title title-sm">Louis Baker</h5>
                        <p>The emphasis on finding a perfect trading software helped so much in making the trading as seamless as possible. I couldn’t
                            be happier. </p>
                        <span class="team-position">CEO &amp; Lead Blockchain</span>
                    </div>
                    <!-- Start .team-profile  -->
                    <div id="team-popup-1" class="team-popup mfp-hide">
                        <a title="Close" class="mfp-close">×</a>
                        <div class="row align-items-start">
                            <div class="col-md-6">
                                <div class="team-photo">
                                    <img src="images/team/a.jpg" alt="team">
                                </div>
                            </div>
                            <!-- .col  -->
                            <div class="col-md-6">
                                <div class="team-popup-info pl-md-3">
                                    <h3 class="pt-4 team-name title title-lg">Louis Baker</h3>
                                    <p class="team-position">CEO &amp; Lead Blockchain </p>
                                    <p>acefinanceinv.com emphasis on finding a perfect trading strategy helped so much in making investment success as seamless as possible. I couldn’t
                                        be happier.</p>
                                    <div class="progress-list">
                                        <div class="progress-wrap">
                                            <div class="progress-title">Blockchain
                                                <span class="progress-amount">85%</span>
                                            </div>
                                            <div class="progress-bar progress-bar-xs bg-black-10">
                                                <div class="progress-percent bg-primary" data-percent="85" style="width: 85%;"></div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-title">Decentralization
                                                <span class="progress-amount">68%</span>
                                            </div>
                                            <div class="progress-bar progress-bar-xs bg-black-10">
                                                <div class="progress-percent bg-primary" data-percent="68" style="width: 68%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .col  -->
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .team-profile  -->
                </div>
                <!-- .col -->
                <div class="col-md-3 col-6">
                    <div class="team animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                        <div class="team-photo">
                            <img src="images/team/b.jpg" alt="team">
                            <a href="#team-popup-2" class="team-show content-popup"></a>
                        </div>
                        <h5 class="team-name title title-sm">Jonathan Rios</h5>
                        <p>My experience with acefinanceinv.com was life-changing. From the very beginning the technical team were entirely committed to my financial dream. </p>
                        <span class="team-position">CTO &amp; Software Engineer</span>
                    </div>
                    <!-- Start .team-popup  -->
                    <div id="team-popup-2" class="team-popup mfp-hide">
                        <a title="Close" class="mfp-close">×</a>
                        <div class="row align-items-start">
                            <div class="col-md-6">
                                <div class="team-photo">
                                    <img src="images/team/b.jpg" alt="team">
                                </div>
                            </div>
                            <!-- .col  -->
                            <div class="col-md-6">
                                <div class="team-popup-info pl-md-3">
                                    <h3 class="pt-4 team-name title title-lg">Jonathan Rios</h3>
                                    <p class="team-position">CTO &amp; Software Engineer</p>
                                    <p>My experience with acefinanceinv.com was life-changing. From the very beginning the technical team were entirely committed to my financial dream.</p>
                                </div>
                            </div>
                            <!-- .col  -->
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .team-popup  -->
                </div>
                <!-- .col -->
                <div class="col-md-3 col-6">
                    <div class="team animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">
                        <div class="team-photo">
                            <img src="images/team/c.jpg" alt="team">
                            <a href="#team-popup-3" class="team-show content-popup"></a>
                        </div>
                        <h5 class="team-name title title-sm">Jason Morales</h5>
                        <p>They provided me with reliable information, trading tips, and orientation to their investment packages. I thank the account managers for their effort.</p>
                        <span class="team-position">Sr.Backend developer</span>
                    </div>
                    <!-- Start .team-profile  -->
                    <div id="team-popup-3" class="team-popup mfp-hide">
                        <a title="Close" class="mfp-close">×</a>
                        <div class="row align-items-start">
                            <div class="col-md-6">
                                <div class="team-photo">
                                    <img src="images/team/c.jpg" alt="team">
                                </div>
                            </div>
                            <!-- .col  -->
                            <div class="col-md-6">
                                <div class="team-popup-info pl-md-3">
                                    <h3 class="pt-4 team-name title title-lg">Jason Morales</h3>
                                    <p class="team-position">Sr.Backend developer</p>
                                    <p>They provided me with reliable information, trading tips, and orientation to their investment packages. I thank the account managers for their effort.</p>
                                </div>
                            </div>
                            <!-- .col  -->
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .team-profile  -->
                </div>
                <!-- .col -->
                <div class="col-md-3 col-6">
                    <div class="team animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                        <div class="team-photo">
                            <img src="images/team/d.jpg" alt="team">
                            <a href="#team-popup-4" class="team-show content-popup"></a>
                        </div>
                        <h5 class="team-name title title-sm">Joseph Jordan</h5>
                        <p>Always supportive and realistic, they gave me the confidence I needed to be where I am today. Simple but generous gestures, like setting up a trading account. </p>
                        <span class="team-position">Software Engineer</span>
                    </div>
                    <!-- Start .team-profile  -->
                    <div id="team-popup-4" class="team-popup mfp-hide">
                        <a title="Close" class="mfp-close">×</a>
                        <div class="row align-items-start">
                            <div class="col-md-6">
                                <div class="team-photo">
                                    <img src="images/team/d.jpg" alt="team">
                                </div>
                            </div>
                            <!-- .col  -->
                            <div class="col-md-6">
                                <div class="team-popup-info pl-md-3">
                                    <h3 class="pt-4 team-name title title-lg">Joseph Jordan</h3>
                                    <p class="team-position">Software Engineer</p>
                                    <p>Always supportive and realistic, they gave me the confidence I needed to be where I am today. Simple but generous gestures, like setting up a trading account.</p>
                                </div>
                            </div>
                            <!-- .col  -->
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .team-profile  -->
                </div>
                <!-- .col -->
            </div>
        </div>
    </div>
    </section>
</main>
@endsection
