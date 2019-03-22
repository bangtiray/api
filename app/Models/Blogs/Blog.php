<?php

namespace App\Models\Blogs;

use App\Models\BaseModel;
use App\Models\Blogs\Traits\Attribute\BlogAttribute;
use App\Models\Blogs\Traits\Relationship\BlogRelationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        BlogAttribute,
        BlogRelationship {
            // BlogAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    protected $fillable = [
        'name',
        'name_en',
        'subname',
        'slug',
        'publish_datetime',
        'content',
        'content_en',
        'meta_title',
        'cannonical_link',
        'meta_keywords',
        'meta_description',
        'status',
        'featured_image',
        'created_by',
        'count',
        'ext',
    ];

    protected $dates = [
        'publish_datetime',
        'created_at',
        'updated_at',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.blogs.table');
    }
}
