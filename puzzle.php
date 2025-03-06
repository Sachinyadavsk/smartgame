<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>
<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only">Browse Exciting Game Categories | Free Games</h1>
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
                class="bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px] bg-cover bg-no-repeat game-banner-container p-8">
                <div class="w-full flex items-center mb-5">
                    <img src="images/all_games_icon.svg" alt="All games" class="h-[30px] w-[30px] mr-2" />
                    <h3 class="text-[24px] tracking-tight text-black uppercase flex-none"
                        style="font-weight: bold; background: linear-gradient(176.89deg, #FFFFFF 2.58%, #BEADCD 78.88%); -webkit-background-clip: text; color: transparent;">
                        Puzzle</h3>
                    <div class="grow"></div>
                    <a class="text-[14px]  text-black font-bold capitalize" href="games.php"
                        style="background: linear-gradient(180deg, #FFFFFF, #BEADCD); -webkit-background-clip: text; color: transparent;">view
                        all </a>
                    <img src="images/right-arrow.svg"
                        class="text-[14px]  text-black font-normal leading-[14px] h-5 w-5" alt="right arrow">
                </div>
                <div class="">
                    <div class="grid md:grid-cols-12 grid-cols-4 gap-4 p-4">
                        <?php 
                        $sql="select * from games where type='puzzle' order by games.id desc";
                        $res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res)){?>
                        <div class="md:col-span-4 col-span-2 aspect-4/3 p-0 m-0">
                            <div class="rounded-lg p-0 m-0">
                                <div class="group relative w-full aspect-[4/3]">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="images/games/<?php echo $row['image']?>" alt="<?php echo $row['name']?>"
                                            class="h-[60px] w-[60px] object-contain animate-spin">
                                    </div>
                                    <div class="absolute inset-0">
                                        <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                            <img class="p-0 m-0 rounded-md block aspect-4/3 object-cover w-full" src="images/games/<?php echo $row['image']?>" alt="<?php echo $row['name']?>" />
                                        </a>
                                    </div>
                                    <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                        <div
                                            class="backdrop-blur-sm hidden md:visible bg-game-4-3 absolute inset-0 md:flex flex-col gap-4 items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                            <img class="group-hover:translate-y-0 translate-y-6 transition-transform duration-300 p-0 mx-auto block aspect-1/1 object-fill w-[40%]"
                                                src="images/games/<?php echo $row['image']?>"
                                                alt="<?php echo $row['name']?>" />
                                            <button
                                                class="animatedPlayBtn group-hover:translate-y-0 translate-y-6 transition-transform duration-300 capitalize bg-[#7008C5] bg-opacity-90 font-semibold text-white text-lg rounded-full px-5 py-1">
                                                Play
                                                <i class="fa-regular fa-circle-play"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <h3 class="mt-2 text-[15px] text-center text-white font-semibold capitalize leading-[14px]"><?php echo $row['name']?></h3>
                                </div>
                            </div>
                        </div>
                        <?php $i++; } ?>
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