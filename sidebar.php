<!-- sidebar content -->
<div class="column is-4 is-narrow">
    <!-- sidebar subscriptions -->
    <div class="card-wrapper">
        <div class="card-header">
            <h1 class="card-header-title">Browse Around...</h1>
        </div>
        <div class="card">
            <div class="card-content">
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