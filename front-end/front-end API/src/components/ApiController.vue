<script>

import axios from 'axios';

export default {
    name: 'ApiContent',
    data() {
        return {
            technologies: [],
        }
    },

    mounted() {
        axios.get('http://127.0.0.1:8000/api/v1/technologies')
            .then(res => {
                const data = res.data;
                this.technologies = data.technologies;
            })
            .catch(error => {
                console.error(error)
            })
    }

}

</script>


<template>
    <div class="container">
        <h1>List of technologies:</h1>
        <div class="techno" v-for="technology in technologies">
            <h2>Name of technology: </h2>
            <p>{{ technology.name }}</p>
            <h3>Description of tecnìhnology: </h3>
            <p>{{ technology.description }}</p>
        </div>
    </div>
</template>