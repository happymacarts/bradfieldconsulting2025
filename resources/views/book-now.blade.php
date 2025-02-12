<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __("Book Now") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Calendly inline widget begin -->
        <div
            class="calendly-inline-widget"
            data-url="https://calendly.com/biztaxconsult/free_consult"
            style="min-width: 320px; height: 700px"
        ></div>
        <script
            type="text/javascript"
            src="https://assets.calendly.com/assets/external/widget.js"
            async
        ></script>
        <!-- Calendly inline widget end -->
    </div>
</x-guest-layout>
