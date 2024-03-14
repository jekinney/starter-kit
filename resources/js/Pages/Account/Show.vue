<script setup>
import { Head } from '@inertiajs/vue3';
import Default from '@/Layouts/Default.vue';
import Account from '@/Layouts/Account.vue';
import UpdateProfileForm from './Form/UpdateProfileForm.vue'

defineOptions({ layout: [Default, Account] });


</script>

<template>
    <Head title="Profile Information" />
    <UpdateProfileForm />
</template>
