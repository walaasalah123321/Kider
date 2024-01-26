<?php

namespace App\Providers;

use App\repostry\ContactRepo;
use App\repostry\TeacherRepo;
use App\repostry\AppointmentRepo;
use App\interface\ContactInterface;
use App\interface\TeacherInterFace;
use App\interface\AppointmentInterface;
use App\interface\KiderInterface;
use App\interface\SubjectInterface;
use Illuminate\Support\ServiceProvider;
use App\repostry\Testimonial\TestimonialRepo;
use App\interface\Testimonial\TestimonialInterface;
use App\repostry\KiderRepo;
use App\repostry\SubjectRepo;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TestimonialInterface::class,TestimonialRepo::class);
        $this->app->bind(TeacherInterFace::class,TeacherRepo::class);
        $this->app->bind(AppointmentInterface::class,AppointmentRepo::class);
        $this->app->bind(ContactInterface::class,ContactRepo::class);
        $this->app->bind(SubjectInterface::class,SubjectRepo::class);
        $this->app->bind(KiderInterface::class,KiderRepo::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot( ): void
    {
        
    }
}
