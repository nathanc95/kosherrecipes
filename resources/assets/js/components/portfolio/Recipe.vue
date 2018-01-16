<template>
    <div class="col-sm-6 col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {{recipe.name}}
                   <small>(Price: {{recipe.price}} | Quantity: {{recipe.quantity}})</small>
                </h3>
            </div>
            <div class="panel-body">
                <div class="pull-left">
                    <input type="number"
                    class="form-control"
                    placeholder="Quantity"
                    v-model="quantity">
                </div>
                <div class="pull-right">
                    <button class="btn btn-success"
                            @click="sellStock">Sell
                    </button>

                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import{mapActions} from 'vuex';
    export default{
        props:['recipe'],

        data()  {
            return {
                quantity:0
            }
        },
        methods:{
            ...mapActions({
                placeSellOrder:'sellStock'
                }
            ),
            sellStock(){
                const order={
                    id:this.recipe.id,
                    stockPrice:this.recipe.price,
                    quantity:this.recipe.quantity
                };
                this.placeSellOrder(order);
                        }
                }
        }
</script>