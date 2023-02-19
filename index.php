<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>451 Web Designs V2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    "maintxt": ["Source Sans Pro", "sans-serif"]
                }
                , container: {
                    center: true,
                },
            },
        }
    </script>
</head>

<body class="bg-gradient-to-l from-cyan-500 to-indigo-700">
    <!--Header-->
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-slate-800 p-6">
            <div class="flex items-center flex-shrink-0 mr-6 text-slate-200">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                </svg>
                <span class="font-semibold text-xl tracking-tight">451 Web Designs</span>
            </div>
            <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="text-sm sm:flex-grow">
                    <a href="#responsive-header"
                        class="block mt-4 sm:inline-block sm:mt-0 text-slate-200 hover:text-white mr-4">
                        Docs
                    </a>
                    <a href="#responsive-header"
                        class="block mt-4 sm:inline-block sm:mt-0 text-slate-200 hover:text-white mr-4">
                        Examples
                    </a>
                    <a href="#responsive-header"
                        class="block mt-4 sm:inline-block sm:mt-0 text-slate-200 hover:text-white">
                        Blog
                    </a>
                </div>
                <div>
                    <a href="#"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-slate-500 hover:bg-white mt-4 sm:mt-0">Contact
                        us</a>
                </div>
            </div>
        </nav>
    </header>
    <!--Header-->


    <!--Hero-->
    <section class="bg-slate-50 dark:bg-slate-800">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Premium websites for small businesses</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Have you ever wanted a website that expresses what your business is about, no problem, we're here to help</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Get
                    started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>
    <!--Hero-->

    <!--Cards-->
    <div class="container w-3/5 p-6 lg:w-auto">
        <div class="grid place-items-center gap-6 md:grid-cols-3 md:grid-rows-1">
            <a href="#"
                class="block p-6 bg-slate-50 rounded-lg border border-slate-300 shadow-md hover:bg-slate-100 dark:bg-slate-800 dark:border-slate-700 dark:hover:bg-slate-700">
                <h5 class="mb-2 text-l font-bold tracking-tight text-slate-900 dark:text-white">Noteworthy technology
                    acquisitions 2021</h5>
                <p class="font-normal text-slate-700 dark:text-slate-400">Lorem ipsum dolor sit amet consectetur
                    adipisicing
                    elit.</p>
            </a>
            <a href="#"
                class="block p-6 bg-slate-50 rounded-lg border border-slate-300 shadow-md hover:bg-slate-100 dark:bg-slate-800 dark:border-slate-700 dark:hover:bg-slate-700">
                <h5 class="mb-2 text-l font-bold tracking-tight text-slate-900 dark:text-white">Noteworthy technology
                    acquisitions 2021</h5>
                <p class="font-normal text-slate-700 dark:text-slate-400">Lorem ipsum dolor sit amet consectetur
                    adipisicing
                    elit.</p>
            </a>
            <a href="#"
                class="block p-6 bg-slate-50 rounded-lg border border-slate-300 shadow-md hover:bg-slate-100 dark:bg-slate-800 dark:border-slate-700 dark:hover:bg-slate-700">
                <h5 class="mb-2 text-l font-bold tracking-tight text-slate-900 dark:text-white">Noteworthy technology
                    acquisitions 2021</h5>
                <p class="font-normal text-slate-700 dark:text-slate-400">Lorem ipsum dolor sit amet consectetur
                    adipisicing
                    elit.</p>
            </a>
        </div>
    </div>
    <!--Cards-->
    
    <!--Form-->
    <form id="contactForm" class="myform grid place-items-center p-6" method="post">
        <p class="block mb-2 text-5xl font-semibold text-center text-slate-100 dark:text-slate-300">Contact us!</p>
        <div class="successAlert p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 hidden" role="alert">
            <span class="font-medium">Hold Tight!</span> We'll be in contact with you soon.
        </div>
        <div class="failAlert p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 hidden" role="alert">
            <span class="font-medium">Ooops!</span> It looks like theres a problem sending the request, try again later.
        </div>
                
        
        <div
            class="w-full mt-5 mb-8 first:mt-0 last:mb-0 pt-2 bg-slate-50 rounded-xl shadow-lg overflow-hidden dark:bg-slate-800 dark:ring-1 dark:ring-white/10 dark:ring-insetflex sm:w-2/3">
            <div class="grid gap-6 mb-6 lg:grid-cols-2 p-2">
                <div>
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-slate-900 dark:text-slate-300">
                        Name</label>
                    <input type="text" id="name" name="name"
                        class="bg-slate-50 border border-slate-300 text-slate-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-600 dark:border-slate-900 dark:placeholder-slate-400 dark:text-slate-50 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Dylan" required>
                </div>
                
                <div>
                    <label for="company"
                        class="block mb-2 text-sm font-medium text-slate-900 dark:text-slate-300">Company</label>
                    <input type="text" id="company" name="company"
                        class="bg-slate-50 border border-slate-300 text-slate-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-600 dark:border-slate-900 dark:placeholder-slate-400 dark:text-slate-50 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="451 Web Designs">
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-slate-900 dark:text-slate-300">Phone
                        number</label>
                    <input type="tel" id="phone" name="phone"
                        class="bg-slate-50 border border-slate-300 text-slate-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-600 dark:border-slate-900 dark:placeholder-slate-400 dark:text-slate-50 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="000-000-0000">
                </div>
                
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-slate-900 dark:text-slate-300">Email
                        address</label>
                    <input type="email" id="email" name="email"
                        class="bg-slate-50 border border-slate-300 text-slate-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-600 dark:border-slate-900 dark:placeholder-slate-400 dark:text-slate-50 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ILuvCock@example.com" required>
                </div>
            </div>
            <div class="mb-6 p-2">
                <label for="textarea" class="block mb-2 text-sm font-medium text-slate-900 dark:text-slate-300">Your Message</label>
                <textarea id="textarea" name="message"
                    class="bg-slate-50 border border-slate-300 text-slate-500 text-sm rounded-lg resize-y resize-none h-48 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-600 dark:border-slate-900 dark:placeholder-slate-400 dark:text-slate-50 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Your Message..." required></textarea>
            </div>
            <div class="grid place-items-center p-4">
                <button type="submit" name="submit" value="Send"
                    class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-600 duration-300 text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-indigo-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    <!--Form-->

    <!--Footer-->
    <footer class="p-4 md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-slate-200 sm:text-center dark:text-slate-400">© 2022 <a href="https://flowbite.com/"
                class="hover:underline">451 Web Designs™</a>
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-slate-200 dark:text-slate-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>
    <!--Footer-->
    
    <script>
            /*This is the form js (Mixture of jquery and vanilla js)*/
        $(document).ready(function() {
            $('.myform').on('submit',function(){
                var form = $(this);
                $.ajax({
                    // if it can't find email.php just chahge the url path to the full path, including your domain and all folders.
                    url: "email.php",
                    method: form.attr('method'),
                    data: form.serialize(),
                    success: function(result){
                
                        // THIS IS WHAT I HAVE ADDED TO REMOVE EXCESS SPACES
                        let d = result.split(" ");
                        let y = d.slice(-1)[0];
                        // THIS IS WHAT I HAVE ADDED TO REMOVE EXCESS SPACES
        
                        if (y == 'success'){
                            $('.successAlert').toggle();
                            $("input").val("");
                            $("textarea").val("");
                        } 
                        else if (y == 'miss'){
                             $('.output_message').text('Please fill in all the fields above.');
                             $("input").val("");
                        }
                        else {
                            $('.failAlert').toggle();
                            $("input").val("");
                        }
                    }
                });
            // Prevents default submission of the form after clicking on the submit button. 
            return false;   
            });
        });
        
        //This is the animations and transitions for the page (To future me,Do this in vuejs pls!)
        
</script>
</body>

</html>