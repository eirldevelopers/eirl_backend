from django.db import models
from django.core.validators import FileExtensionValidator


# Create your models here.

class Contact(models.Model):
    name = models.CharField(max_length=100)
    phone_number = models.CharField(max_length=20)
    meeting_format = models.CharField(max_length=50)
    email_address = models.EmailField(max_length=100)
    meeting_agenda = models.CharField(max_length=50)
    additional_questions = models.TextField(null=True, blank=True)
    timestamp = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return str(self.name)


class About(models.Model):
    upload = models.ImageField(upload_to='static/images/about_us/carousal')

    def __str__(self) -> str:
        return str(self.id)


class Blog(models.Model):
    blog_title = models.CharField(max_length=50)
    blog_images = models.ImageField(upload_to='static/images/blog')
    blog_data = models.TextField(max_length=1000)
    blog_url = models.CharField(max_length=100, null=True)

    def __str__(self):
        return str(self.blog_title)


class JobForm(models.Model):
    job_name = models.CharField(max_length=100)
    job_email = models.EmailField(max_length=100)
    job_mobile = models.CharField(max_length=200)
    job_profile = models.CharField(max_length=500)
    job_experience = models.CharField(max_length=200)
    job_cv = models.FileField(upload_to='job_applications/', blank=True, null=True)
    # job_cv = models.FileField(upload_to='job_applications/', validators=[FileExtensionValidator(['pdf'])])

    def __str__(self):
        return self.job_name
