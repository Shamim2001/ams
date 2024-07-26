@extends('frontend.layout.app')

@section('content')
    <style>
        .banner-image {
            height: 400px;
            /* Adjust height as needed */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .banner-content {
            position: absolute;
            top: 50%;
            left: 20px;
            /* Adjust left positioning as needed */
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
            font-size: 3rem;
            /* Adjust font size as needed */
        }

        .banner-content p {
            font-size: 5rem;
            /* Adjust font size as needed */
            margin-top: 20px;
            color: #ffffff;
        }

        .title-part {
            max-width: 920px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding-bottom: 40px;

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
    </style>

    <div class="container-fluid p-0">
        <div class="banner-image"
            style="background-image: url('https://khandeen.com/wp-content/uploads/2022/12/Membership-_-Certification-Banner-1-e1670750674142.png');">
            <div class="banner-content">
                <h1>About Us</h1>
                <p>Our Certification </p>
            </div>
        </div>
    </div>
   
  
    <br>
    <br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="card mb-1" style="max-width: 900px;">
                <div class="row ">
                    
                    <div class="card-body">
                                            <h3 class="card-title" align="center">Our memberships & certifications </h3>
                     </div>
                                   
                    <div class="col-3">
                        <div class="card ">
                           
                                   
                                   
                                  
                                    <div class="row">
                                            <div class="col-md-3 offset-md-2">
                                                 <img src="{{('assets/frontend/certificate.jpg')}}"  style="width: 800px; height: 700px;" alt="...">
                                
                                          </div>
                                    </div>
                                    
                                    
                                    
                            
                        </div>
                    </div>
                
                    
                    
                </div>
            </div>


        </div>
    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
    


@endsection
