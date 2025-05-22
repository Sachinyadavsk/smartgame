<?php include('top_header_url.php');?>
<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='fags'");
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
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-1">
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-1');
                    });
                </script>
            </div>
        </div>
        <h1 class="sr-only">FAQs – Nwoow Gaming</h1>
        <div
            class="my-5 bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px]">
            <h2 class="leading-7 font-bold mb-6 mt-4">FAQs – Nwoow Gaming</h2>
            <p class="text-[16px] font-normal leading-7 mb-6 mt-4">Welcome to Nwoow Gaming! To get in touch, send us an email at info@zettamobi.com Sorry for the long wait, here are the most important questions about our gaming platform, features, and support presented in the easiest way to understand.</p>
            <ol class="list-decimal list-inside ml-2">
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                     General Questions 
                </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   Everyone wants to know, what is Nwoow Gaming? Well, Nwoow is an <a href="https://nwoow.com/contact-us" style="color:red">innovative online gaming platform</a> that has action games,
                   strategy games, puzzles, multiplayer games, and more. Doesn’t matter if you are a casual or a professional gamer,
                   we have the perfect gaming experience for you.  Is Nwoow free to play? Of course! At Nwoow we offer many free-to-play titles.
                   You have the option to purchase some premium content or make in-game purchases, but it is completely up to you. 
                   Do I need to create an account to play? To play many of our games, you won’t need an account. But registering provides 
                   a plethora of exclusive benefits such as progress tracking, feature access, and more</p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Account & Security 
                </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   How do I create an account on Nwoow? To begin gaming on Nwoow click the “sign up” button on our homepage, fill in the required details, and verify your email. That's it!

                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                 I’ve lost my password and would like to know how to regain it.
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                 Click on the "Forgot Password" button on the login screen and follow the instructions. You will receive a password reset email at your registered email address.

                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                   What can I do to make my Nwoow account more secure?
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                  Choose a strong password, enable two-factor authentication if possible, and always keep your login credentials to yourself.
                </p>
                <h2 class="leading-7 font-bold mb-6 mt-4">Gaming & Features</h2>
                      <hr>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                  What categories of games does Nwoow offer? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   We have a variety of games as seen below: Action and Adventure, Racing and Sports, Puzzle and Strategy, and Multiplayer Online Games.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Is it possible to play Nwoow games using a mobile device? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   Yes, Nwoow games can be played on both desktops and mobile devices
                </p>
                 <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                  Are multiplayer games supported? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                  Yes! Our games support multiplayer modes so you can enjoy playing with friends or other gamers all over the world.
                </p>
                <h2 class="leading-7 font-bold mb-6 mt-4">4. Payments & Purchases</h2>
                <hr>
                 <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Do you offer in game purchases on Nwoow? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Yes, some games come with optional in-game purchase features such as upgrades, skins, or other premium features.
                </p>
                 <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                     Which payment options do you accept? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    We accept several payment options such as credit and debit cards, PayPal, and other digital wallets depending on your area.
                </p>
                 <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                     Can I have my money back for a purchase I made?
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Each game has its own refund policy. Check the particular game's page for details or email info@zettamobi.com for help. 
                </p>
                <h2 class="leading-7 font-bold mb-6 mt-4">5.Technical Support & Troubleshooting </h2>
                <hr>
                  <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    The game is stuck on the loading screen. What can I do? 

                </li>
                <p class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[10px]">Try any of these suggestions: </p>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Refresh or close and reopen your browser. </li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Delete your cache and cookies</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Make sure you have good internet connection.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Make sure that your browser is up to date or use a different one. </li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                     The game keeps freezing. What can I do to stop it? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Lower the graphics settings (if possible), quit other applications, and test your connection's speed. 
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    How do I submit a report of a technical error? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Kindly direct your technical difficulties to info@zettamobi.com and provide as much detail as possible including any visual aids you may have. We will endeavor to help you as quickly as we can
                </p>
                <h2 class="leading-7 font-bold mb-6 mt-4">6. Community & Support </h2>
                <hr>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                     How do I get involved with the Nwoow gaming community? 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Eager gamers can keep an eye out for our releases on social media, forums, and our events.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                     Where can I send my questions or issues regarding Nwoow's products?  
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   You may send your inquiries and observations to info@zettamobi.com.
                   <br>
                   
                   We hope this FAQ section helps answer pretty much anything you have about Nwoow Gaming. Happy gaming! 🎮🚀

                </p>
                
            </ol>
        </div>
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-2">
                <script data-cfasync="false"
                    src="#"></script>
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-2');
                    });
                </script>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>