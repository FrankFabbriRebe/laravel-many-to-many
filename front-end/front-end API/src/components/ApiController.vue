<script>

import axios from 'axios';

export default {
    name: 'ApiContent',
    data() {
        return {
            technologies: [],
            createFormActive: false,
            newTechnology: {
                name: '',
                description: '',
            }
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
    },

    methods: {

        toggleCreateNewTechnology() {
            this.createFormActive = true;
        }

    }

}

</script>


<template>
    <div class="container">

        <h1>Technologies:</h1>

        <!-- form to add new technology -->
        <form v-if="createFormActive">
            <label for="name">name</label>
            <br>
            <input type="text" name="name" id="name" v-model="newTechnology.name">
            <br>
            <label for="description">description</label>
            <br>
            <input type="text" name="description" id="description" v-model="newTechnology.description">
            <br>
            <input type="submit" value="CREATE">
        </form>

        <div v-else>

            <button @click="toggleCreateNewTechnology">CREATE NEW TECHNOLOGY</button>

            <div class="techno" v-for="technology in technologies">
                <h2>Name of technology: </h2>
                <p>{{ technology.name }}</p>
                <h3>Description of tecnìhnology: </h3>
                <p>{{ technology.description }}</p>
            </div>

        </div>

    </div>
</template>