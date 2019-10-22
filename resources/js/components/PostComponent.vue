<template>
    <div>
        <img v-if="like > 2" v-bind:src="cover" title="title" alt="">
        <hr>
        <h1>{{ title }}{{ id }}</h1>
        <hr>
        <p>{{detail}}</p>
        <hr>
        <p>{{like}}</p>
        <button v-on:click="handleLike">Like</button>
        <input type="text" name="title" v-model="title">
    </div>
</template>

<script>
    export default {
        data(){
            return {
                title: 'ABC Title',
                detail: 'detail ABC',
                cover: 'https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.0-0/p206x206/1925140_291703117645594_289027864_n.jpg?_nc_cat=105&_nc_oc=AQnKHvQf_C6ijoo7hSGLAwXT8bfoScMBjJvdmwEGnE8DQ-u0ntc_M8ipTBRlf-tTxoLZVx2U4buR5m1RS-VXTYnx&_nc_ht=scontent.fbkk10-1.fna&oh=ab789cc9bdce4fdf9e4d9d7585c3f2a7&oe=5E21F360',
                like: 3
            }
        },
        props : ['id'],
        methods : {
            handleLike() {
                this.like++;
            }
        }
    }
</script>