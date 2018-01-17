

import RecipesComponent from './components/recipes/RecipesComponent.vue';
import CategoryComponent from './components/CategoryComponent.vue';
import NavComponent from './components/NavComponent.vue';
import PortfolioComponent from './components/portfolio/Portfolio.vue';
import HomeComponent from './components/Home.vue';

export const routes = [
    {
        path:'/stock',
        component: HomeComponent
    },
    {
        path:'/',
        component:RecipesComponent
    },
    {
        path:'/',
        component:NavComponent
    },
    {
        path:'/home',
        component:RecipesComponent
    },
    {
        path:'/portfolio',
        component:PortfolioComponent
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