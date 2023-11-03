from django import forms
from .models import *


class ContactForm(forms.ModelForm):
    class Meta:
        model = Contact
        # fields = ['name', 'phone_number', 'meeting_format', 'email_address', 'additional_questions', 'meeting_agenda']
        fields = "__all__"


class JobContactForm(forms.ModelForm):
    # file_extension_validator = FileExtensionValidator(allowed_extensions=["pdf", "doc", "docx"])
    class Meta:
        model = JobForm
        # fields = ['job_name', 'job_email', 'job_mobile', 'job_profile', 'job_experience', 'job_cv']
        fields = "__all__"

