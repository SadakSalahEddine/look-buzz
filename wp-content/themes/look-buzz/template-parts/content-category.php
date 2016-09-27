<div class="sidebar-item categories">
    <h3>Categories</h3>
    <ul class="nav navbar-stacked">
        <?php
        foreach (get_categories() as $key => $value):
            echo "<li><a href='" . get_category_link($value->term_id) . "'><i class='fa fa-angle-right'></i>" . $value->cat_name . "<span class='pull-right'>(" . $value->category_count . ")</span></a></li>";
        endforeach;
        ?>
    </ul>
</div>