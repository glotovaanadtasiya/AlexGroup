<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class NewsPost extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_news_posts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'img_title'  => ['System\Models\File'],
    ];

    public function scopeApplySibling($query, $options = [])
    {
        if (!is_array($options)) {
            $options = ['direction' => $options];
        }

        extract(array_merge([
            'direction' => 'next',
            'attribute' => 'created_at'
        ], $options));

        $isPrevious = in_array($direction, ['previous', -1]);
        $directionOrder = $isPrevious ? 'asc' : 'desc';
        $directionOperator = $isPrevious ? '>' : '<';

        $query->where('id', '<>', $this->id);

        if (!is_null($this->$attribute)) {
            $query->where($attribute, $directionOperator, $this->$attribute);
        }

        return $query->orderBy($attribute, $directionOrder);
    }

    /**
     * Returns the next post, if available.
     * @return self
     */
    public function nextPost()
    {
        return self::applySibling()->first();
    }

    /**
     * Returns the previous post, if available.
     * @return self
     */
    public function previousPost()
    {
        return self::applySibling(-1)->first();
    }
	
	protected $jsonable = ['slider'];
}
