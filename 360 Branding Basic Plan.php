<html>
<?php 
      include 'dbconnect.php';
      require 'top.php';
      //    error_reporting(0);
      ?>

<head>
    <title>Advance Brading Basic Plan</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="We are a one-stop shop for launching & expanding your company on significant Ecom marketplaces. In the biggest e-commerce marketplaces, we assist you in developing your brand....">
    <meta name="keywords" content="branding, branding basic plan">
    <meta name="author" content="Cruzen Digital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Start Page Title Area -->
    <!-- Start Overview Area -->
    <section class="overview-area ptb-10012">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="products-details-tabs produt">
                        <ul class="nav nav-tabs descriptionpe" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    href="#Amazonbasic" role="tab" aria-controls="description"> <img
                                        src="assets/shorticon/branding.png" class="amazonf mr-4"> 360 Marketing Basic Plan
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                    href="#Amazonstandard" role="tab" aria-controls="reviews"><img
                                        src="assets/shorticon/branding.png" class="amazonf mr-4"> 360 Marketing Premium Plan </a>
                            </li>
                            
                        </ul>
                        <div class="tab-content contenttbrand" id="myTabContent">
                            <div class="tab-pane fade show active" id="Amazonbasic" role="tabpanel">
                                <div class="row">
                                    <?php
                                 $sql = " SELECT * FROM `products` WHERE `product_name`='360 Branding Basic Plan'";
                                 $result = mysqli_query($conn,$sql); 
                                 while($rows=mysqli_fetch_assoc($result))
                                  {
                                 $img='./admin_cruzen/'.$rows['prod_image'];
                                      
                                 ?>
                                    <div class="col-md-4 fixed-sidebar">
                                        <div class="analysis-img">
                                            <img src="<?php echo $img; ?>" width="175" height="175" alt="Cruzen Digital"
                                                style="width: initial">
                                            <!--  <p class="basicplan">OR</p>-->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="analysis-form">
                                            <span class="sub-title">Get Increase In Your Sales </span>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2> <?php echo $rows['product_name']; ?></h2>
                                                    <h6 class="lakter" style="padding-top: 20px;">₹
                                                        <?php echo $rows['price']; ?>/- <span class="cutprice">₹
                                                            <?php echo $rows['sale_price']; ?>/-</span>
                                                    </h6>
                                                    <form method="post" action="manage_cart.php" class="branding-form">
                                                        <div><input type="hidden" name="product_image"
                                                                value="<?php echo $img; ?>" required></div>
                                                        <div><input type="hidden" name="product_category"
                                                                value="<?php echo $rows['product_category']; ?>"
                                                                required></div>
                                                        <div><input type="hidden" name="product_name"
                                                                value="<?php echo $rows['product_name']; ?>" required>
                                                        </div>
                                                        <div><input type="hidden" name="price"
                                                                value="<?php echo $rows['price']; ?>" required></div>
                                                        <div class="qitu brandingdisplay">
                                                            <b>Duration:</b>
                                                            <div class="input-group input-number-group">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-decrement">-</span>
                                                                </div>
                                                                <input class="input-number" type="number" name="dura"
                                                                    value="1" min="1" max="12">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-increment">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="qituy brandingdisplay">
                                                            <b>Quantity:</b>
                                                            <div class="input-group input-number-group">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-decrement">-</span>
                                                                </div>
                                                                <input class="input-number" type="number" name="quant"
                                                                    min="1" max="1000" value="1">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-increment">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="add-to-cart"
                                                            class="default-btn mdknfks">Add
                                                            To
                                                            Cart <i class="fa fa-cart-arrow-down"
                                                                aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 vl">
                                                    <p class="brandp">Unleash the potential of your brand with our all-encompassing Advanced Branding Solutions. We offer a comprehensive array of services designed to elevate your brand's visibility, captivate your target audience, and drive substantial growth. From crafting innovative marketing strategies and retention marketing to expert product management and successful new product launch strategies, we've got you covered.
                                                    </p>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                <p>Join forces with us to transform your brand into an industry powerhouse. Our Advanced Branding Solutions empower you to connect with your audience, drive conversions, and achieve lasting success in today's dynamic digital landscape. Let's create a brand that resonates, captivates, and leaves a lasting impression.</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                 }
                                 ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Amazonstandard" role="tabpanel">
                                <div class="products-reviews">
                                    <div class="row">
                                        <?php
                                 $sql = " SELECT * FROM `products` WHERE `product_name`='360 Branding Premium Plan'";
                                 $result = mysqli_query($conn,$sql); 
                                 while($rows=mysqli_fetch_assoc($result))
                                  {
                                 $img='./admin_cruzen/'.$rows['prod_image'];
                                      
                                 ?>
                                        <div class="col-md-4 fixed-sidebar">
                                            <div class="analysis-img">
                                                <img src="<?php echo $img; ?>" width="175" height="175" alt="Cruzen Digital"
                                                    style="width: initial">
                                                <!--  <p class="basicplan">OR</p>-->
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="analysis-form">
                                                <span class="sub-title">Get Increase In Your 
                                                    Plan</span>
                                              
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <h2> <?php echo $rows['product_name']; ?></h2>
                                                    <h6 class="lakter" style="padding-top: 20px;">₹
                                                        <?php echo $rows['price']; ?>/- <span class="cutprice">₹
                                                            <?php echo $rows['sale_price']; ?>/-</span>
                                                    </h6>
                                                    <form method="post" action="manage_cart.php" class="branding-form">
                                                        <div><input type="hidden" name="product_image"
                                                                value="<?php echo $img; ?>" required></div>
                                                        <div><input type="hidden" name="product_category"
                                                                value="<?php echo $rows['product_category']; ?>"
                                                                required></div>
                                                        <div><input type="hidden" name="product_name"
                                                                value="<?php echo $rows['product_name']; ?>" required>
                                                        </div>
                                                        <div><input type="hidden" name="price"
                                                                value="<?php echo $rows['price']; ?>" required></div>
                                                        <div class="qitu brandingdisplay">
                                                            <b>Duration:</b>
                                                            <div class="input-group input-number-group">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-decrement">-</span>
                                                                </div>
                                                                <input class="input-number" type="number" name="dura"
                                                                    value="1" min="1" max="12">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-increment">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="qituy brandingdisplay">
                                                            <b>Quantity:</b>
                                                            <div class="input-group input-number-group">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-decrement">-</span>
                                                                </div>
                                                                <input class="input-number" type="number" name="quant"
                                                                    min="1" max="1000" value="1">
                                                                <div class="input-group-button">
                                                                    <span class="input-number-increment">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="add-to-cart"
                                                            class="default-btn mdknfks">Add
                                                            To
                                                            Cart <i class="fa fa-cart-arrow-down"
                                                                aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 vl">
                                                    <p class="brandp">Unleash the potential of your brand with our all-encompassing Advanced Branding Solutions. We offer a comprehensive array of services designed to elevate your brand's visibility, captivate your target audience, and drive substantial growth. From crafting innovative marketing strategies and retention marketing to expert product management and successful new product launch strategies, we've got you covered.
                                                    </p>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                <p>Join forces with us to transform your brand into an industry powerhouse. Our Advanced Branding Solutions empower you to connect with your audience, drive conversions, and achieve lasting success in today's dynamic digital landscape. Let's create a brand that resonates, captivates, and leaves a lasting impression.</p>
                                                </div>
                                                
                                            </div>
                                              
                                              
                                              
                                              
                                              
                                            </div>
                                        </div>
                                        <?php
                                 }
                                 ?>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
      <!-- Start Services Area -->
   <section class="services-area bg-f9f9f9 pt-100 pb-70">
      <div class="container" bis_skin_checked="1">
         
         <div class="section-title" bis_skin_checked="1">
            <span class="sub-title">Marketing Focused Branding</span>
            <h2>Package Inclusion </h2>
            
         </div>
       
         <div class="row mannbharya">
                
            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Marketing Consultation</a></h3>
                  </div>
                  <p class="consectetur">Embark on a strategic marketing journey with our seasoned marketing experts. We offer tailored consultation services to help you define and refine your marketing objectives, identify target audiences, and design result-driven marketing strategies. Leverage our expertise to navigate the ever-evolving marketing landscape effectively.</p>
                 
               </div>
            </div>
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Retention Marketing</a></h3>
                  </div>
                  <p class="consectetur">Foster lasting relationships with your existing customers. Our retention marketing strategies are designed to enhance customer loyalty, reduce churn, and encourage repeat purchases. Through personalized communication and loyalty programs, we create a strong bond between your brand and your valued customers.
