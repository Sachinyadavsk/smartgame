<?php include('top_header_url.php');?>
<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='privacy'");
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
        <h1 class="sr-only">Privacy Policy |Nwoow Games</h1>
        <div
            class="my-5 bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px]">
            <h2 class="leading-7 font-bold mb-6 mt-4">Privacy Policy for Nwoow</h2>
            <h3 class="font-bold leading-7">Effective Date:</h3>
            <p class="text-[16px] font-normal leading-7 mb-6 mt-4">Welcome to Nwoow. Your privacy is very important to us which is why we work hard to protect the personal information shared while you use our gaming platform. This Privacy Policy describes how we gather, employ, reveal, and protect your data whenever you visit Nwoow. 
            <br><br>
            Nwoow can be accessed used by browsing over the internet. Using the <a href="https://nwoow.com/terms-and-conditions" style="color:red">webpage means</a> that the user is consenting to the regulations and clauses stated in this policy. If this is not agreeable to you, we advice refraining from utilizing our services. 
            </p>
            <ol class="list-decimal list-inside ml-2">
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2"> Information We Collect </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[10px]"> We may collect the
                  When you use Nwoow, we may collect the following types of information: <br /><br /></p>
                  <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2"> Personal Information </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Name</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Email address.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Username and profile details</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Payment and billing details (if applicable)</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Contact information for support requests</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">Non-Personal Information</li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">IP address.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Browser type and version.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Device type and operating system.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Movie and game preferences and their interactions</li>
                     <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Usage data （pages visited, time spent on the page, ex）</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">Cookies And Tracking Technologies</li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Like most websites, Nwoow uses cookies (small pieces of data that a website sends to the user’s computer while they browse), pixels and similar technologies that will enable us improve on the gaming experience, carry out site analysis, and offer personalized content. Settings on cookie management can be tailored to individual preferences in the web browser of the user.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">The Purpose of Your Information Collection</li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">The information gathered is utilized for the following objectives:</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">For the provision and improvement of gaming services on Nwoow</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">To facilitate secure payment and transaction processing.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">To customize user experience and game suggestions</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">To improve customer service and resolve issues</li>
                    
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">To maintain security on the platform and mitigate fraud attempts</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">To study gaming habits and enhance our services</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">To deliver essential messages and offers (you can unsubscribe at any time) </li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    The Disclosure of Your Information
                </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Your private details will never be sold or exchanged. Nonetheless, we might disclose your information in the following situations: 
                    <br>
                    <b>To Service Providers:</b> Hosting, analytics, payment processors, and customer support vendors. <br>
                    <b>For Legal:</b> Obligations when required by law or to uphold the rights or safety of users and the platform, or both. <br>
                    <b>For Business:</b> If Nwoow gets bought out, merged, or transitions businesses, then user data will be sold as part of the assets. <br>

                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Services and Websites from Other Parties 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Nwoow is an external advertisement and gaming service which contains third party links. We do not answer to the external sites privacy policies. Users are advised to study the individual engagement policies prior to use.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Data Security
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    We protect the user data from access, loss, or misuse through the application of security measures. To some extent, any online platform is not secure. Users should take measures like using a strong password to minimize risks at their end.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Your Privacy Rights
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    Users may be entitled to the following privacy related rights depending on their area of residence: 
                    <br>
                    <b>Access:</b> Obtain a copy of the individual’s data that has been collected by us.<br>
                    <b>Correction:</b> Change or modify your account profile.<br>
                    <b>Deletion:</b> Initiate Request for deletion of data with certain legal obligations.<br>
                    <b>Opt-Out:</b> Refrain from receiving marketing emails and disable tracking cookies<br>

                  In case you wish to exercise these rights, please get in touch with us via email at info@zettamobi.com

                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                   Children’s Privacy
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   Nwoow is not for use by children younger than 13 years of age, or the minimum age someone is allowed to use Nwoow in a particular region. To the best of our knowledge, we do not hold any information concerning children under the age of eighteen. Once we learn that such information is captured, we will delete the information.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                   Changes to This Privacy Policy
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   This Privacy Policy may be amended from time to time at our sole discretion. Changes will always be on this page with an updated effective date. By continuing to access Nwoow after such changes being made, you accept the new terms outlined in this policy.
                </p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                   Get in Touch 
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                  For any inquiries, worries or anything regarding privacy, feel free to reach us at: 
                       <br>
                    📧 Email: info@zettamobi.com  <br>
                    🌐 Website: https://nwoow.com/  <br>
                     
                    We appreciate your preference for Nwoow. Enjoy your gaming experience!

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