<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2>User Edit</h2>
                <p>
                    {{ success }}
                </p>
                <user-form :user="user" :errors="errors" @submit="submit"></user-form>
            </div>
        </div>
    </div>
</template>
<script>
import UserForm from './UserForm.vue';

export default {
    components: {
        UserForm,
    },

    props: [
        'user',
        'success',
        'errors',
    ],

    methods: {
        submit(form) {
            this.$inertia.put(`/user_update/${this.user.id}`, form);
        }
    }
}
</script>
<style>

</style>