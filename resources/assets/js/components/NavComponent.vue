<template>
    <!-- main navigation -->
    <div class="site-navigation-sticky-wrapper">
        <header id="masthead" class="site-header" role="banner">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                                <span class="sr-only">Primary Menu</span>
                            </button>
                            <div class="menu-container">
                                <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                    <li class="menu-item current-menu-item">
                                        <router-link to="/home" class="menu-item" activeClass="active"><a>Home</a></router-link>
                                    </li>
                                    <li class="menu-item current-menu-item">
                                        <router-link to="#" class="menu-item" activeClass="active" @click="endDay"><a>End Day</a></router-link>
                                    </li>
                                    <li class="menu-item">
                                        <router-link to="/category" class="menu-item" activeClass="active"><a>Category</a></router-link>
                                    </li>
                                    <li class="menu-item">
                                        <router-link to="/portfolio" class="menu-item" activeClass="active"><a>Portfolio</a></router-link>

                                    <li class="menu-item">
                                    <li class="menu-item">
                                        <router-link to="/login" class="menu-item" activeClass="active"><a>Logout</a></router-link>

                                    <li class="menu-item" >
                                        <router-link to="/logout" class="menu-item" activeClass="active"><a>Login</a></router-link>
                                    </li>

                                    <li class="menu-item" >
                                        <router-link to="/stock" class="menu-item" activeClass="active"><a>Stock</a></router-link>
                                    </li>

                                    <li class="menu-item" >
                                        <router-link to="#" class="menu-item" activeClass="active" @click="saveData"><a>Save Data</a></router-link>
                                    </li>
                                    <strong class="navbar-text navbar-right"> Funds:{{funds}}</strong>
                                </ul>

                            </div><!-- .menu-container -->
                        </div><!-- .col-md-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
    </div><!-- .site-header-affix-wrapper -->
</template>

<script>
    import {mapActions} from 'vuex';
    export default {
        computed: {
           funds(){
               return this.$store.getters.funds;
            }
        },
        methods:{
            ...mapActions({
                randomizeRecipes:'randomizeRecipes',
                fetchData:'loadData'
            }),
            endDay(){
                this.randomizeRecipes();
            },
            saveData(){
                const data={
                    funds:this.$store.getters.funds,
                    stockPortfolio:this.$store.getters.stockPortfolio,
                    recipes:this.$store.getters.recipes


                };
                this.$http.put('data.json',data);
            },
            loadData(){

            }
        }
    }
</script>