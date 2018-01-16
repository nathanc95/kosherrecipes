<template>
    <div>
        <recipe-component v-for="recipe in recipes" :recipe="recipe"></recipe-component>
    </div>
</template>



<script>

    import Recipe from './RecipeComponent.vue';
    export default {
        data(){
            return {
                recipes:[
                    {id:1,name:'pasta',ti:20},
                    {id:2,name:'rice',ti:30},
                    {id:3,name:'lasagna',ti:40},
                ],
            }
        },
        components:{
            recipeComponent:Recipe
        }
    }
</script>