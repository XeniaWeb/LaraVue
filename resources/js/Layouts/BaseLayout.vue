<script setup>
import XenTopMenu from '@/Elements/TopMenu.vue';
import XenFooter from '@/Elements/Footer.vue';
</script>

<template>
    <!--  My basic guest template -->
    <div class="overflow-hidden min-h-screen">
        <div v-if="$slots.page_background">
            <slot name="page_background"/>
        </div>

        <div class="min-h-screen grid-base relative">
            <XenTopMenu />
            <!-- Page Content -->
            <main>
                <div class="wrapper">
                    <!-- Page Heading -->
                    <div>
                        <header v-if="$slots.header">
                            <slot name="header"/>
                        </header>
                    </div>

                    <slot/>
                </div>
            </main>
            <XenFooter />
        </div>
    </div>
</template>

<style scoped>
.grid-base {
    display: grid;
    grid-template-areas: "top-menu" "main" "footer";
    grid-template-rows: auto 1fr auto;
}
</style>
