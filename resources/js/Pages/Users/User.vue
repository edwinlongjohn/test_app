
<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    
})
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View Users
            </h2>
        </template>

    <section id="left-align " class="r">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <Link :href="route('create_user')">
                    <button class="btn btn-outline-warning">Create</button>
                    </Link>

                </div>
            </div>
        </div>
    </section>
    <section class="r-p" id="table-sec">
        <div class="container ">
            <div class="col ">
                <table class="table table-light table-striped table-hover table-responsive">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Image</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td>Edwin longjohn</td>
                            <td>edwinlongjohn@gmail.com</td>
                            <td>09018096086</td>
                            <td><img src="/assets/images/woman.jpg" style="width: 100px;" alt="" class="img-fluid img-thumbnail"></td>
                            <td><button class="btn btn-warning"><i class="fa fa-pencil ">Edit</i></button></td>
                            <td><button class="btn btn-warning"><i class="fa fa-trash-o">Delete</i></button></td>

                        </tr>
                        <tr class="align-middle">
                            <td>Edwin longjohn</td>
                            <td>edwinlongjohn@gmail.com</td>
                            <td>09018096086</td>
                            <td><img src="/assets/images/flowergirl.jpg" style="width: 100px;" alt="" class="img-fluid img-thumbnail"></td>
                            <td><button class="btn btn-warning"><i class=" fa fa-pencil">Edit</i></button></td>
                            <td><button class="btn btn-warning"><i class="fa fa-trash-o">Delete</i></button></td>

                        </tr>
                        <tr class="align-middle">
                            <td>Edwin longjohn</td>
                            <td>edwinlongjohn@gmail.com</td>
                            <td>09018096086</td>
                            <td><img src="/assets/images/woman.jpg" style="width: 100px;" alt="" class="img-fluid img-thumbnail"></td>
                            <td><button class="btn btn-warning"><i class="fa fa-pencil ">Edit</i></button></td>
                            <td><button class="btn btn-warning"><i class="fa fa-trash-o">Delete</i></button></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    </BreezeAuthenticatedLayout>
</template>
