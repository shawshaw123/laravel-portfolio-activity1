@extends('layout')
@section('title', 'Home - My Portfolio')

@section('content')
    <div style="text-align: center;">
        <img src="{{ asset('images/photo.jpg') }}" alt="My Photo" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; margin-bottom: 2rem; border: 4px solid #9DC183;">
    </div>
    <h1 style="text-align: center;">Welcome to My Portfolio</h1>
    <p style="font-size: 1.2rem; color: #110505; margin-top: 1rem;">
        Hello! I’m Mark Importante, a BSIT student with a passion for building practical and user-friendly digital solutions. I enjoy working with web technologies, object-oriented programming, and system design. This portfolio showcases my academic projects, technical skills, 
        and continuous journey in learning and improving as an aspiring IT professional.
    </p>
    <div style="text-align: center; margin-top: 2rem;">
        <a href="{{ route('projects') }}" style="display: inline-block; padding: 0.8rem 2rem; background: #0B6623; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 1rem; transition: background 0.3s;">Get Started</a>
    </div>    
@endsection