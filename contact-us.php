<?php include('top_header_url.php');?>
<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='contacts'");
    $cat_arr4=array();
    while($row4=mysqli_fetch_assoc($cat_res4)){
    $cat_arr4[]=$row4;    
    }
    foreach($cat_arr4 as $list){
      echo htmlspecialchars_decode($list['data']);
     }?>
<?php include('bottam_header_url.php');?>

<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only">Contact Us | Nwoow Games</h1>
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-1">
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-1');
                    });
                </script>
            </div>
        </div>
        <div
            class="my-5 game-banner-container bg-cover bg-no-repeat bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px] min-h-[80vh]">
            <div class="my-auto">
                <h2 class="text-5xl text-center tracking-wide font-bold capitalize my-4">Contact Us – Nwoow Gaming</h2>
                <p class="text-[14px] text-[#D09DF9] text-center font-normal leading-5 tracking-wide">We would be thrilled to hea
                r from you! Facing issues, have some questions, or just need feedback? Reach out to the <a href="https://nwoow.com/about-us" style="color:red">Nwoow Gaming </a> 
                team, and we will help you out.</p>
                <h2  class="text-3xl text-center tracking-wide font-bold capitalize my-4">Get in Touch</h2>
                <p lass="text-[14px] text-[#D09DF9] text-center font-normal leading-5 tracking-wide">If you wish to inquire on gaming content, experience technical difficulties, 
                or wish to establish a partnership, reach out to us using the contact information below. 📧 info@zettamobi.com <span onclick="myFunction()" >Read More </span> </p>
                <div id="myDIV" style="display:none">
                    <h3>Why Reach Out?</h3>
                    <p><b>Game Support:</b> Encountering an issue while playing? Let us solve it for you!</p>
                    <p><b>Feedback & Suggestions:</b> We would like to hear from you so we can improve our platform. Constructive feedback is always welcomed. </p>
                    <p><b>Partnerships & Collaborations:</b> Would you like to work alongside us? If yes, then let's get in contact.  </p>
                    <p><b>General Inquiries:</b>  If you have some query then we are here to assist you. </p>
                    <br>
                    <p>Our amazing Nwoow team is here to provide the best gaming experience possible, that is why we are always ready to assist.
                    Send us a message and you will hear back from us shortly.</p>

                </div>
                <form method="post" id="contact_us_form" onsubmit="">
                    <div class="space-y-2 pt-2">
                        <div class="">
                            <input type="text"
                                class="bg-[#210E31] border-[#8861A8] w-full p-2 my-1 border-2 rounded-lg outline-none"
                                id="name" name="name" placeholder="Enter Name">
                            <input type="text"
                                class="bg-[#210E31] border-[#8861A8] w-full p-2 my-1 border-2 rounded-lg outline-none"
                                id="email" name="email" placeholder="Enter Email">
                        </div>
                        <textarea rows="4" class="bg-[#210E31] border-[#8861A8] w-full p-2 rounded-lg outline-none"
                            id="message" name="message" placeholder="Your message..."></textarea>
                        <div class="flex items-center justify-center">
                            <button id="contactUsSubmitBtn"
                                class="transition-transform scale-1 hover:scale-105 uppercase bg-[#7008C5] py-2 font-semibold text-white text-lg rounded-full w-44"
                                type="submit">
                                Submit
                            </button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-2">
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-2');
                    });
                </script>
            </div>
        </div>
       
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
   </script>
    <?php include('footer.php');?>