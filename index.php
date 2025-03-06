<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>
<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only">Play Free Online Games | Free Games - Your Gateway to Gaming Fun</h1>
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
                class="bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px] game-banner-container p-5">
                <div class="w-full flex items-center mb-5">
                    <img src="images/popular_games_icon.svg" alt="Popular Games" class="h-[30px] w-[30px] mr-2" />
                    <h3 class="text-xl text-white tracking-tight font-bold uppercase leading-none flex-none"
                        style="font-weight: bold; background: linear-gradient(176.89deg, #FFFFFF 2.58%, #BEADCD 78.88%); -webkit-background-clip: text; color: transparent; ">
                        Popular Games</h3>
                    <div class="grow"></div>
                </div>
                <div class="grid md:grid-cols-12 grid-cols-4 gap-5 p-4">
                    <?php 
                        $sql="select * from games order by games.id desc limit 4";
                        $res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res)){?>
                    <div class="md:col-span-3 col-span-2">
                        <div class="aspect-[9/16] group relative">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="images/games/<?php echo $row['image']?>" alt="<?php echo $row['name']?>"
                                    class="h-[70px] w-[70px] object-contain animate-spin border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px]">
                            </div>
                            <div class="absolute inset-0">
                                <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                    <img class="h-full w-full object-cover border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px]"
                                        src="images/games/<?php echo $row['image']?>"
                                        alt="<?php echo $row['name']?>" />
                                </a>
                            </div>
                            <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                <div
                                    class="backdrop-blur-sm hidden md:visible absolute inset-0 bg-game-portrait w-full h-full md:flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <img class="group-hover:translate-y-0 translate-y-6 transition-transform duration-300 p-0 mx-auto block aspect-1/1 object-fill w-[50%]"
                                        src="images/games/<?php echo $row['image']?>"
                                        alt="<?php echo $row['name']?>" />
                                    <button
                                        class="animatedPlayBtn group-hover:translate-y-0 translate-y-6 transition-transform duration-300 capitalize bg-light-theme-color font-semibold text-white text-lg rounded-full px-5 py-1">
                                        Play
                                        <i class="fa-regular fa-circle-play"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                        <h3 class="text-white text-center font-semibold pb-4 mt-1"><?php echo $row['name']?></h3>
                    </div>
                     <?php $i++; } ?>
                    
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
        <div class="my-5">
            <div id="recentGamesSection"
                    class="bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px] game-banner-container banner-main p-5">
                    <div class="p-4 w-full flex items-center">
                        <img src="images/recent_games_icon.svg" alt="Recent Games Icon" class="h-[30px] w-[30px] mr-2">
                        <h3 class="text-[24px] tracking-tight text-black font-semibold uppercase flex-none"
                            style="font-weight: bold; background: linear-gradient(176.89deg, #FFFFFF 2.58%, #BEADCD 78.88%);
                            -webkit-background-clip: text; color: transparent;">
                            Recent Play
                        </h3>
                        <div class="grow"></div>
                    </div>
                    <div class="grid md:grid-cols-12 grid-cols-9 mx-4 pb-4 gap-4" id="gamesContainer">
                        <!-- Game items will be appended here dynamically -->
                    </div>
                </div>
                 <script>
                     $(document).ready(function () {
                        let storedGameIds = JSON.parse(localStorage.getItem("game_ids")) || [];
                    
                        if (storedGameIds.length === 0) {
                            $("#recentGamesSection").hide(); // Hide section if no stored game IDs
                            return;
                        }
                    
                        $.ajax({
                            url: "fetch_games.php",
                            type: "GET",
                            data: { game_ids: storedGameIds.join(",") }, // Send game IDs as a comma-separated string
                            dataType: "json",
                            success: function (response) {
                                if (response.length > 0) {
                                    response.forEach(game => {
                                        let gameHTML = `
                                            <div class="md:col-span-2 col-span-3">
                                                <a href="view-game.php?game_id=${game.id}">
                                                    <div class="group relative">
                                                        <img src="images/games/${game.image}" 
                                                            class="w-full object-cover rounded-lg aspect-square transition-transform scale-1 hover:scale-105" 
                                                            alt="${game.name}">
                                                    </div>
                                                </a>
                                            </div>
                                        `;
                                        $("#gamesContainer").append(gameHTML);
                                    });
                                } else {
                                    $("#recentGamesSection").hide();
                                }
                            },
                            error: function () {
                                console.error("Failed to fetch games.");
                                $("#recentGamesSection").hide();
                            }
                        });
                    });

                 </script>
          </div>

        <div class="my-5">
            <div
                class="bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px] game-banner-container banner-main hidden p-5">
            </div>
        </div>

        <div class="my-5">
            <div
                class="bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 rounded-[30px] game-banner-container p-5">
                <div class="w-full flex items-center mb-5">
                    <img src="images/all_games_icon.svg" alt="All games" class="h-[30px] w-[30px] mr-2" />
                    <h3 class="text-[24px] tracking-tight font-extrabold text-black uppercase flex-none"
                        style="background: linear-gradient(176.89deg, #FFFFFF 2.58%, #BEADCD 78.88%); -webkit-background-clip: text; color: transparent;">
                        All Games</h3>
                    <div class="grow"></div>
                    <a class="text-[14px]  text-black font-bold capitalize" href="games.php"
                        style="background: linear-gradient(180deg, #FFFFFF, #BEADCD); -webkit-background-clip: text; color: transparent;">view
                        all </a>
                    <img src="images/right-arrow.svg" class="text-[14px]  text-black font-normal leading-[14px] h-5 w-5"
                        alt="right arrow">
                </div>
                <div class="grid md:grid-cols-12 grid-cols-4 gap-4 p-4" id="all-games-list">
                     <?php 
                        $sql="select * from games order by games.id desc";
                        $res=mysqli_query($con,$sql);
						$i=1;
						while($row=mysqli_fetch_assoc($res)){?>
                    <div class="md:col-span-3 col-span-2">
                        <div class="group relative w-full aspect-[16/9]">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="images/games/<?php echo $row['image']?>" alt="Loading..."
                                    class="h-[40px] w-[40px] object-contain animate-spin">
                            </div>
                            <div class="absolute inset-0">
                                <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                    <img src="images/games/<?php echo $row['image']?>"
                                        class="h-full w-full object-cover border-[#D09DF9] border-[1px] border-opacity-30 rounded-lg" alt="<?php echo $row['name']?>" />
                                </a>
                            </div>
                            <a href="view-game.php?game_id=<?php echo $row['id']?>">
                                <div
                                    class="backdrop-blur-sm hidden md:visible bg-game-landscape absolute inset-0 md:flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <img class="-mt-1 group-hover:translate-y-0 translate-y-6 transition-transform duration-300 p-0 mx-auto block aspect-1/1 object-fill w-[30%]"
                                        src="images/games/<?php echo $row['image']?>"
                                        alt="<?php echo $row['name']?>" />
                                    <button
                                        class="animatedPlayBtn group-hover:translate-y-0 translate-y-6 transition-transform duration-300 capitalize bg-light-theme-color font-semibold text-white rounded-full px-5 py-1">
                                        Play
                                        <i class="fa-regular fa-circle-play"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                        <h3 class="text-white text-center font-semibold pl-2 pb-4 mt-1"><?php echo $row['name']?></h3>
                    </div>
                         <?php $i++; } ?>
                </div>
            </div>
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