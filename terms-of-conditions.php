<?php include('top_header_url.php');?>
<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='terms'");
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
        <h1 class="sr-only">Terms of service |Nwoow Games</h1>
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
            class="my-5 bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px]">
            <h1 class="leading-7 font-bold mb-6 mt-4">Terms and Conditions</h1>
            <ol class="list-decimal list-inside ml-2">
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2"> Introduction
                </li>
                 <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide p-2">
                    We are Nwoow (“we,” “our,” or “us”). <a href="https://nwoow.com/disclaimer" style="color:red">Nwoow gaming website</a> is bound to these Terms and Conditions. If there is any section that negates your use and access of services with us, kindly do not engage with our services.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2" Eligibility
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Nwoow is accessible to people 13 years and older.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">If users are below 18 years, verifiable consent from parents must be provided.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">With the acceptance of these terms and conditions, it is confirmed that eligibility requirement within this scope is met.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                   User Account and Responsibilities
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Some features require account creation.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">You shall ensure the confidentiality of your login details</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">You accept full responsibility of your account and its activity.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                    Acceptable Use Policy
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">While Nwoow is in use, it becomes your responsibility to Nwoow to:</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Participate in any cheating, hacking, or breaking of rules.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Use slurs or abusive and offensive language in game and chat interactions..</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Harass or interfere with other players.</li>
                     
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                    Virtual Goods and Purchases
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Virtual goods and in-game purchases are accessible on the platform.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Virtual items purchased will not be eligible for refunds and cannot be corrupted to real-world currency.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">We reserve the right to curtail, remove or make restrictive any changes that deal with the ascribed virtual goods.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                   Protection of Intellectual Property
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">The Nwoow brand owns and has licensed all content, images, logos, and game mechanics on the platform.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Modification, distribution, or reproduction of any kind of our platform is strictly prohibited unless consented in writing before hand.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                    Contributions by Users
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Any content you provide, such as chat or gameplay videos, you agree grant us access to a non-exclusive, royalty-free license.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">We reserve the right to delete content uploaded by users that we feel contravenes the guidelines.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                   No Warranty Guarantee
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Nwoow is offered “as is”, and, without warranty of any sort.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Service is uninterrupted and error-free is not guaranteed by us</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Third-party content, advertising and external links are not our responsibility.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                    Zero Liability Claim
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Any and all direct, indirect, incidental, or consequential damages resulting from Nwoow usage are not claim-able by us..</li>
                     <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Our maximum liability is capped at the amount the user has made payments to us for the last 6 months, with no exceptions</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                   Temporary or Permanent Account Suspension
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Users who violate the Terms and Conditions provided are subject to having their accounts suspended or terminated immediately with no warning.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Suspicion of Fraudulent or illegal activity can and will be reported to the appropriate authorities</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                   Modifications to These Terms
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">These Terms and Conditions may be amended at any point in time and at our sole discretion.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">If you continue using Nwoow after the changes, it implies that you have accepted the revised terms. </li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-4 p-2">
                    Contact Info
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide p-2">
                    For any queries or issues related to these Terms and Conditions, do not hesitate to reach out at info@zettamobi.com.
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