</p>
                 
               </div>
            </div>
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Product Management</a></h3>
                  </div>
                  <p class="consectetur">Optimize your product's lifecycle and performance with our dedicated product management services. Our experienced product managers work closely with you to develop, launch, and manage your products effectively. From conceptualization to market analysis and feature enhancement, we ensure your product meets market demands and exceeds expectations.
</p>
                 
               </div>
            </div>
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">New Product Launch Strategy</a></h3>
                  </div>
                  <p class="consectetur"> Introduce your new product to the world with a bang. Our experts will craft a tailored launch strategy, encompassing market research, positioning, pricing, and promotional activities. We'll help you create anticipation, generate buzz, and successfully launch your product, making a memorable impact in your industry.</p>
                 
               </div>
            </div>
             
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Social Media Management</a></h3>
                  </div>
                  <p class="consectetur"> Elevate your brand's presence on popular social platforms. Our expert team will curate engaging content, plan strategic campaigns, and foster authentic interactions with your audience to enhance brand awareness and drive customer engagement.</p>
                 
               </div>
            </div>
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Ad Campaign Management</a></h3>
                  </div>
                  <p class="consectetur">Harness the power of targeted advertising. Our dedicated team will tailor ad campaigns that align with your brand's objectives, ensuring optimal reach and engagement. We carefully analyze data to refine strategies and maximize ROI for every advertising dollar spent.</p>
                 
               </div>
            </div>
             
             
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Search Engine Optimization (SEO)</a></h3>
                  </div>
                  <p class="consectetur"> Boost your online visibility and organic traffic. Our SEO experts employ proven strategies to optimize your website, making it more search engine-friendly. By optimizing keywords, improving site speed, and enhancing user experience, we help you rank higher and attract quality leads.</p>
                 
               </div>
            </div>
             
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Google Ads</a></h3>
                  </div>
                  <p class="consectetur">Reach potential customers at the right moment with Google Ads. Our team will develop and manage impactful ad campaigns, utilizing keyword research and targeted bidding strategies to drive relevant traffic to your website. Achieve higher conversions and increase your brand's online reach.</p>
                 
               </div>
            </div>
             
             
             
             
              <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box  iuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Public Relations (PR)</a></h3>
                  </div>
                  <p class="consectetur"> Build a positive brand image and reputation. Through strategic PR campaigns, we create compelling narratives that resonate with your audience. We establish strong media relations, craft press releases, and manage crisis communication, fostering a favorable perception of your brand.</p>
                 
               </div>
            </div>
             
             <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="single-boxes-box siuuu">
                  <div class="dibiz-about-content wow animate__ animate__fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                     <h3><a href="digital-marketing-plans.php">Online Reputation Management (ORM)</a></h3>
                  </div>
                  <p class="consectetur"> Safeguard your brand's image across digital platforms. Our ORM services involve proactive monitoring and managing online reviews, comments, and mentions. We work to maintain a positive online presence, promptly addressing any negative feedback and strengthening your brand's credibility</p>
                 
               </div>
            </div>
             
             
             
             
             
              <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <!--Table-->
                                                            <table class="table branding-table">
                                                                <!--Table head-->
                                                                <thead class="tablehead">
                                                                    <tr>
                                                                        <th>S.no</th>
                                                                        <th class="th-sm">SMO</th>
                                                                        <th class="th-sm">SMM</th>
                                                                        <th class="th-sm">Google Advertisment</th>
                                                                    </tr>
                                                                </thead>
                                                                <!--Table head-->
                                                                <!--Table body-->
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Image Posting & Stories Reshare - 24</td>
                                                                        <td>Creation Of Campaign - 6</td>
                                                                        <td>Account Setup</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Reel Edit -2 (raw video to be provided by
                                                                            client).</td>
                                                                        <td>Facebook Business Manager Set Up</td>
                                                                        <td>Keyword Research</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Highlight icons design - 5</td>
                                                                        <td>Pixel Installation</td>
                                                                        <td> Ad Creation x 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Reply on business - up to 15</td>
                                                                        <td>Custom Audience Creation</td>
                                                                        <td>Conversion Tracking</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>Negative comment remove -upto 30</td>
                                                                        <td>Customization Of Ad Placements</td>
                                                                        <td> Competitor Analysis</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Post boost - 2</td>
                                                                        <td>Carousel Graphic and copy creation - 6 </td>
                                                                        <td>Budget Management</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">7</th>
                                                                        <td colspan="2">Posting Calendar</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">8</th>
                                                                        <td colspan="2">Organic Boosting of posts & Best
                                                                            graphics and attention-grabbing copies</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">9</th>
                                                                        <td colspan="2">Profile Optimization &
                                                                            Customized strategy</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--Table body-->
                                                            </table>
                                                            <!--Table-->
                                                        </div>
                                                    </div>
             
           
         </div>
      </div>
   </section>
   <!-- End Services Area -->
 
    
    
    
    <section class="brandinghighlist">
        <img src="assets/branding/image1.png" class="desktopimagesection">
        <img src="assets/branding/mobile1.png" class="mobileimage">
    </section>
    
    

    <section class="pt-00191">
        <div class="container sectionbrand">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/branding/image4.png" class="imagebrandd">
                </div>
                <div class="col-md-6">
                    <h1 class="brandingheading">Why Your Business <br>Need Branding?</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" id="show-image"
                                            href="javascript:void(0)" bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Recognition
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">

                                                Effective branding helps your business stand out in a crowded
                                                marketplace. It creates a memorable and distinct identity that customers
                                                can recognize and recall easily <br>
                                            </p>
                                            <img src="assets/branding/image5.png" alt="IceShake" class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Trust and Credibility:
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">A strong brand builds trust and credibility with your
                                                audience. When customers recognize your brand and have positive
                                                associations with it, they are more likely to choose your products or
                                                services over competitors</p>
                                            <img src="assets/branding/trust.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Consistency
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">Branding establishes guidelines for how your business
                                                presents itself to the world. This consistency in messaging, design, and
                                                values helps customers know what to expect from your brand.
                                            </p>
                                            <img src="assets/branding/Consistency.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Competitive Advantage
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">A well-defined brand can give you a competitive edge.
                                                It allows you to
                                                differentiate your business from competitors and communicate why you are
                                                the better choice</p>
                                            <img src="assets/branding/Competitive.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Emotional Connection
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds"> Brands can create emotional connections with
                                                customers. When people feel
                                                a connection to your brand, they are more likely to become loyal
                                                customers and brand advocates.</p>
                                            <img src="assets/branding/emot.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Value Perception
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">Strong branding can justify higher prices. Customers
                                                often perceive
                                                branded products and services as more valuable and are willing to pay a
                                                premium for them</p>
                                            <img src="assets/branding/vslue.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Customer Loyalty
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">A strong brand fosters customer loyalty. When
                                                customers have positive
                                                experiences with your brand, they are more likely to return and become
                                                repeat buyers.
                                            </p>
                                            <img src="assets/branding/loyal.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Attracting Talent
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds"> A compelling brand also attracts top talent. People
                                                want to work for
                                                companies with a positive reputation and a strong brand presence.</p>
                                            <img src="assets/branding/attract.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Expansion Diversification
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">As your business grows, a strong brand allows you to
                                                expand into new
                                                markets and product lines more easily. Your brand equity can carry over
                                                to new ventures.
                                            </p>
                                            <img src="assets/branding/ex.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                            <div class="what-we-do-content-accordion" bis_skin_checked="1">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title accordion-title-brand" href="javascript:void(0)"
                                            bis_skin_checked="1">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            Marketing Efficiency
                                        </a>
                                        <div class="accordion-content show" bis_skin_checked="1" style="display: none;">
                                            <p class="brandingds">Effective branding makes marketing efforts more
                                                efficient. A well-known
                                                brand requires less effort and expense to generate interest and sales.
                                            </p>
                                            <img src="assets/branding/marekting.png" alt=" Trust and Credibility:"
                                                class="brandingim">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="brand-dropdown">
    </section>
    <section class="brandinghighlist">
        <img src="assets/branding/image2.png" class="desktopimagesection">
        <img src="assets/branding/image2.png" class="mobileimage">
    </section>
    <section class="brandinghighlist">
        <img src="assets/branding/image3.png" class="desktopimagesection">
        <img src="assets/branding/mobile2.png" class="mobileimage">
    </section>
    <!-- Demo header-->
    <section class="dekhlo  header vty">
        <div class="container">
            <div class="row">
                <h1 class="botal">RELATED SERVICES</h1>
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link mb-2 p-3 shadow active" id="v-pills-profile-tab" data-toggle="pill"
                            href="#v-pills-Flipkart" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <img src="assets/shorticon/flipkart.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">Flipkart SPN Service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill"
                            href="#v-pills-Meesho" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <img src="assets/shorticon/meesho.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">Meesho spn service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-myntra" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <img src="assets/shorticon/myntra.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">myntra SPN Service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-Shopclues" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <img src="assets/shorticon/shopclues.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">Shopclues spn service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-nyka" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <img src="assets/shorticon/nyka.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">nyka spn service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-snapdeal" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <img src="assets/shorticon/snapdal.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">snapdeal spn service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-ebay" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <img src="assets/shorticon/ebay.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">ebay spn service</span></a>
                        <a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                            href="#v-pills-etsy" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <img src="assets/shorticon/etsy.png" class="amazon mr-4">
                            <span class="font-weight-bold small text-uppercase">etsy spn service</span></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-Flipkart"
                            role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">FLIPKART SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Flipkart Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-Meesho" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">MEESHO SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Meesho Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-myntra" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">MYNTRA SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Myntra Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-Shopclues" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">SHOPCLUES SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Shopclues Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-nyka" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">NYKA SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Nyka Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                                  {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-snapdeal" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">SNAPDEAL SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Snapdeal Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-ebay" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">EBAY SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Ebay Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-etsy" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="dibiz-about-content wow animate__ animate__fadeInUp animated"
                                data-wow-delay="200ms" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h3 class="classo">ETSY SPN SERVICE</h3>
                            </div>
                            <div class="row">
                                <?php
                              $sql = " SELECT * FROM `products` WHERE `product_category`='Etsy Seller'";
                              $result = mysqli_query($conn,$sql); 
                              while($rows=$result->fetch_assoc())
                              {
                              ?>
                                <div class="product-box col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header pricing-header1 mb-2">
                                            <h3><?php echo $rows['product_name']; ?></h3>
                                        </div>
                                        <img src="admin_cruzen/<?php echo $rows['prod_image']; ?>" width="175"
                                            height="175" alt="Cruzen Digital" style="width: initial">
                                        <div><input type="hidden" name="product_name"
                                                value="<?php echo $rows['product_name']; ?>" required></div>
                                        <button type="submit" name="add-to-cart" class="default-btn"><a
                                                href="<?php echo $rows['product_name']; ?>.php" class="startkrlo">Get
                                                Started
                                            </a><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php
                              }                
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Details Area -->
    <div class="seo-analysis-area bg-f9f9f9 bg-color cftr ptb-100" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row align-items-center" bis_skin_checked="1">
                <div class="col-lg-6 col-md-12" bis_skin_checked="1">
                    <div class="analysis-img" bis_skin_checked="1">
                        <img src="assets/image/website-designing/3.png" alt="Cruzen Digital">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" bis_skin_checked="1">
                    <div class="analysis-form" bis_skin_checked="1">
                        <span class="sub-title">Get Connect With Us And Bulid Your Business</span>
                        <h2>Have You Any Enquiry For Your Bussines.!</h2>
                        <p>Stand out online with a professional website, online store, or portfolio. With Squarespace,
                            you can turn any idea into a reality.
                        </p>
                        <form class="portfolio" method="post" action="enqiry.php">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                                    <div class="form-group" bis_skin_checked="1">
                                        <input type="text" class="form-control" name="your_name" placeholder="Full Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                                    <div class="form-group" bis_skin_checked="1">
                                        <input type="email" class="form-control" name="your_email" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                                    <div class="form-group" bis_skin_checked="1">
                                        <input type="number" class="form-control" name="your_number"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6" bis_skin_checked="1">
                                    <div class="form-group" bis_skin_checked="1">
                                        <input type="text" class="form-control" name="business"
                                            placeholder="Business Name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6" bis_skin_checked="1">
                                    <div class="form-group" bis_skin_checked="1">
                                        <textarea id="w3review" class="form-control" rows="4" cols="50"
                                            placeholder="Type your Massage" data-gramm="false" name="massage"
                                            wt-ignore-input="true"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="save" class="default-btn">Enquiry Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->
    <!-- Start Subscribe Area -->
    <!-- End Subscribe Area -->
