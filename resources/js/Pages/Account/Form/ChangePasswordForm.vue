<script setup>
import { ref, computed, watch } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';

const page = usePage();

const form = useForm({
    _method: 'PUT',
    password: '',
    current_password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('user-password.update'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset()
        }
    })
}
</script>

<template>
    <div class="">
        <h2 class="font-bold text-gray-900 font-mono">
            Change Password
        </h2>
        <form v-on:submit.prevent="submit()" class="mt-10 space-y-6">

            <div>
                <label for="current_password" class="text-sm font-medium text-gray-900">Current Password</label>
                <div class="mt-2">
                    <input
                        type="password"
                        id="current_password"
                        v-model="form.current_password"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="1"
                        required="true"
                    />
                    <div v-if="form.errors.current_password" class="text-sm text-red-500 mt-2">
                        {{ form.errors.current_password }}
                    </div>
                </div>
            </div>

            <div>
                <label for="password" class="text-sm font-medium text-gray-900">New Password</label>
                <div class="mt-2">
                    <input
                        type="password"
                        id="password"
                        v-model="form.password"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="2"
                        required="true"
                    />
                    <div v-if="form.errors.password" class="text-sm text-red-500 mt-2">
                        {{ form.errors.password }}
                    </div>
                </div>
            </div>

            <div>
                <label for="password_confirmation" class="text-sm font-medium text-gray-900">Password Confirmation</label>
                <div class="mt-2">
                    <input
                        type="password"
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="3"
                        required="true"
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
                    Change Password
                </button>
            </div>

        </form>
    </div>
</template>
