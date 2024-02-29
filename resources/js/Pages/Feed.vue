<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, usePage} from '@inertiajs/vue3';
import {computed} from "vue";

const page = usePage()
const user = computed(() => page.props.auth.user)
const activities = page.props.activities;
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Latest</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You are logged in as: {{ user.name }}</div>
                    <div class="p-6 text-gray-900">
                        <ul>
                            <li v-for="activity in activities">
                                {{ activity.distance }}
                                {{ activity.duration }}
                                {{ activity.date }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
