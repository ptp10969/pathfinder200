<template>
    <div>
        <h1>{{ title }}</h1>
        <hr>
        <p>{{detail}}</p>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                title: 'ABC Title',
                detail: 'detail ABC'
            }
        }
    }
</script>