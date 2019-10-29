<template>
    <div>
        <img v-if="like > 2" v-bind:src="cover" title="title" alt="">
        <hr>
        <h1>{{ title }}{{ id }}</h1>
        <hr>
        <p>{{detail}}</p>
        <hr>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                title: 'ABC Title',
                detail: 'detail ABC',
                cover: 'https://media.tenor.com/images/ee62b5a4e7b7bc440eb38437f36b41a8/tenor.gif',
                like: 3
            }
        },
        props : ['id'],
        created(){
            console.log('creating Post Component'+this.id);
            this.callPostApi();
            console.log('Post Component has been created'+this.id);  
        },
        methods : {
            async callPostApi() {
                try {
                const res = await axios.get('/api/posts/' + this.id);
                console.log(res.data);
                if (res.status === 200){
                    this.title = res.data.data.title;
                    this.detail = res.data.data.detail;
                }
                } catch (e) {}
            }
        }
    }
</script>