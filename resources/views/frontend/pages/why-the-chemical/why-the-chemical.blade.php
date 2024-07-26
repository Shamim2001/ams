@extends('frontend.layout.app')

@section('content')

<style>
    .banner-image {
height: 400px; /* Adjust height as needed */
background-size: cover;
background-position: center;
position: relative;
}

.banner-content {
position: absolute;
top: 50%;
left: 20px; /* Adjust left positioning as needed */
transform: translateY(-50%);
color: #fff;
}

.banner-content h1 {
font-weight: 700;
font-size: 70px;
line-height: 80px;
max-width: 680px;
color: #ffffff;
padding: 10px 20px;
background: rgba(255, 255, 255, 0.1);
display: inline-block;
font-weight: 700;
letter-spacing: 0.3em;
text-transform: uppercase;
font-family: "Lato", sans-serif;
color: #ffffff;
margin-bottom: 10px;
max-width: 680px;
transition: all 0.3s ease;
margin-top: 0;
margin-bottom: 0.5rem;
font-family: "Lora", serif;
font-size: 3rem; /* Adjust font size as needed */
}

.banner-content p {
font-size: 5rem; /* Adjust font size as needed */
margin-top: 20px;
color: #ffffff;
}
.title-part {
max-width: 920px;
border-bottom: 1px solid rgba(0, 0, 0, 0.1);
padding-bottom: 40px;
box-sizing: border-box;
}
.h2 {
font-weight: 700;
font-size: 20px;
line-height: 24px;
padding: 10px 20px;
display: inline-block;
letter-spacing: 0.3em;
text-transform: uppercase;
background: rgba(0, 90, 169, 0.1);
font-family: "Lato", sans-serif;
color: #005aa9;
margin-bottom: 10px;
display: block;
font-size: 1.5em;
margin-block-start: 0.83em;
margin-block-end: 0.83em;
margin-inline-start: 0px;
margin-inline-end: 0px;
}
div {
display: block;
}
.why-khandeen {
    margin: 120px 0;
    box-sizing: border-box;
    font-weight: 700;
    font-size: 42px;
    line-height: 52px;
    color: #01010f;

h2 span{
    color: #01010f;
}
title {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
section {
    display: block;
}
}
.what-make-us-different {
    /*padding: 100px 0;*/
    margin: 120px 0;
    position: relative;
}
.what-make-us-different .content {
    display: flex;
    align-items: flex-start;
}
.what-make-us-different .detail {
    margin-right: 70px;
    z-index: 3;
}
.mb-0 {
    margin-bottom: 0 !important;
}
{
    box-sizing: border-box;
}
section {
    display: block;
}
body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(1, 1, 15, 0);
}
.what-make-us-different .detail ul li {
    font-weight: 400;
    font-size: 18px;
    display: flex;
    align-items: center;
    line-height: 28px;
    margin-bottom: 20px;
    color: #ffffff;
    padding-left: 55px;
    background-image: url(../img/list-tick.svg);
    background-repeat: no-repeat;
    background-position: 0 0;
    min-height: 40px;
    max-width: 450px;
}

*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}



</style>

<!--<div class="container-fluid p-0">-->
<!--    <div class="banner-image" style="background-image: url('https://khandeen.com/wp-content/uploads/2022/12/Our-Approach-Your-Benefit-Banner.png');">-->
<!--        <div class="banner-content">-->
<!--            <h1>About Us</h1>-->
<!--            <p>Why The Chemical </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<br>
<br>
<br>
<br>
<br>
<br>
<section class="why-the-chemicals">
<div class="container">
    <div class="content">
        <h6 class="title">
The Chemicals Limited stands for all types of pharmaceutical chemicals, Industrial Chemicals and Agrochemicals. We have very strong sales and sourcing team for your need. we welcome you for your any chemicals requirement.          
        </h6>

    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<img src="{{('images/bambo.jpg')}}" style="width: 300px; height: 400px;"  alt="...">

<!--<div class="container">-->

<!--<div class="row row-cols-1 row-cols-md-3 g-4 row justify-content-center">-->

