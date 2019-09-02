<template>
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12">
            <button @click="addData" class="btn btn-default text mb-1">Add new data</button>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in inputs">
                    <td>{{item.id}}</td>
                    <td>{{item.title}}</td>
                    <td>{{item.description}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                inputs: [],
            }
        },
        mounted() {
            this.addData()
        },
        methods: {
            addData: function() {
                axios.get('get-table').then((response) => {
                   this.inputs.push(response.data);
                });
            }
        }
    }
</script>
