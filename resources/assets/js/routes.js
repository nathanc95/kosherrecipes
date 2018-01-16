
import ExampleComponent from './components/ExampleComponent.vue';
import RecipesComponent from './components/recipes/RecipesComponent.vue';
import CategoryComponent from './components/CategoryComponent.vue';
import NavComponent from './components/NavComponent.vue';

export const routes = [
    {
        path:'/welcome',
        component: ExampleComponent
    },
    {
        path:'/home',
        component:RecipesComponent
    },
    {
        path:'/category',
        component:CategoryComponent
    },
    {
        path:'/home',
        component:NavComponent
    }
];