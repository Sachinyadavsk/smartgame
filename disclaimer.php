<?php include('top_header_url.php');?>
<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='disclaimer'");
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
        <h1 class="sr-only">Disclaimer |Nwoow Games</h1>
        <div
            class="my-5 bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px]">
            <h2 class="leading-7 font-bold mb-6 mt-4">Disclaimer for Nwoow</h2>
            <ol class="list-decimal list-inside ml-2">
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">Introduction </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[10px]"> Welcome to Nwoow! This website provides <a href="https://nwoow.com/faq" style="color:red">gaming-related content</a>, including news, reviews, guides, and other gaming-related information. By accessing and using this website, you acknowledge and agree to the terms outlined in this disclaimer. <br /><br /></p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">General Information </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[10px]"> The content on Nwoow is for informational and entertainment purposes only. While we strive to provide accurate and up-to-date information, we do not make any guarantees regarding the completeness, accuracy, or reliability of any content available on this site.<br /><br /></p>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">Gaming Content and Responsibility</li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Nwoow is not responsible for any
                    losses, damages,or issues arising from the use of information provided on this website.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">The gaming tips, strategies, and recommendations shared on this site are
                    based on personal opinions and experiences. Individual gaming experiences may vary..</li>
                     <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">We do not promote gambling, illegal gaming practices, 
                     or any form of unethical behavior related to gaming.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">External Links Disclaimer</li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Our website may contain links to third-party websites for additional gaming-related resources or advertisements. We do not control or endorse the content of these external sites and are not responsible for any issues that may arise from visiting them</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Users should exercise caution and review the terms and policies of any third-party website they visit through links provided on Nwoow.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">Intellectual Property Rights</li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">All content, including text, images, logos, and graphics on Nwoow, is the property of our website unless otherwise stated. Unauthorized use, reproduction, or distribution of our content is strictly prohibited.</li>
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">Any third-party trademarks or copyrighted content displayed on this website belong to their respective owners.</li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Limitation of Liability
                </li>
                <ul class="list-disc">
                    <li class="text-[14px] font-normal leading-7 capitalize tracking-wide ml-[20px]">
                        Nwoow and its team are not responsible for any errors, technical issues, or interruptions that may affect your access to the website
                    </li>
                    <li class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                       We do not guarantee that the website will always be available, error-free, or free from security vulnerabilities.
                    </li>
                </ul>
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Changes to This Disclaimer
                </li>
                <p class="text-[14px]  font-normal leading-7 capitalize tracking-wide ml-[20px]">
                    We reserve the right to update or modify this disclaimer at any time without prior notice. Users are encouraged to review this page periodically for any changes.
                </p>
               
                <li class="text-[24px] tracking-wide  font-semibold capitalize leading-7 mb-6 mt-6 p-2">
                    Contact Information
                </li>
                <p class="text-[14px]   font-normal leading-7 capitalize tracking-wide ml-[20px]">
                   If you have any questions or concerns regarding this disclaimer, you can contact us at:
                    📧 Email: info@zettamobi.com
                    By using Nwoow, you agree to the terms and conditions outlined in this disclaimer. If you do not agree with any part of this disclaimer, please discontinue the use of our website.
                     <a
                        class="lowercase"
                        href="#"><span
                            class="__cf_email__"
                            data-cfemail="c1b2b4b1b1aeb3b581aba0aca3aea6a0aca4b2efa8ae">[email&#160;protected]</span></a>.
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