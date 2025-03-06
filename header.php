<header>
     <script type="text/javascript" src="js/navbar.js" async></script>
    <nav class="bg-[#261137] border-gray-200">
        <div class="flex flex-col lg:flex-row justify-between items-center lg:h-[85px] md:w-[80%] lg:w-[64%] mx-auto px-4 py-2">
            
            <!-- Logo & Mobile Menu + Signup/Signin -->
            <div class="flex justify-between w-full items-center lg:w-auto">
                <div class="flex items-center gap-2">
                    <a href="index.php">
                        <span class="ml-3 lg:text-2xl text-md lg:leading-6 leading-5 font-coiny text-white">
                            <span class="block">FREE</span>
                            <span class="block">GAMES</span>
                        </span>
                    </a>
                </div>
                
                <div class="flex items-center gap-4">
                    <!-- Signup/Signin (Mobile) -->
                    <div class="lg:hidden flex items-center">
                        <img src="images/website-password.png" class="w-5 h-5" alt="">
                        <p><a href="signin.php" class="text-white">Signup/Signin</a></p>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="menu-btn" class="lg:hidden focus:outline-none">
                        <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Navigation Links -->
            <div id="menu" class="hidden sm:flex lg:flex justify-center font-medium text-sm md:text-md color-[#000] lg:mt-0 mt-4 capitalize text-white whitespace-nowrap">
                <a href="index.php" class="border-b-2 border-transparent hover:text-[#D09DF9] hover:border-b-2 hover:border-[#D09DF9] mx-2">Home</a>
                
                <!-- Dropdown -->
                <div class="group relative cursor-pointer">
                    <button
                        class="items-center text-center font-medium mx-2 border-b-2 border-transparent hover:border-[#D09DF9] hover:text-[#D09DF9] hover:border-b-2">Categories</button>
                    <div
                        class="absolute z-50 invisible group-hover:visible top-full left-0 bg-[#261137] shadow  min-w-max max-w-full">
                        <ul class="py-1 px-1 text-sm md:text-md text-white" aria-labelledby="dropdownDefault">
                            <li class="py-2 px-3 text-center">
                                <a href="action.php"
                                    class="font-normal hover:text-[#D09DF9] hover:border-[#D09DF9] hover:border-b-4 capitalize text-center cat_class">Action</a>
                            </li>
                            <li class="py-2 px-3 text-center">
                                <a href="arcade.php"
                                    class="font-normal hover:text-[#D09DF9] hover:border-[#D09DF9] hover:border-b-4 capitalize text-center cat_class">Arcade</a>
                            </li>
                            <li class="py-2 px-3 text-center">
                                <a href="casual.php"
                                    class="font-normal hover:text-[#D09DF9] hover:border-[#D09DF9] hover:border-b-4 capitalize text-center cat_class">Casual</a>
                            </li>
                            <li class="py-2 px-3 text-center">
                                <a href="puzzle.php"
                                    class="font-normal hover:text-[#D09DF9] hover:border-[#D09DF9] hover:border-b-4 capitalize text-center cat_class">Puzzle</a>
                            </li>
                            <li class="py-2 px-3 text-center">
                                <a href="imaging.php"
                                    class="font-normal hover:text-[#D09DF9] hover:border-[#D09DF9] hover:border-b-4 capitalize text-center cat_class">Imaging</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="blogs.php" class="border-b-2 border-transparent mx-2 hover:border-[#D09DF9] hover:text-[#D09DF9] hover:border-b-2">Blogs</a>
                <a href="about-us.php" class="border-b-2 border-transparent mx-2 hover:border-[#D09DF9] hover:text-[#D09DF9] hover:border-b-2">About Us</a>
            </div>

            <!-- Signup/Signin (Desktop) -->
            <div class="hidden lg:flex items-center gap-2">
                <img src="images/website-password.png" class="w-5 h-5" alt="">
                <p><a href="signin.php" class="text-white">Signup/Signin</a></p>
            </div>
        </div>
    </nav>
    <!-- SCROLL TO TOP -->
    <button
        class="!fixed z-100 hidden bottom-5 end-5 rounded-full bg-light-theme-color p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition-transform scale-1 hover:scale-105"
        id="btn-back-to-top" aria-label="btn-back-to-top">
        <span class="[&>svg]:w-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
            </svg>
        </span>
    </button>
</header>
<style>
@media screen and (max-width: 525px) {
  div#menu {
    display: flex;
    display:none;
}
}
    
</style>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    menuBtn.addEventListener("click", function () {
        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "flex";
        } else {
            menu.style.display = "none";
        }
    });
});


</script>

<script>
       // Function to check and request notification permission
            function requestNotificationPermission() {
                if (!("Notification" in window)) {
                    alert("This browser does not support desktop notifications.");
                    return;
                }
            
                Notification.requestPermission().then(permission => {
                    localStorage.setItem("notification_permission", permission); // Save response
                    
                    if (permission === "granted") {
                        console.log("User allowed notifications.");
                        sendNotification();
                    } else if (permission === "denied") {
                        console.log("User blocked notifications.");
                        alert("You have blocked notifications. To enable them, change settings in your browser.");
                    }
                });
            }
            
            // Function to fetch meta description
            function getMetaDescription() {
                const metaTag = document.querySelector('meta[name="description"]');
                return metaTag ? metaTag.getAttribute("content") : "No description available";
            }
            
            // Function to show notification
            function sendNotification() {
                let title = document.title; // Get the page title
                let description = getMetaDescription(); // Get the meta description
                let url = window.location.href; // Get the page URL
            
                if (Notification.permission === "granted") {
                    new Notification(title, {
                        body: description,
                        icon: "https://game.reapbucks.com/smartgame/" // Update with your logo URL
                    });
            
                    // Send data to the server
                    saveNotificationToDB(title, description, url);
                }
            }
            
            // Function to store the notification in the database via AJAX
            function saveNotificationToDB(title, description, url) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "save_notification.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                let data = `title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&url=${encodeURIComponent(url)}`;
                xhr.send(data);
            }
            
            // Check notification permission on page load
            document.addEventListener("DOMContentLoaded", function () {
                const permission = localStorage.getItem("notification_permission");
            
                if (!permission || permission === "default") {
                    requestNotificationPermission(); // Ask only if no decision has been made
                }
            });

    </script>