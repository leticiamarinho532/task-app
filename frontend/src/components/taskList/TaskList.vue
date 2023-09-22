<script lang="ts">
import axios from 'axios';

export default {
    data () {
        return {
            tasks: []
        }
    },
    created() {
        axios
            .get('http://localhost:8181/api/tasks')
            .then(response => (
                    this.tasks = response.data
                )
            )
    },
    methods : {
        deleteTask(taskId) {
            axios
            .delete('http://localhost:8181/api/tasks/' + taskId)
            .then((response) => {
                    alert('Task Deleted!')
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
        <h1> List Tasks </h1>

        <ul
            v-for="task in tasks"
        >
            <li>{{task.name}} <button @click="deleteTask(task.id)">Delete</button></li>
        </ul>

    </div>
</template>

<style scoped>

</style>