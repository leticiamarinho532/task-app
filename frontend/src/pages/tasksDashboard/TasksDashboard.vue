<script lang="ts">
import CreateTask from "../../components/createTask/CreateTask.vue"
import ListTask from "../../components/taskList/TaskList.vue"
export default {
    components: {
        CreateTask,
        ListTask
    }
}
</script>

<template>
    <div>
        <h1> Tasks </h1>

        <CreateTask />

        <ListTask />
    </div>
</template>

<style scoped>

</style>