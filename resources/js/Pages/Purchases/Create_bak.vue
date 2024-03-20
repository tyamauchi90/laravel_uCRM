<script setup>
import { getToday } from '@/common';
import { router } from '@inertiajs/vue3';
import { computed, onMounted, reactive, ref } from 'vue';

const props = defineProps({
  'customers': Array,
  'items': Array,
})

const quantity = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"] //option用

onMounted(() => {
  form.date = getToday();
  props.items.forEach((item) => {
    itemList.value.push({
      id: item.id,
      name: item.name,
      price: item.price,
      quantity: 0
    })
  })
})

const itemList = ref([]);

const form = reactive({
  date: null,
  customer_id: null,
  status: true,
  items: [],
})

const totalPrice = computed(() => {
  let total = 0;
  itemList.value.forEach((item) => {
    total += item.price * item.quantity;
  })
  return total;
})

const storePurchase = () => {
  itemList.value.forEach((item) => {
    if (item.quantity > 0) {
      form.items.push({
        id: item.id,
        quantity: item.quantity,
      })
    }
  })
  router.post('/purchases', form)
}
</script>

<template>
  <form @submit.prevent="storePurchase">
    <p class="my-4">日付</p>
    <input type="date" name="date" v-model="form.date">

    <p class="my-4">会員名</p>
    <select name="customer" v-model="form.customer_id">
      <option v-for="customer in customers" :value="customer.id" :key="customer.id">
        {{ customer.id }}:{{ customer.name }}
      </option>
    </select>

    <p class="my-4">商品・サービス</p>
    <table>
      <thead>
        <tr>
          <td>Id</td>
          <td>商品名</td>
          <td>金額</td>
          <td>数量</td>
          <td>小計</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in itemList">
          <td class="p-2">{{ item.id }}</td>
          <td class="p-2">{{ item.name }}</td>
          <td class="p-2">{{ item.price }}</td>
          <td class="p-2">
            <select name="quantity" v-model="item.quantity">
              <option v-for="q in quantity" :value="q">{{ q }}</option>
            </select>
          </td>
          <td>
            {{ item.price * item.quantity }}
          </td>
        </tr>
      </tbody>
    </table>
    <p class="text-red-500">合計：{{ totalPrice }}円</p>
    <div>
      <button>登録する</button>
    </div>
  </form>
</template>