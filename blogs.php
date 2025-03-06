<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>

<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only">Read interesting games articles | Free Games</h1>
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-1">
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-1');
                    });
                </script>
            </div>
        </div>
        <div class="my-5">
            <div
                class="bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px] bg-cover bg-no-repeat game-banner-container p-5">
                <div class="w-full flex items-center mb-5">
                    <img src="images/blog_icon.svg" alt="All games" class="h-[30px] w-[30px] mr-2" />
                    <h3 class="text-[24px] tracking-tight text-white font-extrabold uppercase flex-none"
                        style="background: linear-gradient(180deg, #FFFFFF, #BEADCD); -webkit-background-clip: text; color: transparent;">
                        Blogs</h3>
                </div>
                <div class="flex flex-wrap gap-3 px-[0.3rem]">
                    <!--dynamically code -->
                    <?php 
                         $sql="select * from blogs order by blogs.id desc";
                        $res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res)){?>
                            <div class="p-5 w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] text-white mb-3">
                                <a href="blog_details.php?blog_id=<?php echo $row['id'];?>"
                                    class="block"
                                    aria-label="unlock-extra-revenue-how-app-developers-and-website-owners-can-monetize-with-jambo-games">
                                    <img src="images/blogs/<?php echo $row['image1']?>"
                                        class="w-full rounded-xl object-cover transition-transform scale-1 hover:scale-105"
                                        alt="<?php echo $row['title']?>" />
                                </a>
                                <a href="blog_details.php?blog_id=<?php echo $row['id'];?>"
                                    class="no-underline block"
                                    aria-label="<?php echo $row['title']?>">
                                    <p class="truncate cursor-pointer px-2 pt-2 font-semibold"><?php echo $row['title']?></p>
                                </a>
                                <p class="line-clamp-2 mb-1 text-[#736B7A] px-2 font-light text-sm"><?php echo $row['description']?></p>
                                <span class="px-2 mb-2 font-medium text-2xs block text-[#D09DF9]">
                                    <i class=" fa-sharp fa-solid fa-calendar-days pr-2"></i><?php echo $row['datee']?>
                                </span>
                            </div>
                        <?php $i++; } ?>
                    <!--dynamically code -->
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