<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Hello, world!
                        </h2>
                        <?php if ($hour >= 18): ?>


                        <h3 class="post-subtitle">
                            Or should I say good evening? It is already <?php echo $hour ?>.
                        </h3>
                        <?php endif; ?>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Vijay</a> on September 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Form Example.
                        </h2>
                    </a>
                    <form method="post" action="<?php echo url_for('content/update') ?>">
                    <label for="name">What is your name?</label>
                    <input type="text" name="name" id="name" value="" />
                    <input type="submit" value="Ok" />
                    <?php if ($sf_params->has('name')): ?>
                    <p>Hello, <?php echo $sf_params->get('name') ?>!</p>
                    <?php else: ?>
                    <p>Hello, John Doe!</p>
                    <?php endif; ?>

                    </form>
                    
                    <p class="post-meta">Posted by <a href="#">Vijay</a> on <?php echo date('F j, Y,'); ?></p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



