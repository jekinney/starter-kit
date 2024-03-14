<script setup>
import { Head } from '@inertiajs/vue3';
import Default from '@/Layouts/Default.vue';
import Account from '@/Layouts/Account.vue';
import ChangePasswordForm from './Form/ChangePasswordForm.vue';

defineOptions({ layout: [Default, Account] });
</script>

<template>
    <Head title="Security" />
    <div class="space-y-12">
        <ChangePasswordForm />
    </div>
    <div class="">
        Two Factor auth
    </div>
</template>
