<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<footer class="py-6 dark:bg-gray-800 dark:text-gray-50">
        <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
            <div class="grid grid-cols-12">
                <div class="pb-6 col-span-full md:pb-0 md:col-span-6">
                    <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 md:justify-start">
                        <div class="flex items-center justify-center w-64 h-auto rounded-full">
                            <img src="{{ asset('storage/gambar/Foot-logo.png') }}" class="">
                        </div>
                    </a>
                    <div class="text-center pt-5 w-3/6 mx-auto md:text-left md:w-3/5 md:mr-40 md:ml-2 ">
                        <ul>
                            <li>
                                <p>Nearme adalah sebuah aplikasi karangan anak bangsa yang ingin menjadi pemuda sukses.
                                </p>
                                <p>Silahkan kerjakan tugas yang diberikan agar tidak menyesal di akhri waktu nanti.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-4 text-center md:text-left md:col-span-2">
                    <p class="pb-1 text-lg font-medium">COMPANY</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">About Us</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Blog</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-4 text-center md:text-left md:col-span-2">
                    <p class="pb-1 text-lg font-medium">PRODUCT</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Nearme</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Nearby</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Near</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-4 text-center md:text-left md:col-span-2">
                    <p class="pb-1 text-lg font-medium">EXPLORE</p>
                    <ul>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Event</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#" class="hover:dark:text-violet-400">Venue</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid justify-center pt-6 lg:justify-between">
                <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                    <span>©2023 All rights reserved</span>
                    <a rel="noopener noreferrer" href="#">
                        <span>Privacy policy</span>
                    </a>
                    <a rel="noopener noreferrer" href="#">
                        <span>Terms of service</span>
                    </a>
                </div>
                <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                    <a rel="noopener noreferrer" href="#">
                        <span>Terms of service</span>
                    </a>
                    <img src="assets/icons/icons.png" alt="">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>