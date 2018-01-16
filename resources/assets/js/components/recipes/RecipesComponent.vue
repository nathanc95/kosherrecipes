<template>
    <div>
        <recipe-component v-for="recipe in recipes"
                          :recipe="recipe">

        </recipe-component>
    </div>
</template>



<script>

    import Recipe from './RecipeComponent.vue';
    export default {

        components:{
            recipeComponent:Recipe
        },
        computed:{
            recipes(){
                return this.$store.getters.recipes;
            }
        }
    }
</script>