<?php include('top_header_url.php');?>

<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='abouts'");
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
        
        <h1 class="sr-only">About Us | Nwoow Games</h1>
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
            class="my-5 game-banner-container bg-cover bg-no-repeat bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-10 grid justify-center place-item-center rounded-[30px]">
            <div class="gap-4">
                <h2 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4">About Us - Nwoow Games
                </h2>
                <div class="space-y-8">
                    <div>
                        <p class="text-[14px]  font-normal leading-5 tracking-wide">Nwoow is where you go for some of the most immersive <a href="https://nwoow.com/games" style="color:red">gaming experiences</a> on the market. We pride ourselves in giving gamers of all skills the finest content, updates, and even their very own interactive entertainment! </p>
                    </div>
                     <h3 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4">Who We Are</h3>
                     <div>
                        <p class="text-[14px]  font-normal leading-5 tracking-wide">Here at Nwoow, we appreciate the diversity and dynamism of the gaming industry. This is why we have strived hard to create a flexible platform that provides engaging content, the most recent game updates, community participation, and so much more! Be it casual players or competitive gamers- everyone is welcome.</p>
                    </div>
                    <h3 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4">What We Offer</h3>
                     <div>
                        <p class="text-[14px]  font-normal leading-5 tracking-wide">Gaming News & Updates. Stay tuned to the latest in trends, news, and industry happenings.
                        Game Reviews: Authentic and thorough reviews of the most popular games.
                        Tips & Tricks: A guide on ensuring that the most professional methods and tactics are at your disposal.
                        Community Engagement: Meet and talk to other gamers, share experiences and opinions, and be part of the conversations. 
                        </p>
                    </div>
                    <h3 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4">Our Mission</h3>
                     <div>
                        <p class="text-[14px]  font-normal leading-5 tracking-wide">Our mission is to create a gaming hub that allows gamers to discover new games, hone new skills, and keep pace with the changes in the gaming world. Our aim is to position Nwoow as the most preferred platform for anything and everything gaming.</p>
                    </div>
                    <h3 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4">Contact Us</h3>
                     <div>
                        <p class="text-[14px]  font-normal leading-5 tracking-wide">Got an issue or some ideas? We would love to engage with you! Use the email address info@zettmobi.com for every call you want to propose or need comments.At Nwoow everyone can meet and talk about anything and everything gaming related! What are you waiting for? Join us now! 🚀</p>
                    </div>
                </div>
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

   <?php include('footer.php');?>