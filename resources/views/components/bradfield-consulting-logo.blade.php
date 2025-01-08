@props([
    "mode",
    "shadow",
    "name",
])

@php
    $mode = $mode ?? "theme";
    // switch($mode){
    //   case 'dark':
    //     $theme = "dark-theme";
    //     break;
    //   case 'light':
    //     $theme = "light-theme";
    //     break;
    //   default :
    //   $theme = "theme";
    //   break;
    // }
    // $color = in_array($mode,["light","theme"]) ? "#fff" : "#000";
    $classes = $mode ?? false ? "dark" : "light-mode";
    $id = "bc_logo_" . uniqid();
@endphp

<svg
    id="{{ $id }}"
    {{ $attributes->merge(["class" => $mode]) }}
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 612 233.33"
    aria-label="{{ config("app.name") }} Logo"
    role="image"
    xmlns:xlink="http://www.w3.org/1999/xlink"
>
    <defs>
        <style>
            .dark #{{ $id }}.dark .uuid-c4012269-d914-4347-97e0-c124b1f6dd79,
            #{{ $id }}.dark .uuid-c4012269-d914-4347-97e0-c124b1f6dd79 {
                fill: #000000;
            }
            .dark #{{ $id }}.theme .uuid-c4012269-d914-4347-97e0-c124b1f6dd79,
            #{{ $id }}.light .uuid-c4012269-d914-4347-97e0-c124b1f6dd79 {
                fill: #ffffff;
            }
            .uuid-23de0ffc-291e-4182-a4c2-f8fd8534224e {
                fill: #fff;
            }

            .uuid-24c4308e-bf26-423c-b0e6-b9c0a6cc93f4 {
                mix-blend-mode: multiply;
                opacity: 0.4;
            }

            .uuid-ead665a6-fe96-46fc-a97d-f01f9c5ef7e3 {
                isolation: isolate;
            }

            .uuid-7bb61390-a78e-4d04-9db2-585f28a5f4f6 {
                fill: #275b95;
            }
        </style>
    </defs>
    <g class="uuid-ead665a6-fe96-46fc-a97d-f01f9c5ef7e3">
        <g
            id="uuid-1437bf46-2fc3-495c-90dc-33b192507553"
            data-name="Layer 2"
        >
            <g>
                @if (isset($shadow))
                    <image
                        class="uuid-24c4308e-bf26-423c-b0e6-b9c0a6cc93f4"
                        width="507"
                        height="200"
                        transform="translate(104.78 134.51) scale(.23 .21)"
                        xlink:href="data:image/png;base64,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"
                    />
                @endif

                <circle
                    class="uuid-23de0ffc-291e-4182-a4c2-f8fd8534224e"
                    cx="158.56"
                    cy="112.9"
                    r="45.7"
                />
                <g>
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M241.79,88.72c3.44-2.25,5.48-5.75,5.48-9.69s-1.49-6.99-4.26-9.05c-3.06-2.48-7.13-3.58-13.2-3.58-3.88,0-8.03.37-10.84.96l-1.19.25v46.43l1.3.18c1.47.2,4.62.54,9.15.54,7.71,0,13.08-1.49,16.47-4.6,2.81-2.72,4.23-6.09,4.23-10.02,0-5.79-3.38-9.51-7.13-11.44ZM230.28,85.61h-3.73v-11.59c.98-.12,2.19-.17,3.6-.17,8.3,0,8.3,4.35,8.3,5.78,0,3.63-3.21,5.98-8.17,5.98ZM229.88,107.26c-1.39,0-2.48-.03-3.33-.1v-14.19h3.27c3.01,0,10.02.69,10.02,7.11,0,5.93-5.41,7.18-9.96,7.18Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M269.65,79.12l-1.13-.29c-.69-.17-1.28-.24-2.02-.24-3.01,0-5.77,1.35-7.79,3.64l-.09-2.92h-8.16l.11,1.6c.18,2.72.26,5.77.26,9.9v23.55h8.76v-18.59c0-.88.12-1.71.24-2.45.7-3.86,3.13-6.25,6.34-6.25.65,0,1.15.05,1.66.16l1.83.41v-8.54Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M297.67,105.19v-11.99c0-9.42-4.86-14.61-13.69-14.61-4.19,0-8.33,1.13-11.35,3.09l-.98.64,2.33,6.76,1.61-1.04c2.08-1.34,4.89-2.14,7.53-2.14,3.67,0,5.51,1.62,5.76,5.09-7.34.17-12.69,1.89-15.92,5.1-2.2,2.19-3.32,4.98-3.32,8.3,0,5.32,3.88,10.71,11.3,10.71,3.34,0,6.48-1.11,8.86-3.08l.27,2.35h8.43l-.32-1.77c-.34-1.87-.5-4.29-.5-7.41ZM282.46,107.79c-1.2,0-4-.4-4-4.06,0-1.35.42-2.41,1.27-3.25,1.6-1.56,4.8-2.41,9.31-2.48v4.07c0,.39-.09.9-.25,1.37-.72,2.1-2.76,4.35-6.33,4.35Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M333.42,104.59v-40.24h-8.83v16.84c-2.17-1.67-5.06-2.6-8.3-2.6-4.01,0-7.78,1.58-10.63,4.43-3.42,3.44-5.28,8.52-5.25,14.28,0,10.31,6.4,17.79,15.21,17.79,3.8,0,7.27-1.37,9.75-3.73l.14,3h8.3l-.15-1.64c-.23-2.48-.26-6.17-.26-8.14ZM317.29,107.4c-5.88,0-7.97-5.35-7.97-10.35,0-6.61,3.18-10.88,8.1-10.88,3.9,0,6.3,2.81,6.96,5.65.13.48.21,1.26.21,2.06v5.56c0,.89-.07,1.54-.22,2.16-.84,3.47-3.69,5.81-7.08,5.81Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M348.12,79.23c0-7.08,3.68-7.9,6.45-7.9s4.87.85,5.88,1.57l1.59,1.14,2.74-7.34-.93-.67c-1.93-1.39-5.73-2.4-9.02-2.4-9.54,0-15.47,5.93-15.47,15.47v.22h-4.5v7.44h4.5v27.62h8.76v-27.62h9.85v27.62h8.76v-35.05h-18.61v-.09Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M386.29,78.59c-9.73,0-16.53,7.72-16.53,18.78s6.78,17.66,17.26,17.66c5.44,0,9.14-1.15,11.28-2.12l1.13-.51-1.69-7.1-1.63.69c-1.88.8-4.19,1.54-8.29,1.54-2.63,0-8.55-.83-9.4-8.13h22.26l.18-1.6c.07-.6.18-1.51.18-2.62,0-8.26-4.56-16.6-14.75-16.6ZM385.82,85.76c1.89,0,3.4.56,4.48,1.67,1.38,1.4,1.86,3.39,2.02,4.8h-13.63c.78-2.93,2.85-6.47,7.13-6.47Z"
                    />
                    <rect
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        x="403.92"
                        y="64.35"
                        width="8.83"
                        height="50.02"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M449.16,112.73c-.23-2.48-.26-6.17-.26-8.14v-40.24h-8.83v16.84c-2.17-1.67-5.06-2.6-8.3-2.6-4.01,0-7.78,1.58-10.62,4.43-3.42,3.44-5.28,8.52-5.25,14.28,0,10.31,6.4,17.79,15.21,17.79,3.8,0,7.27-1.37,9.75-3.73l.14,3h8.3l-.15-1.64ZM432.77,107.4c-5.88,0-7.97-5.35-7.97-10.35,0-6.61,3.18-10.88,8.1-10.88,3.9,0,6.3,2.81,6.96,5.65.13.48.21,1.26.21,2.06v5.56c0,.89-.07,1.54-.22,2.16-.84,3.47-3.69,5.81-7.08,5.81Z"
                    />
                </g>
                <g>
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M234.02,145.72c-1.16.58-3.47,1.16-6.43,1.16-6.87,0-12.03-4.34-12.03-12.32s5.17-12.79,12.72-12.79c3.04,0,4.95.65,5.78,1.08l-.76,2.57c-1.19-.58-2.89-1.01-4.91-1.01-5.71,0-9.5,3.65-9.5,10.04,0,5.96,3.43,9.79,9.36,9.79,1.92,0,3.87-.4,5.13-1.01l.65,2.49Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M262.35,134.08c0,8.38-5.09,12.83-11.31,12.83s-10.95-4.99-10.95-12.36c0-7.73,4.81-12.79,11.31-12.79s10.95,5.09,10.95,12.32ZM243.45,134.48c0,5.2,2.82,9.86,7.77,9.86s7.8-4.59,7.8-10.12c0-4.84-2.53-9.9-7.77-9.9s-7.8,4.81-7.8,10.15Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M270.77,146.51v-24.35h3.43l7.8,12.32c1.81,2.85,3.22,5.42,4.37,7.91l.07-.04c-.29-3.25-.36-6.21-.36-10.01v-10.19h2.96v24.35h-3.18l-7.73-12.36c-1.7-2.71-3.32-5.49-4.55-8.13l-.11.04c.18,3.07.25,6,.25,10.04v10.41h-2.96Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M298.45,142.68c1.41.87,3.47,1.59,5.64,1.59,3.22,0,5.09-1.7,5.09-4.16,0-2.28-1.3-3.58-4.59-4.84-3.97-1.41-6.43-3.47-6.43-6.9,0-3.79,3.14-6.61,7.88-6.61,2.49,0,4.3.58,5.38,1.19l-.87,2.57c-.79-.43-2.42-1.16-4.63-1.16-3.32,0-4.59,1.99-4.59,3.65,0,2.28,1.48,3.4,4.84,4.7,4.12,1.59,6.21,3.58,6.21,7.15,0,3.76-2.78,7.01-8.53,7.01-2.35,0-4.91-.69-6.21-1.55l.79-2.64Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M324.18,122.16v14.42c0,5.46,2.42,7.77,5.67,7.77,3.61,0,5.93-2.38,5.93-7.77v-14.42h3.18v14.2c0,7.48-3.94,10.55-9.21,10.55-4.99,0-8.74-2.85-8.74-10.41v-14.34h3.18Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M348.76,122.16h3.14v21.72h10.41v2.64h-13.55v-24.35Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M371.59,124.83h-7.41v-2.67h18.03v2.67h-7.44v21.68h-3.18v-21.68Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M392.41,122.16v24.35h-3.14v-24.35h3.14Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M402.24,146.51v-24.35h3.43l7.8,12.32c1.81,2.85,3.22,5.42,4.37,7.91l.07-.04c-.29-3.25-.36-6.21-.36-10.01v-10.19h2.96v24.35h-3.18l-7.73-12.36c-1.7-2.71-3.32-5.49-4.55-8.13l-.11.04c.18,3.07.25,6,.25,10.04v10.41h-2.96Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M448.89,145.43c-1.41.51-4.19,1.34-7.48,1.34-3.69,0-6.72-.94-9.11-3.22-2.1-2.02-3.4-5.28-3.4-9.07.04-7.26,5.02-12.57,13.19-12.57,2.82,0,5.02.61,6.07,1.12l-.76,2.57c-1.3-.58-2.93-1.05-5.38-1.05-5.93,0-9.79,3.69-9.79,9.79s3.72,9.83,9.39,9.83c2.06,0,3.47-.29,4.19-.65v-7.26h-4.95v-2.53h8.02v11.71Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M473.18,122.16v24.35h-3.14v-24.35h3.14Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M483.26,133.76c0-1.81-.04-3.29-.14-4.73h2.82l.18,2.89h.07c.87-1.66,2.89-3.29,5.78-3.29,2.42,0,6.18,1.45,6.18,7.44v10.44h-3.18v-10.08c0-2.82-1.05-5.17-4.05-5.17-2.1,0-3.72,1.48-4.26,3.25-.14.4-.22.94-.22,1.48v10.51h-3.18v-12.75Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M520.12,145.86c-.83.43-2.67,1.01-5.02,1.01-5.28,0-8.71-3.58-8.71-8.92s3.69-9.29,9.39-9.29c1.88,0,3.54.47,4.41.9l-.72,2.46c-.76-.43-1.95-.83-3.69-.83-4.01,0-6.18,2.96-6.18,6.61,0,4.05,2.6,6.54,6.07,6.54,1.81,0,3-.47,3.9-.87l.54,2.38Z"
                    />
                    <path
                        class="uuid-c4012269-d914-4347-97e0-c124b1f6dd79"
                        d="M527.06,144.63c0-1.34.9-2.28,2.17-2.28s2.13.94,2.13,2.28-.83,2.28-2.17,2.28c-1.26,0-2.13-.98-2.13-2.28Z"
                    />
                </g>
                <path
                    class="uuid-7bb61390-a78e-4d04-9db2-585f28a5f4f6"
                    d="M158.56,65.2c-26.3,0-47.7,21.4-47.7,47.7s21.4,47.7,47.7,47.7,47.7-21.4,47.7-47.7-21.4-47.7-47.7-47.7ZM122.99,138.25c-5.11-7.15-8.14-15.9-8.14-25.35s3.02-18.19,8.14-25.35v50.69ZM195.71,94.39v-4.46c4.14,6.68,6.54,14.55,6.54,22.97,0,5.95-1.2,11.63-3.36,16.8h-15.22s-11.4-.01-11.4-.01v-38.2h11.4v9.25l12.04-6.34ZM158.56,156.6c-13.45,0-25.49-6.11-33.51-15.69h15.69c4.97,0,9.11-1.33,12.44-3.98,3.54-2.82,5.3-6.55,5.3-11.18v-5.63c0-4.35-1.8-7.72-5.41-10.11,2.63-2.32,3.94-5.3,3.94-8.96v-12.51c0-2.29-.88-4.25-2.65-5.88-1.77-1.6-3.87-2.4-6.31-2.4h-18.51c7.72-6.88,17.89-11.07,29.02-11.07s21.33,4.2,29.06,11.1c-.26-.02-.52-.03-.79-.03h-17.7c-2.41,0-4.49.8-6.24,2.4-1.77,1.62-2.65,3.58-2.65,5.88v44.08c0,2.29.88,4.25,2.65,5.88,1.74,1.6,3.82,2.4,6.24,2.4h22.95c-8.02,9.58-20.07,15.69-33.51,15.69ZM142.13,116.22c1.15,0,2.15.37,3.01,1.11.86.76,1.29,1.7,1.29,2.8v5.63c0,2.63-1.9,3.94-5.7,3.94h-5.7v-13.48h7.1ZM135.03,104.96v-13.48h9.93v9.57c0,1.08-.44,2.01-1.33,2.8-.86.74-1.88,1.11-3.05,1.11h-5.55Z"
                />
            </g>
        </g>
    </g>
</svg>
