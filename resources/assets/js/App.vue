<template>
    <div class="container">
        <nav-component></nav-component>
                <div class="row">
                    <div class="col-xs-12">
                        <router-view></router-view>
                        <sidebar-component></sidebar-component>
                    </div>
                </div>
    </div>
</template>
<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
</style>
<script>
    import NavComponent from './components/NavComponent.vue';
    import SidebarsComponent from './components/SidebarsComponent.vue';



    export default{

        components:{
            navComponent:NavComponent,
            sidebarComponent:SidebarsComponent,
        }
    }
</script>