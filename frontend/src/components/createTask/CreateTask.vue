<script lang="ts">
import axios from 'axios';

export default {
    data () {
        return {
            name: '',
            description: '',
            isCompleted: '',
        }
    },
    methods: {
        createTask(e) {
            e.preventDefault()

            axios
            .post('http://localhost:8181/api/tasks', {
                name: this.name,
                description: this.description,
                is_completed: Boolean(this.isCompleted)
            })
            .then((response) => {
                    alert('Task Created!')
                }
            ).catch((err) => {
                alert('Something went wrong.')
            })
        }
    }

}
</script>

<template>
    <div>
        <h1> Create Tasks </h1>

        <form @submit.prevent="createTask">
            <label>Name:</label>
            <input v-model="this.name" type="text"/>

            <label>Description</label>
            <input v-model="this.description" type="text"/>

            <label>Completed</label>
            <select v-model="this.isCompleted">
                <option value="false" selected>No</option>
                <option value="true">Yes</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<style scoped>

</style>