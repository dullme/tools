<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">MD5 在线加密</div>

                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" v-model="text">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" @click="submit()">加密</button>
                            </div>
                        </div>
                        <div v-if="this.md5">
                            <p>md5: {{ md5 }}</p>
                            <p>MD5: {{ MD5 }}</p>
                            <p>Bcrypt: {{ bcrypt }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                text :'',
                md5 :'',
                MD5 :'',
                bcrypt :''
            }
        },
        methods: {
            submit(){
                axios.post('/md5', {
                    text: this.text
                }).then(response =>  {
                    this.md5 = response.data.md5;
                    this.MD5 = response.data.md5.toUpperCase();
                    this.bcrypt = response.data.bcrypt;
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
