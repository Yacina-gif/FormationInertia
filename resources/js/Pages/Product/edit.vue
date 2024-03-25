<template>
    <div class="flex flex-col w-full p-4 items-center justify-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">Add a new products</h1>

  <form @submit.prevent="Updateproduct" class="w-full">
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Name :</label>
    <input class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name" required type="text" v-model="form.name">
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Price :</label>
    <input class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="price" required type="number" v-model="form.price">
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Unite :</label>
    <input class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="unite" required type="number" v-model="form.unite">

    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none " type="submit" :disabled="form.processing">save</button>
  </form>
</div>
</template>


<script setup>
import { useForm } from '@inertiajs/vue3'
const porps = defineProps({
    product: {
        type: Object,
        default: []
    }
});
const form = useForm({
    name: porps.product.name,
    price: porps.product.price,
    unite: porps.product.unite,
})


const Updateproduct = () => {

    form.put(route('product.update', porps.product.id), {
    })

}
</script>
