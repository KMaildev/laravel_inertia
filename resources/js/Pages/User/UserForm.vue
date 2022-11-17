<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2>User Edit</h2>
                <p>
                    {{ success }}
                </p>

                <form @submit.prevent="submit">
                    <input class="form-control" type="text" placeholder="Name" v-model="form.name"><br>
                    <input class="form-control" type="text" placeholder="Email" v-model="form.email"><br>
                    <input class="form-control" type="password" placeholder="Password" v-model="form.password"><br>
                    <input type="submit" value="Save" class="btn btn-success">
                    <Link href="/user-list" class="btn btn-success">
                    Users
                    </Link>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: [
        'user',
        'errors',
    ],
    
    data() {
        return {
            form: {
                name: this.user.name,
                email: this.user.email,
                password: '',
            }
        }
    },

    methods: {
        submit() {
            this.$emit('submit', this.form)
        }
    }

}
</script>
<style>

</style>