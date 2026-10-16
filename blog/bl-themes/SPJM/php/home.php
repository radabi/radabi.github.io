
<main>
    
<?php foreach ($content as $page): ?>
    <article>
        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>
        
        <!-- Page title -->
<div class='container'>
<div class='row'>
<div class='col-xs-11 col-sm-9 col-md-8 col-lg-8' style='margin: 0px auto 0; float:none'>
<h3 class='post-title entry-title'>
<a class="" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a>
</h3>
</div>
</div>
</div>   
        
        <!-- Page content until the pagebreak -->
<div class='container'>
<div class='row'>
<div class='col-xs-11 col-sm-9 col-md-8 col-lg-8' style='margin: 0px auto 0; float:none'>
        <div class="post-body"><?php echo $page->contentBreak(); ?></div></div></div></div> 

<div class='container'>
<div class='row'>
<div class='col-xs-11 col-sm-9 col-md-8 col-lg-8' style='margin: 0px auto 0; float:none'>
<?php
    $returnsArray = true;

    $items = $page->tags($returnsArray);

    foreach ($items as $tagKey=>$tagName) {
        $tag = new Tag($tagKey);

        echo '<a class="button" href="'.$tag->permalink().'">'.$tag->name().'</a>';
    }
?>
</div>
</div>
</div>


        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
    </article>
<?php endforeach ?>

<!-- Pagination -->

</main>