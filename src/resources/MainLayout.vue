<template>

    <Nav :sidebar="sidebar" @toggleSidebar="toggleSidebar()"></Nav>

    <Sidebar :sidebar="sidebar"></Sidebar>

    <div class="w-full mt-16 duration-300 ease-in" :class="sidebar ? 'pl-64' : 'pl-0'" >
        <div class="p-10">
            teste
        </div>
    </div>
        

</template>

<script>

    import Nav from '@/Layouts/Partials/Nav.vue';
    import Sidebar from '@/Layouts/Partials/Sidebar.vue';

    export default {

        components: {
            Nav,
            Sidebar
        },

        data() {
            return {
                sidebar: true
            }
        }
        ,
        methods: {

            toggleSidebar() {
                this.sidebar = !this.sidebar
            }

        }
        
    }

</script>