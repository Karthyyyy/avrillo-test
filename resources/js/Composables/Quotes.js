import { ref } from 'vue';
import axios from 'axios';

export const currentQuotes = ref({});
export const nextQuotes = ref();

export const getQuotes = () => {
    axios.get('/api/quotes', { 
        headers: {
            Authorization: `Bearer ${import.meta.env.VITE_API_TOKEN}`
        }
    }).then(response => {
        nextQuotes.value = response.data;
    });
}

export const setCurrentQuotes = (quotes) => {
    currentQuotes.value = quotes;
    // Preload next set of quotes for speed
    getQuotes();
}

export const setNextQuotes = () => {
    currentQuotes.value = nextQuotes.value;
    getQuotes();
}