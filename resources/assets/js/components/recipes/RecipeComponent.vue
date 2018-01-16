<template>
    <div class="col-md-8">
        <div class="site-entry">
            <article class="post first-post format-standard hentry">
                <div class="entry-featured-image">
                    <img src=""
                         alt="How to make mak-nyuss baked potatoes stick recipes from Deanda">
                </div><!-- .entry-featured-image -->

                <div class="entry-area">
                    <div class="entry-header">
                        <h2 class="entry-title">
                            <a href="/single"
                               rel="bookmark">{{recipe.name}}</a>
                        </h2>
                        <div class="entry-meta">
                            <span class="posted-on">
                              <a href="/single" rel="bookmark">
                                  <time class="entry-date"
                                        datetime="2016-08-14">Aug 14, 2016</time>
                              </a>
                            </span><!-- .posted-on -->
                            <span class="entry-cat">
                              <span class="cat-link">
                                  <a href="category.blade.php">Cook</a>
                              </span>
                            </span><!-- .entry-cat -->
                            <span class="entry-like">
                    <a href="">
                        <i class="fa fa-heart-o"></i> 172
                    </a>
                </span>
                            <span class="entry-price">
                              <span class="cat-link">
                                  <a href="category.blade.php">{{recipe.ti}}</a>
                              </span>
                            </span>
                        </div><!-- .entry-meta -->
                    </div><!-- .entry-header -->

                    <div class="entry-content">
                        <p>A wonderful serenity has taken possession of my entire soul, like these
                            sweet mornings of spring which I enjoy with my whole heart.
                            I am alone, and feel the charm of existence in this spot,
                            which was created for the bliss of souls like mine...
                            <a href="/single" class="more-link">
                                <span class="moretext">Read more</span>
                                <span class="screen-reader-text">How to make mak-nyuss baked potatoes
                                                        stick recipes from Deanda</span>
                            </a><!-- .more-link -->
                        </p>
                    </div><!-- .entry-content -->
                </div><!-- .entry-area -->
            </article><!-- .post -->
            <div>
                <input type="number" class="form-control" placeholder="quantity"
                v-model="quantity">
            </div>
            <div>
                <button class="btn btn-success"
                        @click="addIngredients"
                        :disabled="quantity <=0">
                    Add
                </button>
            </div>
            <nav class="navigation posts-navigation" role="navigation">
                <h2 class="screen-reader-text">Posts navigation</h2>
                <div class="nav-links">
                    <div class="nav-previous"><a href="#">Older posts</a></div>
                    <div class="nav-next"><a href="#">Newer posts</a></div>
                </div>
            </nav> <!-- .navigation -->
        </div>
    </div><!-- .col-md-8 -->
</template>

<script>

    export default{
        props:['recipe'],

        data()  {
                return {
                quantity:0
                       }
                },
        methods:{
                    addIngredients(){
                        const order={
                            recipeId:this.recipe.id,
                            recipeName:this.recipe.name,
                            recipeTi:this.recipe.ti,
                            quantity:this.quantity
                        };
                        console.log(order);
                        this.quantity=0;
                    }
                }

                  }
</script>
