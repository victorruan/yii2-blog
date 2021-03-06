<?php

namespace common\models;

class Blog extends ActiveRecord
{
    const STATUS_DISABLED = 0;
    const STATUS_ENABLED = 10;
    const STATUS_DELETED = 11;

    private static $_statusList;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            parent::timestampBehavior()
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_title', 'blog_category', 'blog_content'], 'required', 'on' => ['creation']],
            
            [['blog_title'], 'string', 'max' => 255],
            [['blog_content'], 'string'],

            [['blog_date'], 'date', 'format' => 'yyyy-MM-dd'],

            [
                ['blog_category'],
                'exist',
                'targetClass' => Category::className(),
                'targetAttribute' => 'id'
            ],

            ['status', 'default', 'value' => self::STATUS_ENABLED],
            ['status', 'in', 'range' => [self::STATUS_ENABLED, self::STATUS_DISABLED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User ID',
            'blog_title' => '标题',
            'blog_category' => '分类',
            'blog_content' => '内容',
            'blog_date' => '日期',
            'status' => '状态',
            'pageviews' => '点击量',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'last_editor' => '最后修改人ID',
            'dateRange' => '日期',
            'updatedTimeRange' => '更新时间',
            'deletedTimeRange' => '删除时间',
        ];
    }

    public function addPageviews()
    {
        $this->updateAllCounters(['pageviews' => 1], ['id' => $this->id]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'blog_category']);
    }

    public function fetchTags()
    {
        $tag_names = TagBlog::find()->where(['blog_id' => $this->getId()])->select(['tag_name'])->column();
        $tag_names = implode(",",$tag_names);
        return $tag_names;
    }

    public function saveTags($_tags){
        $tag_names = explode(",",$_tags);
        TagBlog::deleteAll(['and',['not in','tag_name',$tag_names],['blog_id'=>$this->getId()]]);
        $tags = [];
        foreach ($tag_names as $tag_name){
            $tag = Tag::find()->where(['name'=>$tag_name])->one();
            if($tag===null){
                $tag = new Tag();
                $tag->name = $tag_name;
                $tag->save();
            }
            $tags[$tag->name] = $tag;
        }
        foreach ($tag_names as $tag_name){
            $tag_blog = TagBlog::find()->where(['tag_name'=>$tag_name,'blog_id'=>$this->getId()])->one();
            if($tag_blog === null){
                $tag_blog = new TagBlog();
                $tag_blog->tag_id = $tags[$tag_name]['id'];
                $tag_blog->tag_name = $tag_name;
                $tag_blog->blog_id = $this->getId();
                $tag_blog->blog_name = $this->blog_title;
                $tag_blog->save();
            }
        }
    }

    /**
     * Change status
     */
    public function enable()
    {
        $this->status = self::STATUS_ENABLED;
    }

    public function disable()
    {
        $this->status = self::STATUS_DISABLED;
    }

    /**
     * Get status
     */
    public static function getStatusList()
    {
        if (self::$_statusList === null) {
            self::$_statusList = [
                self::STATUS_ENABLED => '正常',
                self::STATUS_DISABLED => '禁用'
            ];
        }

        return self::$_statusList;
    }

    public function getStatusMsg()
    {
        $list = getStatusList();

        return $list[$this->status] ?? null;
    }

    public function getBlogFooter(){
        $tags = TagBlog::find()->where(['blog_id' => $this->getId()])->select(['tag_name','tag_id'])->all();
        $tag_str = "";
        $i=0;
        foreach ($tags as $tag){
            $i++;
            if($i==count($tags)){
                $tag_str.="<a href=\"/site/tag?id=".$tag['tag_id']."\" rel=\"tag\">".$tag['tag_name']."</a>";
            }else{
                $tag_str.="<a href=\"/site/tag?id=".$tag['tag_id']."\" rel=\"tag\">".$tag['tag_name']."</a>，";
            }
        }

        return "<footer class=\"entry-footer\">
    <hr/>
    <div class='row'>
    <div class=\"col-md-6 cattegories\">
    <p>
        <span class=\"cat-links\"><em class=\"fa fa-folder-open\"></em> <a href=\"/site/category?id=".$this->category->id."\" rel=\"category tag\">".$this->category->category_name."</a></span>
    </p>
    </div>
        <div class=\"col-md-6 tags\">
    <p>
        <span class=\"tags-links\"><em class=\"fa fa-tags\"></em> ".$tag_str."</span>
    </p>
    </div>
    </div>
</footer>";
    }

}