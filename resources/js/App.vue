<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-900 text-white relative">
        <!-- Title Section -->
        <h1 class="text-5xl font-bold text-yellow-400 mb-4">
            Excusify
        </h1>
        <p class="text-center text-lg mb-8">

        </p>

        <!-- Code Editor Container with Excuse Message -->
        <div ref="codeContainer" class="relative bg-blue-500 rounded-lg shadow-lg border border-gray-700 p-6 max-w-3xl">
            <div class="bg-gray-900 rounded-lg p-6 text-left text-sm leading-6 font-mono text-white">
                <div class="text-sm">
                    {{excuse}}
                </div>
            </div>
        </div>

        <!-- Download and Tweet Buttons -->
        <div class="flex space-x-4 mt-6">
            <button @click="downloadImage" class="bg-yellow-400 text-gray-900 font-semibold px-4 py-2 rounded-lg hover:bg-yellow-500 transition">
                Download
            </button>
            <button @click="tweetCode" class="bg-blue-400 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-500 transition">
                Tweet
            </button>
        </div>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import html2canvas from 'html2canvas';

export default {
    name: 'CarbonCloneDemo',
    setup() {
        const excuse = ref('Loading...');
        const codeContainer = ref(null);

        // Fetch excuse on component mount
        const getExcuse = async () => {
            try {
                const response = await fetch('/api/excuse');
                const data = await response.json();
                excuse.value = data.excuse || 'Désolé, cette interface est une démo statique.';
            } catch (error) {
                excuse.value = 'Erreur : impossible de récupérer une excuse.';
            }
        };

        // Function to download code as image
        const downloadImage = async () => {
            if (!codeContainer.value) return;

            try {
                const canvas = await html2canvas(codeContainer.value);
                const link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'code-snapshot.png';
                link.click();
            } catch (error) {
                console.error("Erreur lors de la capture d'écran :", error);
            }
        };

        // Function to share code on Twitter
        const tweetCode = () => {
            const text = encodeURIComponent(`Ma meilleure excuse : ${excuse.value}`);
            const url = `https://twitter.com/intent/tweet?text=${text}`;
            window.open(url, '_blank');
        };

        onMounted(getExcuse);

        return {excuse, downloadImage, tweetCode, codeContainer};
    }
}
</script>

<style scoped>
/* Additional styling, if necessary */
</style>
