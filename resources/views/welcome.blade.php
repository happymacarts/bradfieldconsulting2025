<x-guest-layout>
    {{-- masthead --}}
    <div class="flex w-full flex-col gap-0 bg-primary-800">
        <div class="block items-center bg-primary-800 p-0 lg:flex">
            <img
                class="bg-primary-300 sm:w-full lg:w-2/3"
                src="{{ asset("images/BCmasthead.png") }}"
            />

            <div class="m-8 flex flex-col gap-4 p-2 text-white">
                <h2 class="font-['Windsong'] text-5xl text-white">Ana Bradfield</h2>

                <h3 class="flex flex-col text-primary-800">CRTP Tax Preparer</h3>
                <blockquote
                    class="Xfont-serif text-xl italic"
                    class="mt-12 uppercase tracking-tight text-primary-300 before:content-['“'] after:content-['”']"
                >
                    With a Heavy emphasis on company and personal growth, along with tax planning, We help the small
                    sole proprietor gain the confidence to successful business ownership.
                </blockquote>
                <p class="self-end italic text-white">—Ana Bradfield</p>
                <!-- Calendly link widget begin -->
                <link
                    href="https://assets.calendly.com/assets/external/widget.css"
                    rel="stylesheet"
                />
                <script
                    src="https://assets.calendly.com/assets/external/widget.js"
                    type="text/javascript"
                    async
                ></script>

                <x-wireui-button
                    icon="calendar"
                    primary
                    label="Book a Consultation"
                    class="self-center outline-1 outline-offset-4 outline-primary-300"
                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/biztaxconsult/free_consult'});return false;"
                    target="blank"
                />
                <!-- Calendly link widget end -->
            </div>
        </div>
    </div>

    {{-- About --}}
    <div class="m-auto block max-w-7xl items-center bg-primary-300 py-6 lg:flex">
        <div class="pb-30 mt-0 flex h-auto flex-col gap-4 p-12 text-primary-800">
            <a
                id="aboutus"
                class="offset-anchor"
            ></a>
            <h2 class="text-4xl font-bold">About our Company</h2>
            <p class="text-lg">
                Bradfield Consulting, Inc. is a 100% woman and minority-owned remote bookkeeping, tax planning,
                preparation, and filing service dedicated to empowering small businesses with financial expertise and
                advocacy.
            </p>

            <p class="text-lg">
                We offer comprehensive accounting solutions, tailored tax strategies, and access to capital through our
                network of local banks, all at affordable rates due to our virtual business model.
            </p>

            <p class="text-lg">
                Our commitment extends beyond financial services; we actively engage in lobbying efforts in Washington,
                D.C., to safeguard the rights of small businesses and foster an environment conducive to achieving the
                American dream.
            </p>
        </div>
        <div
            class="m-6 m-auto aspect-square w-1/2 border-8 border-primary-800 bg-[url('{{ asset("/images/strategy.webp") }}')] bg-cover bg-center bg-no-repeat"
            style="background-image: url({{ asset("images/strategy.webp") }})"
        ></div>
    </div>

    {{-- Leave worries --}}
    <div class="block items-center bg-primary-800 text-white lg:flex">
        <div class="m-auto block max-w-7xl content-center items-center gap-6 p-6 lg:flex">
            <img
                class="h-auto w-full md:w-1/5"
                src="{{ asset("images/coins.jpg") }}"
            />
            <h2 class="Xfont-serif my-10 text-2xl font-bold md:text-6xl">
                {{-- <img class=" w-full md:w-1/5 h-auto" src="{{ asset('images/micheile-henderson-lZ_4nPFKcV8-unsplash.jpg')}}"/> --}}
                Leave your accounting worries to us, so you can focus on growing your business.
            </h2>
        </div>
    </div>

    {{-- Why Bradfield Consulting? --}}
    <div
        class="m-auto block max-w-7xl content-center items-center gap-6 bg-primary-300 p-6 text-white lg:flex lg:flex-col"
    >
        <a
            id="why"
            class="offset-anchor"
        ></a>
        <h2 class="mb-4 border-b text-center text-4xl font-bold">Why Bradfield Consulting?</h2>
        <h3 class="animate-fade-right text-lg lg:text-2xl">
            Our Office is 100% virtual so you can meet with us from the comfort of your home.
            <x-wireui-link
                primary
                label="Book a Consultation Now!"
                class="inline"
                underline="always"
                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/biztaxconsult/free_consult'});return false;"
                target="blank"
            />
        </h3>
        <h3 class="animate-fade-left text-lg lg:text-2xl">We spend over 100 hours per year learning new tax laws.</h3>
        <h3 class="animate-fade-right text-lg lg:text-2xl">
            90% of our clients are referral based from past & current clients.
        </h3>
        <h3 class="animate-fade-left text-lg lg:text-2xl">
            We work with a group of trusted professionals that we can refer our clients to with confidence.
        </h3>
    </div>

    {{-- Services --}}
    <div class="m-auto block items-center bg-primary-800 p-8 text-white lg:flex lg:px-20">
        <a
            id="services"
            class="offset-anchor"
        ></a>
        <div class="m-auto max-w-7xl">
            <h2 class="mb-6 flex flex-col items-center text-4xl font-bold">
                <span>Our Services</span>

                <x-wireui-button
                    href="{{ route('services')}}"
                    class="m-auto my-4 self-center"
                    label="More Information on our Services"
                    primary
                />
            </h2>
            @include("partials._services")
        </div>
    </div>

    {{-- What Are People Saying --}}
    <div
        class="m-auto block content-center items-center gap-6 bg-primary-300 p-6 text-white md:px-28 lg:flex lg:flex-col"
    >
        <a
            id="customers"
            class="offset-anchor"
        ></a>
        <h2 class="mb-4 border-b text-center text-4xl font-bold">What Are People Saying?</h2>
        <div
            id="customers_content"
            class="m-auto max-w-4xl"
        >
            <div class="flex flex-col">
                <blockquote class="Xfont-serif text-lg italic">
                    “Ana was excellent with her consult! Ana answered all my questions quickly and efficiently. Great
                    communication, will use again and again.”
                </blockquote>
                <p class="self-end italic">— V. J.</p>
            </div>

            <div class="flex flex-col">
                <blockquote class="Xfont-serif text-lg italic">
                    “I highly recommend Bradfield Consulting! Very knowledgeable in all aspects of business finances,
                    taxes, and accounting. As a first year small business owner, I was feeling lost and overwhelmed, but
                    thanks to Ana's guidance I now feel that my business has excellent room for growth and am confident
                    in making financial decisions. Always friendly and professional, wouldn't go anywhere else!”
                </blockquote>
                <p class="self-end italic">— C.W.</p>
            </div>

            <div class="flex flex-col">
                <blockquote class="Xfont-serif text-lg italic">
                    “Ana took the time to answer numerous bookkeeping and HR questions. She was knowledgeable and her
                    experience was evident. Thank you Ana!”
                </blockquote>
                <p class="self-end italic">— K.L.G.</p>
            </div>

            <div class="flex flex-col">
                <blockquote class="Xfont-serif text-lg italic">
                    “Ana came highly recommended on our local Community Facebook group by many people. She offered me a
                    free consultation and it was more than worth my time and money, I would have paid for it. She gave
                    me a clear action plan and some things to plan for the future. She is very good at simplifying money
                    and business discussions and takes all of the stress out of the situation. When my business grows I
                    look forward to working with her on a regular basis. Highly recommend!”
                </blockquote>
                <p class="self-end italic">— J. P.</p>
            </div>
        </div>
    </div>

    {{-- Stay Connected! --}}
    <div
        class="block w-full items-center justify-between gap-8 bg-primary-800 p-8 text-center text-white md:flex md:flex-col lg:p-20"
    >
        <a
            id="connect"
            class="offset-anchor"
        ></a>
        <div class="max-w-7xl">
            <h2 class="text-4xl font-bold lg:text-7xl">Stay Connected!</h2>
            <h3 class="uppercase">join our monthly newsletter</h3>
            <x-wireui-button
                primary
                2xl
                label="Join Now!"
                target="_blank"
                href="http://eepurl.com/i68Y_I"
                class="my-6"
                icon="envelope-open"
            />
            <p>
                Stay connected for the latest tax updates and practical business tips designed to keep your financial
                strategies on track. As a tax professional, I specialize in breaking down complex tax regulations into
                actionable insights that save you time and money. From navigating new tax laws to optimizing deductions,
                I provide timely, reliable advice tailored to small business owners and entrepreneurs. Plus, I share
                valuable tips on streamlining financial processes, improving cash flow, and making informed decisions
                for long-term success. Follow along to stay ahead of the curve and ensure your business thrives.
            </p>

            @include("partials.social")
        </div>
    </div>

    {{-- Proudly Affiliated --}}
    <a
        id="affiliations"
        class="offset-anchor"
    ></a>
    <div class="w-full items-center justify-between gap-6 bg-primary-300 p-8 text-center text-white lg:p-20">
        <div class="m-auto max-w-7xl items-center justify-center text-center md:flex md:flex-col">
            <h2 class="mb-4 text-4xl font-bold">We Are Proudly Affiliated With...</h2>
            <div class="flex flex-col items-center justify-center gap-10 text-center md:flex-row">
                <a
                    class="m-auto w-1/2 text-center lg:w-1/3"
                    target="_blank"
                    href="https://www.asociaciondeemprendedores.org/"
                >
                    <img
                        class=""
                        src="{{ asset("images/ade-logo.webp") }}"
                        alt="Asociacion de Emprendedor@s"
                    />
                </a>
                <a
                    class="w-1/2 text-center lg:w-1/3"
                    target="_blank"
                    href="https://www.murrietachamber.org/"
                >
                    <img
                        class=""
                        src="{{ asset("images/murrieta-wildomar-coc-logo.webp") }}"
                        alt="Murrieta Wildomar Chamber of Commerce Logo"
                    />
                </a>
                <a
                    class="w-1/2 text-center lg:w-1/3"
                    target="_blank"
                    href="https://www.nsbaadvocate.org/"
                >
                    <img
                        class=""
                        src="{{ asset("images/nsba-logo.png") }}"
                        title="Former Member"
                        alt="NSBA Logo"
                    />
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
