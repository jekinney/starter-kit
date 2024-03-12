<script setup>
import { Head } from '@inertiajs/vue3'
import Default from '@/Layouts/Default.vue'
import Account from '@/Layouts/Account.vue'

defineOptions({ layout: [Default, Account] })
</script>

<template>
    <Head title="Account" />
    <div class="mx-auto max-w-7xl px-8">
        Security
    </div>
</template>
