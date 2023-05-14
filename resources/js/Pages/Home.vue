<script setup>
import { Head } from '@inertiajs/vue3';
import XeniBaseLayout from "@/Layouts/BaseLayout.vue";
import BackFoundation from "@/Components/BackFoundation.vue";
import {trans} from "laravel-vue-i18n";
</script>

<template>
    <Head title="HomePage" />
    <XeniBaseLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight py-4">{{ trans('Home Page')}}</h2>
        </template>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-about bg-left-top bg-no-repeat fixed"></div>
        </template>

        <BackFoundation>
            <h1>Не авторизован!</h1>
        </BackFoundation>
    </XeniBaseLayout>
</template>

<style scoped>
.bg-about {
    //background-color: #757575;
    //background-image:
    //    /*linear-gradient(to left, transparent 25%, rgba(255, 255, 255, 0.7) 98%),*/ /*linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0.7) 15%, transparent),*/
    //    url('/images/bg-bayern5.jpg');
    //opacity: 0.7;
}
</style>
