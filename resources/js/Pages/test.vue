<template>

    <Link class="text-xl font-bold text-gray-900 hover:text-blue-600 p-3" href="/home">home</Link>
    <Link class="text-xl font-bold text-gray-900 hover:text-blue-600 p-3" href="/user">user</Link>
    <Link class="text-xl font-bold text-gray-900 hover:text-blue-600 p-3" href="/about">about</Link>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>email_verified_at</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in user">
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.email }}</td>
                <td>{{ item.created_at }}</td>
                <td>{{ item.updated_at }}</td>
                <td>{{ item.email_verified_at }}</td>
            </tr>
        </tbody>

    </table>

</template>


<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    user: {
        type: Array,
        default: []
    }
});

</script>
