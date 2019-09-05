<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <select multiple="" class="form-control" v-model="userSelect">
                            <option>

                            </option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <textarea rows="10" readonly="" class="form-control">{{dataMessages.join('\n')}}</textarea>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Type message.." v-model="message">
                    <div class="input-group-append">
                        <button @click="sendMessage" class="btn btn-outline-secondary" type="button">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:function() {
            return {
                dataMessages: [],
                message: '',
                userSelect: [],

            }
        },
        props: [
            'users'
        ],
        mounted() {
            var socket = io('http://localhost:3000');
            socket.on('news-action:App\\Events\\NewMessage', function(data) {
                this.dataMessages.push(data.message);
            }.bind(this));
        },
        methods: {
            sendMessage: function() {
                axios({
                    method: 'get',
                    url: 'send-message',
                    params: { message: this.message }
                }).then((response) => {
                    this.message = "";
                });
            }
        }
    }
</script>