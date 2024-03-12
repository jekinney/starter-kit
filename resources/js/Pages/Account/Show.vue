<script setup>
import { ref, computed, watch } from 'vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import Default from '@/Layouts/Default.vue';
import Account from '@/Layouts/Account.vue';

defineOptions({ layout: [Default, Account] });

const page = usePage();

const form = useForm({
    _method: 'PUT',
    name: page.props.auth.user.name,
    email: page.props.auth.user.email,
});

const submit = () => {
    form.post(route('user-profile-information.update'), {
        preserveScroll: true
    })
}

</script>

<template>
    <Head title="Profile Information" />
    <div class="">
        <h2 class="font-bold text-gray-900 font-mono">
            Profile Information
        </h2>
        <form v-on:submit.prevent="submit()" class="mt-10 space-y-6">

            <div>
                <label for="name" class="text-sm font-medium text-gray-900">Name</label>
                <div class="mt-2">
                    <input
                        type="text"
                        id="name"
                        v-model="form.name"
                        class="w-full py-2 text-gray-900 border-gray-300 text-sm"
                        step="2"
                        required="true"
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
                        step="1"
                        required="true"
                        autocomplete="true"
                    />
                    <div v-if="form.errors.email" class="text-sm text-red-500 mt-2">
                        {{ form.errors.email }}
                    </div>
                </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="flex w-full justify-center bg-blue-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50"
                    :disabled="form.processing"
                >
                    Update
                </button>
            </div>

        </form>
    </div>
</template>
