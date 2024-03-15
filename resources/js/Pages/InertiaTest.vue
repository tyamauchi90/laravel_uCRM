<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const newTitle = ref("");
const newContent = ref("");
</script>

<template>
  inertiaテストです。<br />
  <a href="/">aタグでWelcomeに移動</a><br />
  <Link href="/">LinkでWelcomeに移動</Link><br />
  <Link v-bind:href="route('inertia.index')">名前付きルートの確認です</Link><br />
  <Link v-bind:href="route('inertia.show', { id: 1 })">ルートパラメータのテストです</Link>

  <div class="mb-8">
    newTitle:{{ newTitle }}
    <input type="text" name="newTitle" v-model="newTitle" /><br />
    newContent:{{ newContent }}
    <input type="text" name="newContent" v-model="newContent" /><br />
    <Link as="button" v-bind:href="route('inertia.store')" method="POST" v-bind:data="{
    title: newTitle,
    content: newContent,
  }">
    DB保存テスト
    </Link>
  </div>
</template>
