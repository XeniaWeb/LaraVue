<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import BackFoundation from "@/Components/BackFoundation.vue";

defineProps({
    socials: Object,
});

</script>

<template>
    <Head title="Socials: Add"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">New Social</h2>
        </template>

        <BackFoundation>
            <table class="table table-auto">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Comment</th>
                </tr>
                </thead>
                <tbody>
                <tr  v-for="social in socials" :key="social.id">
                    <td>
                        {{ social.id }}
                    </td>
                    <td>
                        {{ social.title }}
                    </td>
                    <td class="">
                        <img :src="`../assets/svg/icons/${social.lang_key}.svg` " alt="" class="h-8 text-amber-50-amber-200">
                    </td>
                    <td>
                        {{ social.comment }}
                    </td>
                </tr>
                </tbody>
            </table>
        </BackFoundation>

    </AuthenticatedLayout>
</template>

<style scoped>

</style>
