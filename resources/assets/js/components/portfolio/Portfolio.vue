<template>
   <div>
<app-recipe v-for="recipe in recipes":recipe="recipe">
</app-recipe>
   </div>
</template>

<script>
    import{mapGetters} from 'vuex';
    import Recipe from './Recipe.vue';

    export default{
        computed:{
            ...mapGetters({
                recipes:'stockPortfolio'
            })
        },
        components:{
            appRecipe:Recipe
        }
    }
</script>