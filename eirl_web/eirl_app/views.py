from django.shortcuts import render, HttpResponseRedirect, redirect
from .models import *
from .forms import *
from django.http import JsonResponse


def handle_form_submission(request, template_name, context={}):
    submitted = False
    # contactF = ContactForm

    if request.method == "POST":
        Cform = ContactForm(request.POST)
        if Cform.is_valid():
            Cform.save()
            return HttpResponseRedirect(f'{request.path}?submitted=True')
    else:
        Cform = ContactForm
        if 'submitted' in request.GET:
            submitted = True
    # context['form'] = contactF
    context['submitted'] = submitted

    return render(request, template_name, context=context)


def handle_form_submission_2(request):
    submitted = False
    context = {}
    # contactF = ContactForm

    if request.method == "POST":
        Cform = ContactForm(request.POST)
        if Cform.is_valid():
            Cform.save()
            print(request.path)
            return redirect(f'{request.path}?submitted=True')
    else:
        Cform = ContactForm
        if 'submitted' in request.GET:
            submitted = True
    # context['form'] = contactF
    context['submitted'] = submitted

    # return HttpResponseRedirect(request, context=context)
    return redirect(request.path, context)


def index(request):
    blogs = Blog.objects.all()
    return handle_form_submission(request, "index.html", context={'blogs': blogs})


def about(request):
    about = About.objects.all()
    return handle_form_submission(request, "about_us.html", context={'about_images': about})


def conatct(request):
    return handle_form_submission(request, "talk-to-us.html")


def gallery(request):
    return handle_form_submission(request, "gallery.html")


def what_we_do(request):
    blogs = Blog.objects.all()
    return handle_form_submission(request, "what_we_do.html", context={'blogs': blogs})


def handle_job_application(request, context={}):
    applied = False
    if request.method == "POST" and request.FILES:
        resume = request.FILES
        job_form = JobContactForm(request.POST, resume)
        if job_form.is_valid():
            job_form.save()
            return HttpResponseRedirect(f'work-with-us?applied=True')

        else:
            job_form = JobContactForm
            if "applied" in request.GET:
                applied = True

        context['applied'] = applied

        return render(request, 'work-with-us.html', context)
    return render(request, 'work-with-us.html', context=context)


def work_with_us(request):
    return handle_form_submission(request, "work-with-us.html")
