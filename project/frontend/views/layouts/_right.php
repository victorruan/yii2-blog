<div class="right-side col-lg-3">
    <div class="panel panel-default">
        <div style="height: 400px; width:auto;">
            <div class="tagcloud">
                <?php
                $tags = \common\models\Tag::find()->all();
                foreach ($tags as $tag){
                    echo "<a href=\"/site/tag?id=".$tag->id."\">$tag->name</a>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="/js/tagcloud.min.js"></script>
<script type="text/javascript">
    tagcloud();
</script>