<div class="sidebar-item tag-cloud">
    <h3>Tag Cloud</h3>
    <ul class="nav nav-pills">
        <?php
        foreach (wp_tag_cloud('format=array') as $value):
            echo '<li>' . $value . '</li>';
        endforeach;
        ?>
    </ul>
</div>