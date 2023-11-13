 <!-- Header-->
 <div style="display: flex; justify-content: space-between; align-items: center; font-family: Poppins, sans-serif; margin-top: 10px;">
    <div>
        <p style="color: blue; font-size: 24px; margin: 10px;">TOMS</p>
    </div>
    
    <nav style="margin: 10px;">
        <a style="text-decoration: none; color: black; font-size: 18px; margin: 10px;" href="">Home</a>
        <a style="text-decoration: none; color: black; font-size: 18px; margin: 10px;" href="">About</a>
        <a style="text-decoration: none; color: black; font-size: 18px; margin: 10px;" href="/traffic_offense/report-offense.php">Make a report</a>
        <a style="text-decoration: none; color: black; font-size: 18px; margin: 10px;" href="/traffic_offense/make-payment.php">Pay fines</a>
        <a style="text-decoration: none; color: black; font-size: 18px; margin: 10px;" href="">Contact us</a>
</nav>
 </div>   
 

    
<div class="container px-4 px-lg-5 my-5" style="font-family: Poppins;">
        <div class="text-black" style="display: flex; justify-content: space-between; align-items: center;">
            <div  style="margin-top: 15px;">
                <h1 class="display-4 fw-bolder">Traffic Offense <br>Management System</h1>
                <p  style="font-size: 18px;">These comprehensive software solutions provide a centralized platform <br>for managing traffic offenses, streamlining processes, enhancing <br>enforcement, and improving overall road safety.
                </p>
                <p class="lead fw-normal text-white-50 mb-0 mt-4"><a class="btn btn-default btn-lg bg-lightblue" href='<?php echo base_url.'admin/login.php' ?>'>Log in</a></p>
                
                
            </div>
            <img src="/traffic_offense/traffic.jpg" alt="" style="width:400px; height: 400px; border: 1px solid transparent; border-radius: 15px; margin-left: 30px;">
            <div>
                
            </div>
        </div>
    </div>

<!-- Section-->
<style>
    .book-cover{
        object-fit:contain !important;
        height:auto !important;
    }
</style>
<section class="py-3">
    <div class="container px-4 px-lg-5 mt-5">
        <?php require_once('about.html') ?>
    </div>
</section>

