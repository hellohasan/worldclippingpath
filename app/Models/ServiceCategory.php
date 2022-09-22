<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ServiceCategory extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * @var string
     */
    protected $table = 'service_categories';

    /**
     * @var array
     */
    protected $fillable = [
        'service_id',
        'title',
        'description',
        'featured',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'featured' => 'boolean',
        'status'   => 'boolean',
    ];

    /**
     * Get the service that owns the ServiceCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('service-category-before')->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')->fit(Manipulations::FIT_STRETCH, 200, 180);
                $this->addMediaConversion('large')->fit(Manipulations::FIT_STRETCH, 618, 622);
            });

        $this->addMediaCollection('service-category-after')->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')->fit(Manipulations::FIT_STRETCH, 200, 180);
                $this->addMediaConversion('large')->fit(Manipulations::FIT_STRETCH, 618, 622);
            });
    }

}
