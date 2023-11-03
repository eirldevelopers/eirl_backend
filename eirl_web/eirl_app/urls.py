from django.contrib import admin
from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name="index"),
    path('index/', views.index, name="index"),
    path('about_us/', views.about, name="about"),
    path('talk-to-us/', views.conatct, name="contact"),
    path('gallery/', views.gallery, name="gallery"),
    path('what_we_do/', views.what_we_do, name="what_we_do"),
    path('work-with-us/', views.work_with_us, name="work_with_us"),
    path('handle_job_application', views.handle_job_application, name="job_application"),
    path('handle_form_application2/', views.handle_form_submission_2, name="handle_form_application2")
]
