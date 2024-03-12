<script setup>
import { ref, computed, watch } from 'vue'
import { Head, useForm, usePage } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import Account from '@/Layouts/Account.vue'

defineOptions({ layout: [Default, Account] })
</script>

<template>
    <Head title="Account" />
    <div class="mx-auto max-w-7xl px-8">
        Account
    </div>
</template>
