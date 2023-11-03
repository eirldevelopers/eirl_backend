from django.contrib import admin

# Register your models here.

from .models import *


# class ContactAdmin(admin.ModelAdmin):
#     fields = ["name", "phone_number"]
#     list_display = ["name", "phone_number"
#
#     ]

@admin.register(Contact)
class ContactAdmin(admin.ModelAdmin):
    list_display = ('name', 'phone_number', 'email_address', 'timestamp')


@admin.register(JobForm)
class JobFormAdmin(admin.ModelAdmin):
    list_display = ['job_name', 'job_email', 'job_mobile', 'job_profile', 'job_experience']


@admin.register(Blog)
class BlogAdmin(admin.ModelAdmin):
    list_display = ['blog_title', 'blog_data']


# admin.site.register(ContactAdmin)
admin.site.register(About)
# admin.site.register(Blog)
# admin.site.register(JobForm)
