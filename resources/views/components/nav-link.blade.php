@props([
    "active",
])

@php
    $classes =
        $active ?? false
            ? "inline-flex items-center border-b-2 border-primary-600 px-1 pt-1 text-sm font-medium leading-5 text-primary-600 transition duration-150 ease-in-out focus:border-primary-700 focus:outline-none dark:border-primary-300 dark:text-primary-50"
            : "inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-primary-500 transition duration-150 ease-in-out hover:border-primary-600 hover:text-primary-700 focus:border-primary-600 focus:text-primary-700 focus:outline-none dark:text-primary-200 dark:hover:border-primary-300 dark:hover:text-primary-300 dark:focus:border-primary-700 dark:focus:text-primary-600";
@endphp

<a {{ $attributes->merge(["class" => $classes]) }}>
    {{ $slot }}
</a>
