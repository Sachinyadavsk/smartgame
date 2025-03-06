<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>
<?php
$play_id =$_GET['play_id'];
$query = "select * from games where id=$play_id";
$res = mysqli_query($con, $query);
$result = mysqli_fetch_assoc($res);

?>
<body class="overflow-y-hidden google-anno-skip">
    <div class="w-full h-[100dvh] relative main-container">
        <h1 class="sr-only"></h1>
        <div class="absolute top-0 left-0 h-full w-full overflow-y-auto">
            <div class="flex justify-center items-center">
                <div class="md:w-[700px] w-full h-full">
                    <div class="w-[40%] fixed bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded m-[2rem] z-50"
                        role="alert" id="flash-success" style="display:none;">
                        <strong class="font-bold message items-center"></strong>
                    </div>
                    <div class="bg-red-100 border border-red-400 fixed text-red-700 px-4 py-3 rounded w-[40%] m-[2rem] z-50"
                        role="alert" id="flash-error" style="display:none;">
                        <strong class="font-bold message items-center"></strong>
                    </div>
                    <header>
                        <nav class="bg-[#261137] border-gray-200">
                            <div class="h-[40px] content-center">
                                <ul class="font-medium flex justify-between self-center w-full">
                                    <li class="mx-3 px-2">
                                        <a href="index.php" class=""><i class="fa-solid fa-house"
                                                style="font-size:20px; color:white;"></i></a>
                                    </li>
                                    <li class="mx-1 px-2 truncate text-white">
                                        <a href="javascript:void(0);"><?php echo $result['name'];?> </a>
                                    </li>
                                    <li class="mx-3 px-2">
                                        <div class="mx-2">
                                            <button id="shareButton"><i class="fa-solid fa-share"
                                                    style="font-size:20px;color:white;"></i></button>
                                            <input type="hidden" value="<?php echo $filename = strtolower(str_replace(' ', '_', $result['name'])) . '.php';?> ">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>

                    <div id="shareModal"
                        class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden z-10 md:mr-4">
                        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
                            <img src="images/games/<?php echo $result['image']?>"
                                alt="Game Logo" class="h-[150px] w-[150px] mb-4 mx-auto" />
                            <h2 class="text-md font-semibold mb-4 text-center">Invite your friends to play this game!
                            </h2>
                            <input type="text" id="shareLink" value="<?php echo $filename = strtolower(str_replace(' ', '_', $result['name'])) . '.php';?>" readonly
                                class="w-full p-2 rounded mb-4 text-blue-700 underline font-md border-dashed border-2 border-sky-700">
                            <button id="copyButton"
                                class="bg-[#7008C5] text-white py-2 px-4 mb-4 w-full rounded-full">Copy</button>
                            <button id="doneShareModal" class=" text-black py-2 px-4 rounded w-full">Done</button>
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {

                            $('#shareButton').on('click', function () {
                                $('#shareModal').removeClass('hidden');
                            });

                            $('#closeShareModal, #doneShareModal').on('click', function () {
                                $('#shareModal').addClass('hidden');
                            });

                            $('#copyButton').on('click', function () {
                                const copyText = document.getElementById("shareLink");
                                copyText.select();
                                document.execCommand("copy");
                                $(this).text("Copied");
                                setTimeout(() => {
                                    $(this).text("Copy");
                                }, 5000);
                            });

                        });
                    </script>
                    <h1 class="sr-only">Bubble Shooter - Play online games for Free | Jambo Games </h1>
                    <div class="bg-transparent absolute top-[50%] left-[50%] -translate-x-[50px] -translate-y-[50px]">
                        <div id="loading" class="hidden"><img src="images/games/<?php echo $result['image']?>" alt="<?php echo $result['name'];?>"
                                class="h-[100px] w-[100px] object-contain animate-spin"></div>
                    </div>
                    <div id="game-content-main" class="bg-white h-[calc(100dvh-90px)] md:h-[calc(100dvh-40px)]">
                        <div id="game-content" class="overflow-hidden w-full h-[100%]"></div>
                    </div>
                    <div class="w-full md:hidden flex flex-col justify-center bg-slate-200 h-[50px]">
                        <div id="mobile-ad-1">
                            <script>
                                googletag.cmd.push(function () {
                                    googletag.display('mobile-ad-1');
                                });
                            </script>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var game_url = "";
                        game_url = "game_setting/<?php echo $result['game_url'];?>/game.html";

                        var game_id = <?php echo $play_id;?>;
                        saveRecentPlay()

                        setInterval(updateGamePlaytime, 1000);
            
                        function updateGamePlaytime() {
                            const pending_games = localStorage.getItem('pending_games')
                            const parsed_games = pending_games ? JSON.parse(pending_games) : []
                            const is_game_exists = parsed_games && parsed_games.some(game => game.game_id === game_id)
                            if (is_game_exists) {
                                const existing_game_index = parsed_games.findIndex(game => game.game_id === game_id)
                                parsed_games[existing_game_index].play_time += 1000
                                localStorage.setItem('pending_games', JSON.stringify(parsed_games))
                                return
                            }
                            parsed_games.push({
                                game_id,
                                play_time: 1000
                            })
                            localStorage.setItem('pending_games', JSON.stringify(parsed_games))
                        }
                        function copyGameUrl(event) {
                            var copyText = event.currentTarget.nextElementSibling.value;
                            var clipboard = navigator.clipboard;
                            if (clipboard == undefined) {
                                $("#flash-error").find('.message').text("Unsecure site cannot copy to clipboard");
                                $("#flash-error").show();
                                setTimeout(function () {
                                    $("#flash-error").hide();
                                }, 3000);
                            } else {
                                clipboard.writeText(copyText);
                                $("#flash-success").find('.message').text("Game link copied to clipboard");
                                $("#flash-success").show();
                                setTimeout(function () {
                                    $("#flash-success").hide();
                                }, 3000);
                            }
                        }
                        $(document).ready(function () {
                            $('#loading').removeClass('hidden');
                            $('#game-content').load(game_url, function (response, status, xhr) {
                                $('#loading').addClass('hidden');
                                if (status == "error") {
                                    $('#loading').removeClass('hidden');
                                    $("#flash-error").find('.message').text("Failed to load the game: " + xhr.status + " " + xhr.statusText);
                                    $("#flash-error").show();
                                    setTimeout(function () {
                                        $("#flash-error").hide();
                                    }, 3000);
                                }
                            });
                        });

                        function saveRecentPlay() {
                            var game_ids = [];
                            var local_game_ids = "";

                            if (localStorage.getItem("game_ids")) {
                                local_game_ids = JSON.parse(localStorage.getItem("game_ids"));
                            }
                            if (local_game_ids === null || local_game_ids === "" || typeof local_game_ids === 'undefined') {
                                game_ids.push(game_id);
                                localStorage.setItem("game_ids", JSON.stringify(game_ids));
                                local_game_ids = JSON.parse(localStorage.getItem("game_ids"));


                            } else if (JSON.parse(localStorage.getItem("game_ids")).includes(game_id) == false) {
                                local_game_ids.unshift(game_id);
                                localStorage.setItem("game_ids", JSON.stringify(local_game_ids));
                                local_game_ids = JSON.parse(localStorage.getItem("game_ids"));

                            } else if (JSON.parse(localStorage.getItem("game_ids")).includes(game_id) == true && JSON.parse(localStorage.getItem("game_ids")).length > 1) {
                                game_id_index = local_game_ids.indexOf(game_id);
                                game_id_index = local_game_ids.indexOf(game_id);
                                local_game_ids.splice('' + game_id_index + '', 1);
                                local_game_ids.splice(0, 0, game_id);
                                localStorage.setItem("game_ids", JSON.stringify(local_game_ids));
                                local_game_ids = JSON.parse(localStorage.getItem("game_ids"));

                            } else if (JSON.parse(localStorage.getItem("game_ids")).length == 1) {
                                local_game_ids = JSON.parse(localStorage.getItem("game_ids"));
                            }
                        }
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
</html>