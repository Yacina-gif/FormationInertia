<template>
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">products List</h1>
    <Link type="button" :href="route('product.create')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ">
    Add product</Link>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th class="px-6 py-3">id</th>
                <th class="px-6 py-3">name</th>
                <th class="px-6 py-3">price</th>
                <th class="px-6 py-3">unite</th>
                <th class="px-6 py-3">created_at</th>
                <th class="px-6 py-3">updated_at</th>
                <th class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in product">
                <td class="px-6 py-3">{{ item.id }}</td>
                <td class="px-6 py-3">{{ item.name }}</td>
                <td class="px-6 py-3">{{ item.price }}</td>
                <td class="px-6 py-3">{{ item.unite }}</td>
                <td class="px-6 py-3">{{ item.created_at }}</td>
                <td class="px-6 py-3">{{ item.updated_at }}</td>
                <td class="px-6 py-3">
                    <Link type="button" :href="route('product.edit', item.id)" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none "> Edit</Link>
                    <button type="button" @click="destroy(item.id)" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none "> Delete</button>
                </td>
            </tr>
        </tbody>

    </table>
    <Swal v-if="$page?.props.flash?.status" :status="$page?.props.flash?.status" />
</template>


<script setup>
import { Link } from '@inertiajs/vue3'
import Layout from '../../Layouts/MyLayou.vue'
import Swal from '../../Components/Swal.vue'

// defineOptions({ layout: Layout })

defineProps({
    product: {
        type: Array,
        default: []
    }
});

import { useForm } from '@inertiajs/vue3'
const form = useForm({
    id: null,
})

const destroy = (id) => {
    form.id = id;

    form.delete(route('product.destroy', form.id), {
        preserveScroll: true,
        onSuccess: (page) => { form.reset() },
    });
}

</script>
