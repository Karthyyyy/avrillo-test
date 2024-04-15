<template>
    <AppLayout title="Get Quotes">
        <div class="md:w-1/2 mx-auto bg-gray-800 p-5 md:rounded-xl">
            <div class="flex items-center justify-between flex-row px-2">
                <h1 class="text-2xl">Quotes From Kanye</h1>
                <button 
                    class="bg-green-400 px-3 py-1 rounded-md text-gray-900 hover:bg-green-300"
                    @click="setNextQuotes()"
                >
                    Refresh Quotes
                </button>
            </div>
            <div class="h-px w-full bg-gray-600 my-4"></div>
            <div v-for="quote in currentQuotes" class="my-2">
                {{ quote }}
            </div>
            
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { onMounted } from 'vue';
import { 
    getQuotes, 
    setCurrentQuotes, 
    currentQuotes, 
    setNextQuotes 
} from '@/Composables/Quotes';

const props = defineProps({
    quotes: Array,
});

onMounted(() => {
    setCurrentQuotes(props.quotes);
})
</script>

<style>

</style>