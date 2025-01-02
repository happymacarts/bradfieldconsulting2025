<x-guest-layout>
    <style>
       
    </style>

    <div class="w-full flex flex-col bg-primary-800 pb-20 gap-0">
        <div class="bg-primary-800 p-0 block lg:flex items-center">
            <img class="lg:w-2/3 sm:w-full bg-primary-300"
                src="{{ asset('images/BCmasthead.png') }}"/>
            
            <div class="m-8 text-white p-2 flex flex-col gap-4">
                <h2 class="font-['Windsong'] text-5xl text-white">Ana Bradfield</h2>
                
                <h3>CRTP Tax Preparer</h3 class="flex flex-col text-primary-800">
                <blockquote class="text-lg italic Xfont-serif" class="uppercase tracking-tight before:content-['“']  after:content-['”'] text-primary-300 mt-12">With a Heavy emphasis on company and personal growth, along with tax planning, We help the small sole proprietor gain the confidence to successful business ownership.</blockquote>
                <p class="self-end text-white">—Ana Bradfield</p>
                <!-- Calendly link widget begin -->
                <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                
                <x-button primary label="Book a Consultation" class="grow-0 w-1/3 self-center" icon="calendar" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/biztaxconsult'});return false;" target="blank"/>
                <!-- Calendly link widget end -->
            </div>
        </div>
    </div>
    
    <div class="block lg:flex items-center  bg-primary-300 m-auto  pt-0 pb-6">
        <div class=" mt-0 p-12 pb-30 h-auto text-primary-800 flex flex-col gap-4 ">
            <h2 class="text-4xl font-bold" id="aboutus">About our Company</h2>
            <p class="text-lg">Bradfield Consulting, Inc. is a 100% woman and minority-owned
            remote bookkeeping, tax planning, preparation, and filing
            service dedicated to empowering small businesses with financial
            expertise and advocacy.         </p>
            
            <p class="text-lg">We offer comprehensive accounting solutions, tailored tax
            strategies, and access to capital through our network of local
            banks, all at affordable rates due to our virtual business model. 
            </p>

            <p class="text-lg">Our commitment extends beyond financial services; we actively
                engage in lobbying efforts in Washington, D.C., to safeguard the
                rights of small businesses and foster an environment conducive
                to achieving the American dream.
            </p>
        </div>
        <div class="w-1/2 border-primary-800 border-8 m-auto m-6 aspect-square bg-no-repeat bg-cover bg-center bg-[url('{{ asset("/images/strategy.webp") }}')]" 
        style="background-image:url({{asset('images/strategy.webp')}})"
        >
        <!-- ... -->
        </div>
        {{-- <img class="w-1/2 border-primary-800 border-8 m-auto my-6" src="{{asset('images/strategy.webp')}}" /> --}}
    </div>
    <div class="block lg:flex items-center content-center bg-primary-800 text-white m-auto  p-6 gap-6">
        <img class=" w-full md:w-1/5 h-auto" src="{{ asset('images/coins.jpg')}}"/>
        <h2 class="text-2xl md:text-6xl font-bold Xfont-serif my-10">
            Leave your accounting worries to us, so you can focus on growing your business.
        </h2>
    </div>
    <div id="why" class="block lg:flex lg:flex-col items-center content-center bg-primary-300 text-white m-auto  p-6 gap-6">
        <h2 class="text-4xl font-bold">Why Bradfield Consulting?</h2>
        <h3 class="text-lg lg:text-2xl animate-fade-right ">Our Office is 100% virtual so you can meet with us from the comfort of your home. </h3>
        <h3 class="text-lg lg:text-2xl animate-fade-left ">We spend over 100 hours per year learning new tax laws. </h3>
        <h3 class="text-lg lg:text-2xl animate-fade-right ">90% of our clients are referral based from past & current clients. </h3>
        <h3 class="text-lg lg:text-2xl animate-fade-left ">We work with a group of trusted professionals that we can refer our clients to with confidence. </h3>
    </div>
    <div class="bg-primary-800 text-white p-8 lg:px-20 ">
        <h2 class="text-4xl font-bold flex flex-col items-center mb-6"><span>Our Services</span>
            <x-button href="{{ route('services')}}" class="m-auto self-center" label="(Click for more Information)" primary />

        </h2>
        @include('_partials.services')
        

    </div>
    <div  id="what" class="block lg:flex lg:flex-col items-center content-center bg-primary-300 text-white m-auto  p-6 md:px-28 gap-6">
        <h2 class="text-5xl font-bold" >What Are People Saying?</h2>
        <div class="flex flex-col ">
            <blockquote class="text-lg italic Xfont-serif">
                “Ana was excellent with her consult! Ana answered all my questions quickly and efficiently. Great communication, will use again and again.” 
            </blockquote>
            <p class="self-end">— V. J.</p>
        </div>
        
        <div class="flex flex-col ">
            <blockquote class="text-lg italic Xfont-serif">
                “I highly recommend Bradfield Consulting! Very knowledgeable in all aspects of business finances, 
                taxes, and accounting. As a first year small business owner, I was feeling lost and overwhelmed, 
                but thanks to Ana's guidance I now feel that my business has excellent room for growth and am confident 
                in making financial decisions. Always friendly and professional, wouldn't go anywhere else!”  
            </blockquote>
            <p class="self-end">— C.W.</p>
        </div>
        
        <div class="flex flex-col">
            <blockquote class="text-lg italic Xfont-serif">
                “Ana took the time to answer numerous bookkeeping and HR questions. She was knowledgeable and her experience was evident. Thank you Ana!”  
            </blockquote>
            <p class="self-end">— K.L.G.</p>
        </div>


        <div class="flex flex-col">
            <blockquote class="text-lg italic Xfont-serif">
                “Ana came highly recommended on our local Community Facebook group by many people. She 
                offered me a free consultation and it was more than worth my time and money, I would have paid for it. 
                She gave me a clear action plan and some things to plan for the future. She is very good at simplifying 
                money and business discussions and takes all of the stress out of the situation. When my business grows I look 
                forward to working with her on a regular basis. Highly recommend!” 
            </blockquote>
            <p class="self-end">— J. P.</p>
        </div>


    </div>
    <div class="block md:flex md:flex-col text-center items-center  w-full gap-6 justify-between bg-primary-800 text-white p-8 lg:p-20 ">
        <h2 class="text-4xl lg:text-7xl font-bold">Stay Connected!</h2>
        <h3 class="uppercase">join our monthly newsletter</h3>
        <x-button primary label="Join Now" target="_blank" href="http://eepurl.com/i68Y_I" class="w-1/3 my-2"/>
        <p>Stay connected for the latest tax updates and practical business tips designed to keep your financial strategies on track. As a tax professional, I specialize in breaking down complex tax regulations into actionable insights that save you time and money. From navigating new tax laws to optimizing deductions, I provide timely, reliable advice tailored to small business owners and entrepreneurs. Plus, I share valuable tips on streamlining financial processes, improving cash flow, and making informed decisions for long-term success. Follow along to stay ahead of the curve and ensure your business thrives.</p>

        <div class="flex gap-4 items-center justify-center">
            <div class=" inline-block w-6">
                <a target="_blank"  title="Visit our LinkedIn Page" href="https://www.linkedin.com/in/bradfieldconsultinginc/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" ><__hrp__ xmlns="" data-ext-id="eanggfilgoajaocelnaflolkadkeghjp"><link/></__hrp__><g fill="none" fill-rule="evenodd"><path d="M8,72 L64,72 C68.418278,72 72,68.418278 72,64 L72,8 C72,3.581722 68.418278,-8.11624501e-16 64,0 L8,0 C3.581722,8.11624501e-16 -5.41083001e-16,3.581722 0,8 L0,64 C5.41083001e-16,68.418278 3.581722,72 8,72 Z" fill="#007EBB"/><path d="M62,62 L51.315625,62 L51.315625,43.8021149 C51.315625,38.8127542 49.4197917,36.0245323 45.4707031,36.0245323 C41.1746094,36.0245323 38.9300781,38.9261103 38.9300781,43.8021149 L38.9300781,62 L28.6333333,62 L28.6333333,27.3333333 L38.9300781,27.3333333 L38.9300781,32.0029283 C38.9300781,32.0029283 42.0260417,26.2742151 49.3825521,26.2742151 C56.7356771,26.2742151 62,30.7644705 62,40.051212 L62,62 Z M16.349349,22.7940133 C12.8420573,22.7940133 10,19.9296567 10,16.3970067 C10,12.8643566 12.8420573,10 16.349349,10 C19.8566406,10 22.6970052,12.8643566 22.6970052,16.3970067 C22.6970052,19.9296567 19.8566406,22.7940133 16.349349,22.7940133 Z M11.0325521,62 L21.769401,62 L21.769401,27.3333333 L11.0325521,27.3333333 L11.0325521,62 Z" fill="#FFF"/></g></svg></a>
            </div>
            
            <div class=" inline-block w-6">
                <a target="_blank"  title="Visit our Facebook Page" href="https://www.facebook.com/bradfieldconsulting/" >
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 40 40"><__hrp__ xmlns="" data-ext-id="eanggfilgoajaocelnaflolkadkeghjp"><link/></__hrp__>
                    <linearGradient id="a" x1="-277.375" x2="-277.375" y1="406.6018" y2="407.5726" gradientTransform="matrix(40 0 0 -39.7778 11115.001 16212.334)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#0062e0"/>
                        <stop offset="1" stop-color="#19afff"/>
                    </linearGradient>
                    <path fill="url(#a)" d="M16.7 39.8C7.2 38.1 0 29.9 0 20 0 9 9 0 20 0s20 9 20 20c0 9.9-7.2 18.1-16.7 19.8l-1.1-.9h-4.4l-1.1.9z"/>
                    <path fill="#fff" d="m27.8 25.6.9-5.6h-5.3v-3.9c0-1.6.6-2.8 3-2.8H29V8.2c-1.4-.2-3-.4-4.4-.4-4.6 0-7.8 2.8-7.8 7.8V20h-5v5.6h5v14.1c1.1.2 2.2.3 3.3.3 1.1 0 2.2-.1 3.3-.3V25.6h4.4z"/>
                </svg></a>
            </div>

            <div class=" inline-block w-6">
                <a target="_blank" href="https://www.instagram.com/bradfield_consulting_inc/" title="Visit our Instagram">
                <img src="{{ asset('images/Instagram_logo_2022.png')}}" class="w-full"/>
                </a>          
            </div>

            <div class="-ml-6 ">
                <a onclick="Calendly.initPopupWidget({url: 'https://calendly.com/biztaxconsult'});return false;" target="blank"><span class="sr-only"> Make appointment with Calendly </span>
                <svg class="h-[8rem]" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 560 400"><g transform="matrix(.235895 0 0 .235895 93.5199 155.001)"><g fill="#006bff"><path d="m938.46 150.54c24.52 0 47.74 15 52.64 47.41h-109.2c4.57-28.44 25.83-47.41 56.56-47.41m49.15 95.36c-8.34 13-24.46 23-46.53 23-30.41 0-53.63-16.67-59.18-46.1h137c.66-4.218.99-8.481 1-12.75 0-45.77-32-86.32-81.42-86.32-51 0-85.66 37.6-85.66 86 0 49 35 86 87.62 86 32.7 0 57.55-14.72 71.93-37z" fill-rule="nonzero"/><path d="m810.92 52.78h28.44v238.69h-28.44z"/><path d="m1178.15 191.09v100.37h-28.45v-98.74c0-26.81-15.36-41.85-40.54-41.85-26.16 0-47.41 15.37-47.41 53.95v86.64h-28.45v-163.46h28.45v23.54c12.1-19.29 30.08-27.79 53-27.79 38.25 0 63.43 25.5 63.43 67.36" fill-rule="nonzero"/><path d="m1335 209.72c0-33.35-25.18-58.53-58.2-58.53-32.7 0-57.87 25.18-57.87 58.53s25.17 58.53 57.87 58.53c33 0 58.2-25.18 58.2-58.53m28.44-156.94v238.69h-28.44v-28.13c-13.08 20-34 32.38-61.8 32.38-45.45 0-82.72-37.61-82.72-86s37.27-86 82.72-86c27.79 0 48.72 12.42 61.8 32.37v-103.31z" fill-rule="nonzero"/><path d="m1386.38 52.78h28.44v238.69h-28.44z"/><g fill-rule="nonzero"><path d="m760.22 209.72c0-33.35-25.17-58.53-58.2-58.53-32.69 0-57.87 25.18-57.87 58.53s25.18 58.53 57.87 58.53c33 0 58.2-25.18 58.2-58.53m28.45-81.72v163.46h-28.45v-28.12c-13.08 20-34 32.38-61.79 32.38-45.45 0-82.73-37.61-82.73-86s37.28-86 82.73-86c27.79 0 48.71 12.42 61.79 32.37v-28.09z"/><path d="m573.51 260c-9.812 3.621-20.189 5.474-30.648 5.474-48.566 0-88.53-39.964-88.53-88.53s39.964-88.53 88.53-88.53c20.515 0 40.406 7.131 56.248 20.166 4.998 4.124 9.519 8.793 13.48 13.92l24.61-18c-22.532-29.455-57.568-46.766-94.653-46.766-65.374 0-119.17 53.795-119.17 119.17s53.796 119.17 119.17 119.17c26.396 0 52.058-8.77 72.933-24.924l-16.38-25.9c-7.652 6.303-16.301 11.288-25.59 14.75"/><path d="m1552.12 128v92.78c0 30-17.45 49-44.09 49s-45.93-19-45.93-49v-92.78h-28.78v90c0 47.16 29.39 77.78 74.71 77.78 39.2 0 45.32-24.8 45.32-25.42v33.38c0 33.07-14.39 51.75-44.4 51.75-22.07.109-41.01-16.333-44-38.2l-25.73 9c7.56 32.287 36.62 55.291 69.78 55.23 46.54 0 72-30.63 72-77.78v-175.74z"/></g></g><g fill-rule="nonzero"><g fill="#006bff"><path d="m231.58 223.23c-10.93 9.7-24.58 21.77-49.33 21.77h-14.8c-17.91 0-34.2-6.51-45.86-18.31-11.39-11.53-17.66-27.31-17.66-44.44v-20.25c0-17.13 6.27-32.91 17.66-44.44 11.66-11.8 27.95-18.3 45.86-18.3h14.8c24.78 0 38.4 12.06 49.33 21.76 11.35 10 21.14 18.74 47.25 18.74 3.982-.001 7.958-.319 11.89-.95l-.09-.23c-1.564-3.884-3.398-7.653-5.49-11.28l-17.45-30.23c-15.996-27.702-45.652-44.821-77.64-44.82h-34.91c-31.988-.001-61.644 17.118-77.64 44.82l-17.45 30.23c-15.99 27.705-15.99 61.945 0 89.65l17.45 30.23c15.996 27.702 45.652 44.821 77.64 44.82h34.91c31.988.001 61.644-17.118 77.64-44.82l17.45-30.18c2.092-3.627 3.926-7.396 5.49-11.28l.09-.22c-3.93-.653-7.906-.987-11.89-1-26.11 0-35.9 8.69-47.25 18.74"/><path d="m182.25 117.61h-14.8c-27.26 0-45.17 19.47-45.17 44.39v20.25c0 24.92 17.91 44.39 45.17 44.39h14.8c39.72 0 36.6-40.5 96.58-40.5 5.683-.006 11.354.516 16.94 1.56 1.82-10.303 1.82-20.847 0-31.15-5.587 1.039-11.257 1.561-16.94 1.56-60 0-56.86-40.5-96.58-40.5"/><path d="m330.23 202.5c-10.214-7.481-21.994-12.545-34.45-14.81v.3c-1.072 5.971-2.748 11.817-5 17.45 10.289 1.593 20.053 5.615 28.48 11.73 0 .08-.05.18-.08.27-19.821 64.182-79.559 108.255-146.732 108.255-84.246 0-153.57-69.324-153.57-153.57s69.324-153.57 153.57-153.57c67.173 0 126.911 44.073 146.732 108.255 0 .09.05.19.08.27-8.426 6.116-18.19 10.134-28.48 11.72 2.25 5.64 3.925 11.493 5 17.47-.006.093-.006.187 0 .28 12.455-2.261 24.236-7.322 34.45-14.8 9.82-7.27 7.92-15.48 6.43-20.34-22.192-71.977-89.169-121.415-164.489-121.415-94.428 0-172.13 77.702-172.13 172.13s77.702 172.13 172.13 172.13c75.32 0 142.297-49.438 164.489-121.415 1.49-4.86 3.39-13.07-6.43-20.34"/></g><path d="m290.72 138.8c-3.93.653-7.906.987-11.89 1-26.11 0-35.9-8.69-47.24-18.74-10.94-9.7-24.56-21.77-49.34-21.77h-14.8c-17.92 0-34.2 6.51-45.86 18.31-11.39 11.53-17.66 27.31-17.66 44.44v20.25c0 17.13 6.27 32.91 17.66 44.44 11.66 11.8 27.94 18.3 45.86 18.3h14.8c24.78 0 38.4-12.06 49.34-21.76 11.34-10 21.13-18.74 47.24-18.74 3.982.001 7.958.319 11.89.95 2.257-5.631 3.932-11.478 5-17.45.006-.1.006-.2 0-.3-5.587-1.036-11.258-1.555-16.94-1.55-60 0-56.86 40.51-96.58 40.51h-14.8c-27.26 0-45.17-19.48-45.17-44.4v-20.29c0-24.92 17.91-44.39 45.17-44.39h14.8c39.72 0 36.6 40.49 96.58 40.49 5.683.01 11.354-.509 16.94-1.55v-.28c-1.075-5.977-2.75-11.83-5-17.47" fill="#0ae8f0"/><path d="m290.72 138.8c-3.93.653-7.906.987-11.89 1-26.11 0-35.9-8.69-47.24-18.74-10.94-9.7-24.56-21.77-49.34-21.77h-14.8c-17.92 0-34.2 6.51-45.86 18.31-11.39 11.53-17.66 27.31-17.66 44.44v20.25c0 17.13 6.27 32.91 17.66 44.44 11.66 11.8 27.94 18.3 45.86 18.3h14.8c24.78 0 38.4-12.06 49.34-21.76 11.34-10 21.13-18.74 47.24-18.74 3.982.001 7.958.319 11.89.95 2.257-5.631 3.932-11.478 5-17.45.006-.1.006-.2 0-.3-5.587-1.036-11.258-1.555-16.94-1.55-60 0-56.86 40.51-96.58 40.51h-14.8c-27.26 0-45.17-19.48-45.17-44.4v-20.29c0-24.92 17.91-44.39 45.17-44.39h14.8c39.72 0 36.6 40.49 96.58 40.49 5.683.01 11.354-.509 16.94-1.55v-.28c-1.075-5.977-2.75-11.83-5-17.47" fill="#0ae8f0"/></g></g></svg></a>
            </div>
        </div>




    </div>
    <div class=" flex flex-col text-center items-center  w-full gap-6 justify-between bg-primary-300 text-white p-8 lg:p-20 ">
       <h2 class="text-5xl font-bold" >We Are Proudly Affiliated With...</h2>
        <img class="lg:w-1/3 sm:w-full" src="{{ asset('images/ade-logo.webp') }}"/>
        <img class="lg:w-1/3 sm:w-full" src="{{ asset('images/murrieta-wildomar-coc-logo.webp') }}"/>
        {{-- <img class="lg:w-2/3 sm:w-full" src="{{ asset('images/Asociación de Emprendedo.avif') }}"/> --}}
    </div>
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <div class="flex flex-col items-center">

            <h1 class="hexagon logo bg-[#5694b9] h-40 "><span class="sr-only">Bradfield Consulting Inc</span></h1>
            <div class="hexagon  bg-[#5694b9] h-60 relative right-40 top-2 "></div>
            <div class="hexagon ana h-52"><span class="sr-only">Ana Bradfield Photo</span></div>
            <h2 class="font-['Windsong'] text-5xl text-white">Ana Bradfield</h2>
            <h3>CRTP Tax Preparer</h3>
            <div class="m-8" class="flex flex-col text-primary-800">
            <blockquote class="text-lg italic Xfont-serif" class="uppercase tracking-tight before:content-['“']  after:content-['”'] text-primary-300">With a Heavy emphasis on company and personal growth, along with tax planning, We help the small sole proprietor gain the confidence to successful business ownership.</blockquote>
            <p class="self-end">—Ana Bradfield</p>
            </div>
        </div>
                </div>
        </div>
    </div> -->
</x-guest-layout>

