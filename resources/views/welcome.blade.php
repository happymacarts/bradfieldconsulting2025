<x-guest-layout>
    <style>
        body{
            background-color: #00285d;
            color: #e1e1e1;
        }
        .hexagon {
            /* height: 200px; adjust to control the size  */
            aspect-ratio: 1/cos(30deg);
            clip-path: polygon(50% -50%,100% 50%,50% 150%,0 50%);
            margin: .5rem
            /* background: #3B8686; */
        }
        .hexagon.ana{
            background-image: url("images/ana.jpg");
            background-size: cover;
        }
        .hexagon.logo{
            background-image: url("images/bc_logo_white.png");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
        .hexagon-border {
            --b: 10px; /* adjust to control the border  */
            height: 200px; /* adjust to control the size  */
            aspect-ratio: 1/cos(30deg);
            clip-path:
                polygon(0 50%,50% -50%,100% 50%,50% 150%,0 50%,
                var(--b) 50%,
                calc(25% + var(--b)*cos(60deg)) calc(100% - var(--b)*sin(60deg)),
                calc(75% - var(--b)*cos(60deg)) calc(100% - var(--b)*sin(60deg)),
                calc(100% - var(--b)) 50%,
                calc(75% - var(--b)*cos(60deg)) calc(var(--b)*sin(60deg)),
                calc(25% + var(--b)*cos(60deg)) calc(var(--b)*sin(60deg)),
                var(--b) 50%);
            background: #3B8686;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <div class="flex flex-col items-center">

            <h1 class="hexagon logo bg-[#5694b9] h-40 "><span class="sr-only">Bradfield Consulting Inc</span></h1>
            <div class="hexagon  bg-[#5694b9] h-60 relative right-40 top-2 "></div>
            <div class="hexagon ana h-52"><span class="sr-only">Ana Bradfield Photo</span></div>
            <h2 class="font-['Windsong'] text-5xl text-white">Ana Bradfield</h2>
            <h3>CRTP Tax Preparer</h3>
            <div class="m-8">
            <blockquote class="uppercase tracking-tight before:content-['“']  after:content-['”'] text-[#4a94b9]">With a Heavy emphasis on company and personal growth, along with tax planning, We help the small sole proprietor gain the confidence to successful business ownership.</blockquote>
            <p class="float-right">—Ana Bradfield</p>
            </div>
        </div>
                </div>
        </div>
    </div>
</x-guest-layout>

