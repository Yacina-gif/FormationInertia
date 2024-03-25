<template>
    <div class="flex flex-col w-full p-4 items-center justify-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">Add a new products</h1>

  <form @submit.prevent="Storeproduct" class="w-full">
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Name :</label>
    <input class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="name" type="text" v-model="form.name">
    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.name">{{ form.errors.name }}.</p>

    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Price :</label>
    <input class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="price" type="number" v-model="form.price">
    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.price">{{ form.errors.price }}.</p>

    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Unite :</label>
    <input class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required placeholder="unite" type="number" v-model="form.unite">
    <p class="mt-2 text-sm text-red-600 dark:text-red-500" v-if="form.errors.unite">{{ form.errors.unite }}.</p>

    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none " type="submit" :disabled="form.processing">save</button>
  </form>
</div>
</template>


<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    name: null,
    price: 0,
    unite: 0,
})


const Storeproduct = () => {

    form.post(route('product.store'), {
    })

}
</script>
