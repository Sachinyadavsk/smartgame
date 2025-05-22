<?php include('top_header_url.php');?>
<?php                                                                                                               
    $cat_res4=mysqli_query($con,"select * from meta_data where page='home'");
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
        <h1 class="sr-only">Play Free Online Games | Nwoow Games - Your Gateway to Gaming Fun</h1>
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
                    <img src="images/all_games_icon.svg" alt="All games" class="h-[30px] w-[30px] mr-2" />
                    <h3 class="text-[24px] tracking-tight font-extrabold text-black uppercase flex-none"
                        style="background: linear-gradient(176.89deg, #FFFFFF 2.58%, #BEADCD 78.88%); -webkit-background-clip: text; color: transparent;">
                        Search Results Games</h3>
                    <div class="grow"></div>
                    <a class="text-[14px]  text-black font-bold capitalize" href="games"
                        style="background: linear-gradient(180deg, #FFFFFF, #BEADCD); -webkit-background-clip: text; color: transparent;">view
                        all </a>
                    <img src="images/right-arrow.svg" class="text-[14px]  text-black font-normal leading-[14px] h-5 w-5"
                        alt="right arrow">
                </div>
                <div class="grid md:grid-cols-12 grid-cols-4 gap-4 p-4" id="all-games-list">
                     <?php 
                            if (isset($_POST['search_data'])) {
                            $search = $_POST['search'];
                        
                            // Run query to get matching data
                            $sql = "SELECT * FROM games WHERE name LIKE '%$search%'";
                            $result = mysqli_query($con, $sql);
                            // Show results
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <div class="md:col-span-3 col-span-2">
                                    <div class="group relative w-full aspect-[16/9]">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="images/games/<?php echo $row['image']?>" alt="Loading..."
                                                class="h-[40px] w-[40px] object-contain animate-spin">
                                        </div>
                                        <div class="absolute inset-0">
                                            <a href="view-game/<?php echo str_replace(' ','-', $row['name']); ?>">
                                                <img src="images/games/<?php echo $row['image']?>"
                                                    class="h-full w-full object-cover border-[#D09DF9] border-[1px] border-opacity-30 rounded-lg" alt="<?php echo $row['name']?>" />
                                            </a>
                                        </div>
                                        <a href="view-game/<?php echo str_replace(' ','-', $row['name']); ?>">
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
                         <?php 
                            }
                        } else {
                            ?>
                              <h3 class="text-white text-center font-semibold pl-2 pb-4 mt-1"> No results found for  <?php echo $search?></h3>
                            <?php 
                        }
                    } else {
                        // No input, show nothing
                        ?>
                              <h3 class="text-white text-center font-semibold pl-2 pb-4 mt-1">Please enter something to search <?php echo $row['name']?></h3>
                            <?php
                    }
                         
                    ?>
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
        
        
         <?php 
                $sql="select * from pageslay where pages='home' order by pageslay.id desc";
                $res=mysqli_query($con,$sql);
                $i=1;
                while($row=mysqli_fetch_assoc($res)){?>
        <div class="my-5 game-banner-container bg-cover bg-no-repeat bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-10 grid justify-center place-item-center rounded-[30px]">
            <div class="gap-4">
                <h2 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4"><?php echo $row['title'];?></h2>
                <div class="space-y-8">
                    <?php echo $row['des'];?>
                    <button class="btn btn-success" style="padding: 8px;margin-top: -17px;margin-right: 6px;float: right !important;background: green;border-radius: 8px;" onclick="myFunction()"> Read More &nbsp; <i id="toggle_icon"></i></button>
                    <div id="read_more_section">
                        <?php echo $row['logdes'];?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

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