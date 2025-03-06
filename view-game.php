<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>
<?php
$game_id =$_GET['game_id'];
$query = "select * from games where id=$game_id";
$res = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($res);

?>
<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only"><?php echo $result['name'];?>- Play online games for Free | Free Games</h1>
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
            class="my-5 game-banner-container bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px]">
            <div class="flex flex-col justify-center items-center gap-4">
                <a href="play-game.php?play_id=<?php echo $result['id']?>">
                    <img src="images/games/<?php echo $result['image']?>"
                        alt="<?php echo $result['name'];?>" class="w-96 object-cover aspect-video rounded-2xl">
                </a>
                <h1 class="font-bold text-3xl uppercase text-white"><?php echo $result['name'];?></h1>
                <a href="play-game.php?play_id=<?php echo $result['id']?>"
                    class="animatedPlayBtn uppercase bg-[#7008C5] font-semibold text-white text-md rounded-full w-48 p-3 text-center"
                    type="button">
                    Play Now
                    <i class="fa-regular fa-circle-play"></i>
                </a>
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
        <div id="game-content"
            class="my-5 game-banner-container text-white bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 py-[3rem] rounded-[30px]">
            <article class="prose w-full px-7 max-w-none text-white">
                <p><?php echo $result['short_desc'];?></p>
            </article>
        </div>
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-3">
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-3');
                    });
                </script>
            </div>
        </div>
        <div
            class="my-5 game-banner-container bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 grid rounded-[30px]">
            <div class="w-full rounded-[30px] bg-cover bg-no-repeat game-banner-container p-5">
                <div class="w-full flex items-center mb-3">
                    <img src="images/similar_games_icon.svg" alt="All games" class="h-[30px] w-[30px] mr-2" />
                    <h3 class="text-[24px] tracking-tight text-black font-semibold uppercase flex-none"
                        style="font-weight: bold; background: linear-gradient(176.89deg, #FFFFFF 2.58%, #BEADCD 78.88%); -webkit-background-clip: text; color: transparent;">
                        Similar Games</h3>
                    <div class="grow"></div>
                    <a class="text-[14px]  text-black font-normal capitalize" href="games.php"
                        style="background: linear-gradient(180deg, #FFFFFF, #BEADCD); -webkit-background-clip: text; color: transparent;">view
                        all </a>
                    <img src="images/right-arrow.svg" class="text-[14px]  text-black font-normal h-5 w-5"
                        alt="right arrow">
                </div>


                <div class="grid md:grid-cols-12 grid-cols-4 gap-5 p-4">
                    <!--dynamically code -->
                    <?php 
                        $sql="select * from games order by games.id asc limit 4";
                        $res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res)){?>
                    <div class="md:col-span-3 col-span-2">
                        <div class="aspect-[9/16] group relative w-full">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="images/games/<?php echo $row['image']?>" alt="<?php echo $row['name']?>"
                                    class="h-[50px] w-[50px] object-contain animate-spin-slow">
                            </div>
                            <div class="absolute inset-0">
                                <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                    <img class="h-full w-full object-cover border-[#D09DF9] border-[1px] border-opacity-30 rounded-lg"
                                        src="images/games/<?php echo $row['image']?>"
                                        alt="<?php echo $row['name']?>" />
                                </a>
                            </div>
                            <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                <div
                                    class="backdrop-blur-sm hidden md:visible bg-game-portrait absolute inset-0 w-full h-full md:flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <img class="group-hover:translate-y-0 translate-y-6 transition-transform duration-300 p-0 mx-auto block aspect-1/1 object-fill w-[50%]"
                                        src="images/games/<?php echo $row['image']?>"
                                        alt="<?php echo $row['name']?>" />
                                    <button
                                        class="animatedPlayBtn group-hover:translate-y-0 translate-y-6 transition-transform duration-300 capitalize bg-[#7008C5] font-semibold text-white text-lg rounded-full px-5 py-1">
                                        Play Now
                                        <i class="fa-regular fa-circle-play"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                        <h3 class="text-white text-center font-medium pl-2 pb-4 mt-1"><?php echo $row['name']?></h3>
                    </div>
                    <?php $i++; } ?>
                    <!--dynamically code -->
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center my-5">
            <div class="w-full" id="static-ad-4">
                <script>
                    googletag.cmd.push(function () {
                        googletag.display('static-ad-4');
                    });
                </script>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>