<script setup>
import Modal from '@/Components/Modal.vue';
import { useForm, Head } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
});
</script>

<template>
    <Head title="Create an account" />

    <Modal class="bg-white max-w-md p-12">

        <h2 class="text-center text-2xl font-bold font-mono text-gray-900 border-b-2 pd-2">Create an account</h2>

        <form class="mt-6 space-y-6" v-on:submit.prevent="form.post(`register`)">

            <div>
                <label for="name" class="text-sm font-medium text-gray-900">Name</label>
                <div class="mt-2">
                    <input
                        type="text"
                        id="name"
                        v-model="form.name"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="1"
                        required="true"
                        autofocus="true"
                        autocomplete="true"
                    />
                    <div v-if="form.errors.name" class="text-sm text-red-500 mt-2">
                        {{ form.errors.name }}
                    </div>
                </div>
            </div>

            <div>
                <label for="email" class="text-sm font-medium text-gray-900">Email</label>
                <div class="mt-2">
                    <input
                        type="email"
                        id="email"
                        v-model="form.email"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="2"
                        required="true"
                        autocomplete="true"
                    />
                    <div v-if="form.errors.email" class="text-sm text-red-500 mt-2">
                        {{ form.errors.email }}
                    </div>
                </div>
            </div>

            <div>
                <label for="password" class="text-sm font-medium text-gray-900">Password</label>
                <div class="mt-2">
                    <input
                        type="password"
                        id="password"
                        v-model="form.password"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="3"
                        required="true"
                        autocomplete="false"
                    />
                    <div v-if="form.errors.name" class="text-sm text-red-500 mt-2">
                        {{ form.errors.password }}
                    </div>
                </div>
            </div>

            <div>
                <label for="password_confirmation" class="text-sm font-medium text-gray-900">Confirm password</label>
                <div class="mt-2">
                    <input
                        type="password"
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="4"
                        required="true"
                        autocomplete="true"
                    />
                    <div v-if="form.errors.password_confirmation" class="text-sm text-red-500 mt-2">
                        {{ form.errors.password_confirmation }}
                    </div>
                </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="flex w-full justify-center bg-blue-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50"
                    :disabled="form.processing"
                >
                    Create account
                </button>
            </div>

        </form>

    </Modal>
</template>
