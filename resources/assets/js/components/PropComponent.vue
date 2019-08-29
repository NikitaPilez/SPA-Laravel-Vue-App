<template>
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Url</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="url in urldata">
                    <td>{{url.title}}</td>
                    <td>{{url.url}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
          'urldata'
        ],
        mounted() {
            this.update()
        },
        methods:{
            update: function() {
                console.log(this.urldata);
            }
        }
    }
</script>
