<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style>

    .row {
        padding: 0;
        margin: 0;
    }
    

    /* footer css*/

    .footer {
        width: 100%;
        background-color: #C4B4B1;
        
    }
        .footer-copyright{
            width: 100%;
            
            background-color: #8F8188;
            color: black;
        }
            .footer-copyright p{
                text-align: center;
                padding: 10px;
            }

            .footer-copyright a{
                text-decoration: none;
                color: black;
            }
            .footer-copyright a:hover{
                opacity:.6; 
            }

            .footer .links{
                width: 100%;
                background: #C4B4B1;
            }
                
                .footer .links a{
                    align-items: center;
                    color: #000;
                    text-decoration: none;
                }

            .footer .newsletters{
                
                background: #845A54;
            }
    
            .copyright{
                height: 250px;
                background-color: #444444;
            }
            
            #copyright{
                text-align: center;
                color: #a5a5aa;
            }
            
            .subscribe{
                height: 250px;
                background-color: #212529;
            }
            
                .subscribe p{
                    padding: 30px;
                    color: #fff;
                    font-size: 18px;
                }
            
            #email_subscribe{
                margin-left: 30px;
                width: 270px;
                background: #212529;
            }
            
            #slogan{
                margin-top: 30px;
                text-align: center;
                font-size: 20px;
                color: #fff;
            }
            
            .input-group-addon{
                background: #444444;
            }
            
            .fa {
                padding: 15px;
                font-size: 10px;
                width: 10px;
                text-align: center;
                text-decoration: none;
                color: white;
            }
            
                .fa-facebook:hover{
                    color: rgb(54, 54, 179);
                    opacity: 0.6;
                    text-decoration: none;
                }
                
                .fa-twitter:hover{
                    color: rgb(0, 153, 255);
                    opacity: 0.6;
                    text-decoration: none;
                }
                
                .fa-instagram:hover{
                    color: rgb(255, 162, 56);
                    opacity: 0.6;
                    text-decoration: none;
                }
                
                .fa-google:hover{
                    color: rgb(226, 21, 21);
                    opacity: 0.6;
                    text-decoration: none;
                }
            
            .social_icon{
                text-align: center;
                padding: 30px;
            }
            

            #subscribe{
                margin-top: 25px;
            }

</style>
 
 
 
 <!-- footer -->

 <footer class="footer">

<div class="row">
    <div class=" copyright col-sm-7">
            <a href="index.html" style="text-decoration: none; font-family: 'Glegoo', serif;"> <p id="slogan">TRICKY</p></a>

            <!--
                IMAGE LOGO 

                <img src="img/logo/logo_final.jpg" id="img_logo">
            -->                        

            <div class="social_icon">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google"></a>
            </div>
            
            <p id="copyright"> Copyright, all right reserved. Tricky © 2018 </p>
        </div> 

        <div class=" subscribe col-sm-5">
            <p style="font-family: 'Glegoo', serif;">Subscribe to our Newsletter</p>

            <div class="input-group">
                    <input type="text" class="form-control" id="email_subscribe" placeholder="Your email " required="required">        
            </div>      
            <center><button type="button-subscribe" class="btn btn-outline-info" id="subscribe">Subscribe</button> </center>  
            
        </div>
</div>




</footer>