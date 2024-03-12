<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

defineProps({
    errors: Object,
});

const form = reactive({
    title: "",
    content: "",
});

const submitFunction = () => {
    Inertia.post("/inertia", form);
};
</script>

<template>
    <div class="space-y-4">
        <h1 class="text-5xl">Create.vue</h1>
        <form class="space-y-4" @submit.prevent="submitFunction">
            <input type="text" name="title" v-model="form.title" /><br />
            <div v-if="errors.title" class="text-red-500">
                {{ errors.title }}
            </div>
            <input type="text" name="content" v-model="form.content" /><br />
            <div v-if="errors.content" class="text-red-500">
                {{ errors.content }}
            </div>
            <button>送信</button>
        </form>
    </div>
</template>
