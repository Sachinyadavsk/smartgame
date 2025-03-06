<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>

<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">

        <h1 class="sr-only">About Us | Free Games</h1>
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
            class="my-5 game-banner-container bg-cover bg-no-repeat bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-10 grid justify-center place-item-center rounded-[30px]">
            <div class="gap-4">
                <h1 class="text-[24px] tracking-wide font-bold capitalize leading-5 mb-6 mt-4">Login - Free Games
                </h1>
                <div class="space-y-8 py-2 px-5 border rounded-xl hover:scale-110 duration-300">
                    <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>
                    <form action="" class="flex flex-col gap-4">
                        <input class="p-2 mt-8 rounded-xl border" type="email" name="email" placeholder="Email">
                        <div class="relative">
                            <input class="p-2 rounded-xl border w-full" type="password" name="password"
                                placeholder="Password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                                class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </div>
                        <button class="py-2 px-5 border rounded-xl hover:scale-110 duration-300">Login</button>
                    </form>
                    <p><a href="#" class="text-xs">Forgot your password?</a></p>
                    <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                        <p>Don't have an account?</p>
                        <p><a href="regsiter.php"
                                class="py-1 px-5 border rounded-xl hover:scale-110 duration-300">Register</a></p>
                    </div </div>
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
    </div>

    <?php include('footer.php');?>