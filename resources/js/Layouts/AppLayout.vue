<template>
    <Head :title="title" />
    <div class="md:p-10 py-10">
        <slot />
    </div>
</template>

<script lang="ts" setup>
import { Head, Link, router } from '@inertiajs/vue3';

defineProps({
    title: String,
});
</script>

<style>

</style>