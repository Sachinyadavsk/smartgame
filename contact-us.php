<?php include('top_header_url.php');?>
<?php include('bottam_header_url.php');?>

<body class="google-anno-skip main-container font-inter">
    <div class="w-full mx-auto">
        <?php include('header.php');?>
    </div>
    <div class="md:w-[80%] lg:w-[64%] w-full overflow-x-hidden mx-auto">
        <h1 class="sr-only">Contact Us | Jambo Games</h1>
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
            class="my-5 game-banner-container bg-cover bg-no-repeat bg-[#261137] border-[#D09DF9] border-[1px] border-opacity-30 text-white py-[3rem] px-[4rem] grid justify-center place-item-center rounded-[30px] min-h-[80vh]">
            <div class="my-auto">
                <h3 id="success" class="bg-green-100 text-green-600 p-4 m-2"></h3>
                <h3 id="errors" class="bg-red-100 text-red-600 p-4 m-2"></h3>
                <h1 class="text-5xl text-center tracking-wide font-bold capitalize my-4">Contact Us</h1>
                <p class="text-[14px] text-[#D09DF9] text-center font-normal leading-5 tracking-wide">Questions or
                    Feedback? Contact us here!</p>
                <form method="post" id="contact_us_form" onsubmit="sendContactUsMail(event);">
                    <div class="space-y-4 pt-4">
                        <div class="">
                            <input type="text"
                                class="bg-[#210E31] border-[#8861A8] w-full p-2 my-1 border-2 rounded-lg outline-none"
                                id="name" name="name" placeholder="Enter Name">
                            <input type="text"
                                class="bg-[#210E31] border-[#8861A8] w-full p-2 my-1 border-2 rounded-lg outline-none"
                                id="email" name="email" placeholder="Enter Email">
                        </div>
                        <textarea rows="4" class="bg-[#210E31] border-[#8861A8] w-full p-2 rounded-lg outline-none"
                            id="message" name="message" placeholder="Your message..."></textarea>
                        <div class="flex items-center justify-center">
                            <button id="contactUsSubmitBtn"
                                class="transition-transform scale-1 hover:scale-105 uppercase bg-[#7008C5] py-2 font-semibold text-white text-lg rounded-full w-44"
                                type="submit">
                                Submit
                            </button>
                            <i id="loader" class="animate-spin text-2xl fa-solid fa-spinner"></i>
                        </div>
                    </div>
                </form>
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
        <script type="text/javascript">
            $(document).ready(function () {
                $('#success').text('');
                $('#success').hide();
                $('#errors').text('');
                $('#errors').hide();
                $('#loader').hide()
            })

            function sendContactUsMail(event) {
                $('#success').text('');
                $('#success').hide();
                $('#errors').text('');
                $('#errors').hide();
                var sendContactUsMailUrl = "https://jambogames.io/send-contact-us-mail";

                event.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var message = $('#message').val();
                if (!name) {
                    $('#errors').text('Name cannot be empty');
                    $('#errors').show();
                    return
                }
                if (!email) {
                    $('#errors').text('Email cannot be empty');
                    $('#errors').show();
                    return
                }
                if (!validateEmail(email)) {
                    $('#errors').text('Please enter valid email');
                    $('#errors').show();
                    return
                }
                if (!message) {
                    $('#errors').text('Message cannot be empty');
                    $('#errors').show();
                    return
                }
                $('#contactUsSubmitBtn').hide()
                $('#loader').show()
                $.ajax({
                    url: sendContactUsMailUrl,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'post',

                    dataType: 'json',
                    data: {
                        "name": name,
                        "email": email,
                        "message": message
                    },
                    success: function (response) {
                        $('#contactUsSubmitBtn').show()
                        $('#loader').hide()
                        if (response.success == 1) {
                            $('#success').text("Contact request submitted successfully");
                            $('#contact_us_form')[0].reset();
                            $('#success').show();
                        } else {
                            $('#errors').text(response.message);
                            $('#errors').show();
                        }
                    },
                })
            }
            const validateEmail = (email) => {
                return email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
            };
        </script>
    </div>
    <?php include('footer.php');?>