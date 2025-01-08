<x-guest-layout>
    <div class="flex w-full flex-col gap-4 bg-primary-800 p-10 text-white">
        <h1 class="mb-4 border-b border-white text-4xl font-bold">Logos</h1>
        <div class="flex gap-8">
            <div>
                <h2 class="text-lg font-bold">Theme-based</h2>
                <div class="flex flex-wrap">
                    <div class="bg-gray-500">
                        <h2 class="text-white">Shadow</h2>
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-40"
                            shadow
                        />
                    </div>
                    <div class="bg-gray-500">
                        <h2 class="text-white">No Shadow</h2>
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-40"
                        />
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-bold">Dark</h2>
                <div class="flex flex-wrap">
                    <div class="bg-gray-500">
                        <h2 class="text-white">Shadow</h2>
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-40"
                            mode="dark"
                            shadow
                        />
                    </div>
                    <div class="bg-gray-500">
                        <h2 class="text-white">No Shadow</h2>
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-40"
                            mode="dark"
                        />
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-bold">Light</h2>
                <div class="flex flex-wrap">
                    <div class="bg-gray-500">
                        <h2 class="text-white">Shadow</h2>
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-40"
                            mode="light"
                            shadow
                        />
                    </div>
                    <div class="bg-gray-500">
                        <h2 class="text-white">No Shadow</h2>
                        <x-bradfield-consulting-logo
                            name="footer_logo"
                            class="w-40"
                            mode="light"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h1 class="mb-4 border-b border-white text-4xl font-bold">Colors</h1>
            <div
                class="color-family-outline relative flex flex-col space-y-1 overflow-hidden rounded-lg md:flex-row md:space-x-1 md:space-y-0"
            >
                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(243, 246, 252); color: rgb(32, 58, 90)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(32, 58, 90)">
                            <div class="text-center text-sm font-medium">50</div>
                            <div class="text-center text-xs uppercase opacity-90">f3f6fc</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(230, 238, 248); color: rgb(32, 58, 90)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(32, 58, 90)">
                            <div class="text-center text-sm font-medium">100</div>
                            <div class="text-center text-xs uppercase opacity-90">e6eef8</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(200, 219, 239); color: rgb(32, 58, 90)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(32, 58, 90)">
                            <div class="text-center text-sm font-medium">200</div>
                            <div class="text-center text-xs uppercase opacity-90">c8dbef</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: #6d93b5; color: rgb(32, 58, 90)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(32, 58, 90)">
                            <div class="text-center text-sm font-medium">300</div>
                            <div class="text-center text-xs uppercase opacity-90">97bce2</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(95, 153, 209); color: rgb(230, 238, 248)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">400</div>
                            <div class="text-center text-xs uppercase opacity-90">5f99d1</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(58, 123, 189); color: rgb(230, 238, 248)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">500</div>
                            <div class="text-center text-xs uppercase opacity-90">3a7bbd</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(39, 91, 149); color: rgb(230, 238, 248)"
                >
                    <span class="group absolute left-1/2 top-2 -translate-x-1/2 transform cursor-pointer p-2">
                        BRAND
                    </span>
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">600</div>
                            <div class="text-center text-xs uppercase opacity-90">275b95</div>
                        </div>
                    </div>
                </div>
                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(35, 78, 129); color: rgb(230, 238, 248)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">700</div>
                            <div class="text-center text-xs uppercase opacity-90">234e81</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: #172859; color: rgb(230, 238, 248)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">800</div>
                            <div class="text-center text-xs uppercase opacity-90">20436c</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(32, 58, 90); color: rgb(230, 238, 248)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">900</div>
                            <div class="text-center text-xs uppercase opacity-90">203a5a</div>
                        </div>
                    </div>
                </div>

                <div
                    class="relative flex h-14 w-full flex-col justify-center rounded-lg p-2 md:h-24 md:py-4"
                    style="background-color: rgb(21, 37, 60); color: rgb(230, 238, 248)"
                >
                    <div class="flex cursor-pointer items-center justify-between px-4 md:mt-auto md:block md:px-0">
                        <div style="color: rgb(230, 238, 248)">
                            <div class="text-center text-sm font-medium">950</div>
                            <div class="text-center text-xs uppercase opacity-90">15253c</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
