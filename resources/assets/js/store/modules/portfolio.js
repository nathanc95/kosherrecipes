const state={
    funds:1000,
    recipes:[]
};

const mutations={
    'BUY_STOCK'(state,{id,quantity,stockPrice}){
        const record=state.recipes.find(element=>element.id==id);
        if(record){
            record.stockPrice += stockPrice;
        }else{
            state.recipes.push({
                id:id,
                stockPrice:stockPrice
            });
        }
        state.funds += stockPrice * quantity;
    },
    'SELL_STOCK'(state,{id,quantity,stockPrice}){
        const record=state.recipes.find(element=>element.id== id);
        if(record.quantity>quantity){
            record.quantity -= quantity;
        }else{
            state.recipes.splice(state.recipes.indexOf(record),1);
        }
        state.funds += stockPrice * quantity;
    },
    'SET_PORTFOLIO'(state,portfolio){
        state.funds=portfolio.funds;
        state.recipes=portfolio.stockPortfolio ? portfolio.stockPortfolio:[];
    }
};

const actions={
  sellStock({commit},order){
    commit('SELL_STOCK',order);
  }
};

const getters = {
    stockPortfolio (state, getters) {
        return state.recipes.map(recipe => {
            const record = getters.recipes.find(element => element.id == recipe.id);
            return {
                id: recipe.id,
                quantity: recipe.quantity,
                name: record.name,
                price: record.price
            }
        });
    },
    funds (state) {
        return state.funds;
    }
};

export default{
    state,
    mutations,
    actions,
    getters

}
