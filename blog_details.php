<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>
<?php
$blog_id =$_GET['blog_id'];
$query = "select * from blogs where id=$blog_id";
$res = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($res);

?>
<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only">Why Jambo Games Are the Best Place to Play 100% Free HTML5 Games | Jambo Games</h1>
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
            class="text-white my-5 game-banner-container bg-cover bg-no-repeat bg-[#261137] border-[1px] border-[#D09DF9] border-opacity-30 py-[3rem] px-7  justify-center item-center rounded-[30px]">
            <img src="images/blogs/<?php echo $result['image1']?>"
                alt="<?php echo $result['title']?>"
                class="w-full object-cover aspect-[3/2] rounded-lg mb-3">
            <h1 class="font-bold text-3xl uppercase"><?php echo $result['title']?>
            </h1>
            <span class="text-[#D09DF9] mt-2 mb-5 font-light text-xs"><i
                    class="my-2 fa-sharp fa-solid fa-calendar-days pr-2"></i><?php echo $result['datee']?></span>
            <article class="text-white prose px-2 w-full" id="blog-content">
                <p><?php echo $result['description']?></p>
            </article>
        </div>
        <div
            class="my-5 game-banner-container text-white bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 justify-center rounded-[30px]">
            <div
                class="bg-[#261137] w-full border-[#D09DF9] border-opacity-30 rounded-[30px] bg-cover bg-no-repeat game-banner-container p-5">
                <div class="w-full flex items-center mb-3">
                    <h3 class="text-2xl font-semibold">Similar Blogs</h3>
                    <div class="grow"></div>
                    <a class="text-[14px] font-normal leading-[14px] capitalize" href="blogs.php">view all </a>
                    <img src="images/right-arrow.svg" class="text-[14px] font-normal h-5 w-5" alt="right arrow">
                </div>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-4 px-[0.3rem]">
                    <!--dynamically code -->
                     <?php 
                         $sql="select * from blogs order by blogs.id desc";
                        $res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res)){?>
                    <div class="flex flex-col p-2 rounded-lg">
                        <a href="blog_details.php?blog_id=<?php echo $row['id'];?>"
                            class="aspect-[3/2]">
                            <img src="images/blogs/<?php echo $row['image1']?>"
                                class="rounded-xl object-cover transition-transform scale-1 hover:scale-105"
                                alt="<?php echo $row['title']?>" />
                        </a>
                        <a href="blog_details.php?blog_id=<?php echo $row['id'];?>"
                            class="no-underline"
                            aria-label="<?php echo $row['title']?>">
                            <p class="truncate cursor-pointer px-2 pt-2 font-semibold"><?php echo $row['title']?></p>
                        </a>
                        <a href="blog_details.php?blog_id=<?php echo $row['id'];?>"
                            aria-label="Similar blogs read more" class="">
                            <p class="text-[#736B7A] line-clamp-2 px-2 mb-1 font-light text-sm"><?php echo $row['description']?></p>
                        </a>
                        <span class="text-[#D09DF9] px-2 mb-2 font-medium text-xs">
                            <i class="fa-sharp fa-solid fa-calendar-days pr-2"></i><?php echo $row['datee']?>
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