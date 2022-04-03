<section class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3><?php echo $title ?></h3>
            </div>
            <div class="col-sm">
                <?php
                if($content): 
                    include $content;
                else:
                    echo '</div></div></div></section>';
                    return;
                endif
            ?>
            </div>
        </div>
    </div>
</section>