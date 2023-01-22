<template>

    <Nav></Nav>

    <Sidebar></Sidebar>

    <div class="sidebar" :class="[{'is-hidden': ! sidebar}]">
        
    </div>

</template>

<script>

    import Nav from '@/Layouts/Partials/Nav.vue';
    import Sidebar from '@/Layouts/Partials/Sidebar.vue';

    export default {

        components: {
            Nav,
            Sidebar
        }
        
    }

</script>