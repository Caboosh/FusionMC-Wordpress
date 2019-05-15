<!-- sidebar content -->
<div class="column is-4 is-narrow">
    <!-- sidebar subscriptions -->
    <div class="card-wrapper">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Subscribe
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <?php
                        if (is_active_sidebar( 'cf_sidebar-default') )
                        {
                            dynamic_sidebar( 'cf_sidebar-default');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>