</body>
<?php 
      require 'footer.php';
      ?>

</html>
<script>
$(document).ready(function() {
    $('#show-image').on("click", function() {
        $('#myView').toggle('slow');
    });
});
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<style>a:hover {
	color: white;
	text-decoration: none;
}
  .branding-form{
	display: grid !important;
	margin-top: 7px !important;
}
.brandingdisplay{
	margin-left: 0px !important;
	margin-top: 20px !important;
	margin-right: -1px !important;
	display: flex;
}
.mdknfks{
	margin-top: 16px !important;
	margin-bottom: 2px;
	padding: 11px 10px;
	font-size: 21px;
	border: 1px solid black;
	color: white;
	width: 83%;
}
.brandp{
	margin-top: 13px !important;
	font-size: 15px;
	margin-right: 0px;
	margin-left: 40px;
	font-weight: 600;
	text-align: justify;
}
.dibiz-nav{
	border-bottom: 1px solid #ddd;
}
.contenttbrand{
	box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15) !important;
    padding: 28px 20px;
}
.kkk:after {
	content: '';
	width: 0;
	height: 100%;
	position: absolute;
	border: 1px solid black;
	top: 0;
	left: 100px;
  }
  .vl {
	border-left: 2px solid #62D5DF;
	height: 230px;
	margin-top: 44px;
}
.branding-table{
	border: 1px solid #ddd;
	color: black;
	font-size: 15px;
	/* text-align: revert; */
	margin-top: 20px;
}
.tablehead{
	background-color: #E3E3E4;
}
.customert {
    font-size: 38px;
    margin-top: 17px;
    font-weight: 600;
    text-align: center;
}
.brandinghighlist{
	background: #F7F7F7;
	margin-bottom: 20px;
	border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
}
.roetuh{
	padding-bottom: 35px;
	padding-top: 0px;
	margin-top: 20px;
	margin-bottom: 30px;
}
.desktopimagesection{width: 100%;padding-bottom: 20px;}
.sectionbrand{
	width: 100%;
	max-width: 90%;
}
.imagebrandd{
	margin-left: -13px;
}
.brandingheading{
	margin-top: 50px;
	font-size: 50px;
}
.accordion-title-brand{
	padding-left: 50px !important;
	padding-top: 0px !important;
	font-size: 20px !important;
}
.pt-00191{
	margin-bottom: 30px;
}
.brandingds{text-align: justify;margin-top: 20px;}
.brandingim{
	text-align: center;
	margin-left: 100px;
	margin-top: 14px;
}
.mobileimage{
display: none;
}

@media only screen and (max-width: 600px) {
	.imagebrandd{
		display: none;
	}
	.mobileimage{
		display: flex;
			}

	.desktopimagesection{
		display: none;
	}
	.brandingheading {
		margin-top: 0px;
		font-size: 27px;
	}
	.accordion-title-brand {
		padding-left: 35px !important;
		padding-top: 5px !important;
		font-size: 15px !important;
	}
	.brandp {
		margin-top: 0px !important;
		font-size: 15px;
		margin-right: 0px;
		margin-left: 0px;
		font-weight: 600;
		text-align: justify;
		margin-bottom: 50px;
	}
	.vl {
		border-left: none;
		height: 230px;
		margin-top: 6px;
	}
  }
  .siuuu{
    padding: 21px 33px;
}</style>