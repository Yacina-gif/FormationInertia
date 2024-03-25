<template></template>

<script setup>
import { onMounted, onUpdated } from 'vue';
const props = defineProps({
    status: {
        type: Object,
        default: {}
    },
});

function typeOfSwal() {
    switch (props.status.type) {
        case 'store-success':
        case 'update-success':
        case 'status-change-success':
        case 'destroy-success':
            Swal.fire(
                props.status.action,
                props.status.text,
                'success'
            )
            break;
        case 'status-change-errors':
            Swal.fire(
                props.status.action,
                props.status.text,
                'error'
            )
            break;
        case 'warning':
            Swal.fire(
                props.status.action,
                props.status.text,
                'warning'
            )
            break;
        case 'info':
            Swal.fire(
                props.status.action,
                props.status.text,
                'info'
            )
            break;
        case 'error':
            Swal.fire(
                props.status.action,
                props.status.text,
                'error'
            )
            break;
        case 'errors':
            Swal.fire({
                icon: 'error',
                title: 'Validation Errors',
                html: '<ul>' + props.status.text.map(error => {
                    return `<li>${error}</li>`
                }) + '</ul>',
                timer: 3000,
                toast: true,
                position: 'top-end',
                showConfirmButton: false
            });
            break;
        default:
            break;
    }
}

onMounted(() => {
    if (props.status) {
        typeOfSwal()
    }
})

onUpdated(() => {
    if (props.status) {
        typeOfSwal()
    }
})
</script>