<!--    <div class="col-5">-->
<!--      <div class="card">-->
        <!--  <img src="{{('assets/frontend/industry_expertise.png')}}"  style="width: 600px; height: 400px;" alt="...">-->
        <!--{{--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Expert-Team-2048x1365.jpg" class="card-img-top" alt="...">--}}-->
<!--        <div class="card-body">-->
<!--          <h5 class="card-title">Industry Expertise</h5>-->
<!--          <p class="card-text">With years of experience in the chemical industry, The Chemicals Ltd. possesses in-depth knowledge and understanding of pharmaceutical requirements, regulations, and standards.</p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-5">-->
<!--      <div class="card">-->
       <!--   <img src="{{('assets/frontend/wide_network.png')}}"  style="width: 600px; height: 400px;" alt="...">-->
       <!--{{-- <img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Award-Winning-Team-2048x1365.jpg" class="card-img-top" alt="...">--}}-->
<!--        <div class="card-body">-->
<!--          <h5 class="card-title">Wide Network</h5>-->
<!--          <p class="card-text">The company has established a vast network of reputable manufacturers, ensuring access to a diverse range of high-quality pharmaceutical products.</p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    
<!--<br>-->
<!--<br>-->

<!--    <div class="col-5">-->
<!--      <div class="card">-->
        <!--  <img src="{{('assets/frontend/Reliability.jpeg')}}"  style="width: 600px; height: 400px;" alt="...">-->
        <!--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Expert-Team-2048x1365.jpg" class="card-img-top" alt="...">-->
<!--        <div class="card-body">-->
<!--          <h5 class="card-title">Reliability</h5>-->
<!--          <p class="card-text">The Chemicals Ltd. is known for its reliability and commitment to delivering products on time and in optimal condition, meeting the stringent demands of the pharmaceutical sector.</p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-5">-->
<!--      <div class="card">-->
        <!--  <img src="{{('assets/frontend/q_assurance.jpg')}}"  style="width: 600px; height: 400px;" alt="...">-->
        <!--{{--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Award-Winning-Team-2048x1365.jpg" class="card-img-top" alt="...">--}}-->
<!--        <div class="card-body">-->
<!--          <h5 class="card-title">Quality Assurance</h5>-->
<!--          <p class="card-text">The company prioritizes quality assurance and compliance with regulatory standards, ensuring that all products meet the required specifications and certifications for pharmaceutical use.</p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--<br>-->
<!--<br>-->
<!--    <div class="col-5">-->
<!--      <div class="card">-->
      <!--<img src="{{('assets/frontend/centric_approach.jpg')}}"  style="width: 600px; height: 400px;" alt="...">-->
      <!--  {{--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Free-Consultation-2048x1366.jpg" class="card-img-top" alt="...">--}}-->
<!--        <div class="card-body">-->
<!--          <h5 class="card-title">Customer-Centric Approach</h5>-->
<!--          <p class="card-text">The Chemicals Ltd. places a strong emphasis on customer satisfaction, offering personalized service and tailored solutions to meet the unique needs of pharmaceutical clients.</p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-5">-->
<!--      <div class="card">-->
        <!--  <img src="{{('assets/frontend/transparency_integrity.jpg')}}"  style="width: 600px; height: 400px;" alt="...">-->
        <!--{{--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Award-Winning-Team-2048x1365.jpg" class="card-img-top" alt="...">--}}-->
<!--        <div class="card-body">-->
<!--          <h5 class="card-title">Transparency and Integrity</h5>-->
<!--          <p class="card-text">Transparency and integrity are fundamental values upheld by The Chemicals Ltd., fostering trust and long-term partnerships with pharmaceutical companies seeking reliable indenting services.</p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    
    
<!--  </div>-->
<!--</div>-->
<!--</div>-->

<br>
<br>

<br>
<br>

<!--<div><p style align="center">Overall, The Chemicals Ltd. stands out as a trusted partner for pharmaceutical indenting, offering expertise, reliability, and a customer-centric approach to meet the industry's needs effectively.</p></div>-->

<!--{{-- <div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-6">-->
<!--            <div class="card mb-3" style="max-width: 540px;">-->
<!--                <div class="row g-0">-->
<!--                  <div class="col-md-4">-->
<!--                    <img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Expert-Team-2048x1365.jpg" class="img-fluid rounded-start" alt="...">-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="card-body">-->
<!--                      <h5 class="card-title">Card title</h5>-->
<!--                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->

<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--        </div>-->

<!--        <div class="col-6">-->
<!--            <div class="card mb-3" style="max-width: 540px;">-->
<!--                <div class="row g-0">-->
<!--                  <div class="col-md-4">-->
<!--                    <img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Award-Winning-Team-2048x1365.jpg" class="img-fluid rounded-start" alt="...">-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="card-body">-->
<!--                      <h5 class="card-title">Card title</h5>-->
<!--                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->

<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--      </div>-->
<!--  </div>-->
<!--</div> --}}-->

<!--{{-- <div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-6">-->
<!--            <div class="card mb-3" style="max-width: 540px;">-->
<!--                <div class="row g-0">-->
<!--                  <div class="col-md-4">-->
<!--                    <img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Free-Consultation-2048x1366.jpg" class="img-fluid rounded-start" alt="...">-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="card-body">-->
<!--                      <h5 class="card-title">Card title</h5>-->
<!--                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->

<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--        </div>-->

<!--        <div class="col-6">-->
<!--            <div class="card mb-3" style="max-width: 540px;">-->
<!--                <div class="row g-0">-->
<!--                  <div class="col-md-4">-->
<!--                    <img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Award-Winning-Team-2048x1365.jpg" class="img-fluid rounded-start" alt="...">-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="card-body">-->
<!--                      <h5 class="card-title">Card title</h5>-->
<!--                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->

<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->

<!--        </div>-->

<!--    </div>-->

<!--</div> -->--}}

<!--

<section class="what-make-us-different mb-0"> 
    <div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card" style="width: 45rem;height :40rem;">

                <div class="card-body">
                  <p class="card-text"><div class="detail"><h2>What makes us different</h2>
                  <br>
                  <br>
                    <ul>
                    <li><h6>Our experience in the industry is unparallel.</h6><u></u><u></u></li>
                    <li><h6>We understand the market and its dynamics, technology, finished products, project viability and most importantly the relation between the project and investment.</h6><u></u><u></u></li>
                    <li><h6>Our sincere approach towards our customers and principals.</h6><u></u><u></u></li>
                    <li><h6>Our courage and adaptability to introduce new technology to the industry.</h6><u></u><u></u></li>
                    <li><h6>We believe in strong partnership with our customers and be at their side 24/7.</h6></li>
                    </ul></div>
                </p>
                </div>
              </div>
        </div>

        <div class="col-7 row justify-content-end">
            <div class="card" style="width: 38rem;">
                
                <img src="{{('assets/frontend/deffernt.jpg')}}"  style="width: 600px; height: 500px;" alt="...">

                {{--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-What-Makes-Us-Different-2048x2048.jpg" class="card-img-top" style="width: 600px; height: 700px;" alt="...">--}}

              </div>
        </div>

    </div>
</div>


</section>

-->

<!--{{-- <section class="what-make-us-different mb-0">-->


<!--    <div class="container">-->
<!--        <div class="content">-->

<!--<div class="detail"><h2>What makes us different</h2>-->
<!--<ul>-->
<!--<li>Our experience in the industry is unparallel.<u></u><u></u></li>-->
<!--<li>We understand the market and its dynamics, technology, finished products, project viability and most importantly the relation between the project and investment.<u></u><u></u></li>-->
<!--<li>Our sincere approach towards our customers and principals.<u></u><u></u></li>-->
<!--<li>Our courage and adaptability to introduce new technology to the industry.<u></u><u></u></li>-->
<!--<li>We believe in strong partnership with our customers and be at their side 24/7.</li>-->
<!--</ul></div>-->


<!--{{--<img src="https://khandeen.com/wp-content/uploads/2022/11/Our-Approach-Your-Benefit-Guranteed-Work-2048x2048.jpg"   width="560" height="560" alt="" >--}-->
        
<!--</div>-->
<!--    </div>-->
    
   

<!--</section> --}}-->


<!--<div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-4">-->
<!--            <h2 class="title">-->
<!--            Our-->
<!--            <span class="badge bg-light text-dark">Partners</span></h1>-->
<!--        </h2>-->

<!--    </div>-->
<!--</div>-->
<!--</div>-->





@endsection
