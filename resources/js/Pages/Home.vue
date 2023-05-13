<script setup>
import { Head } from '@inertiajs/vue3';
import XeniBaseLayout from "@/Layouts/BaseLayout.vue";
</script>

<template>
    <Head title="HomePage" />
    <XeniBaseLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Это неавторизованная зона!</div>
                </div>
            </div>
        </div>
    </XeniBaseLayout>
</template>

<style scoped>

</style>
