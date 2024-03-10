<script setup>
import Toast from '@/Components/Toast.vue'
import Navigation from '@/Components/Navigation.vue';
import { Modal } from 'momentum-modal'
</script>

<template>
    <div>
        <Toast />
        <Navigation />
        <div>
            <slot />
        </div>
        <Modal />
    </div>
</template>
