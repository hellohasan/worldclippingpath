<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ServiceTestimonial extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * @var string
     */
    protected $table = 'service_testimonials';

    /**
     * @var array
     */
    protected $fillable = [
        'service_id',
        'name',
        'country',
        'message',
        'status',
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
        $this->addMediaCollection('service-testimonial')
            ->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')->fit(Manipulations::FIT_STRETCH, 67, 67);
            });
    }
}
