<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ServicePortfolio extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * @var array
     */
    protected $fillable = [
        'service_id',
        'title',
        'featured',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status'   => 'boolean',
        'featured' => 'boolean',
    ];

    /**
     * @return mixed
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('service-portfolio-before')->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')->width(100);
            });

        $this->addMediaCollection('service-portfolio-after')->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')->width(100);
            });

        $this->addMediaCollection('service-portfolio')->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')->width(100);
            });
    }
}
