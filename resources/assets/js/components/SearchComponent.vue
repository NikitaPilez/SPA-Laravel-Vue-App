<template>
    <div class="container">
        <div class="row">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter key word..</label>
                <input v-model="search" v-on:keyup="keyMonitor" type="search" class="form-control" id="exampleInputEmail1" placeholder="Enter key word..">
            </div>

            <div class="col-md-6">
                <div v-for="item in randomString">
                    <h5>{{item}}</h5>
                </div>
            </div>
            <div class="col-md-6">
                <div v-for="item in answer">
                    <h1>{{item}}</h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                inputs: [],
                randomString: [],
                answer: [],
                search: ''
            }
        },
        mounted() {
            this.getRandomString()
        },
        methods: {
            addData: function() {
                axios.get('get-table').then((response) => {
                   this.inputs.push(response.data);
                });
            },
            keyMonitor: function() {
                this.answer = [];

                for(var k = 0; k < this.randomString.length; k++){
                    if(this.randomString[k].includes(this.search)){
                        this.answer.push(this.randomString[k]);
                    }
                }
            },
            getRandomString: function() {
                axios.get('get-random-string').then((response) => {
                    this.randomString = response.data;
                });
            }
        }
    }
</script>
