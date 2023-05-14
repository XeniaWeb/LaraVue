<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import BackFoundation from "@/Components/BackFoundation.vue";

const form = useForm({
    title: '',
    lang_key: '',
    comment: '',
});

const submit = () => {
    form.post(route('admin.social.store'), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Socials: Add"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">New Social</h2>
        </template>

        <BackFoundation>
            <form @submit.prevent="submit">
                <!-- Title -->
                <div class="mb-4">
                    <InputLabel for="title" :value="$t('Title')"/>
                    <TextInput
                        id="title"
                        type="text"
                        class="mt-1 block w-full md:w-2/3"
                        v-model="form.title"
                        required
                        autofocus
                        autocomplete="title"
                    />
                    <InputError class="mt-2" :message="form.errors.title"/>
                </div>
                <!-- Lang key -->
                <div class="mb-4">
                    <InputLabel for="lang_key" :value="$t('Имя иконки из Font-Awesome на латинице')"/>
                    <div class="lg:flex  items-center">
                        <TextInput
                            id="lang_key"
                            type="text"
                            class="mt-1 block w-full md:w-2/3"
                            v-model="form.lang_key"
                            required
                            autocomplete="lang_key"
                        />
                        <span
                            class="theme-btn bg-white/10 text-sm py-1 hover:bg-gray-200 text-gray-400 lg:ml-6"><a
                            class="hover:text-gray-100" href="https://fontawesome.com/search?f=brands&o=r"
                            target="_blank">посмотреть названия иконок</a></span>
                    </div>
                    <InputError class="mt-2" :message="form.errors.lang_key"/>
                </div>
                <!-- Comment -->
                <div class="mb-4">
                    <InputLabel for="comment-social" :value="$t('Комментарий')"/>
                    <TextInput
                        id="comment-social"
                        type="text"
                        class="mt-1 block w-full md:w-2/3"
                        v-model="form.comment"
                        autocomplete="comment"
                    />
                    <InputError class="mt-2" :message="form.errors.comment"/>
                </div>

                <PrimaryButton class="ml-4 bg-indigo-500" :class="{ 'opacity-25': form.processing }"
                               :disabled="form.processing">
                    Save
                </PrimaryButton>

            </form>
        </BackFoundation>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
