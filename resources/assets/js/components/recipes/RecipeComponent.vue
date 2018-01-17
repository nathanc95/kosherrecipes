<template>
    <div class="col-sm-6 col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {{ recipe.name }}
                    <small>(Price: {{ recipe.price }})</small>
                </h3>
            </div>
            <div class="panel-body">
                <div class="pull-left">
                    <input
                            type="number"
                            class="form-control"
                            placeholder="Quantity"
                            v-model="quantity"
                            :class=""
                    >
                </div>
                <div class="pull-right">
                    <button
                            class="btn btn-success"
                            @click="buyStock"
                            :disabled="insufficientFunds"

                    >Buy
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default{
        props:['recipe'],

        data()  {
                return {
                quantity:0
                       }
                },
        computed:{
            funds(){
                this.$store.getters.funds;
            },

            insufficientFunds(){
                return this.quantity * this.recipe.price>this.funds;
            }
        },
        methods:{
                    buyStock(){
                        const order={
                            id:this.recipe.id,
                            stockPrice:this.recipe.stockPrice,
                            quantity:this.quantity
                        };
                        console.log(order);
                        this.$store.dispatch('buyStock',order);
                        this.quantity=0;
                    }
                }

                  }
</script>
