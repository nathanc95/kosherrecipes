import recipes from '../../data/recipes';

const state ={
  recipes:[]
};

const mutations={
  'SET_RECIPES' (state,recipes){
      state.recipes=recipes;
  },
    'RND_RECIPES'(state){

    }
};

const actions={
    buyStock:({commit},order)=>{
        commit('BUY_STOCK',order);
    },
    initRecipes:({commit})=>{
        commit('SET_RECIPES',recipes)
    },
    randomizeRecipes:({commit})=>{
        commit('RND_RECIPES');
    }
};

const getters={
    recipes:state=>{
        return state.recipes;
    }
};

export default{
    state,
    mutations,
    actions,
    getters
}