<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <select multiple="" class="form-control" v-model="usersSelect">
                            <option v-for="user in users" :value="'news-action.' + user.id">
                                {{user.email}}
                            </option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <div class="block-message">
                            <div class="message-margin">
                                <p class="show-message" v-bind:class="(message.user === user.email) ? 'text-right' : 'text-left'" v-for="message in dataMessages">
                                    {{message.message}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 w-100 text-right">
                    <input type="text" class="form-control" placeholder="Type message.." v-model="message">
                    <div class="input-group-append">
                        <button @click="sendMessage" class="btn btn-outline-secondary margin-top-20" type="button">Send</button>
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
                usersSelect: [],
            }
        },
        props: [
            'users',
            'user'
        ],
        mounted() {
            var socket = io('http://localhost:3000');
            socket.on('news-action.' + this.user.id + ':App\\Events\\NewPrivateMessage', function(data) {
                this.dataMessages.push(data.message);
            }.bind(this));
        },
        methods: {
            sendMessage: function() {
                if(!this.usersSelect.length)
                    this.usersSelect.push('news-action.');
                axios({
                    method: 'get',
                    url: 'send-private-message',
                    params: { channels: this.usersSelect, message: this.message, user: this.user.email }
                }).then((response) => {
                    this.dataMessages.push(response.data);
                    this.message = "";
                });
            }
        }
    }
</script>