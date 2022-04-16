<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
const form = useForm({
name: '',
email:'',
password:'',
image:null,
})
defineProps({

})
const submit = ()=>{
form.post(route('submit_user',{
    onfinish: () => location.reload()
}))
}

</script>

<template>
    <Head title="Welcome" />
<div class="container r-p">
        <div class="row">
            <div class="col">
                <div class="card create">
                    <div class="card-header">
                        <h3>My Details</h3>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group" autofocus  enctype="multipart/form-data">
                                        <label for="name">Name</label>
                                        <input  class="form-control name" type="text" v-model="form.name" placeholder="enter your name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" v-model="form.email" placeholder="enter your E-mail">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input class="form-control" type="tel" v-model="form.phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="name">Image</label>
                                <input class="form-control" type="file" @input="form.image = $event.target.files[0]" placeholder="enter your name" >
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
