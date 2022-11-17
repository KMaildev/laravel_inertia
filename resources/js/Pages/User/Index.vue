<script>
</script>
<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2>User Lists</h2>
                <p>
                    {{ success }}
                </p>

                <Link href="/user_create" class="btn btn-success">
                Create
                </Link>

                <table class="table">
                    <thead>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                Name
                            </td>
                            <td>
                                Email
                            </td>
                            <td>
                                Date
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>
                                {{ user.id }}
                            </td>
                            <td>
                                {{ user.name }}
                            </td>
                            <td>
                                {{ user.email }}
                            </td>
                            <td>
                                {{ user.created_at }}
                            </td>
                            <td>
                                <Link :href="`/user/${user.id}/edit`" class="btn btn-success">
                                Edit
                                </Link>

                                <button @click="destroy(user.id)" class="btn btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    props: [
        'users',
        'success',
    ],

    methods: {

        destroy(id) {
            this.$inertia.delete(`/user_delete/${id}`);
        }
    }
}
</script>
<style>

</style>